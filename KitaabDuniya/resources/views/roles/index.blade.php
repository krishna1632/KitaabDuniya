<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Roles') }}
            </h2>
            <a href="{{ route('roles.create') }}" class="bg-slate-700 text-sm rounded-md text-white px-3 py-3">Create</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message></x-message>

            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 text-left" width='120'>Sl No.</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Permissions</th>
                        <th class="px-6 py-3 text-left" width='180'>Created At</th>
                        <th class="px-6 py-3 text-center" width='180'>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if ($roles->isNotEmpty())
                        @foreach ($roles as $index => $role)
                            <tr class="border-b">
                                <td class="px-6 py-3 text-left">{{ $index + 1 }}</td>
                                <td class="px-6 py-3 text-left">{{ $role->name }}</td>
                                <td class="px-6 py-3 text-left">
                                    {{ $role->permissions->pluck('name')->implode(', ') }}
                                </td>
                                <td class="px-6 py-3 text-left">
                                    {{ \Carbon\Carbon::parse($role->created_at)->format('d M, Y') }}
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <a href="{{ route('roles.edit', $role->id) }}"
                                        class="bg-slate-700 text-sm rounded-md text-white px-3 py-2 hover:bg-slate-600">Edit</a>
                                    <a href="javascript:void(0)" onclick="deleteRole({{ $role->id }})"
                                        class="bg-red-700 text-sm rounded-md text-white px-3 py-2 hover:bg-red-600">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="my-3">{{ $roles->links() }}</div>

        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript">
            function deleteRole(id) {
                if (confirm('Are you sure you want to delete?')) {
                    $.ajax({
                        url: '{{ route("roles.destroy", ":id") }}'.replace(':id', id),
                        type: 'POST', // Laravel DELETE request ke liye POST + _method use hota hai
                        data: {
                            _method: 'DELETE', // DELETE request ko spoof karne ke liye
                            _token: $('meta[name="csrf-token"]').attr('content') // Meta tag se CSRF token le rahe hain
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status) {
                                alert('Role deleted successfully');
                                location.reload(); // Page reload karega
                            } else {
                                alert('Error: Role not found!');
                            }
                        },
                        error: function(xhr) {
                            alert('Error deleting role. Please try again.');
                        }
                    });
                }
            }
        </script>
        
    </x-slot>
</x-app-layout>
