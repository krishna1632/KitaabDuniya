<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Roles/Edit
            </h2>
            <a href="{{ route('roles.index') }}"
                class="bg-slate-700 text-sm rounded-md text-white px-3 py-3">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('roles.update',$role->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div>
                            <label for="" class="text-lg font-medium">Name</label>
                            <div class="my-3">
                                <input type="text" name="name" id=""
                                    value="{{ old('name', $role->name) }}"
                                    class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error('name')
                                    <p class="text-danger font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-wrap gap-4 mt-3">
                                @if ($permissions->isNotEmpty())
                                    @foreach ($permissions as $permission)
                                        <div class="flex items-center gap-2">
                                            <input {{ $hasPermissions->contains($permission->name) ? 'checked' : '' }}
                                                type="checkbox" name="permission[]"
                                                id="permission-{{ $permission->id }}" class="rounded"
                                                value="{{ $permission->name }}">
                                            <label
                                                for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button class="bg-slate-700 text-sm rounded-md text-white px-5 py-3 mt-3">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
