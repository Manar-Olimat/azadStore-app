<header>

     <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">
        <img src="{{ asset('imgs/logo.png') }}" alt="Logo" width="100" height="90" class="d-inline-block align-text-top">
                            <span class="brand-name  ">AZAD</span>

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          {{-- SHOP DROPDOWN START --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Shop
                </a>
                {{-- level 1 --}}
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a
                     class="dropdown-item dropdown-toggle" 
                     data-toggle="dropdown"
                     href="#">Action1</a>
{{-- level 2 action1 --}}
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> action1-sub1</a></li>
                        <li><a class="dropdown-item" href="#"> action1-sub2</a></li>
                        <li><a class="dropdown-item" href="#"> action1-sub3</a></li>
                     </ul>

                </li>
{{-- action2 --}}
    <li class="dropdown-submenu">
                    <a
                     class="dropdown-item dropdown-toggle" 
                     data-toggle="dropdown"
                     href="#">Action2</a>
{{-- level 2 action2 --}}
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> action2-sub1</a></li>
                        <li><a class="dropdown-item" href="#"> action2-sub2</a></li>
                        <li><a class="dropdown-item" href="#"> action2-sub3</a></li>
                     </ul>

                </li>
                
                {{-- action 3 --}}
                <li class="dropdown-submenu">
                    <a
                     class="dropdown-item dropdown-toggle" 
                     data-toggle="dropdown"
                     href="#">Action3</a>
{{-- level 2 action3 --}}
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> action3-sub1</a></li>
                        <li><a class="dropdown-item" href="#"> action3-sub2</a></li>
                        <li><a class="dropdown-item" href="#"> action3-sub3</a></li>
                     </ul>

                </li>
               

            
            
            </ul>
              </li>

          {{-- SHOP DROPDOWN END --}}

            
          {{-- STORE DROPDOWN START --}}

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Stores
                </a>
                {{-- level 1 --}}
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a
                     class="dropdown-item dropdown-toggle" 
                     data-toggle="dropdown"
                     href="#">Action1</a>
{{-- level 2 action1 --}}
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> action1-sub1</a></li>
                        <li><a class="dropdown-item" href="#"> action1-sub2</a></li>
                        <li><a class="dropdown-item" href="#"> action1-sub3</a></li>
                     </ul>

                </li>
{{-- action2 --}}
    <li class="dropdown-submenu">
                    <a
                     class="dropdown-item dropdown-toggle" 
                     data-toggle="dropdown"
                     href="#">Action2</a>
{{-- level 2 action2 --}}
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> action2-sub1</a></li>
                        <li><a class="dropdown-item" href="#"> action2-sub2</a></li>
                        <li><a class="dropdown-item" href="#"> action2-sub3</a></li>
                     </ul>

                </li>
                
                {{-- action 3 --}}
                <li class="dropdown-submenu">
                    <a
                     class="dropdown-item dropdown-toggle" 
                     data-toggle="dropdown"
                     href="#">Action3</a>
{{-- level 2 action3 --}}
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> action3-sub1</a></li>
                        <li><a class="dropdown-item" href="#"> action3-sub2</a></li>
                        <li><a class="dropdown-item" href="#"> action3-sub3</a></li>
                     </ul>

                </li>
               

            
            
            </ul>
              </li>

          {{-- STORE DROPDOWN END --}}


              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn border search-btn" type="submit">
                    <i class="fa fa-search"></i>
                </button>
              </form>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
                     
</header>




  