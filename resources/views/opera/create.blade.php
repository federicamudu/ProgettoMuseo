<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('opera.index')}}" class="btn btn-outline-dark"><i class="bi bi-arrow-left pe-2"></i>Torna a tutte le opere</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h3>
                    Aggiungi un'opera!
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
            <form action="{{route('opera.store')}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle" enctype="multipart/form-data">
                    @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome dell'opera</label>
                        <input value="{{old('name')}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Nome dell'autore</label>
                        <input value="{{old('author')}}" type="text" name="author" class="form-control @error('author') is-invalid @enderror">
                        @error('author')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="museum_id" class="form-label">Museo dove si trova</label>
                        <select name="museum_id" class="form-control @error('museum') is-invalid @enderror">
                            @foreach ($museums as $museum)
                                <option value="{{$museum->id}}">{{$museum->name}}</option>
                            @endforeach
                        </select>
                        @error('museum')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno</label>
                        <input value="{{old('year')}}" type="text" name="year" class="form-control @error('year') is-invalid @enderror">
                        @error('year')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">{{old('description')}}</textarea>
                        @error('description')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <input value="{{old('category')}}" type="text" name="category" class="form-control @error('category') is-invalid @enderror" placeholder="quadro, statua o reperto">
                        @error('category')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="period" class="form-label">Periodo storico</label>
                        <input type="text" name="period" class="form-control @error('period') is-invalid @enderror">
                        @error('period')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pic">Immagine</label>
                        <input type="file" class="form-control @error('pic') is-invalid @enderror" name="pic">
                        @error('pic')
                            <p class="text-danger fst-italic">{{ $message }}</p>
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