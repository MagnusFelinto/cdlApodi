<?php
if(!session_id()) session_start(); 

// $_SESSION['dados'] = array('user' => $user, 'msg' => $msg, 'usuario' => $usuario);
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
        **/
     .container{
       position: static;
        width: 100%;
        height: 488px;
        left: -15px;
        top: 361px;

        background: linear-gradient(178.6deg, #00A056 -30.09%, #3300FF 77.97%);
        border-radius: 62px 62px 10px 10px;
     }
     .btn-entra{
        width: 155px;
        height: 36px;
        left: 102px;
        top: 647px;
        background: #FBAB2C;
        border-radius: 30px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-size: 16px;    
        text-align: center;
        
    
     }
     .premio{
  
        width: 203px;
        height: 65px;
        left: 78px;
        top: 234px;

        font-family: 'Open Sans Hebrew';
        font-style: italic;
        font-weight: 800;
        font-size: 24px;
        line-height: 33px;
        text-align: center;
        color: #294E94;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
     }
     .merito{
  
        width: 203px;
        height: 65px;
        left: 78px;
        top: 284px;
        text-align: center;
        color: #294E94;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-family: Open Sans Hebrew;
        font-size: 13px;
        font-style: italic;
        font-weight: 800;
        line-height: 18px;
        letter-spacing: 0em;
        text-align: center;

     }
     .form {
        margin-top: 15%;   
     }
     .logo{
       
        width: 296px;
        height: 189px;
        left: 31px;
        top: 71px;
        background: url('assets/logo.png');
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
     }
     .input-login{ 
        width: 205px;
        height: 30px;
        left: 112px;
        top: 527px;
        font-size: medium;
        padding:0px 10px;
        font-family:  'Open Sans';
        background: #FFFFFF;
        border-radius: 6px;
     }
     .mensagem{
        margin-top: 50px;
        font-family: 'Open Sans Hebrew';
        font-style: italic;
        font-weight: 800;
        font-size: 24px;
        line-height: 33px;
        text-align: center;
        color: #fff;
     }
      body{
        background-size: 100%;
        background-image: url('assets/background-white3.jpg');/* background.jpg **/
        background-repeat: repeat-y;
      
      }

      
    </style>
  </head>
  <body >

       <div align="center">
          <!--<img src  ="assets/logo.png"
           width=""
           alt=""
           class="logo"
           />-->
           <div class="logo"></div>
           <label class="premio">
                PRÊMIO </label>
    </br>
        <label  class="merito">
            MÉRITO EMPREENDEDOR
        </label>
          </br>
         </br>
    <div id="root"  class="container">
    </br>
         </br>
    <label class="mensagem" for="">
    <?php
        if(!empty($_SESSION['dados']['msg'] )){
          echo $_SESSION['dados']['msg'];
        }
        else{
          echo 'Seja Bem Vindo(a)';
        }

        ?>
    </label>
      <form method="post" class="form" action="login_system.php">
      </br>
      
          <input class="input-login" type="text" placeholder="👤 Usuario" name="usuario" /> <!--- diretor / vice-direto-->
          </br>
          </br>
          <input class="input-login" type="password" placeholder="🔑 Senha" name="senha" id="senha"/>
          </br>
          </br>
          <input class="btn-entra"   type="submit"  id="entra" style="text-align: center;" value="ENTRAR"/>
          </br>
          </br>
      </form>

     
    </div>
    </div>    
    </body>
</html>
