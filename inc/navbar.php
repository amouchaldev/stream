<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png" alt="logo" width="width: 124px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="allMovie.php">افلام</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="allSeries.php">مسلسلات</a>
        </li>

        <li class="nav-item dropdown d-none">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            المزيد
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">مثال 1</a></li>
            <li><a class="dropdown-item" href="#">مثال 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">مثال 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">اتصل بنا</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="ابحث عن .." aria-label="searc">
        <button class="btn text-light bg-purple" type="submit">بحث</button>
      </form>
    </div>
  </div>
</nav>