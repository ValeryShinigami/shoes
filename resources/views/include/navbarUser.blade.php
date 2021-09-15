<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.carts.index')}}">Panier <img src="https://img.icons8.com/ios/20/000000/sneakers.png"/> {{Cart::getTotalQuantity()}}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Marques Homme
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($marques as $marque)
              <li><a class="dropdown-item" href="{{route('user.marques.create', ['id' => $marque->id])}}">{{$marque->name}}</a></li> 
              @endforeach
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Marques Femme
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($marques as $marque)
              <li><a class="dropdown-item" href="{{route('user.marques.create', ['id' => $marque->id])}}">{{$marque->name}}</a></li> 
              @endforeach
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Marques Enfant
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($marques as $marque)
              <li><a class="dropdown-item" href="{{route('user.marques.create', ['id' => $marque->id])}}">{{$marque->name}}</a></li> 
              @endforeach
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>