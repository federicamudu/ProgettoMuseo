<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('museum.index')}}" class="btn btn-outline-dark"><i class="bi bi-arrow-left pe-2"></i>Torna ai musei</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h3>
                    Aggiungi un museo!
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
            <form action="{{route('museum.store')}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle" enctype="multipart/form-data">
                    @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del museo</label>
                        <input value="{{old('name')}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Posizione</label>
                        <input value="{{old('location')}}" type="text" name="location" class="form-control @error('location') is-invalid @enderror">
                        @error('location')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="siteWeb" class="form-label">Sito web</label>
                        <input value="{{old('siteWeb')}}" type="text" name="siteWeb" class="form-control @error('siteWeb') is-invalid @enderror">
                        @error('siteWeb')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>