<link rel="stylesheet" href="style.css">
    <title>Questão 6</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Quantos mundiais o Palmeiras tem?</label>
            <select name="select" id="questSix">
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
                <option value="0">Error, Palmeiras don't have worldwide</option>
            </select>
            <button>Enviar</button>
        </form>
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