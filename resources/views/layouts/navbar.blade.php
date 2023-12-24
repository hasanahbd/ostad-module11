<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(39, 36, 36);">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('products.index')}}">Show All</a></li>
              <li><a class="dropdown-item" href="{{route('products.create')}}">Add New</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sale
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('sales.index')}}">Show All</a></li>
              <li><a class="dropdown-item" href="{{route('sales.create')}}">New Sale</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link">Link</a>
          </li> --}}
        </ul>
        
      </div>
    </div>
</nav>