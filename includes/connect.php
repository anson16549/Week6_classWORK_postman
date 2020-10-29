<?php
    $db_dsn = array(
        'host' => 'localhost',
        'dbname' => 'progdata'
        'charset' => 'utf8'
    );
    $dsn = 'mysql:'.http_build_query($db_dsn, '', ';');
    // hi pan. Feel free to change this however you like
    // this is just a placeholder file
    $db_user = 'root';
    $db_pass = 'root';

    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        //var_dump($pdo);
        // echo (in this case) is almost like console.log
        //echo "you're in! enjoy the show";
    } catch (PDOException $exception){
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }
    
    
    
    // if(empty($_POST["email"])) {
        //header('HTTP/1.1 488 You Did NOT Include Your Email');
        //die(json_encode(["message" => "form submission failed"]));
        
    //} else {
        //echo json_encode(["message" => "this is a test message. Your name is " . $_POST["firstname"] ." and your email is " . $_POST["email"]]);
    //}