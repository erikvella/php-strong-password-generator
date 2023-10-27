<?php 
// include __DIR__ . "/partials/function.php";


$characters = ['q' , 'Q' , 'e' , 'E' , 'r' , 'R' , 't' , 'T' , 'y' , 'Y' , 'u' , 'U' , 'i' , 'I' , 'o' , 'O' , 'p' , 'P' , 'a' , 'A' , 's' , 'S' , 'd' , 'D' , 'f' , 'F' , 'g' , 'G' , 'h' , 'H' , 'j' , 'J' , 'k' , 'K' , 'l' , 'L' , 'z' , 'Z' , 'x' , 'X' , 'c' , 'C' , 'v' , 'V' , 'b' , 'B' , 'n' , 'N' , 'm' , 'M' , '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' , '0' , '!' , '?' , '(' , ')' , '[' , ']' , '{' , '}' , '#' , '+' , '-' , '/' , '*' , '$' , '&' , '£' , '%' , '=' , '<' , '>'];


include __DIR__ . "/partials/head.php";
$limit = '';




?>









<body>
  <h1 class="text-center">Password generator</h1>

  <div class="container">
    <div class="row justify-content-between ">
      <div class="col-4">
        <h2 class="my-5">Scegli il numero di caratteri che dovrà avere la tua password con un massimo di 32 e un minimo di 8</h2>

        <form action="index.php" method="POST">
  <div class="mb-3">
    <label for="quantity" class="form-label">Numero di caratteri (8/32)</label>
    <input type="number" class="form-control"  id="quantity" name="quantity" min="8" max="32">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Genera password</button>
  <button type="submit" class="btn btn-danger">Annulla</button>
</form>
        
      </div>


      <div class="col-4 my-5">
        <h2>Password generata : </h2>
      </div>
      
    </div>
  </div>
</body>
</html>