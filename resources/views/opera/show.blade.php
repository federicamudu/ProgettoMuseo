<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('opera.index')}}" class="btn btn-outline-dark"><i class="bi bi-arrow-left pe-2"></i>Torna indietro</a>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                <h2>
                    <span class="fst-italic">
                        {{$opera->name}}
                    </span>
                    di
                    <span class="fst-italic">
                        {{$opera->author}}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img class="imgDetail" src="{{Storage::url($opera->pic)}}" alt="{{$opera->name}}">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center pe-4">
                <h4>
                    Anno: {{$opera->year}}
                </h4>
                <h6>
                    Descrizione: {{$opera->description}}
                </h6>
                <h6>
                    @foreach ($museums as $museum)
                        @if ($museum->id==$opera->museum_id)
                            Museo d'appartenenza: {{$museum->name}}
                        @endif
                    @endforeach
                </h6>
            </div>
        </div>
        @auth
        <div class="row">
            <div class="col-12">
                <div class="mt-3 d-flex">
                    <a href="{{route('opera.edit', compact('opera'))}}" class="btn btn-outline-dark"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{route('opera.delete', compact('opera'))}}" method="POST" class="px-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger"><i class="bi bi-x-square"></i></button>
                    </form>
                </div>
            </div>
        </div>
        @endauth
    </div>
</x-layout>