<?php

    session_start();
    include "../conexion.php";

    if(isset($_POST['email']) && isset($_POST['password'])) {

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $correo = test_input($_POST['email']);
        $password = test_input($_POST['password']);

        if (empty($correo)) {
            header("Location: ../index.php?error=El correo electrónico es requerido");
        } else if (empty($password)) {
            header("Location: ../index.php?error=La contraseña es requerida");
        } else {
            //Contraseña
            //$password = ($password);

            $sql = "SELECT * FROM usuario WHERE Correo='$correo' AND Contraseña='$password'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['Contraseña'] === $password) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['Nombre'] = $row['Nombre'];
                    $_SESSION['Apellido'] = $row['Apellido'];
                    $_SESSION['Correo'] = $row['Correo'];
                    $_SESSION['Fec_nacimiento'] = $row['Fec_nacimiento'];

                    header("Location: ../home.php");
                } else {
                    header("Location: ../index.php?error=El correo o la contraseña es incorrecto");
                }
            } else {
                header("Location: ../index.php?error=El correo o la contraseña son incorrectos");
            }
        }

    } else {
        header("Location: ../index.php");
    }

?>