<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarDrive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid text-center ">
              <a class="navbar-brand d-flex align-items-center me-2" href="index.php"><img src="/image/racing.png" class="logo me-2"><span class="logo-text"> CarDrive</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-between mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                      <div class="dropdown">
                        <button class="dropdown-btn fa-solid fa-bars m-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                          <ul class="dropdown-menu text-center">
                              <li><a class="dropdown-item" href="#">Кредиты</a></li>
                              <li><a class="dropdown-item" href="#">Страховки</a></li>
                              <li><a class="dropdown-item" href="#">Отзывы</a></li>
                              <li><a class="dropdown-item" href="#">Гарантии</a></li>
                              <li><a class="dropdown-item" href="#">Лизинг</a></li>                            
                              <li><a class="dropdown-item" href="admin.php">Admin</a></li>                            
                          </ul>
                      </div>                        
                    </li>                    
                    <form class="d-flex w-100 mx-2" role="search">
                    <input class="form-control search-form" type="search" placeholder="Найти..." aria-label="Search">
                    <button class="btn search" type="submit">Поиск</button>
                    </form>
                  <li class="nav-item">
                    <a id="user-btn" class="user-btn fa-solid fa-user p-2"></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="headerTabs">
            <button type="button" class="btn btn-light">Легковые</button>
            <button type="button" class="btn btn-light">Коммерческие</button>
            <button type="button" class="btn btn-light">Электромобили</button>
            <button type="button" class="btn btn-light">Мото</button>
            <button type="button" class="btn btn-light">Легковые</button>
            <button type="button" class="btn btn-light">Легковые</button>
            <button type="button" class="btn btn-light">Легковые</button>
            <button type="button" class="btn btn-light">Легковые</button>
          </div>
    </header>

    <main class="container">
    <div class="card-head px-3">
      <div class="row">
        <div class="col-8 d-flex align-items-center justify-content-between">
          <p class="m-1">Camry</p>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <p class="m-1">2 100 000P</p>
          <a href="#" class="btn card-template-btn">Позвонить!</a>
        </div>
      </div>
    </div>
    <div class="card-main row mx-0">
      <div class="col-3 car-specs">
        <p>Марка:</p>
        <p>Модель:</p>
        <p>Год: 2022</p>
        <p>Пробег: 30000</p>
        <p>Объем: 3.4Л</p>
        <p>Комплектация: Стандарт</p>
      </div>
      <div class="col-9 car-slider p-0">
      <div id="car-carousel" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#car-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#car-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#car-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/cars/Camry2100000202033000.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/cars/Camry2100000202033000.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/cars/Camry2100000202033000.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#car-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#car-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
    </div>
    <div class="card-descr">
      <p>Машина 2022 года крутая наверное да Машина 2022 года крутая наверное да Машина 2022 года крутая наверное да Машина 2022 года крутая наверное да</p>
    </div>
    </main>

    <footer class="footer">
        <div class="container-fluid text-center">
          <div class="row justify-content-between h-100 align-items-center w-100">
            <div class="col-3 d-flex"><a class="d-flex" href="#"><img src="/image/racing.png" class="logo me-2"><span class="logo-text"> CarDrive</span></a></div>
            <div class="col-auto">
              <div class="row">
                <div class="col"><a href="#" class="footer-info">Пользовательское соглашение</a></div>
                <div class="col"><a href="#" class="footer-info">О нас</a></div>
                <div class="col"><a href="#" class="footer-info">Помощь</a></div>
                <div class="col"><a href="#" class="footer-info">Вакансии</a></div>
                <div class="col"><a href="#" class="footer-info">Реклама</a></div>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <script src="js/input-range.js"></script>
    <script src="js/registration-popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0e4a1ed86f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>