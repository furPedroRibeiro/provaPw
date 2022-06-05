<link rel="stylesheet" href="style.css">
    <title>Questão 10</title>
    <div class="content">
        <form action="" method="post">
            <label for="select">Há quantos anos a rainha Elizabeth II está na monarquia?</label>
            <select name="select" id="quesTen">
                <option value="69">69</option>
                <option value="68">68</option>
                <option value="70">70</option>
                <option value="58">58</option>
                <option value="64">64</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questTen'] = $_POST['select'];
            header('location: resultPage.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>