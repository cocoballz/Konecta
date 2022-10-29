<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase" href="{{route('home')}}">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ventas')}}">Ventas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('productos')}}">Stock</a></li>
            <li><a class="dropdown-item" href="{{route('add_product')}}">Crear producto</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('ventas')}}">Reporte Ventas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="py-4">

  @if($errors->any())
  <div class="alert alert-danger" role="alert">
    <b>Por valide que:</b>
    <ul>
      @foreach ($errors->all() as $mensaje)
      <li>
        {{$mensaje}}
      </li>
      @endforeach
    </ul>
  </div>
  @endif

  @if(session('status'))
  <div class="alert alert-info" role="alert">
    <b>{{session('status')}}</b>
  </div>
  @endif

