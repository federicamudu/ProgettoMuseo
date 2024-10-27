<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center py-5 text-black text-shadow-light">
                    Registrati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST" class="rounded shadow p-5 bg-light">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-dark">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>