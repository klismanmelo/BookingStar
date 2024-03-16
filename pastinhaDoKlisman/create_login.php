<form method="post" name="cadastro">
    <input type="text" name='login'>
    <input type="password" name='password'>
    <input type="submit" name='cadastro' value="enviar">
</form>

<?php
    use Ramsey\Uuid\Uuid;
    require_once __DIR__ . '/vendor/autoload.php';
    
    include("conection.php");
    if($connection && isset($_POST["cadastro"])){
        $login_fomr = $_POST["login"];
        $password_form = $_POST["password"];
        $id_form = Uuid::uuid4()->toString();

        $login = mysqli_real_escape_string($connection, $login_fomr);
        $password = mysqli_real_escape_string($connection, $password_form);
        $id = mysqli_real_escape_string($connection, $id_form);

        $sql = "INSERT INTO `usuario` (`user`, `password`, `id`) 
        VALUES ('$login', '$password', '$id')";

        $result = mysqli_query($connection, $sql);
        
        if($result){
            header('Location: index.php');
        }else{
            $_SESSION['login'] = false;
            echo'Dados Inválidos';
        }
       
    }
?>