<?php
    if (!isset($_SESSION["login"])){
        if(isset($_POST["login"])){
            include'conection.php';

            $login_form = $_POST['login'];
            $password_form = $_POST['password'];

            $sql = "SELECT * FROM `usuario` 
                WHERE `user` 
                LIKE '$login_form' 
                AND `password` LIKE '$password_form'";

            $result = mysqli_query($connection, $sql);

            if($result  && mysqli_num_rows($result) > 0){
                $_SESSION['login'] = $login;
                header('Location: index.php');
            }else{
                $_SESSION['login'] = false;
                echo'Dados Inválidos';
            }
        }
            
        include('login.php');
    }else{
        include('home.php');
    }