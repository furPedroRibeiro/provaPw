<link rel="stylesheet" href="styleQuest.css">    <title>Questão 3</title>
    <div class="content">
        <form action="" method="post">
            <div class="divLabel">
            <label for="select">A Torre Eiffel fica em:</label>
            </div>
            <div class="divSelect">
            <select name="select" id="questThree">
                <option value="California">California</option>
                <option value="Paris">Paris</option>
                <option value="Dallas">Dallas</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Estolcomo">Estolcomo</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questThree'] = $_POST['select'];
            header('location: questionFour.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>