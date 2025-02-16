<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users/Edit
            </h2>
            <a href="{{ route('users.index') }}" class="bg-slate-700 text-sm rounded-md text-white px-4 py-2">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        {{-- User Name --}}
                        <div>
                            <label for="name" class="block text-lg font-medium">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                class="border-gray-300 shadow-sm w-full rounded-lg p-2">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- User Email --}}
                        <div>
                            <label for="email" class="block text-lg font-medium">Email</label>
                            <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}"
                                class="border-gray-300 shadow-sm w-full rounded-lg p-2">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- User Role --}}
                    <div class="mt-4">
                        <label class="block text-lg font-medium">Roles</label>
                        <div class="flex flex-wrap gap-4 mt-2">
                            @if ($roles->isNotEmpty())
                                @foreach ($roles as $role)
                                    <div class="flex items-center gap-2">
                                        <input {{ $hasRoles->contains($role->id) ? 'checked' : '' }} type="checkbox"
                                            name="role[]" id="role-{{ $role->id }}" class="rounded"
                                            value="{{ $role->name }}">
                                        <label for="role-{{ $role->id }}">{{ $role->name }}</label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="mt-6">
                        <button type="submit" class="bg-slate-700 text-sm rounded-md text-white px-6 py-3">
                            Update
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
