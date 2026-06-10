<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Gebruiker verwijderen</h1>
                    <p class="text-danger fw-bold mt-2">Weet je zeker dat je deze gebruiker wilt verwijderen?</p>

                    <div class="mb-3">
                        <label for="InputName" class="form-label">Naam</label>
                        <input type="text" class="form-control" id="InputName"
                            value="{{ $user->name }}" readonly disabled>
                    </div>

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="InputEmail"
                            value="{{ $user->email }}" readonly disabled>
                    </div>

                    <div class="mb-3">
                        <label for="InputRolename" class="form-label">Gebruikersrol</label>
                        <input type="text" class="form-control" id="InputRolename"
                            value="{{ $user->rolename }}" readonly disabled>
                    </div>

                    <form method="POST" action="{{ route('praktijkmanagement.destroy', $user->id ?? $user->Id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                        <a href="{{ route('praktijkmanagement.userroles') }}"
                           class="btn btn-secondary">Annuleren</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
