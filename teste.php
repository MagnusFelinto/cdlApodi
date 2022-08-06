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
                 1  - Dados de Identificação dos Entrevistados
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
                <option value="1">Rua</option>
                <option value="2">Casa</option>
            </select>
        </div>

        <div class="input-02">
          <label class="input-02" 
                 for="inputSelect02">
                 2 - Segmento
          </label>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio1" value="opcao1">
              <label class="form-check-label-02" for="inlineRadio1">Lojista</label>
            </div>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio2" value="opcao2">
              <label class="form-check-label-02" for="inlineRadio2">Universitário</label>
            </div>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio3" value="opcao3">
              <label class="form-check-label-02" for="inlineRadio3">Estudante de Ensino Médio</label>
            </div>
            <div class="form-check form-check-inline-02">
              <input class="form-check-input-02" type="radio" name="inlineRadioOptions-02" id="inlineRadio4" value="opcao4">
              <label class="form-check-label-02" for="inlineRadio4">Comunidade em Geral</label>
            </div>
          </div>
        

       
        <input class="salvar" type="submit" name="submit" value="Salva" align="center">
        
    </form>
    
  </div>
</section>
</div>
</body>
</html>
