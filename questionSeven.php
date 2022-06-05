<link rel="stylesheet" href="style.css">
    <title>Questão 7</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Qual das opções é um laço de repetição?</label>
            <select name="select" id="questSeven">
                <option value="if">if</option>
                <option value="dowhile">do while</option>
                <option value="int">int</option>
                <option value="let">let</option>
                <option value="switch">switch</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questSeven'] = $_POST['select'];
            header('location: questionEigth.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>