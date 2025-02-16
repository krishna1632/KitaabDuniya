@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">
            {{ __('Permissions') }}
        </h2>
        <a href="{{ route('permissions.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 transition">
            + Create Permission
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Sl No.</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Created At</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($permissions as $index => $permission)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $permission->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ \Carbon\Carbon::parse($permission->created_at)->format('d M, Y') }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('permissions.edit', $permission->id) }}"
                                class="text-blue-600 hover:text-blue-500 mr-3">Edit</a>
                            <button onclick="confirmDelete({{ $permission->id }})"
                                class="text-red-600 hover:text-red-500">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $permissions->links() }}
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this permission? This action cannot be undone.')) {
                fetch(`{{ route('permissions.destroy', ':id') }}`.replace(':id', id), {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            _method: 'DELETE'
                        })
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
        }
    </script>
@endsection
