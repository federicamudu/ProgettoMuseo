<x-layout>
    <div class="container-fluid">
        @auth
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('museum.create')}}" class="btn btn-outline-dark"><i class="bi bi-plus pe-2"></i>Aggiungi</a>
            </div>
        </div>
        @endauth
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h3 class="display-3">
                    Musei
                </h3>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            @foreach ($museums as $museum)
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card mb-4 shadow" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title text-truncate"> {{ $museum->name }} </h5>
                        <p class="card-text"> {{ $museum->siteWeb }} </p>
                        <div class="d-flex justify-content-center py-3">
                            <a href="{{route('museum.show', compact('museum'))}}" class="btn btn-outline-dark btnDetail">Vai al dettaglio</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        window.addEventListener('load', function() {
            let previousURL = document.referrer;
            let splitted = previousURL.split('/')
            splitted.pop()
            let url = splitted.join('/')
            console.log(url);

            if (url == 'http://127.0.0.1:8000/') {
                window.scrollTo(0, localStorage.getItem('scrolledPosition'))
                console.log('ci sono');
            }
        })
    </script>
</x-layout>