@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">
            {{ __('Permissions') }}
        </h2>
        <a href="{{ route('permissions.create') }}" class="bg-blue-600 text-black text-sm px-4 py-2 rounded-md hover:bg-blue-500 transition">
            + Create
        </a>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message />
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="w-full border-collapse">
                    <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
                        <tr class="border-b">
                            <th class="px-6 py-3 text-left">Sl No.</th>
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Created At</th>
                            <th class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($permissions as $index => $permission)
                            <tr class="border-b hover:bg-gray-100 transition">
                                <td class="px-6 py-3">{{ $index + 1 }}</td>
                                <td class="px-6 py-3">{{ $permission->name }}</td>
                                <td class="px-6 py-3">{{ \Carbon\Carbon::parse($permission->created_at)->format('d M, Y') }}</td>
                                <td class="px-6 py-3 text-center">
                                    <a href="{{ route('permissions.edit', $permission->id) }}" class="bg-blue-500 text-white px-3 py-2 text-sm rounded-md hover:bg-blue-400 transition">Edit</a>
                                    <button onclick="confirmDelete({{ $permission->id }})" class="bg-red-500 text-white px-3 py-2 text-sm rounded-md hover:bg-red-400 transition ml-2">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-500">No permissions found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="my-4">{{ $permissions->links() }}</div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this permission? This action cannot be undone.')) {
                deletePermission(id);
            }
        }

        function deletePermission(id) {
            fetch(`{{ route('permissions.destroy', ':id') }}`.replace(':id', id), {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ _method: 'DELETE' })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status) {
                    alert('Permission deleted successfully');
                    location.reload();
                } else {
                    alert('Error: Permission not found!');
                }
            })
            .catch(() => alert('Error deleting permission. Please try again.'));
        }
    </script>
@endsection
