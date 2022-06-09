<link rel="stylesheet" href="styleQuest.css">    <title>Questão 5</title>
    <div class="content">
        <form action="" method="post">
            <div class="divLabel">
            <label for="select">Qual opção é considerada uma linguagem de marcação?</label>
            </div>
            <div class="divSelect">
            <select name="select" id="questFive">
                <option value="JavaScript">JavaScript</option>
                <option value="Php">Php</option>
                <option value="Java">Java</option>
                <option value="Mysql">Mysql</option>
                <option value="Html">Html</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
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