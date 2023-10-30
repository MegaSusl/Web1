<?
  require_once("php/db.php");
  $info = mysqli_query($mysql, "SELECT * FROM `car_brand`");
  $info = mysqli_fetch_all($info);
  $count = count($info);
  $info2 = mysqli_query($mysql, "SELECT * FROM `head_filter`");
  $info2 = mysqli_fetch_all($info2);
  $count2 = count($info2);
  // var_dump($info);
  // print_r($info[0][1]);
  // print_r($count2);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0e4a1ed86f.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid text-center ">
              <a class="navbar-brand d-flex align-items-center me-1" href="index.php"><img src="/image/racing.png" class="logo me-2"><span class="logo-text"> CarDrive</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-between mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- <img src="/image/menu-bar.png" class="burger"> -->
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <ul class="dropdown-menu text-center">
                            <li><a class="dropdown-item" href="#">Кредиты</a></li>
                            <li><a class="dropdown-item" href="#">Страховки</a></li>
                            <li><a class="dropdown-item" href="#">Отзывы</a></li>
                            <li><a class="dropdown-item" href="#">Гарантии</a></li>
                            <li><a class="dropdown-item" href="#">Лизинг</a></li>                            
                        </ul>
                    </li>                    
                    <form class="d-flex w-100 mx-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Найти..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form>
                  <li class="nav-item">
                    <button id="user-btn" class="user-btn fa-solid fa-user p-2"></button>
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
      <div class="Brands">
        <h1 class="my-4">Форма марок</h1>
          <form method="POST" action="php/brands_form.php">
            <div class="mb-3">
              <label for="car_brand" class="form-label">Название</label> 
              <input type="hidden" name="action" value="brand">
              <input type="text" class="form-control" id="car_brand" name="car_brand">
            </div>
            <button type="submit" name="brandFormSubmit" value="brand" class="btn btn-primary mb-2">Подтвердить</button>
          </form>
      </div>
      <div class="head_filters">
        <h1 class="my-4">Форма фильтров</h1>
          <form method="POST" action="php/filter_form.php">
            <div class="mb-3">
              <label for="head_filter" class="form-label">Название</label>
              <input type="hidden" name="action" value="filter">
              <input type="text" class="form-control" id="head_filter" name="head_filter">
            </div>
            <button type="submit" name="filterFormSubmit" value="filter" class="btn btn-primary mb-2">Подтвердить</button>
          </form>
      </div>
      <div class="car">
        <h1 class="my-4">Форма машины</h1>
          <form enctype="multipart/form-data" method="POST" action="php/car_card.php">
            <div class="mb-3">
              <label for="car_name" class="form-label">Название</label>
              <input type="hidden" name="action" value="car">
              <input type="text" class="form-control" id="car_card" name="car_name">
              
              <label for="car_price" class="form-label">Цена</label>
              <input type="number" class="form-control" id="car_price" name="car_price">

              <label for="car__brand"class="form-label">Марка</label>
              <select class="form-select" aria-label="car__brand" id="car__brand" name="car__brand">
                <?
                  for($i = 0; $i < $count; $i++):              
                ?>
                  <option value="<?=$i+1?>"><?=$info[$i][1]?></option>
                <?
                  endfor;
                ?>
              </select>

              <label for="car_type"class="form-label">Тип</label>
              <select class="form-select" aria-label="car_type" id="car_type" name="car_type">
                <?
                  for($i = 0; $i < $count2; $i++):              
                ?>
                  <option value="<?=$i+1?>"><?=$info2[$i][1]?></option>
                <?
                  endfor;
                ?>
              </select>

              <label for="car_year" class="form-label">Год</label>
              <input type="number" class="form-control" id="car_year" name="car_year">

              <label for="car_mileage" class="form-label">Пробег</label>
              <input type="number" class="form-control" id="car_mileage" name="car_mileage">
              
              <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
              <label for="img_file" class="form-label">Фото</label>
              <input class="form-control" type="file" id="img_file" name="img_file">
            </div>
            <button type="submit" name="carFormSubmit" value="car" class="btn btn-primary mb-2">Подтвердить</button>
          </form>
          
      </div>
    </main>
    <footer class="footer">
        <div class="container-fluid text-center">
          <div class="row justify-content-between h-100 align-items-center w-100">
            <div class="col-2 d-flex"><a href="#"><img src="/image/racing.png" class="logo"><span class="logo-text"> CarDrive</span></a></div>
            <div class="col-5">
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
    <script src="js/registration-popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>