
    
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3" style="height: 80px;">
<div class="container">
<a class="navbar-brand ps-3" href="index.html" style="padding-top: 20px;">
            <img src="/images/findjoblogo.png" alt="Logo" style="max-height: 80px;">
        </a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
       
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('index') }}">Accueil</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ route('publications.index') }}">Publications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('annonces.index') }}">Annonces</a>
        </li>
      
        </ul>

          <a class="btn btn-outline-primary me-2" aria-current="page" href="{{ route('login') }}">Login</a>

      @auth('recruteur')
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-primary" type="submit">Logout</button>
          </form>
      @endauth
      @auth('recruteur')
                <a class="btn btn-primary" href="{{-- route('publications.create') --}}">Ajouter Annonce</a>
                {{-- <a class="btn btn-primary" href="{{ route('recruteurs.show', ['id' => Auth::user()->id]) }}">My profile</a> --}}
                <a class="btn btn-primary" href="{{route('recruteurs.show', ['id' => Auth::guard('recruteur')->user()->id]) }}">Mon profil</a>
      @endauth

      {{-- //recruteur --}}
      
      {{-- //recruteur --}}




      @auth('candidat')
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-primary" type="submit">Logout</button>
          </form>
      @endauth
      @auth('candidat')
                <a class="btn btn-primary" href="{{ route('publications.create') }}">Ajouter publication</a>
                <a class="btn btn-primary" href="{{ route('candidats.show', ['id' => Auth::guard('candidat')->user()->id]) }}">My profile</a>
      @endauth

      </div>
     </div>


		</div>
	</div>
</nav>
   


