<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
}

html{
    scroll-behavior: smooth;
    overflow-x: hidden;
    width: 100%;
    
}
body{
    background-image: url("https://mappsistemas.com.br/paginas/wp-content/uploads/2021/09/2021-09-melhorar-o-servico-de-entregas.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
        
}

.cabecalho{
    position: fixed;
    display: flex;
    width: 100vw;
    height: 10vh;
    background-color: rgb(0, 0, 104);
    font-size: 1.5rem;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
}
.cabecalho ul{
    display: flex;

}
.cabecalho li{
      list-style: none;
      margin:1rem 1rem 1rem 1rem;
      color:white;
      
}
.cabecalho li a{
    text-decoration: none;
    color:white;
  
}
.entradas{
    display: flex;
    flex-direction: column;
    position: relative;
    top: +60px;
}
.entradas input{
    margin: 1rem .1rem;
}
.text{
    position:absolute;
    top:10rem;
    left:10rem;
}
footer{
    display:block;
    position: absolute;
    bottom:0;
    width: 100vw;
    height:3rem;
    background-color: black;
}
footer h3{
    color:white;
    padding:.8rem;
}


</style>

<div class="cabecalho">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="cadastro.php">Cadastrar</a></li>
          <li><a href="salvar.php">Salvar</a></li>
          <li><a href="#excluir">Excluir</a></li>
        </ul>
      </nav>
    </div>
  

<div class="text">   
  <?php

  $nome = $_POST["name"];
  $email = $_POST["email"];
  $senha = $_POST["password"];
  $idade = $_POST["age"];

$servername = "sql113.epizy.com";
$username = "epiz_30237243";
$password = "l8672OCTnZT5fG0";
$dbname = "epiz_30237243_Banco_Mercado";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
 
  $sql = "INSERT INTO usuario (nome, email, senha, idade) VALUES ('$nome', '$email','$senha','$idade')";
  if ($conn->query($sql) === TRUE) {
  echo "Cliente cadastrado com sucesso";
 } else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
  ?>
  
</div>

  <a href="index.php">Voltar</a>
  
  <footer>

           
           <h3> &copy Todos os direitos reservados </h3>
      
      
      
      </footer>
  
</body>
</html>
