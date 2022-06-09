<link rel="stylesheet" href="styleQuest.css">
    <title>Questão 8</title>
    <div class="content">
        <form action="" method="post">
            <div class="divLabel">
            <label for="select">Quantos jogadores tem em um time de basquete?</label>
            </div>
            <div class="divSelect">
            <select name="select" id="questEigth">
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questEigth'] = $_POST['select'];
            header('location: questionNine.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>