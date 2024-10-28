<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('museum.index')}}" class="btn btn-outline-dark"><i class="bi bi-arrow-left pe-2"></i>Torna indietro</a>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                <h2>
                    <span class="fst-italic">
                        {{$museum->name}}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center pe-4">
                <h4>
                    Dove si trova: {{$museum->location}}
                </h4>
                <h6>
                    sito web: {{$museum->siteWeb}}
                </h6>
            </div>
        </div>
        @auth
        <div class="row">
            <div class="col-12">
                <div class="mt-3 d-flex">
                    <a href="{{route('museum.edit', compact('museum'))}}" class="btn btn-outline-dark"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{route('museum.delete', compact('museum'))}}" method="POST" class="px-3">
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