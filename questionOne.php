
    <link rel="stylesheet" href="style.css">
    <title>Questão 1</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Quantas copas o Brasil tem?</label>
            <select name="select" id="questOne">
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="8">8</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questOne'] = $_POST['select'];
            header('location: questionTwo.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>
