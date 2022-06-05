<?php
    session_start();
    if($_POST){
        $_SESSION['name'] = $_POST['name'];
        $name = $_SESSION['name'];
        $_SESSION['email'] = $_POST['email'];
        $email = $_SESSION['email'];
        if(!$name || !$email){
            echo "Formulário não preenchido";
        } else{
            header('location: questionOne.php');
        }
    }
?>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styleHome.css">

<body>
    <div class="contentPage">
        <form action="" method="post">
            <label for="name">Digite seu nome:</label>
            <input type="text" id="name" name="name" placeholder="Ex: Sara Vignoli">
            <label for="email">Digite seu email: </label>
            <input type="email" id="email" name="email" placeholder="Ex: amoasarinha@gmail.com">
            <button class="btnDefault">Enviar</button>
        </form>
    </div>

