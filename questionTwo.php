<link rel="stylesheet" href="style.css">
    <title>Questão 2</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Quantos albuns o sex pistols tem?</label>
            <select name="select" id="questTwo">
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="1">1</option>
                <option value="4">4</option>
                <option value="8">8</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questTwo'] = $_POST['select'];
            header('location: questionThree.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>