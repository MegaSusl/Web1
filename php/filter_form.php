<?
require_once("db.php");
?>
<?php
    $check = false;
    $name = $_POST['head_filter'];
    $query = $mysql->prepare("INSERT INTO head_filter (name) values ('$name')");
    // var_dump($_POST['head_filter']);
    if($_POST['head_filter']!=""){
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