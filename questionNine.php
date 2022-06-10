<link rel="stylesheet" href="styleQuest.css">    <title>Questão 9</title>
    <div class="content">
        <form action="" method="post">
            <div class="divLabel">
            <label for="select">Supla é um:</label>
            </div>
            <div class="divSelect">
            <select name="select" id="questNine">
                <option value="Militar">Militar</option>
                <option value="Jogadordefutebol">Jogador de futebol</option>
                <option value="Rapper">Rapper</option>
                <option value="Cantor">Cantor</option>
                <option value="Ator">Ator</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questNine'] = $_POST['select'];
            header('location: questionTen.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>