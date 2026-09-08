<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center space-x-6">
                        @if ($user->photo_path)
                            <img src="{{ asset('storage/' . $user->photo_path) }}" alt="{{ $user->name }}" class="h-24 w-24 rounded-full object-cover">
                        @else
                            <div class="h-24 w-24 rounded-full bg-gray-200"></div>
                        @endif
                        <div>
                            <h3 class="text-lg font-semibold">{{ $user->name }}</h3>
                            <p class="text-gray-500">{{ $user->email }}</p>
                        </div>
                    </div>

                    <dl class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Teléfono</dt>
                            <dd class="text-gray-900">{{ $user->phone ?? '—' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Red profesional</dt>
                            <dd class="text-gray-900">
                                @if ($user->professional_url)
                                    <a href="{{ $user->professional_url }}" target="_blank" rel="noopener noreferrer" class="text-indigo-600 hover:text-indigo-900">{{ $user->professional_url }}</a>
                                @else
                                    —
                                @endif
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Rol</dt>
                            <dd class="text-gray-900">{{ $user->is_admin ? 'Administrador' : 'Alumno' }}</dd>
                        </div>
                    </dl>

                    @if ($user->id === Auth::id())
                        <div class="mt-6">
                            <a href="{{ route('profile.edit') }}" class="text-indigo-600 hover:text-indigo-900">Editar mi perfil</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>