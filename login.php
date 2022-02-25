<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <title>Delivery Net</title>
  </head>
  <body>
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
  

    <header>
    </header>
      <div class="image-wrapper">
        <img
          src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fmappsistemas.com.br%2Fpaginas%2Fmelhorar-o-servico-de-entregas%2F&psig=AOvVaw39giVczB9FFekCL_7B80Dq&ust=1639955944498000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCODIqJO-7vQCFQAAAAAdAAAAABAN"
          alt=""
        />

      </div>
      <div class='text'>
               <h1>Bem vindo </h1>
      </div>
      <footer>

           
           <h3> &copy Todos os direitos reservados </h3>
      
      
      
      </footer>
  </body>
</html>
