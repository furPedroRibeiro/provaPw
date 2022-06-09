<link rel="stylesheet" href="styleQuest.css">
    <title>Questão 6</title>
    <div class="content">
        <form action="" method="post">
<div class="divLabel">
<label for="select">Quantos mundiais o Palmeiras tem?</label>

</div>            <div class="divSelect">
            <select name="select" id="questSix">
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questSix'] = $_POST['select'];
            header('location: questionSeven.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>