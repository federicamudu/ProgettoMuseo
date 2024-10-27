<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                    
            </div>
        </div>
        <div class="row rowCustomContact justify-content-center ps-5 pe-5">
            <div class="screen-body">
                <div class="screen-body-item left">
                    <div class="app-title">
                        <span>CONTACT</span>
                        <span>US</span>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="app-contact">
                        <i class="bi bi-instagram pe-3"></i>
                        <i class="bi bi-twitter pe-3"></i>
                        <i class="bi bi-facebook pe-3"></i>
                        <i class="bi bi-whatsapp pe-3"></i>
                    </div>
                </div>
                <div class="screen-body-item">
                    <form action="{{route('contactUs.submit')}}" method="POST">
                    @csrf
                        <div class="app-form">
                            <div class="app-form-group">
                                <input name="name" class="app-form-control" placeholder="NAME">
                            </div>
                            <div class="app-form-group">
                                <input name="email" class="app-form-control" placeholder="EMAIL">
                            </div>
                            <div class="app-form-group message">
                                <input name="message" class="app-form-control" placeholder="MESSAGE">
                            </div>
                            <div class="app-form-group buttons">
                                <button href="{{route('opera.index')}}" class="app-form-button">CANCEL</button>
                                <button type="submit" class="app-form-button">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>