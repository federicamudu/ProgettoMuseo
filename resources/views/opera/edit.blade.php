<x-layout>
<div class="container-fluid pt-5">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('opera.show', compact('opera'))}}" class="btn btn-outline-dark"><i class="bi bi-arrow-left pe-2"></i>Torna indietro</a>
            </div>
        </div>
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-md-6 display-4 text-black-50">
                Modifica i dati dell'opera {{$opera->name}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('opera.update', compact('opera'))}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle">
                @method('PUT')    
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome dell'opera</label>
                        <input value="{{$opera->name}}" type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input value="{{$opera->author}}" type="text" name="author" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="museum_id" class="form-label">Museo dove si trova</label>
                        <select name="museum_id" class="form-control">
                            @foreach ($museums as $museum)
                                <option value="{{$museum->id}}">{{$museum->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di pubblicazione</label>
                        <input value="{{$opera->year}}" type="text" name="year" class="form-control" placeholder="{{$opera->year}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" name="description" class="form-control" cols="30" rows="10">{{$opera->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <input value="{{$opera->category}}" type="text" name="category" class="form-control" placeholder="{{$opera->category}}">
                    </div>
                    <div class="mb-3">
                        <label for="period" class="form-label">Periodo storico</label>
                        <input value="{{$opera->period}}" type="text" name="period" class="form-control" placeholder="{{$opera->period}}">
                    </div>
                    <div class="mb-3">
                        <p>Vecchia immagine:</p>
                        <img class="imgDetail" src="{{Storage::url($opera->pic)}}" alt="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pic">Nuova immagine:</label>
                        <input type="file" class="form-control @error('pic') is-invalid @enderror" name="pic">
                        @error('pic')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark">Conferma!</button>
                    </div>
                </form>
            </div>
        </div>
</x-layout>