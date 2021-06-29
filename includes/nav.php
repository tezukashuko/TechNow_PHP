<div class="upper-nav">
    <div class="upper-container">
      <div class="row">

        <a class="col-md-3 logo-wrapper text-center pt-1" href="index.php">
          <img src="img/logo_sub.webp" style="width: 165px; height: 34px;" alt="">
        </a>

        <div class="col-md-6 d-flex search-wrapper justify-content-center align-items-center">

          <div class="dropdown input-group w-100 ">

            <input type="text" class="form-control rounded dropdown-toggle" id="searchbarinp" placeholder="What are you looking for today?" data-toggle="dropdown">
            <ul class="dropdown-menu w-100" id="dropdownsearchbar">

            </ul>
          </div>



        </div>

        <div class="col-md-3 d-flex cart-user-wrapper align-items-center justify-content-center pt-2 pt-md-0">

          <a class="cart-btn menu-upper d-flex align-items-center justify-content-center" href="cart.php">
            <div class="cart-icon-wrapper mr-2">
              <button type="button" class="btn rounded-circle icon-upper p-0">
                <i class="bi bi-cart fa-lg" style="color: black;"></i>
              </button>
              <span class="badge badge-pill badge-danger number-item-cart">0</span>
            </div>
            <p class="text-center m-0 name" style="font-size: 15px;">Cart</p>
          </a>

          <a class="user-btn menu-upper ml-4 d-flex align-items-center justify-content-center" href="signin.php">
            <div class="user-icon-wrapper mr-1">
              <button type="button" class="btn rounded-circle icon-upper p-0">
                <i class="bi bi-person fa-lg" style="color: black;"></i>
              </button>
            </div>
            <p class="text-center m-0 name" style="font-size: 15px;">Login</p>
          </a>

        </div>
      </div>
    </div>
  </div>

  <nav class="navbar sticky-top navbar-expand-md navbar-light nav-footer-theme">
    <button class="custom-toggler navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <div class="navbar-container">
        <ul class="navbar-nav mr-auto row">
          <li class="nav-item main col-md-2 px-0 pl-2">
            <a class="nav-link category-btn text-center" href="index.php">
              <i class="bi bi-house-door fa-lg mr-2 text-white"></i>
              <span class="text-white">Home</span>
            </a>
          </li>
          <li class="nav-item main col-md-2 px-0">
            <a class="nav-link text-center" href="#">
              <i class="bi bi-gift mr-2 text-white"></i>
              <span class="text-white">Hot Discount</span>
            </a>
          </li>
          <li class="nav-item main col-md-2 px-0">
            <a class="nav-link text-center" href="#">
              <i class="bi bi-truck mr-2 text-white"></i>
              <span class="text-white">Shipping policy</span>
            </a>
          </li>
          <li class="nav-item main col-md-2 px-0">
            <a class="nav-link text-center" href="contact.php">
              <i class="bi bi-telephone-inbound mr-2 text-white"></i>
              <span class="text-white">Contact us</span>
            </a>
          </li>
          <li class="nav-item popup ml-auto pr-0 mr-0">
            <ul class="navbar-nav pop-up-items d-flex" style="display: none;">
              <li class="nav-item">
                <a class="cart-btn d-flex align-items-center" href="cart.php">
                  <div class="cart-icon-wrapper mr-2">
                    <button type="button" class="btn rounded-circle p-0" id="cart-icon" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Product is added to your cart">
                      <i class="bi bi-cart fa-1x text-white"></i>
                    </button>
                    <span class="badge badge-pill badge-danger number-item-cart">0</span>
                  </div>
                  <p class="text-center m-0 name text-white" style="font-size: 15px;">Cart</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="user-btn d-flex align-items-center" href="#">
                  <div class="user-icon-wrapper">
                    <button type="button" class="btn rounded-circle p-0">
                      <i class="bi bi-person fa-1x text-white"></i>
                    </button>
                  </div>
                  <p class="text-center m-0 name text-white" style="font-size: 15px;">Login</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>