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
                    <x-card :opera="$opera" />
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