<?
    require_once("db.php");
    $name = $_POST['car_name'];
    $year = $_POST['car_year'];
    $mileage = $_POST['car_mileage'];
    $car_brand = $_POST['car__brand'];
    $car_type = $_POST['car_type'];
    $car_price = $_POST['car_price'];
    $uploaddir = "../image/cars/";
    $img_name = basename($_FILES['img_file']['name']);
    print_r(explode('/', $_FILES['img_file']['type'])[1]);
    $new_img = $name . $car_price . $year . $mileage . '.' . explode('/', $_FILES['img_file']['type'])[1];
    $uploadfile = $uploaddir . $new_img; 
    print_r($uploadfile);
    $check = false;
    $result = false;
    $query = $mysql->prepare("INSERT INTO Car (name, price, year, mileage, car_brand, car_type, img) values ('$name', $car_price, $year,  $mileage, $car_brand, $car_type, '$new_img')");
    // print_r($img_name);
    // print_r($query);
    // print_r($uploadfile);
    // print_r($car_brand); 
    
    if (move_uploaded_file($_FILES['img_file']['tmp_name'], $uploadfile)) {
        if($_POST['car_name']!=""){
            try{
                $query->execute();
                $result = true;
            }
            catch (Exception $e){
                print "Ошибка!: " . $e->getMessage() . "<br/>";
            }
            if ($result) {
                // echo "Успех. Информация занесена в базу данных";
                echo '<script language="javascript"> alert("Успех. Информация занесена в базу данных") </script>';
                $check = true;
            }
        }
        else exit("Название отсутсвует");    
        $mysql->close();
        if ($check){
            echo "<script> setTimeout(\"location.href = '../admin.php';\",200); </script>";
        }    
    } 
    else {
        echo '<script language="javascript"> alert("Ошибка. Проблемы с загрузкой фото") </script>';
    }

?>