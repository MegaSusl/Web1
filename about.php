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
      <div class="row">
        <div class="col-8">
          <div class="aboutus block-border">
            <p class="about_head">Основная информация</p>
            <p class="about_content">Авто.ру помогает купить или продать машину. Это не просто сайт, где каждый может найти или разместить объявление (хотя, конечно, каждый может), задача Авто.ру — оградить человека от неприятностей, связанных с куплей-продажей автомобиля</p>
          </div>
          <div class="address block-border">
            <p class="about_head">Контактная информация</p>
            <p class="about_content">Адрес: г.Владимир <br>
                                     Телефон: 89028844824 <br>
                                     Email: kirill07092003@mail.ru
            </p>
          </div>
          <div class="law-info block-border">
            <p class="about_head">Правовая информация</p>
            <p class="about_content">Блаблаблаблабла, юристы пускай эту штуку пишут</p>
          </div>
        </div>
        <div class="col-4">
          <iframe id="iframe_map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A1d9ad7f010ecd201194abebf87a63e2cefca44faf00c87fa31734928ad822c0c&amp;source=constructor" width="320" height="320" frameborder="0"></iframe>
        </div>
      </div>
        
    </main>

    <footer class="footer">
        <div class="container-fluid text-center">
          <div class="row justify-content-between h-100 align-items-center w-100">
            <div class="col-3 d-flex"><a class="d-flex" href="#"><img src="/image/racing.png" class="logo me-2"><span class="logo-text"> CarDrive</span></a></div>
            <div class="col-auto">
              <div class="row">
                <div class="col"><a href="#" class="footer-info">Пользовательское соглашение</a></div>
                <div class="col"><a href="about.php" class="footer-info">О нас</a></div>
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