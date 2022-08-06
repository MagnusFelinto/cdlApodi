<!--<!DOCTYPE html>
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
      /***
        * Cores da logo da CDL
        * Color blue   #294e94
        * Color yellow #fbab2c
        * Color green  #00a056
        */
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
        margin-top:20%;
        transform: rotate(180deg);
        margin-bottom:20%;
        width: auto;
        max-width: 80%;
      }
      .esqueceu-senha{
        float: right;
      }
    </style>
  </head>
  <body>
    <div id="root" align="center" class="container">
      <section class="section1">
        <img src="assets/lapis.png" alt="">
      </section>
      <form method="post" class="form">
      </br>
          <img src  ="assets/cdlapodi.png"
           width=""
           alt=""
           class="logo"
           />
          </br>
         </br>
          <input class="input-login" type="text" name="usuario"/> <!--- diretor / vice-direto--
          </br>
          </br>
          <input class="input-login" type="password" name="senha" id="senha"/>
          </br>
          </br>
          <input class="btn-entra" type="submit" value="Entrar"/>
          </br>
          <!--<a href="#" class="esqueceu-senha">
            Esqueceu a senha?
          </a>--
          </br>
      </form>
      <section class="section2">
        <img src="assets/lapis.png"
            class="img"
             alt="">
     </section>      
    </div>
  </body>
</html>
--->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/svg+xml" href="/src/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/custom.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <title>Formulario de pesquisa</title>
  <script type="text/javascript">
    function chkcontrol(j) {
          var total=0;
          for(var i=0; i < document.form1.ckb.length; i++){
            if(document.form1.ckb[i].checked){
              total =total +1;
            }
            if(total > 3){
                alert("Selecione apenas três") 
                document.form1.ckb[j].checked = false ;
                return false;
            }
          }
      } 
  </script>
<!---------CAMPO DE TESTE-------------->

<style>

  div label{
    font: 16px Arial;  
  }
  div label div{
    font: 10px Arial;  
  }
/** {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}
*/
/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
<!--Make sure the form has the autocomplete function switched off:-->
<!------------------------------------->
<style>
.star-rating {
  margin-left: 10px;
  margin-right: 10px;
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 250px;/*500px*/
  height: 50px;
  overflow: hidden;
  position: relative;
  background:     url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;/*100%*/
  width: 20%;/*10%*/
  z-index: 1;/**/
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;/*10*/
  height: 100%;/**/
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i  {
  width: 20%;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i  ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i  {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i   {
  width: 100%;
}/*
.star-rating i ~ i ~ i ~ i ~ i ~ i ~ i {
  width: 70%;
}
.star-rating i ~ i ~ i ~ i ~ i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i ~ i ~ i ~ i ~ i {
  width: 90%;
}
.star-rating i ~ i ~ i ~ i ~ i ~ i ~ i ~ i ~ i ~ i {
  width: 100%;
}*/
::after,
::before {
  height: 100%;/*100*/
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}
</style>

<style>
   section.sec div.container{
    margin-left:5%;
    margin-right:5%;
   }
   .form1 .salvar{
    margin-left: 48%;
   }
   
</style>
  
</head>

<body>
  <script>
    function seleciona(name, indice) {
   var imgs = document.querySelectorAll('img[name=' + name + ']');
  
   for (var i=0; i < imgs.length; i++) {
       if (i <= indice)
           imgs[i].className = "destaque";
       else
           imgs[i].className = "apagada";
   }
}

window.onload = function() {
   var imgs = document.querySelectorAll('img[name=fb]');
  
   for (var i=0; i < imgs.length; i++) {
       (function(name, i) {
          imgs[i].addEventListener('click', function () {
              seleciona(name, i);
          });
       })(imgs[i].name, i);
   }
}
</script>
  
<style>
        .apagada {
          background-image: url('assets\estrela-prata.png');/*http://www.biblecast.net.br/resources/estrela-prata.png*/
          width: 32px;
          height: 32px;
          cursor: pointer;
        }

        .destaque {
          background-image: url('assets\estrela.png');/*http://www.biblecast.net.br/resources/estrela.png*/
          width: 32px;
          height: 32px;
          cursor: pointer;
        }
  </style>
  
  <section class="sec" >
  <div class="container1" >
  </div> 
  <div class="container" >
    <form class="form1 autocomplete" method="POST" action="CadastraForm.php" name=form1 autocomplete="off" >
        <div class="input-01">
            <label class="input-01 centro" 
                 for="inputSelect01">
                 <h3>1  - Dados de Identificação dos Entrevistados</h3>
            </label>
              <br>
            <select class="custom-select" id="inputSelect01-00" name="inputSelect01-00" required="required">
                <option selected>Selecione o bairro...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="custom-select" id="inputSelect01-01" name="inputSelect01-01" required>
              <option selected>Selecione a comunidade...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <select class="custom-select" id="inputSelect01-02" name="inputSelect01-02" required>
                <option selected>Ambiente da entrevista...</option>
                <option value="Rua">Rua</option>
                <option value="Casa">Casa</option>
            </select>
        </div>

        <div class="input-02">
          <label class="input-02" 
                 for="inputSelect02">
                 <h3>2 - Segmento</h3>
          </label>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio1" value="Lojista" required>
              <label class="form-check-label-02" for="inlineRadio1">Lojista</label>
            </div>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio2" value="Universitário"required>
              <label class="form-check-label-02" for="inlineRadio2">Universitário</label>
            </div>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio3" value="Estudante de Ensino Médio"required>
              <label class="form-check-label-02" for="inlineRadio3">Estudante de Ensino Médio</label>
            </div>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio4" value="Comunidade em Geral"required>
              <label class="form-check-label-02" for="inlineRadio4">Comunidade em Geral</label>
            </div>
          </div>
        

        <div class="input-03">
          <label class="input-03" 
                 for="inputSelect03">
                <h3>3 – Gênero</h3> 
          </label>
          <div class="form-check form-check-inline01">
            <input class="form-check-input" type="radio" name="inlineRadioOptions-03" id="inlineRadioFeminino" value="Feminino"required>
            <label class="form-check-label" for="inlineRadioFeminino">Feminino</label>
          </div>
          <div class="form-check form-check-inline01">
            <input class="form-check-input" type="radio" name="inlineRadioOptions-03" id="inlineRadioMasculino" value="Masculino"required>
            <label class="form-check-label" for="inlineRadioMasculino">Masculino</label>
          </div>
          <div class="form-check form-check-inline01">
            <input class="form-check-input" type="radio" name="inlineRadioOptions-03" id="inlineRadioOutro" value="Outro"required>
            <label class="form-check-label" for="inlineRadioOutro">Outro</label>
          </div>
        </div>
     

           <div class="input-04">
              <label class="input-04" 
                 for="inputSelect04"required>
                 <h3>4 – Identidade de gênero</h3>
                 <!---() Cisgênero () Transgênero () Não-binário ( ) Neutro ( ) Queer ( ) Outro-->
              </label>
              <div class="form-check form-check-inline02">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-04" id="inlineRadioCisgênero" value="Cisgênero"required>
                <label class="form-check-label" for="inlineRadioCisgênero">Cisgênero</label>
              </div>
              <div class="form-check form-check-inline02">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-04" id="inlineRadioTransgênero" value="Transgênero"required>
                <label class="form-check-label" for="inlineRadioTransgênero">Transgênero</label>
              </div>
              <div class="form-check form-check-inline02">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-04" id="inlineRadiobinário" value="Não-binário"required>
                <label class="form-check-label" for="inlineRadiobinário">Não-binário</label>
              </div>
              <div class="form-check form-check-inline02">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-04" id="inlineRadioNeutro" value="Neutro"required>
                <label class="form-check-label" for="inlineRadioNeutro">Neutro</label>
              </div>
              <div class="form-check form-check-inline02">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-04" id="inlineRadioQueer" value="Queer"required>
                <label class="form-check-label" for="inlineRadioQueer">Queer</label>
              </div>
              <div class="form-check form-check-inline02">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-04" id="inlineRadioOutro01" value="Outro"required>
                <label class="form-check-label" for="inlineRadioOutro01">Outro</label>
              </div>
        </div>
        <input class="salvar" type="submit" name="submit" value="Salva" align="center">
        <a href="novo.csv">
          <button type="button" class="btn">Exportar para o Excel</button>
        </a>
        <?php 

        // Gera arquivo CSV
        $fp = fopen("novo.csv", "w"); 
        // o "a" indica que o arquivo será sobrescrito sempre que esta função for executada.
        $escreve = fwrite($fp, "\n$select0;$select1;$select2");
        fclose($fp);

        ?>
    </form>
    
  </div>
</section>
</div>
</body>
</html>
