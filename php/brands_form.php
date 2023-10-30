<?
require_once("db.php");
?>
<?php
    $check = false;
    $name = $_POST['car_brand'];
    $query = $mysql->prepare("INSERT INTO car_brand (car_brand) values ('$name')");
    // var_dump($_POST['formSubmit']);
    if($_POST['car_brand']!=""){
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
?>