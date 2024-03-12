<div class="card w-100 my-2 publication-card">
    <div class="card-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="position-relative text-center">
                        <div class="row">
                        <img class="rounded-circle mb-2" src="{{ asset('storage/'.$publication->candidat->image) }}" width="100px" alt="">
                        <p class="font-weight-bold mb-0">{{ $publication->candidat->nom }}</p>
                        </div>
                        
                        <a href="{{ route('candidats.show', $publication->candidat->id) }}" class="stretched-link"></a>
                    </div>
                </div>
            <div class="col">

                <div class="float-right">
                        @can('delete',$publication)
                                <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-delete">Delete</button>
                                </form>
                        @endcan
                        @can('update',$publication)
                           <a class="btn btn-modify" href="{{ route('publications.edit', $publication->id) }}">Modify</a>
                        @endcan
                      
            </div>
                    
                </div>
            </div>
        </div>
        <p class="text-muted">{{ $publication->body }}</p>
        <hr>
        
        @empty($publication->image)
        @else
            <footer class="blockquote-footer text-center">
                <img class="img-fluid" src="{{ asset('storage/'.$publication->image) }}" alt="{{ $publication->titre }}">
            </footer>
        @endempty
    </div>
</div>
