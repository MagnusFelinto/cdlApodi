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
  <?php if(!session_id()) session_start();    ?>
    <script type="text/javascript">
      var valor = '';
      function chkcontrol(j, v) {
            var total=0;
            valor = valor+' | '+v;
            for(var i=0; i < document.form1.ckb.length; i++){
              if(document.form1.ckb[i].checked){
                //valor= valor +' | '+ v;
                //document.form1.ckb.value = valor;
                total =total +1;
                //valor = valor + v;
                document.form1.ckb[i].value = valor;
                
              }
              if(total > 3){

                  alert("Selecione apenas três") 
                  document.form1.ckb[j].checked = false ;
                  document.form1.ckb.value = valor;
                  return false;
              }
            } 
            document.form1.ckb.value = valor;

        } 
    </script>
  <!--------- CAMPO DE TESTE -------------->
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
    .espaco-20px{
      margin-top: 20px;
    }
    .espaco-50px{
    
      height: 10em;
      display: flex;
      align-items: center;
      justify-content: left ;
      margin-left: 5%;
    }
    .form1 .salvar{
      /*margin-left: 48%;*/
      font-size:16pt;
      font-weight: 500;
      position: absolute;
      /*bottom:-40px;*/
      /*right:40%;*/
      margin-left: 11.5%;
      background-image: linear-gradient(to bottom, #8F8F8F , #2c325c,#000);
      text-align:center;
      border-radius: 80px;
      border-color:#fff;
      border:10px;
      color: white;
      padding: 7px 16px;
      width: 120px;
      height: 50px;
     /* bottom:5px ;*/
      text-shadow: 
     -1px -1px 0px #000, 
     -1px 1px 0px  #000,      
      1px -1px 0px #000,    
      1px 0px 0px  #000;

    }
    .form1 .perguntas{
      text-decoration:none;
     /*margin-left: 48%;*/
     font-size:12pt;
      position: absolute;
      /*bottom:-40px;*/
      /*right:20%;*/
      margin-left: 0%;
      bottom: 0.2%;
      background-image: linear-gradient(to bottom, #8F8F8F , #2c325c,#000);
      text-align:center;
      border-radius: 80px;
      border-color:#fff;
      border:10px;
      color: white;
      padding: 7px 16px;
      width: 140px;
      height: 25px;
      text-shadow: 
     -1px -1px 0px #000, 
     -1px 1px 0px  #000,      
      1px -1px 0px #000,    
      1px 0px 0px  #000;
    }
    .form1 .tabelas{
      text-decoration:none;
      /*margin-left: 48%;*/
      font-size:12pt;
      position: absolute;
      /*bottom:-40px;*/
      /*right:60%;*/
      margin-left: 20%;
      bottom: 0.2%;
      background-image: linear-gradient(to bottom, #8F8F8F , #2c325c,#000);
      text-align:center;
      border-radius: 80px;
      border-color:#fff;
      border:10px;
      color: white;
      padding: 7px 16px;
      width: 140px;
      height: 25px;
      
      text-shadow: 
     -1px -1px 0px #000, 
     -1px 1px 0px  #000,      
      1px -1px 0px #000,    
      1px 0px 0px  #000;
    }
    .sincronizar{
      text-decoration:none;
      /*margin-left: 48%;*/
      font-size:12pt;
      position: absolute;
      /*bottom:-40px;*/
      /*right:60%;*/
      margin-left: 11%;
      bottom: -0.01%;
      background-image: linear-gradient(to bottom, #8F8F8F , #2c325c,#000);
      text-align:center;
      border-radius: 80px;
      border-color:#fff;
      border:10px;
      color: white;
      padding: 7px 16px;
      width: 100px;
      height: 25px;
      
      text-shadow: 
     -1px -1px 0px #000, 
     -1px 1px 0px  #000,      
      1px -1px 0px #000,    
      1px 0px 0px  #000;
    }
  </style>
    
  </head>

  <body >


  <?php

  ?>
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
            background-image: url('assets\estrela.png');    /*http://www.biblecast.net.br/resources/estrela.png*/
            width: 32px;
            height: 32px;
            cursor: pointer;
          }
          .container1{
            height: 5em;
            display: flex;
            align-items: left;
            justify-content: center;
           /* background-image: url('assets\paperboard-carton-surface-beige-plain.jpg');*/
            
      
          }
          body{
            background-image: linear-gradient(120deg,  #c0c0c0,#dedec6,white);
          }

    select{
        font-weight: 400;
        font-size:12pt;
        height:30px;

        border-radius:10px;
    }
    .saida{
      position: absolute;
      right: 2%;
    }
    </style>
    
    <section class="sec" >
    <div class="container1" >
    
      <h1 >TITULO DO FORMULARIO</h1>
      <h3 class="saida" align="right"> <?php
            if(!empty($_SESSION['dados'])){

                echo 'Ola '.$_SESSION['dados']['user']; 
              
            
            } ?>
      </h3>
    <!------------------------------------------------------------>\
    <div class="ld-user-menu">
						<span class="ld-text ld-user-welcome-text">
            <?php
            if(!empty($_SESSION['dados'])){

                echo 'Ola '.$_SESSION['dados']['user']; 
              
            
            } ?>			</span>

			<span class="ld-profile-avatar">
				<img alt="" src="assets/cdlapodi.png" srcset="assets/cdlapodi.png 2x" class="avatar avatar-96 photo" height="96" width="96" loading="lazy">			</span> <!--/.ld-profile-avatar-->

			
			<span class="ld-user-menu-items">
										<a href="https://curso.guilhermegulias.com/courses/1-temporada/">Lobby</a>
												<a href="https://curso.guilhermegulias.com/logout/?redirect_to=https%3A%2F%2Fcurso.guilhermegulias.com%2Fcourses%2F1-temporada%2F&amp;_wpnonce=92cf4e20c0">Sair</a>
									</span> <!--/.ld-user-menu-items-->

			
		</div>









      <!----------------------------------------------------------->
    </div> 
    <div class="container" >

      <form class="form1 autocomplete" method="POST" action="CadastraForm.php" name=form1 autocomplete="off" >
        <div class="input-01">
          <label class="input-01 centro" 
              for="inputSelect01">
              <h3>1  - Dados de Identificação dos Entrevistados</h3>
          </label>
          <input class="campoSelecao" type="radio" name="area" value="Area Urbana" onclick="div(false)" required />
          <label>Area Urbana</label>
          <input class="campoSelecao" type="radio" name="area" value="Area Rural"  onclick="div(true)"  required/>
          <label>Area Rural</label>  
    </br>
    </br> 
        <div class="autocomplete" id="visibilidade0" style="display:none;" autocomplete="on">
        <td autocomplete="on">  
          <input class="area2" id="bairro"      name="area1" style="width:200px ; " placeholder="Digite nome do bairro">
          <script> autocomplete(document.getElementById("bairro"), bairros);</script>
        </td>
        
        </div>
        <div class="autocomplete" id="visibilidade1" style="display:none;" autocomplete="on">
        <td>
          <input class="area2" id="comunidades" name="area2" style="width:200px ; " placeholder="Digite nome da comunidades">
          <script> autocomplete(document.getElementById("comunidades"), comunidades);</script>
        </td>
  <script>
    function div(valor) {
        if (valor) {
            document.getElementById("visibilidade1").style.display = "block";
            document.getElementById("visibilidade0").style.display = "none";
            autocomplete(document.getElementById("comunidades"), comunidades);
        } 
        else {
            document.getElementById("visibilidade1").style.display = "none";
            document.getElementById("visibilidade0").style.display = "block";
            autocomplete(document.getElementById("bairro"),      bairros);
    
        }
    }

    function div2(valor) {
        if (valor) {
          document.getElementById("inlineRadioSim-input-19").style.display = "block";
        } 
        else {
          document.getElementById("inlineRadioSim-input-19").style.display = "none";
        }
  }
          function div3(valor) {
              if (valor) {
                document.getElementById("inlineRadioOptions-20-outro").style.display = "block";
              } 
              else {
                document.getElementById("inlineRadioOptions-20-outro").style.display = "none";
              }
          }
        </script>
          </div>
        
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
              <h3> 3 – Gênero</h3>
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


      <div class="input-05">
        <label class="input-05" 
               for="inputSelect05">
               <h3>5 Orientação sexual</h3>
               <!--() Heterossexual () Homossexual () Bissexual () Assexual ( ) Pansexual ( ) Outro-->
        </label>
        <div class="form-check form-check-inline03">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-05" id="inlineRadioHeterossexual" value="Heterossexual"required>
          <label class="form-check-label" for="inlineRadioHeterossexual">Heterossexual</label>
        </div>
        <div class="form-check form-check-inline03">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-05" id="inlineRadioHomossexual" value="Homossexual"required>
          <label class="form-check-label" for="inlineRadioHomossexual">Homossexual</label>
        </div>
        <div class="form-check form-check-inline03">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-05" id="inlineRadiAssexual" value="Assexual"required>
          <label class="form-check-label" for="inlineRadioAssexual">Assexual</label>
        </div>
        <div class="form-check form-check-inline03">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-05" id="inlineRadioPansexual" value="Pansexual"required>
          <label class="form-check-label" for="inlineRadioPansexual">Pansexual</label>
        </div>
        <div class="form-check form-check-inline03">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-05" id="inlineRadioOutro02" value="Outro"required>
          <label class="form-check-label" for="inlineRadioOutro02">Outro</label>
        </div>
          
      </div>


      <div class="input-06">
        <label class="input-06" 
               for="inputSelect06">
               <h3>6 – Faixa etária</h3>
               <!---() 15 a 25 anos () 26 a 36 anos () 37 a 47 anos () 48 a 58 anos ( ) 59 a 69 anos ( ) acima de 69 anos.-->
        </label>
        <div class="form-check form-check-inline04">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-06" id="inlineRadioFaixa0" value="15 a 25 anos"required>
          <label class="form-check-label" for="inlineRadioFaixa0">15 a 25 anos</label>
        </div>
        <div class="form-check form-check-inline04">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-06" id="inlineRadioFaixa1" value="26 a 36 anos"required>
          <label class="form-check-label" for="inlineRadioFaixa1">26 a 36 anos</label>
        </div>
        <div class="form-check form-check-inline04">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-06" id="inlineRadiFaixa3" value="37 a 47 anos"required>
          <label class="form-check-label" for="inlineRadioFaixa3">37 a 47 anos</label>
        </div>
        <div class="form-check form-check-inline04">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-06" id="inlineRadioFaixa4" value="48 a 58 anos"required>
          <label class="form-check-label" for="inlineRadioFaixa4">48 a 58 anos</label>
        </div>
        <div class="form-check form-check-inline04">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-06" id="inlineRadioFaixa5" value="59 a 69 anos"required>
          <label class="form-check-label" for="inlineRadioFaixa5">59 a 69 anos</label>
        </div>
        <div class="form-check form-check-inline04">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-06" id="inlineRadioFaixa6" value="acima de 69 anos"required>
          <label class="form-check-label" for="inlineRadioFaixa6">acima de 69 anos</label>
        </div>
          
      </div>
      <div class="input-07">
        <label class="input-07" 
               for="inputSelect07">
               <h3>7 - Escolaridade</h3>
               <!--( ) Analfabeto 
                   ( ) Ensino Fundamental Incompleto 
                   ( ) Ensino fundamental Completo 
                   ( ) Ensino Médio Incompleto 
                   ( ) Ensino Médio Completo () Ensino Superior Incompleto () Ensino Superior Completo () Pós-graduação-->
        </label>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioAnalfabeto" value="Analfabeto"required>
          <label class="form-check-label" for="inlineRadioAnalfabeto">Analfabeto</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioFundamental-I" value="Ensino Fundamental Incompleto"required>
          <label class="form-check-label" for="inlineRadioFundamental-I">Ensino Fundamental Incompleto</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadifundamental-C" value="Ensino fundamental Completo"required>
          <label class="form-check-label" for="inlineRadiofundamental-C">Ensino fundamental Completo</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioMédio-I" value="Ensino Médio Incompleto"required>
          <label class="form-check-label" for="inlineRadioMédio-I">Ensino Médio Incompleto</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioMédio-C" value="Ensino Médio Completo"required>
          <label class="form-check-label" for="inlineRadioMédio-C">Ensino Médio Completo</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioSuperior-I" value="Ensino Superior Incompleto"required>
          <label class="form-check-label" for="inlineRadioSuperior-I">Ensino Superior Incompleto</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioSuperior-C" value="Ensino Superior Completo"required>
          <label class="form-check-label" for="inlineRadioSuperior-C">Ensino Superior Completo</label>
        </div>
        <div class="form-check form-check-inline05">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-07" id="inlineRadioPós-graduação" value="Pós-graduação"required>
          <label class="form-check-label" for="inlineRadioPós-graduação">Pós-graduação</label>
        </div>
       
      </div>


      <div class="input-08">
        <label class="input-08" 
               for="inputSelect08">
               <h3>8 - Faixa de renda</h3>
               <!--() Até 1 salário-mínimo () Acima de 1salário mínimo até 3 salários 
                   () Acima de 3 salários-mínimos até 5 salários () Acima de 5 salários-mínimos até 7 salários.
                   () Acima de 7 salários-mínimos até 9 salários. () Acima de 9 salários-mínimos. 
                   () Prefiro não declarar-->
        </label>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadio1salários" value="Até 1 salário-mínimo"required>
          <label class="form-check-label" for="inline1salários">Até 1 salário-mínimo</label>
        </div>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadioA-1salários" value="Acima de 1 salário mínimo até 3 salários"required>
          <label class="form-check-label" for="inlineRadioA-1salários">Acima de 1 salário mínimo até 3 salários </label>
        </div>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadioA-3salários" value="Acima de 3 salários-mínimos até 5 salários"required>
          <label class="form-check-label" for="inlineRadioA-3salários">Acima de 3 salários-mínimos até 5 salários</label>
        </div>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadioA-5salários" value="Acima de 5 salários-mínimos até 7 salários"required>
          <label class="form-check-label" for="inlineRadioA-5salários">Acima de 5 salários-mínimos até 7 salários</label>
        </div>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadioA-7salários" value="Acima de 7 salários-mínimos até 9 salários"required>
          <label class="form-check-label" for="inlineRadioA-7salários">Acima de 7 salários-mínimos até 9 salários</label>
        </div>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadioA-9salários" value="Acima de 9 salários-mínimos"required>
          <label class="form-check-label" for="inlineRadioA-9salários">Acima de 9 salários-mínimos</label>
        </div>
        <div class="form-check form-check-inline06">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-08" id="inlineRadioNdeclarar" value="Prefiro não declara"required>
          <label class="form-check-label" for="inlineRadioNdeclarar">Prefiro não declarar</label>
        </div>
      </div>
      <div class="input-09">
        <label class="input-09" 
               for="inputSelect09">
               <h3>9- Você possui algum animal de criação/estimação?</h3>
               <!--() Criação () Estimação () Não-->
        </label>
        <div class="form-check form-check-inline07">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-09" id="inlineRadioCriação" value="Criação"required>
          <label class="form-check-label" for="inlineRadioCriação">Criação</label>
        </div>
        <div class="form-check form-check-inline07">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-09" id="inlineRadioEstimação" value="Estimação"required>
          <label class="form-check-label" for="inlineRadioEstimação">Estimação</label>
        </div>
        <div class="form-check form-check-inline07">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-09" id="inlineRadioNão0" value="Não"required>
          <label class="form-check-label" for="inlineRadioNão0">Não</label>
        </div>
      </div>
      <div class="input-10">
        <label class="input-10" 
               for="inputSelect10">
               <h3>10- Em sua residência alguma pessoa utiliza serviço de saúde como, plano de saúde, academia, farmácia, entre outros.</h3>
                <!--() Sim () Não-->
              </label>
        <div class="form-check form-check-inline08">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-10" id="inlineRadioSim1" value="Sim"required>
          <label class="form-check-label" for="inlineRadioSim1">Sim</label>
        </div>
        <div class="form-check form-check-inline08">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-10" id="inlineRadioNão1" value="Não"required>
          <label class="form-check-label" for="inlineRadioNão1">Não</label>
        </div>
      </div>


      <div class="input-11">
        <label class="input-11" 
               for="inputSelect11">
               <h3>11- Na sua residência há algum veículo?</h3>
               <!--() Moto () Carro () Maquinário () Não-->
        </label>
        <div class="form-check form-check-inline09">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-11" id="inlineRadioMoto" value="Moto"required>
          <label class="form-check-label" for="inlineRadioMoto">Moto</label>
        </div>
        <div class="form-check form-check-inline09">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-11" id="inlineRadioCarro" value="Carro"required>
          <label class="form-check-label" for="inlineRadioCarro">Carro</label>
        </div>
        <div class="form-check form-check-inline09">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-11" id="inlineRadioMaquinário" value="Maquinário"required>
          <label class="form-check-label" for="inlineRadioMaquinário">Maquinário</label>
        </div>
        <div class="form-check form-check-inline09">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-11" id="inlineRadioNão2" value="Não"required>
          <label class="form-check-label" for="inlineNão2">Não</label>
        </div>


      </div>

      <div class="input-12">
        <label class="input-12" 
               for="inputSelect12">
               <h3>12 - Você costuma comprar pela internet?</h3>
        </label>

        <div class="form-check form-check-inline10">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-12" id="inlineRadioSim2" value="Sim"required>
          <label class="form-check-label" for="inlineRadioSim2">Sim</label>
        </div>
        <div class="form-check form-check-inline10">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-12" id="inlineRadioNão3" value="Não"required>
          <label class="form-check-label" for="inlineRadioNão3">Não</label>
        </div>
      </div>
  
      <div class="input-13">
        <label class="input-13" 
               for="inputSelect13">
               <h3>13- Com qual frequência costuma fazer essa compra por internet?</h3>
        </label>
        <!--Semanal () Quinzenal () Mensal () Semestral () Anual () Não utiliza ()-->
        <div class="form-check form-check-inline11">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-13" id="inlineRadioSemanal" value="Semanal"required>
          <label class="form-check-label" for="inlineRadioSemanal">Semanal</label>
        </div>
        <div class="form-check form-check-inline11">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-13" id="inlineRadioQuinzenal" value="Quinzenal"required>
          <label class="form-check-label" for="inlineRadioQuinzenal">Quinzenal</label>
        </div>
        <div class="form-check form-check-inline11">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-13" id="inlineRadioMensal" value="Mensal"required>
          <label class="form-check-label" for="inlineRadioMensal">Mensal</label>
        </div>
        <div class="form-check form-check-inline11">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-13" id="inlineRadioSemestral" value="Semestral"required>
          <label class="form-check-label" for="inlineRadioSemestral">Semestral</label>
        </div>
        <div class="form-check form-check-inline11">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-13" id="inlineRadioAnual" value="Anual"required>
          <label class="form-check-label" for="inlineRadioAnual">Anual</label>
        </div>
        <div class="form-check form-check-inline11">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-13" id="inlineRadioNutiliza" value="Não utiliza"required>
          <label class="form-check-label" for="inlineRadioNutiliza">Não utiliza</label>
        </div>

      <div class="input-14">
        <label class="input-14" 
               for="inputSelect14">
               <h3>14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente?</h3>
        </label>
       
        <select class="categorias00" id="categorias-00" name="inputSelect14-00" required="required">
          <option selected>1°Seleção </option>
          <option value="Não utiliza">Não utiliza</option>
          <option value="Alimentos e Bebidas">Alimentos e Bebidas</option>
          <option value="Bebê & Cia">Bebê & Cia</option>
          <option value="Construção e Ferramentas">Construção e Ferramentas</option>
          <option value="Informática">Informática</option>
          <option value="Saúde">Saúde</option>
          <option value="Casa e Decoração">Casa e Decoração</option>
          <option value="Esporte e Lazer">Esporte e Lazer</option>
          <option value="Eletrodomésticos">Eletrodomésticos</option>
          <option value="Perfumaria e Cosméticos">Perfumaria e Cosméticos</option>
          <option value="Telefonia">Telefonia</option>
          <option value="Outros">Outros</option>
      </select>
      <select class="categorias01" id="categorias-01" name="inputSelect14-01" required="required">
        <option selected>2°Seleção </option>
        <option value="Não utiliza">Não utiliza</option>
        <option value="Alimentos e Bebidas">Alimentos e Bebidas</option>
        <option value="Bebê & Cia">Bebê & Cia</option>
        <option value="Construção e Ferramentas">Construção e Ferramentas</option>
        <option value="Informática">Informática</option>
        <option value="Saúde">Saúde</option>
        <option value="Casa e Decoração">Casa e Decoração</option>
        <option value="Esporte e Lazer">Esporte e Lazer</option>
        <option value="Eletrodomésticos">Eletrodomésticos</option>
        <option value="Perfumaria e Cosméticos">Perfumaria e Cosméticos</option>
        <option value="Telefonia">Telefonia</option>
        <option value="Outros">Outros</option>
      </select>
      <select class="categorias02" id="categorias-02" name="inputSelect14-02" required="required">
        <option selected>3°Seleção </option>
        <option value="Não utiliza">Não utiliza</option>
        <option value="Alimentos e Bebidas">Alimentos e Bebidas</option>
        <option value="Bebê & Cia">Bebê & Cia</option>
        <option value="Construção e Ferramentas">Construção e Ferramentas</option>
        <option value="Informática">Informática</option>
        <option value="Saúde">Saúde</option>
        <option value="Casa e Decoração">Casa e Decoração</option>
        <option value="Esporte e Lazer">Esporte e Lazer</option>
        <option value="Eletrodomésticos">Eletrodomésticos</option>
        <option value="Perfumaria e Cosméticos">Perfumaria e Cosméticos</option>
        <option value="Telefonia">Telefonia</option>
        <option value="Outros">Outros</option>
      </select>
          
        
      </div>
      <div class="input-15">
        <label class="input-15" 
               for="inputSelect15">
               <h3>15 - Você já teve um negócio próprio antes?</h3>
        </label>
        <div class="form-check form-check-inline15">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-15" id="inlineRadioSim15" value="Sim"required>
          <label class="form-check-label" for="inlineRadioSim15">Sim</label>
        </div>
        <div class="form-check form-check-inline15">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-15" id="inlineRadioNão15" value="Não"required>
          <label class="form-check-label" for="inlineRadioNão15">Não</label>
        </div>
      </div>


      <div class="input-16">
        <label class="input-16" 
               for="inputSelect16">
               <h3>16 – Qual a sua ocupação de trabalho?</h3>
        </label>
        <!--
          () Servidor Publico
          () Autônomo
          () Empregado de uma empresa privada
          () Auxilio governamental/ bolsista
          () Estudante
          () Inativo/ desempregado
        -->
   
        <div class="form-check form-check-inline16">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-16" id="inlineRadioServidorPublico" value="Servidor Publico"required>
          <label class="form-check-label" for="inlineRadioServidorPublico">Servidor Publico</label>
        </div>
        <div class="form-check form-check-inline16">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-16" id="inlineRadioAutônomo" value="Autônomo"required>
          <label class="form-check-label" for="inlineRadioAutônomo">Autônomo</label>
        </div>
        <div class="form-check form-check-inline16">
            <input class="form-check-input" type="radio" name="inlineRadioOptions-16" id="inlineRadioEmpregado"   value="Empregado de uma empresa privada"required>
          <label class="form-check-label" for="inlineRadioEmpregado">Empregado de uma empresa privada</label>
        </div>
        <div class="form-check form-check-inline16">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-16" id="inlineRadioAuxilio" value="Auxilio governamental/ bolsista"required>
          <label class="form-check-label" for="inlineRadioAuxilio">Auxilio governamental/ bolsista</label>
        </div>
        <div class="form-check form-check-inline16">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-16" id="inlineRadioEstudante" value="Estudante"required>
          <label class="form-check-label" for="inlineRadioEstudante">Estudante</label>
        </div>
        <div class="form-check form-check-inline16">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-16" id="inlineRadiodesempregado" value="Inativo/ desempregado"required>
          <label class="form-check-label" for="inlineRadiodesempregado">Inativo/ desempregado</label>
        </div>

      </div>


      <div class="input-17">
        <label class="input-17" 
               for="inputSelect17">
              <h3> 17 – Qual método de pagamento que você mais utiliza </h3>
        </label>
        <!---
             A vista em dinheiro() 
             Cartão de crédito () 
             Cartão de débito ()
             PIX   () 
             Fiado ()
             Outro ()
            -->
        <div class="form-check form-check-inline17">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-17" id="inlineRadiovista" value="A vista em dinheiro" required>
          <label class="form-check-label" for="inlineRadiovista">A vista em dinheiro</label>
        </div>
        <div class="form-check form-check-inline17">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-17" id="inlineRadiocrédito" value="Cartão de crédito" required>
          <label class="form-check-label" for="inlineRadiocrédito">Cartão de crédito</label>
        </div>
        <div class="form-check form-check-inline17">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-17" id="inlineRadioPIX"   value="PIX" required>
          <label class="form-check-label" for="inlineRadioPIX">PIX</label>
        </div>
        <div class="form-check form-check-inline17">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-17" id="inlineRadioFiado" value="Fiado" required>
          <label class="form-check-label" for="inlineRadioFiado">Fiado</label>
        </div>
        <div class="form-check form-check-inline17">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-17" id="inlineRadioOutro17" value="Outro" required>
          <label class="form-check-label" for="inlineRadioOutro17">Outro</label>
        </div>

      </div>


      <div class="input-18">
        <label class="input-18" 
               for="inputSelect18">
              <h3> 18 – Você viaja para fora da cidade de Apodi, se sim com que frequência:</h3>
        </label>
            <!--
                () Sim, diariamente
                () Sim, pelo menos uma vez por semana
                () Sim, pelo menos uma vez por mês
                () Sim, de 6 em 6 meses
                () Sim, 1 vez por ano
                () Não viajo há muito tempo
              -->
              <div class="form-check form-check-inline18">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-18" id="inlineRadiodiariamente" value="Sim diariamente" required>
                <label class="form-check-label" for="inlineRadiodiariamente">Sim, diariamente</label>
              </div>
              <div class="form-check form-check-inline18">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-18" id="inlineRadioporsemana" value="Sim pelo menos uma vez por semana"required>
                <label class="form-check-label" for="inlineRadioporsemana">Sim, pelo menos uma vez por semana</label>
              </div>
              <div class="form-check form-check-inline18">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-18" id="inlineRadio1mes"   value="Sim pelo menos uma vez por mês"required>
                <label class="form-check-label" for="inlineRadio1mes">Sim, pelo menos uma vez por mês</label>
              </div>
              <div class="form-check form-check-inline18">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-18" id="inlineRadio6meses" value="Sim de 6 em 6 meses"required>
                <label class="form-check-label" for="inlineRadio6meses">Sim, de 6 em 6 meses</label>
              </div>
              <div class="form-check form-check-inline18">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-18" id="inlineRadioano" value="Sim 1 vez por ano"required>
                <label class="form-check-label" for="inlineRadioano">Sim, 1 vez por ano</label>
              </div>
              <div class="form-check form-check-inline18">
                <input class="form-check-input" type="radio" name="inlineRadioOptions-18" id="inlineRadioNaoviajo" value="Não viajo há muito tempo"required>
                <label class="form-check-label" for="inlineRadioNaoviajo">Não viajo há muito tempo</label>
              </div>
              

      </div>
      

      <div class="input-19">
        <label class="input-19" 
               for="inputSelect19">
               <h3>19 – SE a resposta anterior tiver sido SIM, pra qual cidade você costuma viajar com mais frequência, se NÃO coloque a resposta a baixo como “Não”!</h3>
        </label>
        <div class="form-check form-check-inline19">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-19" id="inlineRadioSim19" value="Sim"required onclick="div2(true)">
          <label class="form-check-label" for="inlineRadioSim19">Sim</label><input type="text" name="inlineRadioSim-input-19" id="inlineRadioSim-input-19" placeholder="Informe a cidade " style="display:none ;">
        </div>
        <div class="form-check form-check-inline19">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-19" id="inlineRadioNão19" value="Não"required onclick="div2(false)">
          <label class="form-check-label" for="inlineRadioNão19">Não</label>
        </div>
      </div>

      <div class="input-20">
        <label class="input-20" 
               for="inputSelect20">
               <h3>20 – Caso a questão 17 tenha sido positiva, qual o motivo dessa viagem?</h3>
         </label>
          <!---() Estudos
               () Lazer
               () Negócios
               () SÁUDE
               () Busca por serviços OU MERCADORIAS que não se encontram em Apodi
               () Outro motivo___________.-->
               
      
                <div class="form-check form-check-inline20">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions-20" id="inlineRadioEstudos" value="Estudos"required onclick="div3(false)">
                  <label class="form-check-label" for="inlineRadioEstudos">Estudos</label>
                </div>
                <div class="form-check form-check-inline20">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions-20" id="inlineRadioLazer" value="Lazer"required  onclick="div3(false)">
                  <label class="form-check-label" for="inlineRadioLazer">Lazer</label>
                </div>
                <div class="form-check form-check-inline20">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions-20" id="inlineRadioNegócios" value="Negócios"required  onclick="div3(false)">
                  <label class="form-check-label" for="inlineRadioNegócios">Negócios</label>
                </div>
                <div class="form-check form-check-inline20">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions-20" id="inlineRadioSáude" value="Sáude"required  onclick="div3(false)">
                  <label class="form-check-label" for="inlineRadioSáude">Sáude</label>
                </div>
                <div class="form-check form-check-inline20">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions-20" id="inlineRadioBusca" value="Busca"required  onclick="div3(false)">
                  <label class="form-check-label" for="inlineRadioBusca">Busca por serviços OU MERCADORIAS que não se encontram em Apodi</label>
                </div>
                <div class="form-check form-check-inline20">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions-20" id="inlineRadioOutro23" value="Outro"required onclick="div3(true)">
                  <label class="form-check-label" for="inlineRadioOutro20">Outro motivo</label>
                  <input type="text" name="inlineRadioOptions-20-outro" id="inlineRadioOptions-20-outro" placeholder="Digite o outro motivo " style="display: none;">
                </div>

              </div>
      </div>

      <div class="input-21">
        <label class="input-21" 
               for="inputSelect21">
               <h3>21 – Tipo de moradia:</h3>
        </label>
        <!--() Própria
            () Alugada
            () Vive com amigos/ familiares-->
        <div class="form-check form-check-inline21">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-21" id="inlineRadioPrópria"   value="Própria"required>
          <label class="form-check-label" for="inlineRadioPrópria">Própria</label>
        </div>
        <div class="form-check form-check-inline21">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-21" id="inlineRadioAlugada"    value="Alugada"required>
          <label class="form-check-label" for="inlineRadioAlugada">Alugada</label>
        </div>
        <div class="form-check form-check-inline21">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-21" id="inlineRadiofamiliares" value="Vive com amigos/ familiares"required>
          <label class="form-check-label" for="inlineRadiofamiliares">Vive com amigos/ familiares</label>
        </div>
      </div>
      <div class="input-22">
       <!-- () Mora sozinho
            () De 1 a 3 pessoas
            () De 4 a 6
            () Mais de 6 -->
        <label class="input-22" 
               for="inputSelect22">
               <h3>22 – Quantas pessoas moram na sua casa:</h3>
        </label> 
        <div class="form-check form-check-inline22">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-22" id="inlineRadiosozinho" value="Mora sozinho"required>
          <label class="form-check-label" for="inlineRadiosozinho">Mora sozinho</label>
        </div>
        <div class="form-check form-check-inline22">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-22" id="inlineRadioDe1a3" value="De 1 a 3 pessoas"required>
          <label class="form-check-label" for="inlineRadioDe1a3">De 1 a 3 pessoas</label>
        </div>
        <div class="form-check form-check-inline22">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-22" id="inlineRadioDe4a6" value="De 4 a 6 pessoas"required>
          <label class="form-check-label" for="inlineRadioDe4a6">De 4 a 6 pessoas</label>
        </div>
        <div class="form-check form-check-inline22">
          <input class="form-check-input" type="radio" name="inlineRadioOptions-22" id="inlineRadioMaisde6" value="Mais de 6 pessoas" required>
          <label class="form-check-label" for="inlineRadioMaisde6">Mais de 6 pessoas</label>
        </div>
      </div>
<!------------------------------------------------------------------------------------------------------------------>
<!--------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->

   <div class="input-23">
        <label class="input-23" for="inputSelect23">
              <h3> 23 – Identificação das empresas:</h3>
        </label>
        <style>
          table.indetificacao{
            border-radius: 20px ;
            border: 5px ;
           border-style: solid;/*outset/**/
           border-color: #c0c0c0;
           padding-left: 4px;
           padding-right: 4px;
           background-color: #e9e9e9;
          }
          table.indetificacao th  {
          border-width: 3px;
          padding-left: 8px;
          padding-right: 8px;
          border-style: outset/*solid*/;
          border-color: #f2f2f230;
          border-radius: 8px ;
          }
        </style>
<script >
/***************************************************************************************/
/* 
Google Drive API:
Demonstration to:
1. upload 
2. delete 
3. create public URL of a file.
required npm package: googleapis
*
const { google } = require('googleapis');
const path = require('path');
const fs = require('fs');

const CLIENT_ID = '86333617804-q8sm4mgkk6v19m8nglfr01lo173e0d2o.apps.googleusercontent.com';
const CLIENT_SECRET = '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';
const REDIRECT_URI = 'https://developers.google.com/oauthplayground';

const REFRESH_TOKEN = '1//04n2RDCYn_E6fCgYIARAAGAQSNwF-L9IrwztjzQvzvtSqIXQTHyqolK6ITEa_aDu6_ioYEqji24kHvprtzFNOaYmLzD3yToQkHTA';

const oauth2Client = new google.auth.OAuth2(
  CLIENT_ID,
  CLIENT_SECRET,
  REDIRECT_URI
);

oauth2Client.setCredentials({ refresh_token: REFRESH_TOKEN });

const drive = google.drive({
  version: 'v3',
  auth: oauth2Client,
});
/* 
caminho do arquivo que precisa ser carregado
Nota: Supõe-se que o arquivo example.jpg esteja no diretório raiz,
embora isso possa ser qualquer filePath
*
const filePath = path.join(__dirname, 'dados/perguntas.csv');//text/csv

async function uploadFile() {
  try {
    const response = await drive.files.create({
      requestBody: {
        name: 'perguntas.csv', //Este pode ser o nome de sua escolha //text/csv
        mimeType: 'text/csv',//text/csv
      },
      media: {
        mimeType: 'text/csv', //text/csv
        body: fs.createReadStream(filePath),
      },
    });

    console.log(response.data);
  } catch (error) {
    console.log(error.message);
  }
}


//uploadFile();
const filePath2 = path.join(__dirname, 'dados/tabela.csv');//text/csv

async function uploadFile2() {
  try {
    const response2 = await drive.files.create({
      requestBody: {
        name: 'tabela.csv', //Este pode ser o nome de sua escolha //text/csv
        mimeType: 'text/csv',//text/csv
      },
      media: {
        mimeType: 'text/csv', //text/csv
        body: fs.createReadStream(filePath2),
      },
    });

    console.log(response.data2);
  } catch (error) {
    console.log(error.message);
  }
}

/*function sincronizar(){
  uploadFile();
  uploadFile2();
}
*
//uploadFile2();

async function deleteFile() {
  try {
    const response = await drive.files.delete({
      fileId: 'YOUR FILE ID',
    });
    console.log(response.data, response.status);
  } catch (error) {
    console.log(error.message);
  }
}

// deleteFile();

async function generatePublicUrl() {
  try {
    const fileId = 'YOUR FILE ID';
    await drive.permissions.create({
      fileId: fileId,
      requestBody: {
        role: 'reader',
        type: 'anyone',
      },
    });

    /* 
    webViewLink: View the file in browser
    webContentLink: Direct download link 
    *
    const result = await drive.files.get({
      fileId: fileId,
      fields: 'webViewLink, webContentLink',
    });
    console.log(result.data);
  } catch (error) {
    console.log(error.message);
  }
}
/****************************************************************************************/
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
/*An array containing all the country names in the world:
*/
var countries   = ["Marca Digital","AGILE CONTABILIDADE" , "EXITU'S-RN CONTABILIDADE" ,"REYTEC – TECNOLOGIA SOLAR E ELETRONICOS" ,"Grupo Aponews " ,"T J Empreendimentos" ,"D.H  Sistemas" ,"Centro Ed. Pequeno Príncipe", "Vidraçaria Iguaçu","Panificadora Cristal", "Churrascaria do Bom", "Depósito de Bebidas São João", "Água Min. Cristalina do Oeste", "Posto Kurió", "Posto Gonzaga Melo", "Posto Cidade", "Drogaria Santa Terezinha", "Drogaria União", "Droga Vida", "Droga Center", "Hakuna Matata Pet Store", "Centro Veterinário Pollastry Diógenes", "Casa do Sertanejo", "SERTANEJO ATACAREJO", "Supermercado São João", "Supermercado Queiroz Apodi", "Supermercado Bom Preço", "Nova Esperança Supermercado", "Supermercado Monteiro", "Mercadinho Central", "Mercantil Frig. Albuquerque", "Center Carne", "Mario Moto Peças", "Center Peças", "Biz Motos", "TCM Telecom - Apodi", "AGILITY TELECOM", "Hipernet", "Connectvip", "O Boticário", "MAIS DISTRIBUIDORA", "Castelinho Perfumado", "DELIRIUS DISTRIBUIDORA  (O Boticário)", "Lojas Exclusiva Ortobom", "Rosa Eletromóveis Gov. Dix Sept- Rosado", "Rosa Eletromóveis Felipe Guerra", "Lojas Fonseca", "Belarus", "São Francisco Eletromóveis", "Rede Economize / Eletro Siarom ", "REDECON T.M. MAT. DE CONSTRUÇÃO", "Casas Potiguar", "Nossa Casa Material de Construção", "Construtintas", "Casa da Madeira", "CASA DOS FERROS APODI", "Construflor  (Arteflor)", "Otica Visão Total", "Ótica Gomes", "Ótica Atrante", "Luciano Ótica", "Centro Ótico", "Navegocopy", "Magazine Almeida","Livraria Alves e Duarte", "Infodigital", "A Sugestão","Vanessa Modas", "TZ  Store", "Sport Center","Playboy Sport", "Saint Prime - Apodi", "Rafael Presentes & Confecções", "Prisma Fashion","Kéllyta Moda Íntima","Loja Gessica" ,"Center Magazine" ,"Alta Estação" ,"Almeida Modas" ]
var bairros     = ['Centro' , 'Baixa do CAIC' , 'Bacurau I' , 'Bacurau II' , 'Betel' , 'Bicentenário' , 'Bico Torto' , 'Cruz de Almas' , 'Cohab' , 'Garilândia' , 'Independência' , 'IPE' , 'Lagoa Seca' , 'Malvinas' , 'Pequé' , 'Portal da Chapada' , 'Pody dos Encantos' , 'São João' , 'São José' , 'São Sebastião' , 'São Vicente' , 'Timbaúba do Campo' , 'Teimosos'];
var comunidades = ['Melancias' , 'Soledade', 'Gois', 'Santa Rosa', 'Sitio Corrego'];


/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/


function gerar(){
                let lista  = document.getElementById('casa');
               
                /*for(var i = 0; i < Segmentos.length; i++){
                    let item  = document.createElement('div');
                    var texto = "autocomplete";
                    item.setAttribute("class", texto );
                    item.setAttribute("id", texto+i.toString());
                    lista.appendChild(item);
                    let lista1  = document.getElementById(texto);
                    
                } */

                for(var i = 0; i < Segmentos.length; i++){
                  let lista  = document.getElementById('autocomplete'+i.toString());
                    let item  = document.createElement('input');
                    var texto = "myInput"+i.toString();
                    item.setAttribute("class", texto );
                    item.setAttribute("id",    texto);
                    item.setAttribute("name",    texto);
                    item.setAttribute("style", 'width:200px');
                    item.setAttribute("placeholder", "Digite aqui o texto");
                    lista.appendChild(item);
                    let lista1  = document.getElementById(texto);
                    
                }
            }  
            gerar()  ;
</script>
<table class="indetificacao" id="userTbl" autocomplete="on"><tbody id="lista" class="lista">
  <tr bgcolor="#00a056"> 
  <th>
  <h4 style="color:white; text-shadow: 5px 5px 5px black;"> Segmento</h4>
</th>
  <th>
  <h4 style="color:white; text-shadow: 5px 5px 5px black;"> Nome da empresa          </h4>
</th>
  <th>
    <h4 style="color:white; text-shadow: 5px 5px 5px black;"> Acessibilidade           </h4>
  </th>
    <th>
      <h4 style="color:white; text-shadow: 5px 5px 5px black;"> Atendimento              </h4>
    </th>
    <th>
      <h4 style="color:white; text-shadow: 5px 5px 5px black;"> Forma de pagamento       </h4>
    </th> 
    <th>
      <h4 style="color:white; text-shadow: 5px 5px 5px black;"> Preço                    </h4>
    </th>
  </tr>
    <tr class="d0" id="d0">
      <td><h3 class="coluna-0-0" id="coluna-0-0">
       Academia

    </h3>
    </td>
      <td class="coluna-0-1" id="coluna-0-1">
      <div class="autocomplete" style="width:300px;" id="autocomplete0" >
      <input class="myInput0" id="myInput0" name="myInput0" style="width:200px" placeholder="Digite aqui o texto">
    </div>
    </td>
      <td class="coluna-0-2" id="coluna-0-2">
       <span class="star-rating">
       <input type="radio" name="rating-0-2" value="1">
      <i>

    </i> 
      <input type="radio" name="rating-0-2" value="2">
      <i>

    </i> 
      <input type="radio" name="rating-0-2" value="3">
      <i>

    </i>
      <input type="radio" name="rating-0-2" value="4">
      <i>

      </i>
      <input type="radio" name="rating-0-2" value="5">
      <i>

      </i>
    </span>
    </td>
      <td class="coluna-0-3" id="coluna-0-3"> 
        <span class="star-rating">
         <input type="radio" name="rating-0-3" value="1">
        <i>

      </i>
         <input type="radio" name="rating-0-3" value="2">
        <i>

      </i> 
        <input type="radio" name="rating-0-3" value="3">
        <i>

      </i>
        <input type="radio" name="rating-0-3" value="4">
        <i>

      </i>
        <input type="radio" name="rating-0-3" value="5">
        <i>
      </i>
      </span>
      </td>
      <td class="coluna-0-4" id="coluna-0-4"> 
        <span class="star-rating">
         <input type="radio" name="rating-0-4" value="1">
        <i>

      </i>
        <input type="radio" name="rating-0-4" value="2">
        <i>

        </i>
         <input type="radio" name="rating-0-4" value="3">
        <i>

        </i>
        <input type="radio" name="rating-0-4" value="4">
        <i>

        </i>
        <input type="radio" name="rating-0-4" value="5">
        <i>

        </i>
      </span>
      </td>
        <td class="coluna-0-5" id="coluna-0-5"> 
          <span class="star-rating"> 
            <input type="radio" name="rating-0-5" value="1">
            <i>

            </i>
             
            <input type="radio" name="rating-0-5" value="2">
            <i>

            </i>
             <input type="radio" name="rating-0-5" value="3">
             <i>

             </i>
             <input type="radio" name="rating-0-5" value="4">
             <i>

             </i>
             <input type="radio" name="rating-0-5" value="5">
             <i>

             </i>
            </span>
            </td>
            </tr>
             <tr class="d1" id="d1">
              <td>
              <h3 class="coluna-1-0" id="coluna-1-0">
               Agencia de turismo</h3>
            </td>
              <td class="coluna-1-1" id="coluna-1-1">
              <div class="autocomplete" style="width:300px;" id="autocomplete1" >
              <input class="myInput1"name="myInput1" id="myInput1" style="width:200px" placeholder="Digite aqui o texto">
            </div></td><td class="coluna-1-2" id="coluna-1-2"> 
              <span class="star-rating">
               <input type="radio" name="rating-1-2" value="1">
               <i>

               </i>
                <input type="radio" name="rating-1-2" value="2">
              <i>

             </i>
               <input type="radio" name="rating-1-2" value="3">
               <i>

               </i>
               <input type="radio" name="rating-1-2" value="4">
               <i>

               </i>
               <input type="radio" name="rating-1-2" value="5">
               <i>

               </i>
              </span>
              </td>
               <td class="coluna-1-3" id="coluna-1-3"> <span class="star-rating"> 
                <input type="radio" name="rating-1-3" value="1">
                <i>

               </i>
                 <input type="radio" name="rating-1-3" value="2">
                <i>

               </i>
                 <input type="radio" name="rating-1-3" value="3">
                <i>

               </i>
                <input type="radio" name="rating-1-3" value="4">
                <i></i>
                <input type="radio" name="rating-1-3" value="5">
                <i>

               </i>
              </span>
              </td>
               <td class="coluna-1-4" id="coluna-1-4">
                 <span class="star-rating">
                 <input type="radio" name="rating-1-4" value="1">
                <i>

               </i>
                 <input type="radio" name="rating-1-4" value="2">
                 <i>

                 </i>
                  <input type="radio" name="rating-1-4" value="3">
                  <i>

                  </i>
                  <input type="radio" name="rating-1-4" value="4">
                <i>

               </i>
                <input type="radio" name="rating-1-4" value="5">
                <i>

                </i>
              </span>
              </td><td class="coluna-1-5" id="coluna-1-5"> <span class="star-rating"> <input type="radio" name="rating-1-5" value="1">
                <i>

               </i>
                 <input type="radio" name="rating-1-5" value="2">
                 <i>

                 </i> 
                 <input type="radio" name="rating-1-5" value="3"><i></i><input type="radio" name="rating-1-5" value="4">
                <i>

               </i>
                <input type="radio" name="rating-1-5" value="5">
                <i>

                </i>
              </span>
              </td>
              </tr>
                <tr class="d2" id="d2">
                <td>
                <h3 class="coluna-2-0" id="coluna-2-0"> Agência/serviço bancário

               </h3>
              </td>
                <td class="coluna-2-1" id="coluna-2-1"><div class="autocomplete" style="width:300px;" id="autocomplete2" <="" div="">
                  <input class="myInput2" name="myInput2" id="myInput2" style="width:200px" placeholder="Digite aqui o texto">
                </div>
                </td>
                <td class="coluna-2-2" id="coluna-2-2"> 
                <span class="star-rating">
                 <input type="radio" name="rating-2-2" value="1">
                <i>

               </i> 
                <input type="radio" name="rating-2-2" value="2">
                <i>

                </i> 
                <input type="radio" name="rating-2-2" value="3">
                <i>

                </i>
                <input type="radio" name="rating-2-2" value="4"><i></i><input type="radio" name="rating-2-2" value="5">
                <i>

                </i>
              </span>
              </td>
                <td class="coluna-2-3" id="coluna-2-3"> <span class="star-rating"> <input type="radio" name="rating-2-3" value="1">
                  <i>

                </i>
                   <input type="radio" name="rating-2-3" value="2">
                  <i>

                </i> 
                  <input type="radio" name="rating-2-3" value="3">
                  <i>

                </i>
                  <input type="radio" name="rating-2-3" value="4"><i></i><input type="radio" name="rating-2-3" value="5">
                  <i>

                  </i>
                </span>
                </td>
                  <td class="coluna-2-4" id="coluna-2-4"> <span class="star-rating"> <input type="radio" name="rating-2-4" value="1">
                    <i>

                  </i>
                     <input type="radio" name="rating-2-4" value="2">
                     <i>

                     </i>
                      <input type="radio" name="rating-2-4" value="3">
                     <i>

                     </i>
                     <input type="radio" name="rating-2-4" value="4">
                     <i>

                     </i>
                     <input type="radio" name="rating-2-4" value="5">
                     <i>

                     </i>
                    </span>
                    </td>
                     <td class="coluna-2-5" id="coluna-2-5"> 
                      <span class="star-rating">
                       <input type="radio" name="rating-2-5" value="1">
                      <i>

                     </i>
                       <input type="radio" name="rating-2-5" value="2">
                       <i>

                       </i>
                        <input type="radio" name="rating-2-5" value="3">
                       <i>

                       </i>
                       <input type="radio" name="rating-2-5" value="4"><i></i><input type="radio" name="rating-2-5" value="5">
                       <i>

                       </i>
                      </span>
                      </td>
                      </tr>
                       <tr class="d3" id="d3"><td><h3 class="coluna-3-0" id="coluna-3-0"> Artigos para festa </h3>
                      </td>
                        <td class="coluna-3-1" id="coluna-3-1">
                        <div class="autocomplete" style="width:300px;" id="autocomplete3" <="" div="">
                          <input class="myInput3" name="myInput3" id="myInput3" style="width:200px" placeholder="Digite aqui o texto">
                        </div>
                        </td>
                          <td class="coluna-3-2" id="coluna-3-2"> <span class="star-rating"> <input type="radio" name="rating-3-2" value="1">
                            <i>

                          </i> 
                            <input type="radio" name="rating-3-2" value="2"><i></i> <input type="radio" name="rating-3-2" value="3">
                            <i>

                            </i>
                            <input type="radio" name="rating-3-2" value="4"><i></i><input type="radio" name="rating-3-2" value="5">
                            <i>

                            </i>
                          </span>
                          </td>
                            <td class="coluna-3-3" id="coluna-3-3">
                               <span class="star-rating">
                               <input type="radio" name="rating-3-3" value="1"><i></i> <input type="radio" name="rating-3-3" value="2">
                               <i>

                               </i> 
                               <input type="radio" name="rating-3-3" value="3"><i></i><input type="radio" name="rating-3-3" value="4">
                               <i>

                               </i>
                               <input type="radio" name="rating-3-3" value="5">
                               <i>

                               </i>
                              </span>
                              </td>
                               <td class="coluna-3-4" id="coluna-3-4"> 
                                <span class="star-rating">
                                 <input type="radio" name="rating-3-4" value="1"><i></i> <input type="radio" name="rating-3-4" value="2">
                                 <i></i> 
                                 <input type="radio" name="rating-3-4" value="3"><i></i><input type="radio" name="rating-3-4" value="4">
                                 <i>

                                 </i>
                                 <input type="radio" name="rating-3-4" value="5">
                                 <i>

                                 </i>
                                </span>
                                </td>
                                 <td class="coluna-3-5" id="coluna-3-5"> <span class="star-rating">
                                   <input type="radio" name="rating-3-5" value="1">
                                  <i>

                                 </i>
                                   <input type="radio" name="rating-3-5" value="2">
                                  <i>

                                 </i> 
                                  <input type="radio" name="rating-3-5" value="3">
                                  <i>

                                  </i>
                                  <input type="radio" name="rating-3-5" value="4"><i></i><input type="radio" name="rating-3-5" value="5">
                                  <i>

                                  </i>
                                </span>
                                </td>
                                </tr>
                                  <tr class="d4" id="d4"><td>
                                    <h3 class="coluna-4-0" id="coluna-4-0"> Auto escola

                                  </h3>
                                  </td>
                                    <td class="coluna-4-1" id="coluna-4-1"><div class="autocomplete" style="width:300px;" id="autocomplete4" <="" div="">
                                <input class="myInput4" name="myInput4" id="myInput4" style="width:200px" placeholder="Digite aqui o texto">
                              </div>
                              </td>
                                <td class="coluna-4-2" id="coluna-4-2"> <span class="star-rating"> <input type="radio" name="rating-4-2" value="1">
                                  <i>

                                </i>
                                   <input type="radio" name="rating-4-2" value="2">
                                  <i>

                                </i>
                                   <input type="radio" name="rating-4-2" value="3">
                                  <i>

                                </i>
                                  <input type="radio" name="rating-4-2" value="4"><i></i><input type="radio" name="rating-4-2" value="5">
                                  <i>

                                  </i>
                                </span>
                                </td>
                                  <td class="coluna-4-3" id="coluna-4-3"> <span class="star-rating"> 
                                    <input type="radio" name="rating-4-3" value="1">
                                    <i>

                                  </i>
                                     <input type="radio" name="rating-4-3" value="2">
                                    <i>

                                  </i>
                                     <input type="radio" name="rating-4-3" value="3">
                                    <i>

                                  </i>
                                    <input type="radio" name="rating-4-3" value="4">
                                    <i>

                                  </i>
                                    <input type="radio" name="rating-4-3" value="5">
                                    <i>

                                  </i>
                                  </span>
                                  </td>
                                  <td class="coluna-4-4" id="coluna-4-4"> 
                                    <span class="star-rating"> 
                                    <input type="radio" name="rating-4-4" value="1">
                                    <i>

                                  </i>
                                     <input type="radio" name="rating-4-4" value="2"><i></i> <input type="radio" name="rating-4-4" value="3">
                                     <i>

                                     </i>
                                     <input type="radio" name="rating-4-4" value="4"><i></i><input type="radio" name="rating-4-4" value="5">
                                     <i></i>
                                    </span>
                                  </td>
                                    <td class="coluna-4-5" id="coluna-4-5"> <span class="star-rating"> 
                                      <input type="radio" name="rating-4-5" value="1"><i></i> <input type="radio" name="rating-4-5" value="2">
                                      <i>

                                      </i>
                                       <input type="radio" name="rating-4-5" value="3"><i></i><input type="radio" name="rating-4-5" value="4"><i></i><input type="radio" name="rating-4-5" value="5"><i></i></span></td></tr><tr class="d5" id="d5"><td><h3 class="coluna-5-0" id="coluna-5-0"> Açougue Estúdio </h3></td><td class="coluna-5-1" id="coluna-5-1"><div class="autocomplete" style="width:300px;" id="autocomplete5" <="" div="">
                                       <input class="myInput5" name="myInput5" id="myInput5" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-5-2" id="coluna-5-2"> <span class="star-rating"> <input type="radio" name="rating-5-2" value="1"><i></i> <input type="radio" name="rating-5-2" value="2"><i></i> <input type="radio" name="rating-5-2" value="3"><i></i><input type="radio" name="rating-5-2" value="4"><i></i><input type="radio" name="rating-5-2" value="5"><i></i></span></td><td class="coluna-5-3" id="coluna-5-3"> <span class="star-rating"> <input type="radio" name="rating-5-3" value="1"><i></i> <input type="radio" name="rating-5-3" value="2"><i></i> <input type="radio" name="rating-5-3" value="3"><i></i><input type="radio" name="rating-5-3" value="4"><i></i><input type="radio" name="rating-5-3" value="5"><i></i></span></td><td class="coluna-5-4" id="coluna-5-4"> <span class="star-rating"> <input type="radio" name="rating-5-4" value="1"><i></i> <input type="radio" name="rating-5-4" value="2"><i></i> <input type="radio" name="rating-5-4" value="3"><i></i><input type="radio" name="rating-5-4" value="4"><i></i><input type="radio" name="rating-5-4" value="5"><i></i></span></td><td class="coluna-5-5" id="coluna-5-5"> <span class="star-rating"> <input type="radio" name="rating-5-5" value="1"><i></i> <input type="radio" name="rating-5-5" value="2"><i></i> <input type="radio" name="rating-5-5" value="3"><i></i><input type="radio" name="rating-5-5" value="4"><i></i><input type="radio" name="rating-5-5" value="5"><i></i></span></td></tr><tr class="d6" id="d6"><td><h3 class="coluna-6-0" id="coluna-6-0"> Barbearia</h3></td><td class="coluna-6-1" id="coluna-6-1"><div class="autocomplete" style="width:300px;" id="autocomplete6" <="" div="">
                                       <input class="myInput6" name="myInput6" id="myInput6" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-6-2" id="coluna-6-2"> <span class="star-rating"> <input type="radio" name="rating-6-2" value="1"><i></i> <input type="radio" name="rating-6-2" value="2"><i></i> <input type="radio" name="rating-6-2" value="3"><i></i><input type="radio" name="rating-6-2" value="4"><i></i><input type="radio" name="rating-6-2" value="5"><i></i></span></td><td class="coluna-6-3" id="coluna-6-3"> <span class="star-rating"> <input type="radio" name="rating-6-3" value="1"><i></i> <input type="radio" name="rating-6-3" value="2"><i></i> <input type="radio" name="rating-6-3" value="3"><i></i><input type="radio" name="rating-6-3" value="4"><i></i><input type="radio" name="rating-6-3" value="5"><i></i></span></td><td class="coluna-6-4" id="coluna-6-4"> <span class="star-rating"> <input type="radio" name="rating-6-4" value="1"><i></i> <input type="radio" name="rating-6-4" value="2"><i></i> <input type="radio" name="rating-6-4" value="3"><i></i><input type="radio" name="rating-6-4" value="4"><i></i><input type="radio" name="rating-6-4" value="5"><i></i></span></td><td class="coluna-6-5" id="coluna-6-5"> <span class="star-rating"> <input type="radio" name="rating-6-5" value="1"><i></i> <input type="radio" name="rating-6-5" value="2"><i></i> <input type="radio" name="rating-6-5" value="3"><i></i><input type="radio" name="rating-6-5" value="4"><i></i><input type="radio" name="rating-6-5" value="5"><i></i></span></td></tr><tr class="d7" id="d7"><td><h3 class="coluna-7-0" id="coluna-7-0"> Cantor / dupla /Banda </h3></td><td class="coluna-7-1" id="coluna-7-1"><div class="autocomplete" style="width:300px;" id="autocomplete7" <="" div="">
                                       <input class="myInput7" name="myInput7" id="myInput7" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-7-2" id="coluna-7-2"> <span class="star-rating"> <input type="radio" name="rating-7-2" value="1"><i></i> <input type="radio" name="rating-7-2" value="2"><i></i> <input type="radio" name="rating-7-2" value="3"><i></i><input type="radio" name="rating-7-2" value="4"><i></i><input type="radio" name="rating-7-2" value="5"><i></i></span></td><td class="coluna-7-3" id="coluna-7-3"> <span class="star-rating"> <input type="radio" name="rating-7-3" value="1"><i></i> <input type="radio" name="rating-7-3" value="2"><i></i> <input type="radio" name="rating-7-3" value="3"><i></i><input type="radio" name="rating-7-3" value="4"><i></i><input type="radio" name="rating-7-3" value="5"><i></i></span></td><td class="coluna-7-4" id="coluna-7-4"> <span class="star-rating">
                           <input type="radio" name="rating-7-4" value="1">
                          <i>

                        </i>
                           <input type="radio" name="rating-7-4" value="2">
                          <i>

                        </i>
                           <input type="radio" name="rating-7-4" value="3">
                           <i>

                           </i>
                           <input type="radio" name="rating-7-4" value="4">
                           <i>

                           </i>
                           <input type="radio" name="rating-7-4" value="5">
                           <i>

                           </i>
                          </span>
                          </td>
                           <td class="coluna-7-5" id="coluna-7-5">
                             <span class="star-rating">
                         <input type="radio" name="rating-7-5" value="1">
                        <i>

                       </i> 
                        <input type="radio" name="rating-7-5" value="2">
                        <i>

                       </i> 
                        <input type="radio" name="rating-7-5" value="3">
                        <i>

                       </i>
                        <input type="radio" name="rating-7-5" value="4">
                        <i>

                       </i>
                        <input type="radio" name="rating-7-5" value="5">
                        <i>

                       </i>
                      </span>
                      </td>
                      </tr>
                       <tr class="d8" id="d8">
                        <td>
                        <h3 class="coluna-8-0" id="coluna-8-0"> Clinica estética

                       </h3>
                      </td>
                        <td class="coluna-8-1" id="coluna-8-1">
                          <div class="autocomplete" style="width:300px;" id="autocomplete8" <="" div="">
                            <input class="myInput8" name="myInput8" id="myInput8" style="width:200px" placeholder="Digite aqui o texto">
                  </div>
                  </td>
                    <td class="coluna-8-2" id="coluna-8-2"> <span class="star-rating">
                     <input type="radio" name="rating-8-2" value="1">
                    <i>

                  </i> <input type="radio" name="rating-8-2" value="2">
                  <i>

                  </i>
                   <input type="radio" name="rating-8-2" value="3">
                  <i>

                  </i>
                  <input type="radio" name="rating-8-2" value="4"><i></i>
                  <input type="radio" name="rating-8-2" value="5"><i></i>
                </span></td><td class="coluna-8-3" id="coluna-8-3">
                   <span class="star-rating"> <input type="radio" name="rating-8-3" value="1">
                    <i></i> <input type="radio" name="rating-8-3" value="2">
                    <i></i>
                     <input type="radio" name="rating-8-3" value="3">
                     <i></i>

                     <input type="radio" name="rating-8-3" value="4">
                     <i></i>
                     <input type="radio" name="rating-8-3" value="5">
                     
                     <i>
                      
                     </i>
                    </span>
                    </td>
                     <td class="coluna-8-4" id="coluna-8-4"> 
                      <span class="star-rating"> <input type="radio" name="rating-8-4" value="1">
                        <i>

                      </i> 
                        <input type="radio" name="rating-8-4" value="2">
                        <i>

                      </i> 
                        <input type="radio" name="rating-8-4" value="3">
                        <i>

                      </i>
                        <input type="radio" name="rating-8-4" value="4">
                        <i>

                      </i><input type="radio" name="rating-8-4" value="5">
                      <i>

                      </i>
                    </span></td><td class="coluna-8-5" id="coluna-8-5">
                         <span class="star-rating"> 
                        <input type="radio" name="rating-8-5" value="1">
                        <i>

                        </i>
                         <input type="radio" name="rating-8-5" value="2">
                        <i>
                          
                        </i> 
                        <input type="radio" name="rating-8-5" value="3">
                        <i>

                        </i>
                        <input type="radio" name="rating-8-5" value="4">
                        <i>

                        </i>
                        <input type="radio" name="rating-8-5" value="5">
                        
                        <i>


                        </i>
                      
                      </span>
                      
                    </td>
                      
                    </tr>
                        
                      <tr class="d9" id="d9">
                          
                          <td>
                          
                            <h3 class="coluna-9-0" id="coluna-9-0"> Clinica medica

                          </h3>
                        </td>
                          <td class="coluna-9-1" id="coluna-9-1">
                            <div class="autocomplete" style="width:300px;" id="autocomplete9" <="" div="">
                              <input class="myInput9" name="myInput9" id="myInput9" style="width:200px" placeholder="Digite aqui o texto">
                            </div>
                          </td>
                            <td class="coluna-9-2" id="coluna-9-2"> 
                              <span class="star-rating"> 
                              <input type="radio" name="rating-9-2" value="1">
                  <i>

                  </i> 
                  <input type="radio" name="rating-9-2" value="2">
                  <i></i>
                   <input type="radio" name="rating-9-2" value="3">
                  <i>

                  </i>
                  <input type="radio" name="rating-9-2" value="4">
                  <i>

                  </i>
                  <input type="radio" name="rating-9-2" value="5">
                  <i>

                  </i>
                </span>
                </td>
                  <td class="coluna-9-3" id="coluna-9-3"> 
                    <span class="star-rating"> 
                    <input type="radio" name="rating-9-3" value="1">
                    <i>

                  </i>
                     <input type="radio" name="rating-9-3" value="2">
                    <i>

                  </i>
                     <input type="radio" name="rating-9-3" value="3">
                    <i>

                  </i>
                    <input type="radio" name="rating-9-3" value="4"><i></i><input type="radio" name="rating-9-3" value="5"><i></i></span></td><td class="coluna-9-4" id="coluna-9-4"> <span class="star-rating"> <input type="radio" name="rating-9-4" value="1"><i></i> <input type="radio" name="rating-9-4" value="2"><i></i> <input type="radio" name="rating-9-4" value="3"><i></i><input type="radio" name="rating-9-4" value="4"><i></i><input type="radio" name="rating-9-4" value="5"><i></i></span></td><td class="coluna-9-5" id="coluna-9-5"> <span class="star-rating"> <input type="radio" name="rating-9-5" value="1"><i></i> <input type="radio" name="rating-9-5" value="2"><i></i> <input type="radio" name="rating-9-5" value="3"><i></i><input type="radio" name="rating-9-5" value="4"><i></i><input type="radio" name="rating-9-5" value="5"><i></i></span></td></tr><tr class="d10" id="d10"><td><h3 class="coluna-10-0" id="coluna-10-0"> Colégio particular</h3></td><td class="coluna-10-1" id="coluna-10-1"><div class="autocomplete" style="width:300px;" id="autocomplete10" >
                    <input class="myInput10" name="myInput10" id="myInput10" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-10-2" id="coluna-10-2"> <span class="star-rating"> <input type="radio" name="rating-10-2" value="1"><i></i> <input type="radio" name="rating-10-2" value="2"><i></i> <input type="radio" name="rating-10-2" value="3"><i></i><input type="radio" name="rating-10-2" value="4"><i></i><input type="radio" name="rating-10-2" value="5"><i></i></span></td><td class="coluna-10-3" id="coluna-10-3"> <span class="star-rating"> <input type="radio" name="rating-10-3" value="1"><i></i> <input type="radio" name="rating-10-3" value="2"><i></i> <input type="radio" name="rating-10-3" value="3"><i></i><input type="radio" name="rating-10-3" value="4"><i></i><input type="radio" name="rating-10-3" value="5"><i></i></span></td><td class="coluna-10-4" id="coluna-10-4"> <span class="star-rating"> <input type="radio" name="rating-10-4" value="1"><i></i> <input type="radio" name="rating-10-4" value="2"><i></i> <input type="radio" name="rating-10-4" value="3"><i></i><input type="radio" name="rating-10-4" value="4"><i></i><input type="radio" name="rating-10-4" value="5"><i></i></span></td><td class="coluna-10-5" id="coluna-10-5"> <span class="star-rating"> <input type="radio" name="rating-10-5" value="1"><i></i> <input type="radio" name="rating-10-5" value="2"><i></i> <input type="radio" name="rating-10-5" value="3"><i></i><input type="radio" name="rating-10-5" value="4"><i></i><input type="radio" name="rating-10-5" value="5"><i></i></span></td></tr><tr class="d11" id="d11"><td><h3 class="coluna-11-0" id="coluna-11-0"> Comercio mais tempo de trabalho</h3></td><td class="coluna-11-1" id="coluna-11-1"><div class="autocomplete" style="width:300px;" id="autocomplete11">
                    <input class="myInput11" name="myInput11" id="myInput11" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-11-2" id="coluna-11-2"> <span class="star-rating"> <input type="radio" name="rating-11-2" value="1"><i></i> <input type="radio" name="rating-11-2" value="2"><i></i> <input type="radio" name="rating-11-2" value="3"><i></i><input type="radio" name="rating-11-2" value="4"><i></i><input type="radio" name="rating-11-2" value="5"><i></i></span></td><td class="coluna-11-3" id="coluna-11-3"> <span class="star-rating"> <input type="radio" name="rating-11-3" value="1"><i></i> <input type="radio" name="rating-11-3" value="2"><i></i> <input type="radio" name="rating-11-3" value="3"><i></i><input type="radio" name="rating-11-3" value="4"><i></i><input type="radio" name="rating-11-3" value="5"><i></i></span></td><td class="coluna-11-4" id="coluna-11-4"> <span class="star-rating"> <input type="radio" name="rating-11-4" value="1"><i></i> <input type="radio" name="rating-11-4" value="2"><i></i> <input type="radio" name="rating-11-4" value="3"><i></i><input type="radio" name="rating-11-4" value="4"><i></i><input type="radio" name="rating-11-4" value="5"><i></i></span></td><td class="coluna-11-5" id="coluna-11-5"> <span class="star-rating"> <input type="radio" name="rating-11-5" value="1"><i></i> <input type="radio" name="rating-11-5" value="2"><i></i> <input type="radio" name="rating-11-5" value="3"><i></i><input type="radio" name="rating-11-5" value="4"><i></i><input type="radio" name="rating-11-5" value="5"><i></i></span></td></tr><tr class="d12" id="d12"><td><h3 class="coluna-12-0" id="coluna-12-0"> Decoração de festa</h3></td><td class="coluna-12-1" id="coluna-12-1"><div class="autocomplete" style="width:300px;" id="autocomplete12">
                    <input class="myInput12" name="myInput12" id="myInput12" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-12-2" id="coluna-12-2"> <span class="star-rating"> <input type="radio" name="rating-12-2" value="1"><i></i> <input type="radio" name="rating-12-2" value="2"><i></i> <input type="radio" name="rating-12-2" value="3"><i></i><input type="radio" name="rating-12-2" value="4"><i></i><input type="radio" name="rating-12-2" value="5"><i></i></span></td><td class="coluna-12-3" id="coluna-12-3"> <span class="star-rating"> <input type="radio" name="rating-12-3" value="1"><i></i> <input type="radio" name="rating-12-3" value="2"><i></i> <input type="radio" name="rating-12-3" value="3"><i></i><input type="radio" name="rating-12-3" value="4"><i></i><input type="radio" name="rating-12-3" value="5"><i></i></span></td><td class="coluna-12-4" id="coluna-12-4"> <span class="star-rating"> <input type="radio" name="rating-12-4" value="1"><i></i> <input type="radio" name="rating-12-4" value="2"><i></i> <input type="radio" name="rating-12-4" value="3"><i></i><input type="radio" name="rating-12-4" value="4"><i></i><input type="radio" name="rating-12-4" value="5"><i></i></span></td><td class="coluna-12-5" id="coluna-12-5"> <span class="star-rating"> <input type="radio" name="rating-12-5" value="1"><i></i> <input type="radio" name="rating-12-5" value="2"><i></i> <input type="radio" name="rating-12-5" value="3"><i></i><input type="radio" name="rating-12-5" value="4"><i></i><input type="radio" name="rating-12-5" value="5"><i></i></span></td></tr><tr class="d13" id="d13"><td><h3 class="coluna-13-0" id="coluna-13-0"> Distribuidor água e gás </h3></td><td class="coluna-13-1" id="coluna-13-1"><div class="autocomplete" style="width:300px;" id="autocomplete13" >
                    <input class="myInput13" name="myInput13" id="myInput13" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-13-2" id="coluna-13-2"> <span class="star-rating"> <input type="radio" name="rating-13-2" value="1"><i></i> <input type="radio" name="rating-13-2" value="2"><i></i> <input type="radio" name="rating-13-2" value="3"><i></i><input type="radio" name="rating-13-2" value="4"><i></i><input type="radio" name="rating-13-2" value="5"><i></i></span></td><td class="coluna-13-3" id="coluna-13-3"> <span class="star-rating"> <input type="radio" name="rating-13-3" value="1"><i></i> <input type="radio" name="rating-13-3" value="2"><i></i> <input type="radio" name="rating-13-3" value="3"><i></i><input type="radio" name="rating-13-3" value="4"><i></i><input type="radio" name="rating-13-3" value="5"><i></i></span></td><td class="coluna-13-4" id="coluna-13-4"> <span class="star-rating"> <input type="radio" name="rating-13-4" value="1"><i></i> <input type="radio" name="rating-13-4" value="2"><i></i> <input type="radio" name="rating-13-4" value="3"><i></i><input type="radio" name="rating-13-4" value="4"><i></i><input type="radio" name="rating-13-4" value="5"><i></i></span></td><td class="coluna-13-5" id="coluna-13-5"> <span class="star-rating"> <input type="radio" name="rating-13-5" value="1"><i></i> <input type="radio" name="rating-13-5" value="2"><i></i> <input type="radio" name="rating-13-5" value="3"><i></i><input type="radio" name="rating-13-5" value="4"><i></i><input type="radio" name="rating-13-5" value="5"><i></i></span></td></tr><tr class="d14" id="d14"><td><h3 class="coluna-14-0" id="coluna-14-0"> Doceria / confeitaria</h3></td><td class="coluna-14-1" id="coluna-14-1"><div class="autocomplete" style="width:300px;" id="autocomplete14" >
                    <input class="myInput14" name="myInput14" id="myInput14" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-14-2" id="coluna-14-2"> <span class="star-rating"> <input type="radio" name="rating-14-2" value="1"><i></i> <input type="radio" name="rating-14-2" value="2"><i></i> <input type="radio" name="rating-14-2" value="3"><i></i><input type="radio" name="rating-14-2" value="4"><i></i><input type="radio" name="rating-14-2" value="5"><i></i></span></td><td class="coluna-14-3" id="coluna-14-3"> <span class="star-rating"> <input type="radio" name="rating-14-3" value="1"><i></i> <input type="radio" name="rating-14-3" value="2"><i></i> <input type="radio" name="rating-14-3" value="3"><i></i><input type="radio" name="rating-14-3" value="4"><i></i><input type="radio" name="rating-14-3" value="5"><i></i></span></td><td class="coluna-14-4" id="coluna-14-4"> <span class="star-rating"> <input type="radio" name="rating-14-4" value="1"><i></i> <input type="radio" name="rating-14-4" value="2"><i></i> <input type="radio" name="rating-14-4" value="3"><i></i><input type="radio" name="rating-14-4" value="4"><i></i><input type="radio" name="rating-14-4" value="5"><i></i></span></td><td class="coluna-14-5" id="coluna-14-5"> <span class="star-rating"> <input type="radio" name="rating-14-5" value="1">
                    <i>

                  </i>
                     <input type="radio" name="rating-14-5" value="2">
                    <i>

                  </i> 
                    <input type="radio" name="rating-14-5" value="3">
                    <i>
                      
                    </i>
                    <input type="radio" name="rating-14-5" value="4">
                    <i>
                      
                    </i>
                    <input type="radio" name="rating-14-5" value="5">
                    <i>

                    </i>
                  </span>
                  </td>
                  </tr>
                    <tr class="d15" id="d15">
                      <td>
                      <h3 class="coluna-15-0" id="coluna-15-0"> Emissora de Rádio
                         </h3>
                    </td>
                      <td class="coluna-15-1" id="coluna-15-1">
                        <div class="autocomplete" style="width:300px;" id="autocomplete15" >
                        <input class="myInput15" name="myInput15" id="myInput15" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-15-2" id="coluna-15-2"> <span class="star-rating"> <input type="radio" name="rating-15-2" value="1"><i></i> <input type="radio" name="rating-15-2" value="2"><i></i> <input type="radio" name="rating-15-2" value="3"><i></i><input type="radio" name="rating-15-2" value="4"><i></i><input type="radio" name="rating-15-2" value="5"><i></i></span></td><td class="coluna-15-3" id="coluna-15-3"> <span class="star-rating"> <input type="radio" name="rating-15-3" value="1"><i></i> <input type="radio" name="rating-15-3" value="2"><i></i> <input type="radio" name="rating-15-3" value="3"><i></i><input type="radio" name="rating-15-3" value="4"><i></i><input type="radio" name="rating-15-3" value="5"><i></i></span></td><td class="coluna-15-4" id="coluna-15-4"> <span class="star-rating"> <input type="radio" name="rating-15-4" value="1"><i></i> <input type="radio" name="rating-15-4" value="2"><i></i> <input type="radio" name="rating-15-4" value="3"><i></i><input type="radio" name="rating-15-4" value="4"><i></i><input type="radio" name="rating-15-4" value="5"><i></i></span></td><td class="coluna-15-5" id="coluna-15-5"> <span class="star-rating"> <input type="radio" name="rating-15-5" value="1"><i></i> <input type="radio" name="rating-15-5" value="2"><i></i> <input type="radio" name="rating-15-5" value="3"><i></i><input type="radio" name="rating-15-5" value="4"><i></i><input type="radio" name="rating-15-5" value="5"><i></i></span></td></tr><tr class="d16" id="d16"><td><h3 class="coluna-16-0" id="coluna-16-0"> Equipamento de Informática </h3></td><td class="coluna-16-1" id="coluna-16-1"><div class="autocomplete" style="width:300px;" id="autocomplete16" >
                        <input class="myInput16" name="myInput16" id="myInput16" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-16-2" id="coluna-16-2"> <span class="star-rating"> <input type="radio" name="rating-16-2" value="1"><i></i> <input type="radio" name="rating-16-2" value="2"><i></i> <input type="radio" name="rating-16-2" value="3"><i></i><input type="radio" name="rating-16-2" value="4"><i></i><input type="radio" name="rating-16-2" value="5"><i></i></span></td><td class="coluna-16-3" id="coluna-16-3"> <span class="star-rating"> <input type="radio" name="rating-16-3" value="1"><i></i> <input type="radio" name="rating-16-3" value="2"><i></i> <input type="radio" name="rating-16-3" value="3"><i></i><input type="radio" name="rating-16-3" value="4"><i></i><input type="radio" name="rating-16-3" value="5"><i></i></span></td><td class="coluna-16-4" id="coluna-16-4"> <span class="star-rating"> <input type="radio" name="rating-16-4" value="1"><i></i> <input type="radio" name="rating-16-4" value="2"><i></i> <input type="radio" name="rating-16-4" value="3"><i></i><input type="radio" name="rating-16-4" value="4"><i></i><input type="radio" name="rating-16-4" value="5"><i></i></span></td><td class="coluna-16-5" id="coluna-16-5"> <span class="star-rating"> <input type="radio" name="rating-16-5" value="1"><i></i> <input type="radio" name="rating-16-5" value="2"><i></i> <input type="radio" name="rating-16-5" value="3"><i></i><input type="radio" name="rating-16-5" value="4"><i></i><input type="radio" name="rating-16-5" value="5"><i></i></span></td></tr><tr class="d17" id="d17"><td><h3 class="coluna-17-0" id="coluna-17-0"> Escritório de advocacia</h3></td><td class="coluna-17-1" id="coluna-17-1"><div class="autocomplete" style="width:300px;" id="autocomplete17">
                        <input class="myInput17" name="myInput17" id="myInput17" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-17-2" id="coluna-17-2"> <span class="star-rating"> <input type="radio" name="rating-17-2" value="1"><i></i> <input type="radio" name="rating-17-2" value="2"><i></i> <input type="radio" name="rating-17-2" value="3"><i></i><input type="radio" name="rating-17-2" value="4"><i></i><input type="radio" name="rating-17-2" value="5"><i></i></span></td><td class="coluna-17-3" id="coluna-17-3"> <span class="star-rating"> <input type="radio" name="rating-17-3" value="1"><i></i> <input type="radio" name="rating-17-3" value="2"><i></i> <input type="radio" name="rating-17-3" value="3"><i></i><input type="radio" name="rating-17-3" value="4"><i></i><input type="radio" name="rating-17-3" value="5"><i></i></span></td><td class="coluna-17-4" id="coluna-17-4"> <span class="star-rating"> <input type="radio" name="rating-17-4" value="1"><i></i> <input type="radio" name="rating-17-4" value="2"><i></i> <input type="radio" name="rating-17-4" value="3"><i></i><input type="radio" name="rating-17-4" value="4"><i></i><input type="radio" name="rating-17-4" value="5"><i></i></span></td><td class="coluna-17-5" id="coluna-17-5"> <span class="star-rating"> <input type="radio" name="rating-17-5" value="1"><i></i> <input type="radio" name="rating-17-5" value="2"><i></i> <input type="radio" name="rating-17-5" value="3"><i></i><input type="radio" name="rating-17-5" value="4"><i></i><input type="radio" name="rating-17-5" value="5"><i></i></span></td></tr><tr class="d18" id="d18"><td><h3 class="coluna-18-0" id="coluna-18-0"> Escritório de contabilidade</h3></td><td class="coluna-18-1" id="coluna-18-1"><div class="autocomplete" style="width:300px;" id="autocomplete18" >
                        <input class="myInput18" name="myInput18" id="myInput18" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-18-2" id="coluna-18-2"> <span class="star-rating"> <input type="radio" name="rating-18-2" value="1"><i></i> <input type="radio" name="rating-18-2" value="2"><i></i> <input type="radio" name="rating-18-2" value="3"><i></i><input type="radio" name="rating-18-2" value="4"><i></i><input type="radio" name="rating-18-2" value="5"><i></i></span></td><td class="coluna-18-3" id="coluna-18-3"> <span class="star-rating"> <input type="radio" name="rating-18-3" value="1"><i></i> <input type="radio" name="rating-18-3" value="2"><i></i> <input type="radio" name="rating-18-3" value="3"><i></i><input type="radio" name="rating-18-3" value="4"><i></i><input type="radio" name="rating-18-3" value="5"><i></i></span></td><td class="coluna-18-4" id="coluna-18-4"> <span class="star-rating"> <input type="radio" name="rating-18-4" value="1"><i></i> <input type="radio" name="rating-18-4" value="2"><i></i> <input type="radio" name="rating-18-4" value="3"><i></i><input type="radio" name="rating-18-4" value="4"><i></i><input type="radio" name="rating-18-4" value="5"><i></i></span></td><td class="coluna-18-5" id="coluna-18-5"> <span class="star-rating"> <input type="radio" name="rating-18-5" value="1"><i></i> <input type="radio" name="rating-18-5" value="2"><i></i> <input type="radio" name="rating-18-5" value="3"><i></i><input type="radio" name="rating-18-5" value="4"><i></i><input type="radio" name="rating-18-5" value="5"><i></i></span></td></tr><tr class="d19" id="d19">
                    <td>
                      <h3 class="coluna-19-0" id="coluna-19-0"> Farmácia/Drogaria

                    </h3>
                    </td>
                    <td class="coluna-19-1" id="coluna-19-1">
                      <div class="autocomplete" style="width:300px;" id="autocomplete19" >
                      <input class="myInput19" name="myInput19" id="myInput19" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-19-2" id="coluna-19-2"> <span class="star-rating"> <input type="radio" name="rating-19-2" value="1"><i></i> <input type="radio" name="rating-19-2" value="2"><i></i> <input type="radio" name="rating-19-2" value="3"><i></i><input type="radio" name="rating-19-2" value="4"><i></i><input type="radio" name="rating-19-2" value="5"><i></i></span></td><td class="coluna-19-3" id="coluna-19-3"> <span class="star-rating"> <input type="radio" name="rating-19-3" value="1"><i></i> <input type="radio" name="rating-19-3" value="2"><i></i> <input type="radio" name="rating-19-3" value="3"><i></i><input type="radio" name="rating-19-3" value="4"><i></i><input type="radio" name="rating-19-3" value="5"><i></i></span></td><td class="coluna-19-4" id="coluna-19-4"> <span class="star-rating"> <input type="radio" name="rating-19-4" value="1"><i></i> <input type="radio" name="rating-19-4" value="2"><i></i> <input type="radio" name="rating-19-4" value="3"><i></i><input type="radio" name="rating-19-4" value="4"><i></i><input type="radio" name="rating-19-4" value="5"><i></i></span></td><td class="coluna-19-5" id="coluna-19-5"> <span class="star-rating"> <input type="radio" name="rating-19-5" value="1"><i></i> <input type="radio" name="rating-19-5" value="2"><i></i> <input type="radio" name="rating-19-5" value="3"><i></i><input type="radio" name="rating-19-5" value="4"><i></i><input type="radio" name="rating-19-5" value="5"><i></i></span></td></tr><tr class="d20" id="d20"><td><h3 class="coluna-20-0" id="coluna-20-0"> Fisioterapeuta </h3></td><td class="coluna-20-1" id="coluna-20-1"><div class="autocomplete" style="width:300px;" id="autocomplete20" >
                      <input class="myInput20" name="myInput20" id="myInput20" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-20-2" id="coluna-20-2"> <span class="star-rating"> <input type="radio" name="rating-20-2" value="1"><i></i> <input type="radio" name="rating-20-2" value="2"><i></i> <input type="radio" name="rating-20-2" value="3"><i></i><input type="radio" name="rating-20-2" value="4"><i></i><input type="radio" name="rating-20-2" value="5"><i></i></span></td><td class="coluna-20-3" id="coluna-20-3"> <span class="star-rating"> <input type="radio" name="rating-20-3" value="1"><i></i> <input type="radio" name="rating-20-3" value="2"><i></i> <input type="radio" name="rating-20-3" value="3"><i></i><input type="radio" name="rating-20-3" value="4"><i></i><input type="radio" name="rating-20-3" value="5"><i></i></span></td><td class="coluna-20-4" id="coluna-20-4"> <span class="star-rating"> <input type="radio" name="rating-20-4" value="1"><i></i> <input type="radio" name="rating-20-4" value="2"><i></i> <input type="radio" name="rating-20-4" value="3"><i></i><input type="radio" name="rating-20-4" value="4"><i></i><input type="radio" name="rating-20-4" value="5"><i></i></span></td><td class="coluna-20-5" id="coluna-20-5"> <span class="star-rating"> <input type="radio" name="rating-20-5" value="1"><i></i> <input type="radio" name="rating-20-5" value="2"><i></i> <input type="radio" name="rating-20-5" value="3"><i></i><input type="radio" name="rating-20-5" value="4"><i></i><input type="radio" name="rating-20-5" value="5"><i></i></span></td></tr><tr class="d21" id="d21"><td><h3 class="coluna-21-0" id="coluna-21-0"> Fotográfico</h3></td><td class="coluna-21-1" id="coluna-21-1"><div class="autocomplete" style="width:300px;" id="autocomplete21">
                      <input class="myInput21" name="myInput21" id="myInput21" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-21-2" id="coluna-21-2"> <span class="star-rating"> <input type="radio" name="rating-21-2" value="1"><i></i> <input type="radio" name="rating-21-2" value="2"><i></i> <input type="radio" name="rating-21-2" value="3"><i></i><input type="radio" name="rating-21-2" value="4"><i></i><input type="radio" name="rating-21-2" value="5"><i></i></span></td><td class="coluna-21-3" id="coluna-21-3"> <span class="star-rating"> <input type="radio" name="rating-21-3" value="1"><i></i> <input type="radio" name="rating-21-3" value="2"><i></i> <input type="radio" name="rating-21-3" value="3"><i></i><input type="radio" name="rating-21-3" value="4"><i></i><input type="radio" name="rating-21-3" value="5"><i></i></span></td><td class="coluna-21-4" id="coluna-21-4"> <span class="star-rating"> <input type="radio" name="rating-21-4" value="1"><i></i> <input type="radio" name="rating-21-4" value="2"><i></i> <input type="radio" name="rating-21-4" value="3"><i></i><input type="radio" name="rating-21-4" value="4"><i></i><input type="radio" name="rating-21-4" value="5"><i></i></span></td><td class="coluna-21-5" id="coluna-21-5"> <span class="star-rating"> <input type="radio" name="rating-21-5" value="1"><i></i> <input type="radio" name="rating-21-5" value="2"><i></i> <input type="radio" name="rating-21-5" value="3"><i></i><input type="radio" name="rating-21-5" value="4"><i></i><input type="radio" name="rating-21-5" value="5"><i></i></span></td></tr><tr class="d22" id="d22"><td><h3 class="coluna-22-0" id="coluna-22-0"> Hamburgueria/Lanchonete </h3></td><td class="coluna-22-1" id="coluna-22-1"><div class="autocomplete" style="width:300px;" id="autocomplete22">
                      <input class="myInput22" name="myInput22" id="myInput22" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-22-2" id="coluna-22-2"> <span class="star-rating"> <input type="radio" name="rating-22-2" value="1"><i></i> <input type="radio" name="rating-22-2" value="2"><i></i> <input type="radio" name="rating-22-2" value="3"><i></i><input type="radio" name="rating-22-2" value="4"><i></i><input type="radio" name="rating-22-2" value="5"><i></i></span></td><td class="coluna-22-3" id="coluna-22-3"> <span class="star-rating"> <input type="radio" name="rating-22-3" value="1"><i></i> <input type="radio" name="rating-22-3" value="2"><i></i> <input type="radio" name="rating-22-3" value="3"><i></i><input type="radio" name="rating-22-3" value="4"><i></i><input type="radio" name="rating-22-3" value="5"><i></i></span></td><td class="coluna-22-4" id="coluna-22-4"> <span class="star-rating"> <input type="radio" name="rating-22-4" value="1"><i></i> <input type="radio" name="rating-22-4" value="2"><i></i> <input type="radio" name="rating-22-4" value="3"><i></i><input type="radio" name="rating-22-4" value="4"><i></i><input type="radio" name="rating-22-4" value="5"><i></i></span></td><td class="coluna-22-5" id="coluna-22-5"> <span class="star-rating"> <input type="radio" name="rating-22-5" value="1"><i></i> <input type="radio" name="rating-22-5" value="2"><i></i> <input type="radio" name="rating-22-5" value="3"><i></i><input type="radio" name="rating-22-5" value="4"><i></i><input type="radio" name="rating-22-5" value="5"><i></i></span></td></tr><tr class="d23" id="d23"><td><h3 class="coluna-23-0" id="coluna-23-0"> Hotel/ Pousada </h3></td><td class="coluna-23-1" id="coluna-23-1"><div class="autocomplete" style="width:300px;" id="autocomplete23">
                      <input class="myInput23" name="myInput23" id="myInput23" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-23-2" id="coluna-23-2"> <span class="star-rating"> <input type="radio" name="rating-23-2" value="1"><i></i> <input type="radio" name="rating-23-2" value="2"><i></i> <input type="radio" name="rating-23-2" value="3"><i></i><input type="radio" name="rating-23-2" value="4"><i></i><input type="radio" name="rating-23-2" value="5"><i></i></span></td><td class="coluna-23-3" id="coluna-23-3"> <span class="star-rating"> <input type="radio" name="rating-23-3" value="1"><i></i> <input type="radio" name="rating-23-3" value="2"><i></i> <input type="radio" name="rating-23-3" value="3"><i></i><input type="radio" name="rating-23-3" value="4"><i></i><input type="radio" name="rating-23-3" value="5"><i></i></span></td><td class="coluna-23-4" id="coluna-23-4"> <span class="star-rating"> <input type="radio" name="rating-23-4" value="1"><i></i> <input type="radio" name="rating-23-4" value="2"><i></i> <input type="radio" name="rating-23-4" value="3"><i></i><input type="radio" name="rating-23-4" value="4"><i></i><input type="radio" name="rating-23-4" value="5"><i></i></span></td><td class="coluna-23-5" id="coluna-23-5"> <span class="star-rating"> <input type="radio" name="rating-23-5" value="1"><i></i> <input type="radio" name="rating-23-5" value="2"><i></i> <input type="radio" name="rating-23-5" value="3"><i></i><input type="radio" name="rating-23-5" value="4"><i></i><input type="radio" name="rating-23-5" value="5"><i></i></span></td></tr><tr class="d24" id="d24"><td><h3 class="coluna-24-0" id="coluna-24-0"> Laboratório de análises clínicas</h3></td><td class="coluna-24-1" id="coluna-24-1"><div class="autocomplete" style="width:300px;" id="autocomplete24">
                      <input class="myInput24" name="myInput24" id="myInput24" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-24-2" id="coluna-24-2"> <span class="star-rating"> <input type="radio" name="rating-24-2" value="1"><i></i> <input type="radio" name="rating-24-2" value="2"><i></i> <input type="radio" name="rating-24-2" value="3"><i></i><input type="radio" name="rating-24-2" value="4"><i></i><input type="radio" name="rating-24-2" value="5"><i></i></span></td><td class="coluna-24-3" id="coluna-24-3"> <span class="star-rating"> <input type="radio" name="rating-24-3" value="1"><i></i> <input type="radio" name="rating-24-3" value="2"><i></i> <input type="radio" name="rating-24-3" value="3"><i></i><input type="radio" name="rating-24-3" value="4"><i></i><input type="radio" name="rating-24-3" value="5">
                      <i>

                    </i>
                    </span>
                    </td>
                      <td class="coluna-24-4" id="coluna-24-4">
                         <span class="star-rating">
                       <input type="radio" name="rating-24-4" value="1"
                       <i>
                        
                       </i>
                        <input type="radio" name="rating-24-4" value="2">
                       <i>
                        
                       </i>
                        <input type="radio" name="rating-24-4" value="3">
                       <i>
                        
                       </i>
                       <input type="radio" name="rating-24-4" value="4"><i></i>
                  <input type="radio" name="rating-24-4" value="5">
                  <i>

                  </i>
                </span>
                </td>
                  <td class="coluna-24-5" id="coluna-24-5"> 
                    <span class="star-rating"> <input type="radio" name="rating-24-5" value="1">
                      <i>
                      
                    </i> 
                      <input type="radio" name="rating-24-5" value="2"><i>
                      
                    </i> 
                      <input type="radio" name="rating-24-5" value="3"><i></i><input type="radio" name="rating-24-5" value="4"><i></i><input type="radio" name="rating-24-5" value="5"><i></i></span></td></tr><tr class="d25" id="d25"><td><h3 class="coluna-25-0" id="coluna-25-0"> Loja de Calçado</h3></td><td class="coluna-25-1" id="coluna-25-1"><div class="autocomplete" style="width:300px;" id="autocomplete25">
                      <input class="myInput25" name="myInput25"id="myInput25" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-25-2" id="coluna-25-2"> <span class="star-rating"> <input type="radio" name="rating-25-2" value="1"><i></i> <input type="radio" name="rating-25-2" value="2"><i></i> <input type="radio" name="rating-25-2" value="3"><i></i><input type="radio" name="rating-25-2" value="4"><i></i><input type="radio" name="rating-25-2" value="5"><i></i></span></td><td class="coluna-25-3" id="coluna-25-3"> <span class="star-rating"> <input type="radio" name="rating-25-3" value="1"><i></i> <input type="radio" name="rating-25-3" value="2"><i></i> <input type="radio" name="rating-25-3" value="3"><i></i><input type="radio" name="rating-25-3" value="4"><i></i><input type="radio" name="rating-25-3" value="5"><i></i></span></td><td class="coluna-25-4" id="coluna-25-4"> <span class="star-rating"> <input type="radio" name="rating-25-4" value="1"><i></i> <input type="radio" name="rating-25-4" value="2"><i></i> <input type="radio" name="rating-25-4" value="3"><i></i><input type="radio" name="rating-25-4" value="4"><i></i><input type="radio" name="rating-25-4" value="5"><i></i></span></td><td class="coluna-25-5" id="coluna-25-5"> <span class="star-rating"> <input type="radio" name="rating-25-5" value="1"><i></i> <input type="radio" name="rating-25-5" value="2"><i></i> <input type="radio" name="rating-25-5" value="3"><i></i><input type="radio" name="rating-25-5" value="4"><i></i><input type="radio" name="rating-25-5" value="5"><i></i></span></td></tr><tr class="d26" id="d26"><td><h3 class="coluna-26-0" id="coluna-26-0"> Loja de cosméticos</h3></td><td class="coluna-26-1" id="coluna-26-1"><div class="autocomplete" style="width:300px;" id="autocomplete26" >
                      <input class="myInput26" name="myInput26"id="myInput26" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-26-2" id="coluna-26-2"> <span class="star-rating"> <input type="radio" name="rating-26-2" value="1"><i></i> <input type="radio" name="rating-26-2" value="2"><i></i> <input type="radio" name="rating-26-2" value="3"><i></i><input type="radio" name="rating-26-2" value="4"><i></i><input type="radio" name="rating-26-2" value="5"><i></i></span></td><td class="coluna-26-3" id="coluna-26-3"> <span class="star-rating"> <input type="radio" name="rating-26-3" value="1"><i></i> <input type="radio" name="rating-26-3" value="2"><i></i> <input type="radio" name="rating-26-3" value="3"><i></i><input type="radio" name="rating-26-3" value="4"><i></i><input type="radio" name="rating-26-3" value="5"><i></i></span></td><td class="coluna-26-4" id="coluna-26-4"> <span class="star-rating"> <input type="radio" name="rating-26-4" value="1"><i></i> <input type="radio" name="rating-26-4" value="2"><i></i> <input type="radio" name="rating-26-4" value="3"><i></i><input type="radio" name="rating-26-4" value="4"><i></i><input type="radio" name="rating-26-4" value="5"><i></i></span></td><td class="coluna-26-5" id="coluna-26-5"> <span class="star-rating"> <input type="radio" name="rating-26-5" value="1"><i></i> <input type="radio" name="rating-26-5" value="2"><i></i> <input type="radio" name="rating-26-5" value="3"><i></i><input type="radio" name="rating-26-5" value="4"><i></i><input type="radio" name="rating-26-5" value="5"><i></i></span></td></tr><tr class="d27" id="d27"><td><h3 class="coluna-27-0" id="coluna-27-0"> Loja de móveis e eletrodomésticos</h3></td><td class="coluna-27-1" id="coluna-27-1"><div class="autocomplete" style="width:300px;" id="autocomplete27" >
                      <input class="myInput27" name="myInput27"id="myInput27" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-27-2" id="coluna-27-2"> <span class="star-rating"> <input type="radio" name="rating-27-2" value="1"><i></i> <input type="radio" name="rating-27-2" value="2"><i></i> <input type="radio" name="rating-27-2" value="3"><i></i><input type="radio" name="rating-27-2" value="4"><i></i><input type="radio" name="rating-27-2" value="5"><i></i></span></td><td class="coluna-27-3" id="coluna-27-3"> <span class="star-rating"> <input type="radio" name="rating-27-3" value="1"><i></i> <input type="radio" name="rating-27-3" value="2"><i></i> <input type="radio" name="rating-27-3" value="3"><i></i><input type="radio" name="rating-27-3" value="4"><i></i><input type="radio" name="rating-27-3" value="5"><i></i></span></td><td class="coluna-27-4" id="coluna-27-4"> <span class="star-rating"> <input type="radio" name="rating-27-4" value="1"><i></i> <input type="radio" name="rating-27-4" value="2"><i></i> <input type="radio" name="rating-27-4" value="3"><i></i><input type="radio" name="rating-27-4" value="4"><i></i><input type="radio" name="rating-27-4" value="5"><i></i></span></td><td class="coluna-27-5" id="coluna-27-5"> <span class="star-rating"> <input type="radio" name="rating-27-5" value="1"><i></i> <input type="radio" name="rating-27-5" value="2"><i></i> <input type="radio" name="rating-27-5" value="3"><i></i><input type="radio" name="rating-27-5" value="4"><i></i><input type="radio" name="rating-27-5" value="5"><i></i></span></td></tr><tr class="d28" id="d28"><td><h3 class="coluna-28-0" id="coluna-28-0"> Loja de tecidos/cama mesa e banho/ Utilidades para o lar</h3></td><td class="coluna-28-1" id="coluna-28-1"><div class="autocomplete" style="width:300px;" id="autocomplete28" >
                      <input class="myInput28" name="myInput28"id="myInput28" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-28-2" id="coluna-28-2"> <span class="star-rating"> <input type="radio" name="rating-28-2" value="1"><i></i> <input type="radio" name="rating-28-2" value="2"><i></i> <input type="radio" name="rating-28-2" value="3"><i></i><input type="radio" name="rating-28-2" value="4"><i></i><input type="radio" name="rating-28-2" value="5"><i></i></span></td><td class="coluna-28-3" id="coluna-28-3"> <span class="star-rating"> <input type="radio" name="rating-28-3" value="1"><i></i> <input type="radio" name="rating-28-3" value="2"><i></i> <input type="radio" name="rating-28-3" value="3"><i></i><input type="radio" name="rating-28-3" value="4"><i></i><input type="radio" name="rating-28-3" value="5"><i></i></span></td><td class="coluna-28-4" id="coluna-28-4"> <span class="star-rating"> <input type="radio" name="rating-28-4" value="1"><i></i> <input type="radio" name="rating-28-4" value="2"><i></i> <input type="radio" name="rating-28-4" value="3"><i></i><input type="radio" name="rating-28-4" value="4"><i></i><input type="radio" name="rating-28-4" value="5"><i></i></span></td><td class="coluna-28-5" id="coluna-28-5"> <span class="star-rating"> <input type="radio" name="rating-28-5" value="1"><i></i> <input type="radio" name="rating-28-5" value="2"><i></i> <input type="radio" name="rating-28-5" value="3"><i></i><input type="radio" name="rating-28-5" value="4"><i></i><input type="radio" name="rating-28-5" value="5"><i></i></span></td></tr><tr class="d29" id="d29"><td><h3 class="coluna-29-0" id="coluna-29-0"> Loja Moda Íntima</h3></td><td class="coluna-29-1" id="coluna-29-1"><div class="autocomplete" style="width:300px;" id="autocomplete29" >
                      <input class="myInput29" name="myInput29"id="myInput29" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-29-2" id="coluna-29-2"> <span class="star-rating"> <input type="radio" name="rating-29-2" value="1"><i></i> <input type="radio" name="rating-29-2" value="2"><i></i> <input type="radio" name="rating-29-2" value="3"><i></i><input type="radio" name="rating-29-2" value="4"><i></i><input type="radio" name="rating-29-2" value="5"><i></i></span></td><td class="coluna-29-3" id="coluna-29-3"> <span class="star-rating"> <input type="radio" name="rating-29-3" value="1"><i></i> <input type="radio" name="rating-29-3" value="2"><i></i> <input type="radio" name="rating-29-3" value="3"><i></i><input type="radio" name="rating-29-3" value="4"><i></i><input type="radio" name="rating-29-3" value="5"><i></i></span></td><td class="coluna-29-4" id="coluna-29-4"> <span class="star-rating"> <input type="radio" name="rating-29-4" value="1"><i></i> <input type="radio" name="rating-29-4" value="2"><i></i> <input type="radio" name="rating-29-4" value="3"><i></i><input type="radio" name="rating-29-4" value="4"><i></i><input type="radio" name="rating-29-4" value="5"><i></i></span></td><td class="coluna-29-5" id="coluna-29-5"> <span class="star-rating"> <input type="radio" name="rating-29-5" value="1"><i></i> <input type="radio" name="rating-29-5" value="2"><i></i> <input type="radio" name="rating-29-5" value="3"><i></i><input type="radio" name="rating-29-5" value="4"><i></i><input type="radio" name="rating-29-5" value="5"><i></i></span></td></tr><tr class="d30" id="d30"><td><h3 class="coluna-30-0" id="coluna-30-0"> Madeireira</h3></td><td class="coluna-30-1" id="coluna-30-1"><div class="autocomplete" style="width:300px;" id="autocomplete30" >
                      <input class="myInput30" name="myInput30"id="myInput30" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-30-2" id="coluna-30-2"> <span class="star-rating"> <input type="radio" name="rating-30-2" value="1"><i></i> <input type="radio" name="rating-30-2" value="2"><i></i> <input type="radio" name="rating-30-2" value="3"><i></i><input type="radio" name="rating-30-2" value="4">
                      <i>

                    </i>
                      <input type="radio" name="rating-30-2" value="5">
                      <i></i>
                    </span>
                    </td>
                      <td class="coluna-30-3" id="coluna-30-3">
                         <span class="star-rating">
                         <input type="radio" name="rating-30-3" value="1">
                        <i>
                        
                      </i>
                         <input type="radio" name="rating-30-3" value="2">
                        <i>
                        
                      </i> <input type="radio" name="rating-30-3" value="3"><i></i><input type="radio" name="rating-30-3" value="4"><i></i><input type="radio" name="rating-30-3" value="5"><i></i></span></td><td class="coluna-30-4" id="coluna-30-4"> <span class="star-rating"> <input type="radio" name="rating-30-4" value="1"><i></i> <input type="radio" name="rating-30-4" value="2"><i></i> <input type="radio" name="rating-30-4" value="3"><i></i><input type="radio" name="rating-30-4" value="4"><i></i><input type="radio" name="rating-30-4" value="5"><i></i></span></td><td class="coluna-30-5" id="coluna-30-5"> <span class="star-rating"> <input type="radio" name="rating-30-5" value="1"><i></i> <input type="radio" name="rating-30-5" value="2"><i></i> <input type="radio" name="rating-30-5" value="3"><i></i><input type="radio" name="rating-30-5" value="4"><i></i><input type="radio" name="rating-30-5" value="5"><i></i></span></td></tr><tr class="d31" id="d31"><td><h3 class="coluna-31-0" id="coluna-31-0"> Manutenção instalação refrigeração</h3></td><td class="coluna-31-1" id="coluna-31-1"><div class="autocomplete" style="width:300px;" id="autocomplete31">
                      <input class="myInput31" name="myInput31" id="myInput31" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-31-2" id="coluna-31-2"> <span class="star-rating"> <input type="radio" name="rating-31-2" value="1"><i></i> <input type="radio" name="rating-31-2" value="2"><i></i> <input type="radio" name="rating-31-2" value="3"><i></i><input type="radio" name="rating-31-2" value="4"><i></i><input type="radio" name="rating-31-2" value="5"><i></i></span></td><td class="coluna-31-3" id="coluna-31-3"> <span class="star-rating"> <input type="radio" name="rating-31-3" value="1"><i></i> <input type="radio" name="rating-31-3" value="2"><i></i> <input type="radio" name="rating-31-3" value="3"><i></i><input type="radio" name="rating-31-3" value="4"><i></i><input type="radio" name="rating-31-3" value="5"><i></i></span></td><td class="coluna-31-4" id="coluna-31-4"> <span class="star-rating"> <input type="radio" name="rating-31-4" value="1"><i></i> 
                  <input type="radio" name="rating-31-4" value="2">
                  <i>

                  </i>
                   <input type="radio" name="rating-31-4" value="3">
                  <i>

                  </i>
                  <input type="radio" name="rating-31-4" value="4">
                  <i>
                    
                  </i>
                  <input type="radio" name="rating-31-4" value="5">
                  <i>
                    
                  </i>
                </span>
                </td>
                  <td class="coluna-31-5" id="coluna-31-5">
                     <span class="star-rating"> <input type="radio" name="rating-31-5" value="1"><i></i> <input type="radio" name="rating-31-5" value="2"><i></i> <input type="radio" name="rating-31-5" value="3"><i></i><input type="radio" name="rating-31-5" value="4"><i></i><input type="radio" name="rating-31-5" value="5"><i></i></span></td></tr><tr class="d32" id="d32"><td><h3 class="coluna-32-0" id="coluna-32-0"> Mármore /granito</h3></td><td class="coluna-32-1" id="coluna-32-1"><div class="autocomplete" style="width:300px;" id="autocomplete32" >
                     <input class="myInput32"name="myInput32" id="myInput32" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-32-2" id="coluna-32-2"> <span class="star-rating"> <input type="radio" name="rating-32-2" value="1"><i></i> <input type="radio" name="rating-32-2" value="2"><i></i> <input type="radio" name="rating-32-2" value="3"><i></i><input type="radio" name="rating-32-2" value="4"><i></i><input type="radio" name="rating-32-2" value="5"><i></i></span></td><td class="coluna-32-3" id="coluna-32-3"> <span class="star-rating"> <input type="radio" name="rating-32-3" value="1"><i></i> 
                     <input type="radio" name="rating-32-3" value="2">
                    <i>

                    </i> 
                    <input type="radio" name="rating-32-3" value="3">
                    <i>

                    </i>
                    <input type="radio" name="rating-32-3" value="4">
                    <i>

                    </i>
                    <input type="radio" name="rating-32-3" value="5">
                    <i>
                      
                    </i>
                  </span>
                  </td>
                    <td class="coluna-32-4" id="coluna-32-4">
                       <span class="star-rating">
                       <input type="radio" name="rating-32-4" value="1"><i></i> <input type="radio" name="rating-32-4" value="2"><i></i> <input type="radio" name="rating-32-4" value="3"><i></i><input type="radio" name="rating-32-4" value="4"><i></i><input type="radio" name="rating-32-4" value="5"><i></i></span></td><td class="coluna-32-5" id="coluna-32-5"> <span class="star-rating"> <input type="radio" name="rating-32-5" value="1"><i></i> <input type="radio" name="rating-32-5" value="2"><i></i> <input type="radio" name="rating-32-5" value="3"><i></i><input type="radio" name="rating-32-5" value="4"><i></i><input type="radio" name="rating-32-5" value="5"><i></i></span></td></tr><tr class="d33" id="d33"><td><h3 class="coluna-33-0" id="coluna-33-0"> Mercadinho e mercearia</h3></td><td class="coluna-33-1" id="coluna-33-1"><div class="autocomplete" style="width:300px;" id="autocomplete33" >
                       <input class="myInput33" name="myInput33" id="myInput33" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-33-2" id="coluna-33-2"> <span class="star-rating"> <input type="radio" name="rating-33-2" value="1"><i></i> <input type="radio" name="rating-33-2" value="2"><i></i> <input type="radio" name="rating-33-2" value="3"><i></i><input type="radio" name="rating-33-2" value="4"><i></i><input type="radio" name="rating-33-2" value="5"><i></i></span></td><td class="coluna-33-3" id="coluna-33-3"> <span class="star-rating"> <input type="radio" name="rating-33-3" value="1"><i></i> <input type="radio" name="rating-33-3" value="2"><i></i> <input type="radio" name="rating-33-3" value="3"><i></i><input type="radio" name="rating-33-3" value="4"><i></i><input type="radio" name="rating-33-3" value="5"><i></i></span></td><td class="coluna-33-4" id="coluna-33-4"> <span class="star-rating"> <input type="radio" name="rating-33-4" value="1"><i></i> <input type="radio" name="rating-33-4" value="2"><i></i> <input type="radio" name="rating-33-4" value="3"><i></i><input type="radio" name="rating-33-4" value="4"><i></i><input type="radio" name="rating-33-4" value="5"><i></i></span></td><td class="coluna-33-5" id="coluna-33-5"> <span class="star-rating"> <input type="radio" name="rating-33-5" value="1"><i></i> <input type="radio" name="rating-33-5" value="2"><i></i> <input type="radio" name="rating-33-5" value="3"><i></i><input type="radio" name="rating-33-5" value="4"><i></i><input type="radio" name="rating-33-5" value="5"><i></i></span></td></tr><tr class="d34" id="d34"><td><h3 class="coluna-34-0" id="coluna-34-0"> Nutricionista</h3></td><td class="coluna-34-1" id="coluna-34-1"><div class="autocomplete" style="width:300px;" id="autocomplete34" >
                       <input class="myInput34" name="myInput34" id="myInput34" style="width:200px" placeholder="Digite aqui o texto"><div id="myInput34autocomplete-list" class="autocomplete-items"><div><strong>C</strong>entro Ed. Pequeno Príncipe<input type="hidden" value="Centro Ed. Pequeno Príncipe"></div><div><strong>C</strong>hurrascaria do Bom<input type="hidden" value="Churrascaria do Bom"></div><div><strong>C</strong>entro Veterinário Pollastry Diógenes<input type="hidden" value="Centro Veterinário Pollastry Diógenes">
                  </div>
                  <div>
                    <strong>C

                  </strong>asa do Sertanejo
                    <input type="hidden" value="Casa do Sertanejo">
                  </div>
                  <div>
                    <strong>
                    C

                  </strong>enter Carne<input type="hidden" value="Center Carne">
                </div>
                  <div>
                    <strong>C
                    
                  </strong>enter Peças<input type="hidden" value="Center Peças">
                  </div>
                  <div>
                    <strong>C</strong>onnectvip<input type="hidden" value="Connectvip"></div><div><strong>C</strong>astelinho Perfumado<input type="hidden" value="Castelinho Perfumado"></div><div><strong>C</strong>asas Potiguar<input type="hidden" value="Casas Potiguar"></div><div><strong>C</strong>onstrutintas<input type="hidden" value="Construtintas"></div><div><strong>C</strong>asa da Madeira<input type="hidden" value="Casa da Madeira"></div><div><strong>C</strong>ASA DOS FERROS APODI<input type="hidden" value="CASA DOS FERROS APODI"></div><div><strong>C</strong>onstruflor  (Arteflor)<input type="hidden" value="Construflor  (Arteflor)"></div><div><strong>C</strong>entro Ótico<input type="hidden" value="Centro Ótico"></div><div><strong>C</strong>enter Magazine<input type="hidden" value="Center Magazine"></div></div></div></td><td class="coluna-34-2" id="coluna-34-2"> <span class="star-rating"> 
                      <input type="radio" name="rating-34-2" value="1"><i></i> <input type="radio" name="rating-34-2" value="2"><i></i> <input type="radio" name="rating-34-2" value="3"><i></i><input type="radio" name="rating-34-2" value="4"><i></i><input type="radio" name="rating-34-2" value="5"><i></i></span></td><td class="coluna-34-3" id="coluna-34-3"> <span class="star-rating"> <input type="radio" name="rating-34-3" value="1"><i></i> <input type="radio" name="rating-34-3" value="2"><i></i> <input type="radio" name="rating-34-3" value="3"><i></i><input type="radio" name="rating-34-3" value="4"><i></i><input type="radio" name="rating-34-3" value="5"><i></i></span></td><td class="coluna-34-4" id="coluna-34-4"> <span class="star-rating"> <input type="radio" name="rating-34-4" value="1"><i></i> <input type="radio" name="rating-34-4" value="2"><i></i> <input type="radio" name="rating-34-4" value="3"><i></i><input type="radio" name="rating-34-4" value="4"><i></i><input type="radio" name="rating-34-4" value="5"><i></i></span></td><td class="coluna-34-5" id="coluna-34-5"> <span class="star-rating"> <input type="radio" name="rating-34-5" value="1"><i></i> <input type="radio" name="rating-34-5" value="2"><i></i> <input type="radio" name="rating-34-5" value="3"><i></i><input type="radio" name="rating-34-5" value="4"><i></i><input type="radio" name="rating-34-5" value="5"><i></i></span></td></tr><tr class="d35" id="d35"><td><h3 class="coluna-35-0" id="coluna-35-0"> Oficina mecânica e Peças</h3></td><td class="coluna-35-1" id="coluna-35-1"><div class="autocomplete" style="width:300px;" id="autocomplete35" >
                    <input class="myInput35" name="myInput35" id="myInput35" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-35-2" id="coluna-35-2"> <span class="star-rating"> <input type="radio" name="rating-35-2" value="1"><i></i> <input type="radio" name="rating-35-2" value="2"><i></i> <input type="radio" name="rating-35-2" value="3"><i></i><input type="radio" name="rating-35-2" value="4"><i></i><input type="radio" name="rating-35-2" value="5"><i></i></span></td><td class="coluna-35-3" id="coluna-35-3"> <span class="star-rating"> <input type="radio" name="rating-35-3" value="1"><i></i> <input type="radio" name="rating-35-3" value="2"><i></i> <input type="radio" name="rating-35-3" value="3"><i></i><input type="radio" name="rating-35-3" value="4"><i>


                  </i><input type="radio" name="rating-35-3" value="5">
                  <i>
                    
                  </i>
                </span></td>
                  <td class="coluna-35-4" id="coluna-35-4">
                    <span class="star-rating">
                     <input type="radio" name="rating-35-4" value="1"><i></i> <input type="radio" name="rating-35-4" value="2"><i></i> <input type="radio" name="rating-35-4" value="3"><i></i><input type="radio" name="rating-35-4" value="4"><i></i><input type="radio" name="rating-35-4" value="5"><i></i></span></td><td class="coluna-35-5" id="coluna-35-5"> <span class="star-rating"> <input type="radio" name="rating-35-5" value="1"><i></i> <input type="radio" name="rating-35-5" value="2"><i></i> <input type="radio" name="rating-35-5" value="3"><i></i><input type="radio" name="rating-35-5" value="4"><i></i><input type="radio" name="rating-35-5" value="5"><i></i></span></td></tr><tr class="d36" id="d36"><td><h3 class="coluna-36-0" id="coluna-36-0"> Oficina mecânica e Peças automóvel</h3></td><td class="coluna-36-1" id="coluna-36-1"><div class="autocomplete" style="width:300px;" id="autocomplete36" <="" div="">
                     <input class="myInput36" name="myInput36" id="myInput36" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-36-2" id="coluna-36-2"> <span class="star-rating"> <input type="radio" name="rating-36-2" value="1"><i></i> <input type="radio" name="rating-36-2" value="2"><i></i> <input type="radio" name="rating-36-2" value="3"><i></i><input type="radio" name="rating-36-2" value="4"><i></i><input type="radio" name="rating-36-2" value="5"><i></i></span></td><td class="coluna-36-3" id="coluna-36-3"> <span class="star-rating"> <input type="radio" name="rating-36-3" value="1"><i></i> <input type="radio" name="rating-36-3" value="2"><i></i> <input type="radio" name="rating-36-3" value="3"><i></i><input type="radio" name="rating-36-3" value="4"><i></i><input type="radio" name="rating-36-3" value="5"><i></i></span></td><td class="coluna-36-4" id="coluna-36-4"> <span class="star-rating"> <input type="radio" name="rating-36-4" value="1"><i></i> <input type="radio" name="rating-36-4" value="2"><i></i> <input type="radio" name="rating-36-4" value="3"><i></i><input type="radio" name="rating-36-4" value="4"><i></i><input type="radio" name="rating-36-4" value="5"><i></i></span></td><td class="coluna-36-5" id="coluna-36-5"> <span class="star-rating"> <input type="radio" name="rating-36-5" value="1"><i></i> <input type="radio" name="rating-36-5" value="2"><i></i> <input type="radio" name="rating-36-5" value="3"><i></i><input type="radio" name="rating-36-5" value="4"><i></i><input type="radio" name="rating-36-5" value="5"><i></i></span></td></tr><tr class="d37" id="d37"><td><h3 class="coluna-37-0" id="coluna-37-0"> Ótica</h3></td><td class="coluna-37-1" id="coluna-37-1"><div class="autocomplete" style="width:300px;" id="autocomplete37" >
                     <input class="myInput37" name="myInput37" id="myInput37" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-37-2" id="coluna-37-2"> <span class="star-rating"> <input type="radio" name="rating-37-2" value="1"><i></i> <input type="radio" name="rating-37-2" value="2"><i></i> <input type="radio" name="rating-37-2" value="3"><i></i><input type="radio" name="rating-37-2" value="4"><i></i><input type="radio" name="rating-37-2" value="5"><i></i></span></td><td class="coluna-37-3" id="coluna-37-3"> <span class="star-rating"> <input type="radio" name="rating-37-3" value="1"><i></i> <input type="radio" name="rating-37-3" value="2"><i></i> <input type="radio" name="rating-37-3" value="3"><i></i><input type="radio" name="rating-37-3" value="4"><i></i><input type="radio" name="rating-37-3" value="5"><i></i></span></td><td class="coluna-37-4" id="coluna-37-4"> <span class="star-rating"> <input type="radio" name="rating-37-4" value="1"><i></i> <input type="radio" name="rating-37-4" value="2"><i></i> <input type="radio" name="rating-37-4" value="3"><i></i><input type="radio" name="rating-37-4" value="4"><i></i><input type="radio" name="rating-37-4" value="5"><i></i></span></td><td class="coluna-37-5" id="coluna-37-5"> <span class="star-rating"> <input type="radio" name="rating-37-5" value="1"><i></i> <input type="radio" name="rating-37-5" value="2"><i></i> <input type="radio" name="rating-37-5" value="3"><i></i><input type="radio" name="rating-37-5" value="4"><i></i><input type="radio" name="rating-37-5" value="5"><i></i></span></td></tr><tr class="d38" id="d38"><td><h3 class="coluna-38-0" id="coluna-38-0"> Panificadora (padaria)</h3></td><td class="coluna-38-1" id="coluna-38-1"><div class="autocomplete" style="width:300px;" id="autocomplete38">
                     <input class="myInput38" name="myInput38" id="myInput38" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-38-2" id="coluna-38-2"> <span class="star-rating"> <input type="radio" name="rating-38-2" value="1"><i></i> <input type="radio" name="rating-38-2" value="2"><i></i> <input type="radio" name="rating-38-2" value="3"><i></i><input type="radio" name="rating-38-2" value="4"><i></i><input type="radio" name="rating-38-2" value="5"><i></i></span></td><td class="coluna-38-3" id="coluna-38-3"> <span class="star-rating"> <input type="radio" name="rating-38-3" value="1"><i></i> <input type="radio" name="rating-38-3" value="2"><i></i> <input type="radio" name="rating-38-3" value="3"><i></i><input type="radio" name="rating-38-3" value="4"><i></i><input type="radio" name="rating-38-3" value="5"><i></i></span></td><td class="coluna-38-4" id="coluna-38-4"> <span class="star-rating"> <input type="radio" name="rating-38-4" value="1"><i></i> <input type="radio" name="rating-38-4" value="2"><i></i> <input type="radio" name="rating-38-4" value="3"><i></i><input type="radio" name="rating-38-4" value="4"><i></i><input type="radio" name="rating-38-4" value="5"><i></i></span></td><td class="coluna-38-5" id="coluna-38-5"> <span class="star-rating"> <input type="radio" name="rating-38-5" value="1"><i></i> <input type="radio" name="rating-38-5" value="2"><i></i> <input type="radio" name="rating-38-5" value="3"><i></i><input type="radio" name="rating-38-5" value="4"><i></i><input type="radio" name="rating-38-5" value="5"><i></i></span></td></tr><tr class="d39" id="d39"><td><h3 class="coluna-39-0" id="coluna-39-0"> Papelaria</h3></td><td class="coluna-39-1" id="coluna-39-1"><div class="autocomplete" style="width:300px;" id="autocomplete39" >
                     <input class="myInput39" name="myInput39" id="myInput39" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-39-2" id="coluna-39-2"> <span class="star-rating"> <input type="radio" name="rating-39-2" value="1"><i></i> <input type="radio" name="rating-39-2" value="2"><i></i> <input type="radio" name="rating-39-2" value="3"><i></i><input type="radio" name="rating-39-2" value="4"><i></i><input type="radio" name="rating-39-2" value="5"><i></i></span></td><td class="coluna-39-3" id="coluna-39-3"> <span class="star-rating"> <input type="radio" name="rating-39-3" value="1"><i></i> <input type="radio" name="rating-39-3" value="2"><i></i> <input type="radio" name="rating-39-3" value="3"><i></i><input type="radio" name="rating-39-3" value="4"><i></i><input type="radio" name="rating-39-3" value="5"><i></i></span></td><td class="coluna-39-4" id="coluna-39-4"> <span class="star-rating"> <input type="radio" name="rating-39-4" value="1"><i></i> <input type="radio" name="rating-39-4" value="2"><i></i> <input type="radio" name="rating-39-4" value="3"><i></i><input type="radio" name="rating-39-4" value="4"><i></i><input type="radio" name="rating-39-4" value="5"><i></i></span></td><td class="coluna-39-5" id="coluna-39-5"> <span class="star-rating"> <input type="radio" name="rating-39-5" value="1"><i></i> <input type="radio" name="rating-39-5" value="2"><i></i> <input type="radio" name="rating-39-5" value="3"><i></i><input type="radio" name="rating-39-5" value="4"><i></i><input type="radio" name="rating-39-5" value="5"><i></i></span></td></tr><tr class="d40" id="d40"><td><h3 class="coluna-40-0" id="coluna-40-0"> Personal Traineer</h3></td><td class="coluna-40-1" id="coluna-40-1"><div class="autocomplete" style="width:300px;" id="autocomplete40">
                     <input class="myInput40" name="myInput40" id="myInput40" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-40-2" id="coluna-40-2"> <span class="star-rating"> <input type="radio" name="rating-40-2" value="1"><i></i> <input type="radio" name="rating-40-2" value="2"><i></i> <input type="radio" name="rating-40-2" value="3"><i></i><input type="radio" name="rating-40-2" value="4"><i></i><input type="radio" name="rating-40-2" value="5"><i></i></span></td><td class="coluna-40-3" id="coluna-40-3"> <span class="star-rating"> <input type="radio" name="rating-40-3" value="1"><i></i> <input type="radio" name="rating-40-3" value="2"><i></i> <input type="radio" name="rating-40-3" value="3"><i></i><input type="radio" name="rating-40-3" value="4"><i></i><input type="radio" name="rating-40-3" value="5"><i></i></span></td><td class="coluna-40-4" id="coluna-40-4"> <span class="star-rating"> <input type="radio" name="rating-40-4" value="1"><i></i> <input type="radio" name="rating-40-4" value="2"><i></i> <input type="radio" name="rating-40-4" value="3"><i></i><input type="radio" name="rating-40-4" value="4"><i></i><input type="radio" name="rating-40-4" value="5"><i></i></span></td><td class="coluna-40-5" id="coluna-40-5"> <span class="star-rating"> <input type="radio" name="rating-40-5" value="1"><i></i> <input type="radio" name="rating-40-5" value="2"><i></i> <input type="radio" name="rating-40-5" value="3"><i></i><input type="radio" name="rating-40-5" value="4"><i></i><input type="radio" name="rating-40-5" value="5"><i></i></span></td></tr><tr class="d41" id="d41"><td><h3 class="coluna-41-0" id="coluna-41-0"> Petshop</h3></td><td class="coluna-41-1" id="coluna-41-1"><div class="autocomplete" style="width:300px;" id="autocomplete41">
                     <input class="myInput41" name="myInput41" id="myInput41" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-41-2" id="coluna-41-2"> <span class="star-rating"> <input type="radio" name="rating-41-2" value="1"><i></i> <input type="radio" name="rating-41-2" value="2"><i></i> <input type="radio" name="rating-41-2" value="3"><i></i><input type="radio" name="rating-41-2" value="4"><i></i><input type="radio" name="rating-41-2" value="5"><i></i></span></td><td class="coluna-41-3" id="coluna-41-3"> <span class="star-rating"> <input type="radio" name="rating-41-3" value="1"><i></i> <input type="radio" name="rating-41-3" value="2"><i></i> <input type="radio" name="rating-41-3" value="3"><i></i><input type="radio" name="rating-41-3" value="4"><i></i><input type="radio" name="rating-41-3" value="5"><i></i></span></td><td class="coluna-41-4" id="coluna-41-4"> <span class="star-rating"> <input type="radio" name="rating-41-4" value="1"><i></i> <input type="radio" name="rating-41-4" value="2"><i></i> <input type="radio" name="rating-41-4" value="3"><i></i><input type="radio" name="rating-41-4" value="4"><i></i><input type="radio" name="rating-41-4" value="5"><i></i></span></td><td class="coluna-41-5" id="coluna-41-5"> <span class="star-rating"> <input type="radio" name="rating-41-5" value="1"><i></i> <input type="radio" name="rating-41-5" value="2"><i></i> <input type="radio" name="rating-41-5" value="3"><i></i><input type="radio" name="rating-41-5" value="4"><i></i><input type="radio" name="rating-41-5" value="5"><i></i></span></td></tr><tr class="d42" id="d42"><td><h3 class="coluna-42-0" id="coluna-42-0"> Pizzaria</h3></td><td class="coluna-42-1" id="coluna-42-1"><div class="autocomplete" style="width:300px;" id="autocomplete42" >
                     <input class="myInput42" name="myInput42" id="myInput42" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-42-2" id="coluna-42-2"> <span class="star-rating"> <input type="radio" name="rating-42-2" value="1"><i></i> <input type="radio" name="rating-42-2" value="2"><i></i> <input type="radio" name="rating-42-2" value="3"><i></i><input type="radio" name="rating-42-2" value="4"><i></i><input type="radio" name="rating-42-2" value="5"><i></i></span></td><td class="coluna-42-3" id="coluna-42-3"> <span class="star-rating"> <input type="radio" name="rating-42-3" value="1"><i></i> <input type="radio" name="rating-42-3" value="2"><i></i> <input type="radio" name="rating-42-3" value="3"><i></i><input type="radio" name="rating-42-3" value="4"><i></i><input type="radio" name="rating-42-3" value="5"><i></i></span></td><td class="coluna-42-4" id="coluna-42-4"> <span class="star-rating"> <input type="radio" name="rating-42-4" value="1"><i></i> <input type="radio" name="rating-42-4" value="2"><i></i> <input type="radio" name="rating-42-4" value="3"><i></i><input type="radio" name="rating-42-4" value="4"><i></i><input type="radio" name="rating-42-4" value="5"><i></i></span></td><td class="coluna-42-5" id="coluna-42-5"> <span class="star-rating"> <input type="radio" name="rating-42-5" value="1"><i></i> <input type="radio" name="rating-42-5" value="2"><i></i> <input type="radio" name="rating-42-5" value="3"><i></i><input type="radio" name="rating-42-5" value="4"><i></i><input type="radio" name="rating-42-5" value="5"><i></i></span></td></tr><tr class="d43" id="d43"><td><h3 class="coluna-43-0" id="coluna-43-0"> Posto de combustível</h3></td><td class="coluna-43-1" id="coluna-43-1"><div class="autocomplete" style="width:300px;" id="autocomplete43">
                     <input class="myInput43" name="myInput43" id="myInput43" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-43-2" id="coluna-43-2"> <span class="star-rating"> <input type="radio" name="rating-43-2" value="1"><i></i> <input type="radio" name="rating-43-2" value="2"><i></i> <input type="radio" name="rating-43-2" value="3"><i></i><input type="radio" name="rating-43-2" value="4"><i></i><input type="radio" name="rating-43-2" value="5"><i></i></span></td><td class="coluna-43-3" id="coluna-43-3"> <span class="star-rating"> <input type="radio" name="rating-43-3" value="1"><i></i> <input type="radio" name="rating-43-3" value="2"><i></i> <input type="radio" name="rating-43-3" value="3"><i></i><input type="radio" name="rating-43-3" value="4"><i></i><input type="radio" name="rating-43-3" value="5"><i></i></span></td><td class="coluna-43-4" id="coluna-43-4"> <span class="star-rating"> <input type="radio" name="rating-43-4" value="1"><i></i> <input type="radio" name="rating-43-4" value="2"><i></i> <input type="radio" name="rating-43-4" value="3"><i></i><input type="radio" name="rating-43-4" value="4"><i></i><input type="radio" name="rating-43-4" value="5"><i></i></span></td><td class="coluna-43-5" id="coluna-43-5"> <span class="star-rating"> <input type="radio" name="rating-43-5" value="1"><i></i> <input type="radio" name="rating-43-5" value="2"><i></i> <input type="radio" name="rating-43-5" value="3"><i></i><input type="radio" name="rating-43-5" value="4"><i></i><input type="radio" name="rating-43-5" value="5"><i></i></span></td></tr><tr class="d44" id="d44"><td><h3 class="coluna-44-0" id="coluna-44-0"> Produtos agropecuários</h3></td><td class="coluna-44-1" id="coluna-44-1"><div class="autocomplete" style="width:300px;" id="autocomplete44" >
                     <input class="myInput44" name="myInput44" id="myInput44" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-44-2" id="coluna-44-2"> <span class="star-rating"> <input type="radio" name="rating-44-2" value="1"><i></i> <input type="radio" name="rating-44-2" value="2"><i></i> <input type="radio" name="rating-44-2" value="3"><i></i><input type="radio" name="rating-44-2" value="4"><i></i><input type="radio" name="rating-44-2" value="5"><i></i></span></td><td class="coluna-44-3" id="coluna-44-3"> <span class="star-rating"> <input type="radio" name="rating-44-3" value="1"><i></i> <input type="radio" name="rating-44-3" value="2"><i></i> <input type="radio" name="rating-44-3" value="3"><i></i><input type="radio" name="rating-44-3" value="4"><i></i><input type="radio" name="rating-44-3" value="5"><i></i></span></td><td class="coluna-44-4" id="coluna-44-4"> <span class="star-rating"> <input type="radio" name="rating-44-4" value="1"><i></i> <input type="radio" name="rating-44-4" value="2"><i></i> <input type="radio" name="rating-44-4" value="3"><i></i><input type="radio" name="rating-44-4" value="4"><i></i><input type="radio" name="rating-44-4" value="5"><i></i></span></td><td class="coluna-44-5" id="coluna-44-5"> <span class="star-rating"> <input type="radio" name="rating-44-5" value="1"><i></i> <input type="radio" name="rating-44-5" value="2"><i></i> <input type="radio" name="rating-44-5" value="3"><i></i><input type="radio" name="rating-44-5" value="4"><i></i><input type="radio" name="rating-44-5" value="5"><i></i></span></td></tr><tr class="d45" id="d45"><td><h3 class="coluna-45-0" id="coluna-45-0"> Produtos esportivos</h3></td><td class="coluna-45-1" id="coluna-45-1"><div class="autocomplete" style="width:300px;" id="autocomplete45" >
                     <input class="myInput45" name="myInput45" id="myInput45" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-45-2" id="coluna-45-2"> <span class="star-rating"> <input type="radio" name="rating-45-2" value="1"><i></i> <input type="radio" name="rating-45-2" value="2"><i></i> <input type="radio" name="rating-45-2" value="3"><i></i><input type="radio" name="rating-45-2" value="4"><i></i><input type="radio" name="rating-45-2" value="5"><i></i></span></td><td class="coluna-45-3" id="coluna-45-3"> <span class="star-rating"> <input type="radio" name="rating-45-3" value="1"><i></i> <input type="radio" name="rating-45-3" value="2"><i></i> <input type="radio" name="rating-45-3" value="3"><i></i><input type="radio" name="rating-45-3" value="4"><i></i><input type="radio" name="rating-45-3" value="5"><i></i></span></td><td class="coluna-45-4" id="coluna-45-4"> <span class="star-rating"> <input type="radio" name="rating-45-4" value="1"><i></i> <input type="radio" name="rating-45-4" value="2"><i></i> <input type="radio" name="rating-45-4" value="3"><i></i><input type="radio" name="rating-45-4" value="4"><i></i><input type="radio" name="rating-45-4" value="5"><i></i></span></td><td class="coluna-45-5" id="coluna-45-5"> <span class="star-rating"> <input type="radio" name="rating-45-5" value="1"><i></i> <input type="radio" name="rating-45-5" value="2"><i></i> <input type="radio" name="rating-45-5" value="3"><i></i><input type="radio" name="rating-45-5" value="4"><i></i><input type="radio" name="rating-45-5" value="5"><i></i></span></td></tr><tr class="d46" id="d46"><td><h3 class="coluna-46-0" id="coluna-46-0"> Professor (a)</h3></td><td class="coluna-46-1" id="coluna-46-1"><div class="autocomplete" style="width:300px;" id="autocomplete46">
                     <input class="myInput46" name="myInput46" id="myInput46" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-46-2" id="coluna-46-2"> <span class="star-rating"> <input type="radio" name="rating-46-2" value="1"><i></i> <input type="radio" name="rating-46-2" value="2"><i></i> <input type="radio" name="rating-46-2" value="3"><i></i><input type="radio" name="rating-46-2" value="4"><i></i><input type="radio" name="rating-46-2" value="5"><i></i></span></td><td class="coluna-46-3" id="coluna-46-3"> <span class="star-rating"> <input type="radio" name="rating-46-3" value="1"><i></i> <input type="radio" name="rating-46-3" value="2"><i></i> <input type="radio" name="rating-46-3" value="3"><i></i><input type="radio" name="rating-46-3" value="4"><i></i><input type="radio" name="rating-46-3" value="5"><i></i></span></td>
                  <td class="coluna-46-4" id="coluna-46-4"> <span class="star-rating"> <input type="radio" name="rating-46-4" value="1"><i></i> <input type="radio" name="rating-46-4" value="2"><i></i> <input type="radio" name="rating-46-4" value="3"><i></i><input type="radio" name="rating-46-4" value="4"><i></i><input type="radio" name="rating-46-4" value="5"><i></i></span></td><td class="coluna-46-5" id="coluna-46-5"> <span class="star-rating"> <input type="radio" name="rating-46-5" value="1"><i></i> <input type="radio" name="rating-46-5" value="2"><i></i> <input type="radio" name="rating-46-5" value="3"><i></i><input type="radio" name="rating-46-5" value="4"><i></i><input type="radio" name="rating-46-5" value="5"><i></i></span></td></tr><tr class="d47" id="d47"><td><h3 class="coluna-47-0" id="coluna-47-0"> Provedor de internet</h3></td><td class="coluna-47-1" id="coluna-47-1"><div class="autocomplete" style="width:300px;" id="autocomplete47">
                  <input class="myInput47"  name="myInput47" id="myInput47" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-47-2" id="coluna-47-2"> <span class="star-rating"> <input type="radio" name="rating-47-2" value="1"><i></i> <input type="radio" name="rating-47-2" value="2"><i></i> <input type="radio" name="rating-47-2" value="3"><i></i><input type="radio" name="rating-47-2" value="4"><i></i><input type="radio" name="rating-47-2" value="5"><i></i></span></td><td class="coluna-47-3" id="coluna-47-3"> <span class="star-rating"> <input type="radio" name="rating-47-3" value="1"><i></i> <input type="radio" name="rating-47-3" value="2"><i></i> <input type="radio" name="rating-47-3" value="3"><i></i><input type="radio" name="rating-47-3" value="4"><i></i><input type="radio" name="rating-47-3" value="5"><i></i></span></td><td class="coluna-47-4" id="coluna-47-4"> <span class="star-rating"> <input type="radio" name="rating-47-4" value="1"><i></i> <input type="radio" name="rating-47-4" value="2"><i></i> <input type="radio" name="rating-47-4" value="3"><i></i><input type="radio" name="rating-47-4" value="4"><i></i><input type="radio" name="rating-47-4" value="5"><i></i></span></td><td class="coluna-47-5" id="coluna-47-5"> <span class="star-rating"> <input type="radio" name="rating-47-5" value="1"><i></i> <input type="radio" name="rating-47-5" value="2"><i></i> <input type="radio" name="rating-47-5" value="3"><i></i><input type="radio" name="rating-47-5" value="4"><i></i><input type="radio" name="rating-47-5" value="5"><i></i></span></td></tr><tr class="d48" id="d48"><td><h3 class="coluna-48-0" id="coluna-48-0"> Psicólogo (a)</h3></td><td class="coluna-48-1" id="coluna-48-1"><div class="autocomplete" style="width:300px;" id="autocomplete48">
                  <input class="myInput48"  name="myInput48" id="myInput48" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-48-2" id="coluna-48-2"> <span class="star-rating"> <input type="radio" name="rating-48-2" value="1"><i></i> <input type="radio" name="rating-48-2" value="2"><i></i> <input type="radio" name="rating-48-2" value="3"><i></i><input type="radio" name="rating-48-2" value="4"><i></i><input type="radio" name="rating-48-2" value="5"><i></i></span></td><td class="coluna-48-3" id="coluna-48-3"> <span class="star-rating"> <input type="radio" name="rating-48-3" value="1"><i></i> <input type="radio" name="rating-48-3" value="2"><i></i> <input type="radio" name="rating-48-3" value="3"><i></i><input type="radio" name="rating-48-3" value="4"><i></i><input type="radio" name="rating-48-3" value="5"><i></i></span></td><td class="coluna-48-4" id="coluna-48-4"> <span class="star-rating"> <input type="radio" name="rating-48-4" value="1"><i></i> <input type="radio" name="rating-48-4" value="2"><i></i> <input type="radio" name="rating-48-4" value="3"><i></i><input type="radio" name="rating-48-4" value="4"><i></i><input type="radio" name="rating-48-4" value="5"><i></i></span></td><td class="coluna-48-5" id="coluna-48-5"> <span class="star-rating"> <input type="radio" name="rating-48-5" value="1"><i></i> <input type="radio" name="rating-48-5" value="2"><i></i> <input type="radio" name="rating-48-5" value="3"><i></i><input type="radio" name="rating-48-5" value="4"><i></i><input type="radio" name="rating-48-5" value="5"><i></i></span></td></tr><tr class="d49" id="d49"><td><h3 class="coluna-49-0" id="coluna-49-0"> Rações</h3></td><td class="coluna-49-1" id="coluna-49-1"><div class="autocomplete" style="width:300px;" id="autocomplete49">
                  <input class="myInput49"  name="myInput49" id="myInput49" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-49-2" id="coluna-49-2"> <span class="star-rating"> <input type="radio" name="rating-49-2" value="1"><i></i> <input type="radio" name="rating-49-2" value="2"><i></i> <input type="radio" name="rating-49-2" value="3"><i></i><input type="radio" name="rating-49-2" value="4"><i></i><input type="radio" name="rating-49-2" value="5"><i></i></span></td><td class="coluna-49-3" id="coluna-49-3"> <span class="star-rating"> <input type="radio" name="rating-49-3" value="1"><i></i> <input type="radio" name="rating-49-3" value="2"><i></i> <input type="radio" name="rating-49-3" value="3"><i></i><input type="radio" name="rating-49-3" value="4"><i></i><input type="radio" name="rating-49-3" value="5"><i></i></span></td><td class="coluna-49-4" id="coluna-49-4"> <span class="star-rating"> <input type="radio" name="rating-49-4" value="1"><i></i> <input type="radio" name="rating-49-4" value="2"><i></i> <input type="radio" name="rating-49-4" value="3"><i></i><input type="radio" name="rating-49-4" value="4"><i></i><input type="radio" name="rating-49-4" value="5"><i></i></span></td><td class="coluna-49-5" id="coluna-49-5"> <span class="star-rating"> <input type="radio" name="rating-49-5" value="1"><i></i> <input type="radio" name="rating-49-5" value="2"><i></i> <input type="radio" name="rating-49-5" value="3"><i></i><input type="radio" name="rating-49-5" value="4"><i></i><input type="radio" name="rating-49-5" value="5"><i></i></span></td></tr><tr class="d50" id="d50"><td><h3 class="coluna-50-0" id="coluna-50-0"> Restaurante/Churrascaria</h3></td><td class="coluna-50-1" id="coluna-50-1"><div class="autocomplete" style="width:300px;" id="autocomplete50">
                  <input class="myInput50"  name="myInput50" id="myInput50" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-50-2" id="coluna-50-2"> <span class="star-rating"> <input type="radio" name="rating-50-2" value="1"><i></i> <input type="radio" name="rating-50-2" value="2"><i></i> <input type="radio" name="rating-50-2" value="3"><i></i><input type="radio" name="rating-50-2" value="4"><i></i><input type="radio" name="rating-50-2" value="5"><i></i></span></td><td class="coluna-50-3" id="coluna-50-3"> <span class="star-rating"> <input type="radio" name="rating-50-3" value="1"><i></i> <input type="radio" name="rating-50-3" value="2"><i></i> <input type="radio" name="rating-50-3" value="3"><i></i><input type="radio" name="rating-50-3" value="4"><i></i><input type="radio" name="rating-50-3" value="5"><i></i></span></td><td class="coluna-50-4" id="coluna-50-4"> <span class="star-rating"> <input type="radio" name="rating-50-4" value="1"><i></i> <input type="radio" name="rating-50-4" value="2"><i></i> <input type="radio" name="rating-50-4" value="3"><i></i><input type="radio" name="rating-50-4" value="4"><i></i><input type="radio" name="rating-50-4" value="5"><i></i></span></td><td class="coluna-50-5" id="coluna-50-5"> <span class="star-rating"> <input type="radio" name="rating-50-5" value="1"><i></i> <input type="radio" name="rating-50-5" value="2"><i></i> <input type="radio" name="rating-50-5" value="3"><i></i><input type="radio" name="rating-50-5" value="4"><i></i><input type="radio" name="rating-50-5" value="5"><i></i></span></td></tr><tr class="d51" id="d51"><td><h3 class="coluna-51-0" id="coluna-51-0"> Salão de beleza feminino</h3></td><td class="coluna-51-1" id="coluna-51-1">
                  <div class="autocomplete" style="width:300px;" id="autocomplete51" >
                  <input class="myInput51"  name="myInput51" id="myInput51" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-51-2" id="coluna-51-2"> <span class="star-rating"> <input type="radio" name="rating-51-2" value="1"><i></i> <input type="radio" name="rating-51-2" value="2"><i></i> <input type="radio" name="rating-51-2" value="3"><i></i><input type="radio" name="rating-51-2" value="4"><i></i><input type="radio" name="rating-51-2" value="5"><i></i></span></td><td class="coluna-51-3" id="coluna-51-3"> <span class="star-rating"> <input type="radio" name="rating-51-3" value="1"><i></i> <input type="radio" name="rating-51-3" value="2"><i></i> <input type="radio" name="rating-51-3" value="3"><i></i><input type="radio" name="rating-51-3" value="4"><i></i><input type="radio" name="rating-51-3" value="5"><i></i></span></td><td class="coluna-51-4" id="coluna-51-4"> <span class="star-rating"> <input type="radio" name="rating-51-4" value="1"><i></i> <input type="radio" name="rating-51-4" value="2"><i></i> <input type="radio" name="rating-51-4" value="3"><i></i><input type="radio" name="rating-51-4" value="4"><i></i><input type="radio" name="rating-51-4" value="5"><i></i></span></td><td class="coluna-51-5" id="coluna-51-5"> <span class="star-rating"> <input type="radio" name="rating-51-5" value="1"><i></i> <input type="radio" name="rating-51-5" value="2"><i></i> <input type="radio" name="rating-51-5" value="3"><i></i><input type="radio" name="rating-51-5" value="4"><i></i><input type="radio" name="rating-51-5" value="5"><i></i></span></td></tr><tr class="d52" id="d52"><td><h3 class="coluna-52-0" id="coluna-52-0"> Site de notícias</h3></td><td class="coluna-52-1" id="coluna-52-1"><div class="autocomplete" style="width:300px;" id="autocomplete52" >
                  <input class="myInput52"  name="myInput52" id="myInput52" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-52-2" id="coluna-52-2"> <span class="star-rating"> <input type="radio" name="rating-52-2" value="1"><i></i> <input type="radio" name="rating-52-2" value="2"><i></i> <input type="radio" name="rating-52-2" value="3"><i></i><input type="radio" name="rating-52-2" value="4"><i></i><input type="radio" name="rating-52-2" value="5"><i></i></span></td><td class="coluna-52-3" id="coluna-52-3"> <span class="star-rating"> <input type="radio" name="rating-52-3" value="1"><i></i> <input type="radio" name="rating-52-3" value="2"><i></i> <input type="radio" name="rating-52-3" value="3"><i></i><input type="radio" name="rating-52-3" value="4"><i></i><input type="radio" name="rating-52-3" value="5"><i></i></span></td><td class="coluna-52-4" id="coluna-52-4"> <span class="star-rating"> <input type="radio" name="rating-52-4" value="1"><i></i> <input type="radio" name="rating-52-4" value="2"><i></i> <input type="radio" name="rating-52-4" value="3"><i></i><input type="radio" name="rating-52-4" value="4"><i></i><input type="radio" name="rating-52-4" value="5"><i></i></span></td><td class="coluna-52-5" id="coluna-52-5"> <span class="star-rating"> <input type="radio" name="rating-52-5" value="1">
                  <i></i> <input type="radio" name="rating-52-5" value="2"><i></i> <input type="radio" name="rating-52-5" value="3"><i></i><input type="radio" name="rating-52-5" value="4"><i></i><input type="radio" name="rating-52-5" value="5"><i></i></span></td></tr><tr class="d53" id="d53"><td><h3 class="coluna-53-0" id="coluna-53-0"> Supermercado</h3></td><td class="coluna-53-1" id="coluna-53-1"><div class="autocomplete" style="width:300px;" id="autocomplete53">
                  <input class="myInput53"  name="myInput53" id="myInput53" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-53-2" id="coluna-53-2"> <span class="star-rating"> <input type="radio" name="rating-53-2" value="1"><i></i> <input type="radio" name="rating-53-2" value="2"><i></i> <input type="radio" name="rating-53-2" value="3"><i></i><input type="radio" name="rating-53-2" value="4"><i></i><input type="radio" name="rating-53-2" value="5"><i></i></span></td><td class="coluna-53-3" id="coluna-53-3"> <span class="star-rating"> <input type="radio" name="rating-53-3" value="1"><i></i> <input type="radio" name="rating-53-3" value="2"><i></i> <input type="radio" name="rating-53-3" value="3"><i></i><input type="radio" name="rating-53-3" value="4"><i></i><input type="radio" name="rating-53-3" value="5"><i></i></span></td><td class="coluna-53-4" id="coluna-53-4"> <span class="star-rating"> <input type="radio" name="rating-53-4" value="1"><i></i> <input type="radio" name="rating-53-4" value="2"><i></i> <input type="radio" name="rating-53-4" value="3"><i></i><input type="radio" name="rating-53-4" value="4"><i></i>
                  <input type="radio" name="rating-53-4" value="5"><i></i></span></td><td class="coluna-53-5" id="coluna-53-5"> <span class="star-rating"> <input type="radio" name="rating-53-5" value="1"><i></i> <input type="radio" name="rating-53-5" value="2"><i></i> <input type="radio" name="rating-53-5" value="3"><i></i><input type="radio" name="rating-53-5" value="4"><i></i><input type="radio" name="rating-53-5" value="5"><i></i></span></td></tr><tr class="d54" id="d54"><td><h3 class="coluna-54-0" id="coluna-54-0"> Veterinário</h3></td><td class="coluna-54-1" id="coluna-54-1"><div class="autocomplete" style="width:300px;" id="autocomplete54">
                  <input class="myInput54"  name="myInput54" id="myInput54" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-54-2" id="coluna-54-2"> <span class="star-rating"> <input type="radio" name="rating-54-2" value="1"><i></i> <input type="radio" name="rating-54-2" value="2"><i></i> <input type="radio" name="rating-54-2" value="3"><i></i><input type="radio" name="rating-54-2" value="4"><i></i><input type="radio" name="rating-54-2" value="5"><i></i></span></td><td class="coluna-54-3" id="coluna-54-3"> <span class="star-rating"> <input type="radio" name="rating-54-3" value="1"><i></i> <input type="radio" name="rating-54-3" value="2"><i></i> <input type="radio" name="rating-54-3" value="3"><i></i><input type="radio" name="rating-54-3" value="4"><i></i><input type="radio" name="rating-54-3" value="5"><i></i></span></td><td class="coluna-54-4" id="coluna-54-4"> <span class="star-rating"> <input type="radio" name="rating-54-4" value="1"><i></i> <input type="radio" name="rating-54-4" value="2"><i></i> <input type="radio" name="rating-54-4" value="3"><i></i><input type="radio" name="rating-54-4" value="4"><i></i><input type="radio" name="rating-54-4" value="5"><i></i></span></td><td class="coluna-54-5" id="coluna-54-5"> <span class="star-rating"> <input type="radio" name="rating-54-5" value="1"><i></i> <input type="radio" name="rating-54-5" value="2"><i></i> <input type="radio" name="rating-54-5" value="3"><i></i><input type="radio" name="rating-54-5" value="4"><i></i><input type="radio" name="rating-54-5" value="5"><i></i></span></td></tr><tr class="d55" id="d55"><td><h3 class="coluna-55-0" id="coluna-55-0"> Vidraçaria</h3></td><td class="coluna-55-1" id="coluna-55-1"><div class="autocomplete" style="width:300px;" id="autocomplete55">
                  <input class="myInput55"  name="myInput55" id="myInput55" style="width:200px" placeholder="Digite aqui o texto"></div></td><td class="coluna-55-2" id="coluna-55-2"> <span class="star-rating"> <input type="radio" name="rating-55-2" value="1"><i></i> <input type="radio" name="rating-55-2" value="2"><i></i> <input type="radio" name="rating-55-2" value="3"><i></i><input type="radio" name="rating-55-2" value="4"><i></i><input type="radio" name="rating-55-2" value="5"><i></i></span></td><td class="coluna-55-3" id="coluna-55-3"> <span class="star-rating"> <input type="radio" name="rating-55-3" value="1"><i></i> <input type="radio" name="rating-55-3" value="2"><i></i> <input type="radio" name="rating-55-3" value="3"><i></i><input type="radio" name="rating-55-3" value="4"><i></i><input type="radio" name="rating-55-3" value="5"><i></i></span></td><td class="coluna-55-4" id="coluna-55-4"> <span class="star-rating"> <input type="radio" name="rating-55-4" value="1">
                <i>
                </i>
                 <input type="radio" name="rating-55-4" value="2"><i></i> <input type="radio" name="rating-55-4" value="3">
                <i>
                </i>
                <input type="radio" name="rating-55-4" value="4">
                <i>
                </i>
                <input type="radio" name="rating-55-4" value="5"><i></i></span>
            </td>
                <td class="coluna-55-5" id="coluna-55-5"> 
                <span class="star-rating"> 
                  <input type="radio" name="rating-55-5" value="1">
                <i>
                </i>
                 <input type="radio" name="rating-55-5" value="2">
                 <i></i> 
                 <input type="radio" name="rating-55-5" value="3">
                 <i></i>
                 <input type="radio" name="rating-55-5" value="4">
                <i>
                </i>
                <input type="radio" name="rating-55-5" value="5"><i></i></span>
            </td>
            </tr>
        </tbody>
              </table>
        <script>
          /***
           *  Academia
           *  Agencia de turismo
           *  Agência/serviço bancário
           *  Artigos para festa 
           *  Auto escola
           *  Açougue Estúdio 
           *  Barbearia
           *  Cantor / dupla /Banda 
           *  Clinica estética
           *  Clinica medica
           *  Colégio particular
           *  Comercio mais tempo de trabalho
           *  Decoração de festa
           *  Distribuidor água e gás 
           *  Doceria / confeitaria
           *  Emissora de Rádio 
           *  Equipamento de Informática 
           *  Escritório de advocacia
           *  Escritório de contabilidade
           *  Farmácia/Drogaria
           *  fisioterapeuta 
           *  Fotográfico
           *  Hamburgueria/Lanchonete 
           *  Hotel/ Pousada 
           *  Laboratório de análises clínicas
           *  Loja de Calçado 
           *  Loja de cosméticos
           *  Loja de móveis e eletrodomésticos
           *  Loja de tecidos/cama mesa e banho/ Utilidades para o lar
           *  Loja Moda Íntima 
           *  Madeireira 
           *  Manutenção instalação refrigeração
           *  Mármore /granito 
           *  Mercadinho e mercearia 
           *  Nutricionista 
           *  Oficina mecânica e Peças 
           *  Oficina mecânica e Peças automóvel
           *  Ótica
           *  Panificadora (padaria) 
           *  Papelaria
           *  Personal Traineer
           *  Petshop 
           *  Pizzaria 
           *  Posto de combustível
           *  produtos agropecuários 
           *  Produtos esportivos 
           *  Professor (a)
           *  Provedor de internet
           *  Psicólogo (a)
           *  Rações 
           *  Restaurante/Churrascaria
           *  Salão de beleza feminino
           *  Site de notícias
           *  Supermercado 
           *  Veterinário
           *  Vidraçaria 
           *
           **/
            var Segmentos = [
                'Academia',
                'Agencia de turismo',
                'Agência/serviço bancário',
                'Artigos para festa ',
                'Auto escola',
                'Açougue Estúdio ',
                'Barbearia',
                'Cantor / dupla /Banda ',
                'Clinica estética',
                'Clinica medica',
                'Colégio particular',
                'Comercio mais tempo de trabalho',
                'Decoração de festa',
                'Distribuidor água e gás ',
                'Doceria / confeitaria',
                'Emissora de Rádio ',
                'Equipamento de Informática ',
                'Escritório de advocacia',
                'Escritório de contabilidade',
                'Farmácia/Drogaria',
                'Fisioterapeuta ',
                'Fotográfico',
                'Hamburgueria/Lanchonete ',
                'Hotel/ Pousada ',
                'Laboratório de análises clínicas',
                'Loja de Calçado',
                'Loja de cosméticos',
                'Loja de móveis e eletrodomésticos',
                'Loja de tecidos/cama mesa e banho/ Utilidades para o lar',
                'Loja Moda Íntima',
                'Madeireira',
                'Manutenção instalação refrigeração',
                'Mármore /granito',
                'Mercadinho e mercearia',
                'Nutricionista',
                'Oficina mecânica e Peças',
                'Oficina mecânica e Peças automóvel',
                'Ótica',
                'Panificadora (padaria)',
                'Papelaria',
                'Personal Traineer',
                'Petshop',
                'Pizzaria',
                'Posto de combustível',
                'Produtos agropecuários',
                'Produtos esportivos',
                'Professor (a)',
                'Provedor de internet',
                'Psicólogo (a)',
                'Rações',
                'Restaurante/Churrascaria',
                'Salão de beleza feminino',
                'Site de notícias',
                'Supermercado',
                'Veterinário',
                'Vidraçaria'
                  ];   
            
            function gerar(){
                let lista  = document.getElementById('lista');
               
                for(var i = 0; i < Segmentos.length; i++){
                    let item  = document.createElement('tr');
                    var texto = "d"+i.toString();
                    
                    if(i%2==0){
                      
                      item.setAttribute("class", texto );
                      item.setAttribute("id", texto);
                      lista.appendChild(item);
                      let lista1  = document.getElementById(texto);
                    }
                    else{
                      item.setAttribute("class", texto);
                      item.setAttribute("id", texto);
                      lista.appendChild(item);
                      let lista1  = document.getElementById(texto);
                    }
                    for(var j=0; j< 6; j++){
                      if(j==0){
                        let item0   = document.createElement('h3');
                        item0.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item0);
                        var texto = 'coluna-'+j.toString()+'-'+i.toString();
                        item0.setAttribute("class", texto );
                        item0.setAttribute("id", texto);
                     
                      }
                      else if(j==1){
                      
                        let item  = document.createElement('td');
                        item.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item);
                        var texto = 'coluna-'+j.toString()+'-'+i.toString();
                        item.setAttribute("class", texto );
                        item.setAttribute("id", texto);
                      }
                      else if(j==2){
                  
                        let item  = document.createElement('td');
                        item.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item);
                        var texto = 'coluna-'+j.toString()+'-'+i.toString();
                        item.setAttribute("class", texto );
                        item.setAttribute("id", texto);
                        
                  
                      }
                      else if(j==3){
                        let item  = document.createElement('td');
                        item.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item);
                        var texto = 'coluna-'+j.toString()+'-'+i.toString();
                        item.setAttribute("class", texto );
                        item.setAttribute("id", texto);
                      }
                      else if(j==4){
                        let item  = document.createElement('td');
                        item.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item);
                        var texto = 'coluna-'+j.toString()+'-'+i.toString();
                        item.setAttribute("class", texto );
                        item.setAttribute("id", texto);
                      }
                      else if(j==5){
                        let item  = document.createElement('td');
                        item.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item);
                        var texto = 'coluna-'+j.toString()+'-'+i.toString();
                        item.setAttribute("class", texto );
                        item.setAttribute("id", texto);
                      }
                      else{
                        let item  = document.createElement('td');
                        item.appendChild(document.createTextNode(Segmentos[i]));
                        lista.appendChild(item);
                      }               

                    }
                         
                  }
              }
     
        function star(){
                  var bla;
                  var html = '<table class="indetificacao" id="userTbl" autocomplete="on">';
                  html += '<tbody id="lista" class="lista">';
                  html += '<div class="autocomplete" style="width:300px;"><input id="myInput" type="text" name="myCountry" placeholder="Country"> </div>'
                  html += '<tr bgcolor="#00a056"> ';
                  html += '<th><h4 style="color:white; text-shadow: 5px 5px 5px black;"> Segmento funcao 2              </h4></th>';
                  html += '<th><h4 style="color:white; text-shadow: 5px 5px 5px black;"> Nome da empresa          </h4></th>';
                  html += '<th><h4 style="color:white; text-shadow: 5px 5px 5px black;"> Acessibilidade           </h4></th>';
                  html += '<th><h4 style="color:white; text-shadow: 5px 5px 5px black;"> Atendimento              </h4></th>';
                  html += '<th><h4 style="color:white; text-shadow: 5px 5px 5px black;"> Forma de pagamento       </h4></th> ';
                  html += '<th><h4 style="color:white; text-shadow: 5px 5px 5px black;"> Preço                    </h4></th>';  
                  html += '</tr>';
                  for(var i = 0; i < Segmentos.length; i++){
                          html += '<tr class="d'+i+'" id="d'+i+'">';
                            for(var j=0; j< 6; j++){
                             if(j==0){
                                let test =Segmentos[i]
                                html += '<td><h3 class="coluna-'+i+'-'+j+'" id="coluna-'+i+'-'+j+'"> '+test+'</h3></td>';
                                
                              }
                              else if(j==1){
                                //html += '<td >bla<td >'
                                bla ='<div class="autocomplete" style="width:300px;" <input id="myInput'+ i +'" type="text" class="myInput" name="myCountry2" placeholder="Nome da empresa"></div>'
                                html += '<td class="coluna-'+i+'-'+j+'" id="coluna-'+i+'-'+j+'">'+bla+'</td>';
                                
                                autocomplete(document.getElementById("myInput"+i), countries);
                                  
                              }
                              else if(j==2){
                                html += '<td class="coluna-'+i+'-'+j+'" id="coluna-'+i+'-'+j+'"> <span class="star-rating"> <input type="radio" name="rating-'+i+'-'+j+'" value="1"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="2"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="3"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="4"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="5"><i></i></span></td>';
                              }
                              else if(j==3){
                                html += '<td class="coluna-'+i+'-'+j+'" id="coluna-'+i+'-'+j+'"> <span class="star-rating"> <input type="radio" name="rating-'+i+'-'+j+'" value="1"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="2"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="3"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="4"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="5"><i></i></span></td>';
                              }
                              else if(j==4){
                                html += '<td class="coluna-'+i+'-'+j+'" id="coluna-'+i+'-'+j+'"> <span class="star-rating"> <input type="radio" name="rating-'+i+'-'+j+'" value="1"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="2"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="3"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="4"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="5"><i></i></span></td>';
                              }
                              else if(j==5){
                                html += '<td class="coluna-'+i+'-'+j+'" id="coluna-'+i+'-'+j+'"> <span class="star-rating"> <input type="radio" name="rating-'+i+'-'+j+'" value="1"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="2"><i></i> <input type="radio" name="rating-'+i+'-'+j+'" value="3"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="4"><i></i><input type="radio" name="rating-'+i+'-'+j+'" value="5"><i></i></span></td>';
                              }
                              else{
                                html += '<h1>ERROR</h1>';
                              }
                            }
                            html += '</tr>';
                  }
                  html += '</tbody>';
                  html += '</table>';
                
                  // dump(html.innerHTML);
                  
                  
                  
                  document.tbody.innerHTML += html;
               
                  //document.blaa.innerHTML += html;
                  //innerHTML += html;
                  
           
            }
            /*function rodar(){
              for (let i = 0; i < 1; i++) {
                // autocomplete(document.getElementById("myInput"+i), countries);
                        
                             
               } */
        </script>

        <script> star(); </script>
                               
      </div>
     
      
     
      <div class="input-24">
        <label class="input-24" 
               for="inputSelect24">
              <h3> 24 – Na sua opinião qual a maior fragilidade do comércio de Apodi, sua resposta pode abranger até 3 opções? (1,2,3)</h3>
        </label>
           <!---
            1 Atendimento ()
            2 Preço ()
            3 Qualidade do produto/serviço ()
            4 Divulgação ()
            5 Variedade ()
            6 Forma de pagamento ()
            7 Acessibilidade ()
            8 Falta de opções de produtos/ serviços ()
            9 Outro ():_________
           --->
            <table>
              <tr bgcolor="#61d4bd" >
                <td>
                </td>
                <td >
                  <b>Fragilidades</b>
                </td>
              </tr>
            <tr bgcolor="#f1f1f1" >
              <td >
                <input type="checkbox" name="ckb" value="Atendimento" onclick='chkcontrol(0,"Atendimento");'>
              </td>
              <td >Atendimento</td>
            </tr>
            <tr bgcolor="#ffffff" >
              <td >
                <input type="checkbox" name="ckb" value="Preço" onclick='chkcontrol(1,"Preço");'>
              </td>
              <td >Preço</td>
            </tr>
            <tr bgcolor="#f1f1f1"><td>
              <input type="checkbox" name="ckb" value="Qualidade do produto/serviço" onclick='chkcontrol(2,"Qualidade do produto/serviço");'>
            </td>
            <td >Qualidade do produto/serviço</td></tr>
            <tr bgcolor="#ffffff" >
              <td>
                <input type="checkbox" name='ckb' value="Divulgação" onclick='chkcontrol(3,"Divulgação");'>
              </td>
            <td >Divulgação</td>
            </tr>
              <tr bgcolor="#f1f1f1" >
                <td>
                  <input type="checkbox" name='ckb' value="Variedade" onclick='chkcontrol(4,"Variedade");'>
                </td>
                <td >Variedade</td>
              </tr>
            <tr bgcolor="#ffffff" >
                <td>
                  <input type="checkbox" name='ckb' value="Forma de pagamento" onclick='chkcontrol(5,"Forma de pagamento");'>
                </td>
                <td >Forma de pagamento</td>
              </tr>
            <tr bgcolor="#f1f1f1" >
                <td>
                  <input type="checkbox" name="ckb" value="Acessibilidade "onclick='chkcontrol(6,"Acessibilidade");'>
                </td>
                <td >Acessibilidade</td>
              </tr>
              <tr bgcolor="#ffffff" >
                <td>
                  <input type="checkbox" name="ckb" value="Falta de opções de produtos/ serviços" onclick='chkcontrol(7,"Falta de opções de produtos/ serviços");'>
                </td>
                <td >Falta de opções de produtos/ serviços</td>
              </tr>
            <tr bgcolor="#f1f1f1" >
                <td>
                  <input type="checkbox" name="ckb" value="Outro" onclick='chkcontrol(8,"Outro");'>
                </td>
                <td >Outro</td>
              </tr>
        </table>
      </div>

      <div class="input-25">
        <label class="input-25" 
               for="inputSelect25">
              <h3> 25 – Qual tipo de comercio/ serviço você acharia interessante que existisse em Apodi?</h3>
        </label>
     
      <textarea rows="2" cols="30" maxlength="100" class="form-control is-invalid" id="inputSelect25" name="text-25" placeholder="Informe um comercio ou serviço... " required></textarea>        </div>

      <div class="input-26">
        <label class="input-26" 
               for="inputSelect26">
               <h3>26 – Qual tipo de comercio/SERVIÇO você acha que já está saturado na cidade?</h3>
        </label>
     
      
      <textarea rows="2" cols="30" maxlength="30" class="form-control is-invalid" id="inputSelect26" name="text-26" placeholder="Informe um comercio ou serviço... " required></textarea>
      </div>
      <div class="input-27" >
        <label class="input-27" 
               for="inputSelect27">
               <h3>27 – Deixe sua sugestão. Algum comentário para o comércio apodiense?</h3>
        </label> 
          
          <textarea rows="2" cols="30" maxlength="30" class="form-control is-invalid" id="inputSelect27" name="text-27" placeholder="Digite sua sugestão... " required></textarea>
      </div>
      <div class="espaco-50px">
        <?php
            if(!empty($_SESSION['dados'])){
             $usuario =  $_SESSION['dados']['usuario'];
             echo        $_SESSION['dados']['user']; 
        }
        ?>
      <a href="../assets/dados/perguntas_<?php echo  $usuario  ?>.csv" class="perguntas">Exportar perguntas</a>
      <input class="salvar" type="submit" name="submit" value="Salvar" align="center"/>
      <a href="../assets/dados/tabela_<?php echo  $usuario ?>.csv"    class="tabelas"> Exportar tabelas</a> 
      <a type="button" class="sincronizar" href="subi/">Sincronizar</a> 


      
    </div>

      
  </form>
  
</div>
</section>
</div>
</body>
</html>
