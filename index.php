<?
  require_once("php/db.php");
  $info = mysqli_query($mysql, "SELECT car_brand.id, car_brand.car_brand FROM car_brand");
  $info = mysqli_fetch_all($info);
  $cars = mysqli_query($mysql, "SELECT id, name, price, year, mileage, img from Car");
  $cars = mysqli_fetch_all($cars);
  $count_cars = count($cars);
  $count = count($info);
  include 'php/Route.php';
  define('BASEPATH', '/');

  
?>

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
              <a class="navbar-brand d-flex align-items-center me-2" href="#"><img src="/image/racing.png" class="logo me-2"><span class="logo-text"> CarDrive</span></a>
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
            <a href="catalog.php" class="btn btn-light">Легковые</a>
            <a href="catalog.php" class="btn btn-light">Коммерческие</a>
            <a href="catalog.php" class="btn btn-light">Электромобили</a>
            <a href="catalog.php" class="btn btn-light">Мото</a>
          </div>
    </header>
    <main>
      <div class="form-container">
        <form class="register-form">
          <div class="form-pos d-flex flex-column">
          <a id="register-close" class="fa-solid fa-xmark user-btn"></a>
          <div class="mb-3">            
            <label for="Login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="Login" aria-describedby="Логин">
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="Password">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Номер телефона</label>
            <input type="text" class="form-control" id="phone" aria-describedby="Номер">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="Email">
          </div>
          <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
          </div>
        </form>
      </div>
      <div class="filters container">
        <h2 class="main-h2">Популярные марки</h2>
        <?
        $counter = 0;
        for($i = 0; $i < $count; $i++):
          if($counter / 5 == 0):
            ?>
              <div class="row w-100">
            <?
            endif;
            ?>
                <div class="col-2">
                  <a class="car_brand" href="#"><?= $info[$i][1]?>
                    <img src="../image/logos/<?=$info[$i][1]?>.svg" alt="test">
                  </a> 
                </div>
                
            <?
          $counter++;
          if($counter == 5):
            ?>
              </div>
            <?
          $counter = 0;
          endif;
        endfor;
        ?>  
        
        <div class="range d-flex">
          <div class="col">                      
            <div id="priceRange" class="d-flex">
              <span class="me-2" >До: </span>
              <output id="result">60000000</output>                
            </div>
            <input onmousemove="changeValue(this.value)" onchange="changeValue(this.value)" type="range" value="60000000" min="10000" max="60000000" oninput="this.nextElementSibling.value = this.value" class="form-range pe-3" id="priceRange">        
          </div>
          <div class="col-auto">
            <button type="submit" class="btn">Показать предложения</button>
          </div>
        </div>
        <h2>Рекомендации</h2>
        <div id="rectangle"></div>
      </div>
      <div class="container cards-container">
        <div class="row justify-content-between">
          <?
            for($i = 0; $i < $count_cars; $i++):
          ?>
          <div class="col-auto">
            <div class="card">
              <!-- <a href="<?=BASEPATH . 'car/id=' . $cars[$i][0]?>" class="card-link"> -->
              <a href="card-template.php" class="card-link">
                <img src="/image/cars/<?= $cars[$i][5]?>" alt="car">
                <div class="card-body">
                  <h5 class="card-title"><? 
                  $car_prices = str_split(strrev($cars[$i][2]), 3);
                  for($j = count($car_prices)-1; $j >= 0; $j--):
                    echo strrev($car_prices[$j]) . ' ';
                  endfor;
                  ?>₽</h5>
                  <p class="card-text"><?= $cars[$i][1]?></p>                
                  <p class="card-info"><?= $cars[$i][3]?> / <?= $cars[$i][4]?> км</p>                
                </div>
              </a>
            </div>
          </div>
          <?
            endfor;
          ?>
          
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/input-range.js"></script>
    <script src="js/registration-popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0e4a1ed86f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<?
