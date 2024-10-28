<x-layout>
<div class="container-fluid pt-5">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('museum.show', compact('museum'))}}" class="btn btn-outline-dark"><i class="bi bi-arrow-left pe-2"></i>Torna indietro</a>
            </div>
        </div>
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-md-6 display-4 text-black-50">
                Modifica i dati del museo {{$museum->name}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('museum.update', compact('museum'))}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle">
                @method('PUT')    
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome dell'opera</label>
                        <input value="{{$museum->name}}" type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Dove si trova</label>
                        <input value="{{$museum->location}}" type="text" name="location" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="siteWeb" class="form-label">Sito web</label>
                        <input value="{{$museum->siteWeb}}" type="text" name="siteWeb" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark">Conferma!</button>
                    </div>
                </form>
            </div>
        </div>
</x-layout>