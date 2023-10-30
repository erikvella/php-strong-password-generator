<?php 
// include __DIR__ . "/partials/function.php";


$characters = ['q' , 'Q' , 'e' , 'E' , 'r' , 'R' , 't' , 'T' , 'y' , 'Y' , 'u' , 'U' , 'i' , 'I' , 'o' , 'O' , 'p' , 'P' , 'a' , 'A' , 's' , 'S' , 'd' , 'D' , 'f' , 'F' , 'g' , 'G' , 'h' , 'H' , 'j' , 'J' , 'k' , 'K' , 'l' , 'L' , 'z' , 'Z' , 'x' , 'X' , 'c' , 'C' , 'v' , 'V' , 'b' , 'B' , 'n' , 'N' , 'm' , 'M' , '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' , '0' , '!' , '?' , '(' , ')' , '[' , ']' , '{' , '}' , '#' , '+' , '-' , '/' , '*' , '$' , '&' , '£' , '%' , '=' , '<' , '>'];

$password = '';

include __DIR__ . "/partials/head.php";
$limit = $_POST['quantity'];



if(isset($_POST['quantity']) && !empty($_POST['quantity'])){
  // controllo se il valore inserito è corretto anche se ho già messo il controllo su html , mettiamo il controllo anche lato server per sicurezza
  for($i = 0 ; $i < $limit ; $i++){
    $getRandomIndex =  rand(0 , 79);
    $char = $characters[$getRandomIndex];
    $password .= $char;
  }
}



?>









<body>
  <h1 class="text-center">Password generator</h1>

  <div class="container">
    <div class="row justify-content-between ">
      <div class="col-4">
        <h2 class="my-5">Scegli il numero di caratteri che dovrà avere la tua password con un massimo di 32 e un minimo di 8</h2>


                                            <!-- inizio del form -->


        <form action="index.php" method="POST">
  <div class="mb-3">
    <label for="quantity" class="form-label">Numero di caratteri (8/32)</label>
    <input type="number" class="form-control"  id="quantity" name="quantity" min="8" max="32">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Genera password</button>
  <button type="reset" class="btn btn-danger">Annulla</button>
</form>
        
      </div>


      <div class="col-4 my-5">
        <h2>Password generata : <br>
        <?php echo $password ?></h2>
      </div>
      
    </div>
  </div>
</body>
</html>