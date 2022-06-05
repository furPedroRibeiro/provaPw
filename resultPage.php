<link rel="stylesheet" href="style.css">
<?php 
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

  echo "Seu nome:".$name."<br> Seu email:".$email."<br>";

  $questOne = $_SESSION['questOne'];
  $questTwo = $_SESSION['questTwo'];
  $questThree = $_SESSION['questThree'];
  $questFour = $_SESSION['questFour'];
  $questFive = $_SESSION['questFive'];
  $questSix = $_SESSION['questSix'];
  $questSeven = $_SESSION['questSeven'];
  $questEigth = $_SESSION['questEigth'];
  $questNine = $_SESSION['questNine'];
  $questTen = $_SESSION['questTen'];
  $acertos = 0;
  $erros = 0;

  if($questOne == 5){
    $acertos++;
  } else{
    $erros++;
  }
  if($questTwo == 1){
    $acertos++;
  }
  else {
    $erros++;
  }
  if($questThree == 'Paris'){
    $acertos++;
  } else {
    $erros++;
  }
  if($questFour == 'França'){
    $acertos++;
  } else {
    $erros++;
  }
  if($questFive == 'Html'){
    $acertos++;
  } else {
    $erros++;
  }
  if($questSix == 0){
    $acertos++;
  } else {
    $erros++;
  }
  if($questSeven == 'dowhile'){
    $acertos++;
  } else {
    $erros++;
  }
  if($questEigth == 5){
    $acertos++;
  } else {
    $erros++;
  }
  if($questNine == 'Cantor'){
    $acertos++;
  } else {
    $erros++;
  }
  if($questTen == 70){
    $acertos++;
  } else {
    $erros++;
  }
?>
<div class="content">
  Questões: 10
  <br>
  Acertos: <?php echo $acertos;?>
  <br>
  Erros: <?php echo $erros;?>
  <br>
  Ranking:
</div>