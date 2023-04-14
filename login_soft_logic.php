<?php
session_start();
require './admin/middlewares/data.php';

if (isset($_POST['submit'])) {
    //get form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$email) {
        $_SESSION['signin'] = "Adresse-mail requis";
    } elseif (!$password) {
        $_SESSION['signin']  = "Mot de passe requis";
    } else {
        // fetch user from database

        $fetch_user_query = "SELECT * FROM user_form WHERE email='$email'";
        $fetch_user_result = mysqli_query($connexion, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            //convert the record into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            // compare form password with database password
            if (password_verify($password, $db_password)) {
                // set  session for access control
                $_SESSION['user-id'] = $user_record['id'];
                // set session if user is an admin
                
                if ($user_record['user_type'] == 'admin') {
                    $_SESSION['admin_name'] = $user_record['name'];
                    header('location: ' . ROOT_URL . 'admin_page.php');

                } elseif ($user_record['user_type'] == 'user') {
                    $_SESSION['user_name'] = $user_record['name'];
                    header('location: ' . ROOT_URL . 'user_page.php');

                }
            } else {
                $_SESSION['signin'] = "Veuillez vérifier votre saisie";
            }
        } else {
            $_SESSION['signin'] = "L'utilisateur n'a pas été trouvé";
        }
    }

    //if any problem, redirect back to signin page with login data
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'login_soft.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'login_soft.php');
    die();
}

?>