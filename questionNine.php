<link rel="stylesheet" href="style.css">
    <title>Questão 9</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Supla é um:</label>
            <select name="select" id="questNine">
                <option value="Militar">Militar</option>
                <option value="Jogadordefutebol">Jogador de futebol</option>
                <option value="Rapper">Rapper</option>
                <option value="Militar">Militar</option>
                <option value="Ator">Ator</option>
            </select>
            <button>Enviar</button>
        </form>
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