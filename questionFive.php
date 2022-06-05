<link rel="stylesheet" href="style.css">
    <title>Questão 5</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Qual opção é considerada uma linguagem de marcação?</label>
            <select name="select" id="questFive">
                <option value="JavaScript">JavaScript</option>
                <option value="Php">Php</option>
                <option value="Java">Java</option>
                <option value="Mysql">Mysql</option>
                <option value="Html">Html</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questFive'] = $_POST['select'];
            header('location: questionSix.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>