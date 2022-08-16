<?php
if(!session_id()) session_start(); 
 
?><!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/src/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <title>CDL de Apodi</title>
    <style >
      /**
        * Cores da logo da CDL
        * Color blue   #294e94
        * Color yellow #fbab2c
        * Color green  #00a056
        *
        **/
      .container {
        position: relative;
        flex: 1;
        align-items: center;
        flex-direction: column-reverse;
      } 
      .container .form .logo{
        max-width:80%;
        max-height:80%;
        width:  auto;
        height: auto;
        box-shadow: 10px 8px 30px  rgb(0, 0, 0);
        border: 2px solid #c0c0c0;
        border-radius: 50%;
        border: 30px ;
        margin-bottom: 5%;
      } 
      .container  {
        display: flex;
        align-items: center;
        justify-content: center
      } 
      .container .form {
        margin: 0;
        padding-top: 2%;
        padding-left: 5%;
        padding-right: 5%;
        padding-bottom: 2%;
        align-items: center;
        background-color: #fbab2c;
        border-radius: 30px 40px 30px 40px;
        width: 80%;
        height: auto;
        min-height: 80%;
        min-width: 80%;
      } 
      .container .form .input-login{
        background-color: #fff;
        border-radius: 30px 40px 30px 40px;
        box-shadow: 9px 6px 40px  rgba(0, 0, 0, 0.648);
        padding: 7pt;
      } 

      .container .form .btn-entra{
        background-color: #294e94;
        color:#fff;
        padding-top: 1.8%;
        padding-bottom: 1.8%;
        padding-right: 5%;
        padding-left: 5%;
        border-radius: 14px ;
        font-family: 'Roboto';
        font-weight: 700;
        font-style: inherit;
        font-size: medium;
        margin-bottom:10%;

      }
      .container .section1 img{
        margin-top:20%;
        flex: content;
        margin-bottom:10%;
        width: auto;
        max-width: 80%;
      }

      .container .section2 .img{
        flex: auto;
        margin-top:5%;
        transform: rotate(180deg);
        margin-bottom:10%;
        width: auto;
        max-width: 80%;
      }
      .esqueceu-senha{
        float: right;
      }
      body{
        background-image: url('assets/background.jpg');
      }
    </style>
  </head>
  <body>
    
    <div id="root" align="center" class="container">
      <section class="section1">
        <img src="assets/caneta-verde.png" alt="">
      </section>
      <form method="post" class="form" action="login_system.php">
      </br>
        <H1>
        <?php
        if(!empty($_SESSION['dados']['msg'])){
          echo $_SESSION['dados']['msg'];
        }
        else{
          echo 'Seja Bem Vindo(a)';
        }

        ?></H1>
          <img src  ="assets/cdlapodi.png"
           width=""
           alt=""
           class="logo"
           />
          </br>
         </br>
          <input class="input-login" type="text" name="usuario" /> <!--- diretor / vice-direto-->
          </br>
          </br>
          <input class="input-login" type="password" name="senha" id="senha"/>
          </br>
          </br>
          <input class="btn-entra" type="submit" value="Entrar"/>
          </br>
          </br>
      </form>

      <section class="section2">
        <img src="assets/caneta-azul.png"
            class="img"
             alt="">
     </section>      
    </div>
  </body>
</html>
