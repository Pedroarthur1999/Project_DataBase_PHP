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


   .forms{
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

<header>
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
  </header>


<div class="forms">

  <form action="salvar.php" method="post">
<div class="line-input">  Nome:<input name="name" type="text" /> <br /></div>
<div class="line-input"> Idade: <input max="99" min="1" name="age"  type="number"  name="Idade" /> <br /> </div>
<div class="line-input">Email:<input  type="text" name="email" placeholder="exe@gmail.com" /><br /></div>
<div class="line-input">Senha:<input name="password" type="password" /> <br /></div>
<div class="line-input"><input type="submit" id="button" value="Cadastrar" /></div>
  </form>
  </div>
  
<footer>

           
           <h3> &copy Todos os direitos reservados </h3>
      
      
      
      </footer>
</body>
</html>
