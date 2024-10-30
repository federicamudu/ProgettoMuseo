<x-layout>
    <div class="container-fluid">
        @auth
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <a href="{{route('opera.create')}}" class="btn btn-outline-dark"><i class="bi bi-plus pe-2"></i>Aggiungi</a>
            </div>
        </div>
        @endauth
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h3 class="display-3">
                    Opere d'arte
                </h3>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            @foreach ($operas as $opera)

            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card mb-4 shadow" style="width: 17rem;">
                    <img src="{{ Storage::url($opera->pic) }}" class="card-img-top imgDetailCard" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-truncate"> {{ $opera->name }} </h5>
                        <p class="card-text"> {{ $opera->author }} </p>

                        <div class="d-flex justify-content-center py-3">
                            <a href="{{route('opera.show', compact('opera'))}}" class="btn btn-outline-dark btnDetail">Vai al dettaglio</a>
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

            if (url == 'http://127.0.0.1:8000/operas/detail') {
                window.scrollTo(0, localStorage.getItem('scrolledPosition'))
                console.log('ci sono');
            }
        })
    </script>
</x-layout>