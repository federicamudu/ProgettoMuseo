<div class="card mb-4 shadow" style="width: 17rem;">
    <img src="{{ Storage::url($opera->pic) }}" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title text-truncate"> {{ $opera->name }} </h5>
        <p class="card-text"> {{ $opera->author }} </p>
        <div class="d-flex justify-content-center py-3">
            <a href="{{route('opera.show', compact('opera'))}}" class="btn btn-outline-dark btnDetail">Vai al dettaglio</a>
        </div>
    </div>
</div>