<link rel="stylesheet" href="style.css">
    <title>Questão 8</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Quantos jogadores tem em um time de basquete?</label>
            <select name="select" id="questEigth">
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>
            <button>Enviar</button>
        </form>
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