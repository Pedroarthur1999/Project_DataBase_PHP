<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

  <?php

  
  $email = $_POST["email"];
  $senha = $_POST["password"];
  $esta_logado = false;
  
$servername = "sql113.epizy.com";
$username = "epiz_30237243";
$password = "l8672OCTnZT5fG0";
$dbname = "epiz_30237243_Banco_Mercado";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT * FROM usuario";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
              
          if($row["email"]== $email && $row["senha"]==sha1($senha)){
          }

  }
      }
      else{
               echo "0 results";
          }
          
           if($esta_logado){
               echo "voce logou";
           }
           else{
               echo "nao logou";
           }
 
$conn->close();
  ?>
  
</div>

  
  <footer>

           
           <h3> &copy Todos os direitos reservados </h3>
      
      
      
      </footer>
  
</body>
</html>
