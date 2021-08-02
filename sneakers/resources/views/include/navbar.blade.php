<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('admin.index')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promotion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Panier</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Catégories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('admin.categories.index')}}">Hommes</a></li>
              <li><a class="dropdown-item" href="{{route('admin.categories.index')}}">Femmes</a></li>
              <li><a class="dropdown-item" href="{{route('admin.categories.index')}}">Enfants</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Marques Homme
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($marques as $marque)
              <li><a class="dropdown-item" href="{{route('admin.marques.create', ['id' => $marque->id])}}">{{$marque->name}}</a></li> 
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('admin.posts.index')}}">Articles</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>