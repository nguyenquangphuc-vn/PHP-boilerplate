<header class="p-3 bg-dark ">
  <div class="container">
    <div
      class="
        d-flex
        flex-wrap
        align-items-center
        justify-content-center justify-content-lg-start
      "
    >
      <a
        href="index.php"
        class="
          d-flex
          align-items-center
          mb-2 mb-lg-0
          text-white text-decoration-none
        "
      >
        <i class="fab fa-php h1 me-4"></i>
      </a>

      <ul
        class="
          nav
          col-12 col-lg-auto
          me-lg-auto
          mb-2
          justify-content-center
          mb-md-0
        "
      >
        <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input
          type="search"
          class="form-control form-control-dark"
          placeholder="Search..."
          aria-label="Search"
        />
      </form>



      <div class="text-end">
          <?php
          if(isset($_SESSION['username'])){
              echo '<a href="" class="text-decoration-none text-light me-3"><i class="fas fa-user-alt"></i> &nbsp;<span>'.$_SESSION['username'].'</span></a>
                    <a href="/index.php?controller=auth&action=logout" class="text-decoration-none text-light"><i class="fas fa-sign-out-alt"></i>&nbsp;<span>Log out</span></a>';
          }
          else{
              echo '<a href="/index.php?controller=pages&action=login" type="button" class="btn btn-outline-light me-2">Login</a>
                <button type="button" class="btn btn-warning">Sign-up</button>';
          }
          ?>
      </div>
    </div>
  </div>
</header>
