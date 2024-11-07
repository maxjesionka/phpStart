<?php

declare(strict_types=1);

function signup_input(){


    if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])){
        echo '<input type ="text" name="username" placeholder="username" value="' . $_SESSION['signup_data']['username'] . '">';
    } else {
        echo '<input type ="text" name="username" placeholder="username">';
    }

    echo '<input type ="text" name="pwd" placeholder="passwords">';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"])&& !isset($_SESSION["errors_signup"]["invalid_email"])){

        echo '<input type ="text" name="email" placeholder="email" value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type ="text" name="email" placeholder="email">';
    }

}

function check_signup_errors()
{
    if(isset($_SESSION['error_signup'])){
        $errors = $_SESSION['error_signup'];

        echo'<br>';

        foreach($errors as $error){
            echo '<p>' . $error . '<p>';
        }

        unset($_SESSION['error_signup']);
    }else if(isset($_GET['signup']) && $_GET['signup'] === 'success'){
        echo '<br>';
        echo '<p>Signup success!</p>';
    }
}

