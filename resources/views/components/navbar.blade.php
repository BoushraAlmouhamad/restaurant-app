
<slot name="style">
  <link  href=css/pages/nev.css rel=stylesheet>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</slot>
<!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
          <!-- Brand -->
          <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
            <img
              src="log.png"
              height="20"
              alt=""
              loading="lazy"
              style="margin-top: 2px;"
            />
          </a>

          <!-- Search form -->
          <form class="input-group w-auto my-auto d-none d-sm-flex">

          </form>
        </div>
        <!-- Left elements -->
      </li>


        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex">
          <li class="nav-item me-3 me-lg-1 active">
            <a class="nav-link" href="#page-two">
              <span><i class="fas fa-home fa-lg"></i></span>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-hamburger"></i></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-fas fa-language"></i></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-shopping-bag fa-lg"></i></span>
            </a>


          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-users fa-lg"></i></span>
              <span class="badge rounded-pill badge-notification bg-danger">2</span>
            </a>
          </li>
        </ul>
        <!-- Center elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link d-sm-flex align-items-sm-center" href="#">
              <img
                src="boushra.jpg"
                class="rounded-circle"
                height="22"
                alt=""
                loading="lazy"
              />
              <strong class="d-none d-sm-block ms-1">Boushra</strong>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-plus-circle fa-lg"></i></span>
            </a>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a
              class="nav-link dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fas fa-comments fa-lg"></i>

              <span class="badge rounded-pill badge-notification bg-danger">6</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a
              class="nav-link dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fas fa-bell fa-lg"></i>
              <span class="badge rounded-pill badge-notification bg-danger">12</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a
              class="nav-link dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fas fa-chevron-circle-down fa-lg"></i>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Right elements -->
      </div>
    </nav>
    <!-- Navbar -->

  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>


  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Ahmed</a></h1>

        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="edit-profile.html "><i class="bx bx-user"></i> <i class="fas fa-user-edit"></i><span>Setting</span></a></li>
          <li><a href="https://tech-code24.net/"><i class="bx bx-user"></i>  <i class="fas fa-heart"></i><span>Favourite</span></a></li>
          <li><a href="https://tech-code24.net/"><i class="bx bx-file-blank" ></i> <i class="fas fa-cart-arrow-down"></i> <span>Cart</span></a></li>

          <li><a href='log_out'><i class="bx bx-envelope"> </i><i class="fas fa-sign-out-alt"></i><span>Log out</span></a></li>

        </ul>
      </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>






