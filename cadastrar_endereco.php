<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Sistema Web</title>
</head>

<body>
<style>
       <style>
      @keyframes aparecer {

    0%{
        opacity: .1;
    }
    100%{
        opacity: 1;
    }
    
}
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
header{
    animation:aparecer 1s;
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
.text{
    position:relative;
    top:15rem;
    left:6rem;
    color: black;
    font-size:3rem;
    animation: aparecer 3s;
}
.logout{
    position:absolute;
    right:50px;
    top:5px;
    font-size:14pt;
    
} .forms{
       heigth:300px;
       position:absolute;
       top:5rem;
       left:2rem;
   }
    .forms p{
        margin-botton:1rem;
        
    }   
    
    .line-input{
        margin-bottom:.2rem;
    }
    .line-input {
        color:black;
        font-family: 'Oswald', sans-serif;
        font-weight:600;
    }
    input{
        border:0;
        padding:6px;
        display:block;
    }
    input#button{
        color:white;
        background-color:blue;
        border-radius:10%;
        cursor:pointer;
        opacity:.7;
        transition-duration:.5s;
    }
    input#button:hover{
       transition-duration:.5s;   
       opacity:1;
    }
    .forms  a{
        text-decoration:none;
        font-size:14pt;
        padding:3px;
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
          <li><a href="login.php">Home</a></li>
          <li><a href="cadastrar_endereco.php">Cadastrar</a></li>
          <li><a href="excluir.php">Excluir</a></li>
          <div class="logout"><li><a href="index.php">logout</a>
        </ul>
      </nav>
    </div>
  
<div class="forms">
<h1>Insira os dados</h1></br>
<form action="cadastro_endereco.php" method="post">
<div class="line-input">  Nome:<input name="name" type="text" /> <br /></div>
<div class="line-input"> Idade: <input max="99" min="1" name="idade"  type="number"  name="Idade" /> <br /> </div>
<div class="line-input">Endereço:<input  type="text" name="endereco" /><br /></div>
<div class="line-input">Numero:<input  type="text" name="numero" /><br /></div>
<div class="line-input"><input type="submit" id="button" value="Cadastrar" /></div>
  </form>
  <a href="index.php">Voltar</a>
  </div>

  
<footer>

           
           <h3> &copy Todos os direitos reservados </h3>
      
      
      
      </footer>
</body>
</html>
