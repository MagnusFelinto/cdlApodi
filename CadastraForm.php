<?php 
require 'C:/Users/magnu/vendor/league/csv/autoload.php';
if(!session_id()) session_start(); 
use League\Csv\Reader;
use League\Csv\Writer;
$Segmentos = [
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
    'Vidraçaria'];
$n = count($Segmentos);//56;


if (!empty($_POST))
 {   $usuario='';
    if(!empty($_SESSION['dados'])){
     $usuario =  $_SESSION['dados']['usuario']; 
    }

    $DateAndTime= date('m-d-Y h:i:s a', time());
    $filename1 = __DIR__.'/dados/perguntas_'. $usuario.'.csv';
    $filename2 = __DIR__.'/dados/tabela_'. $usuario.'.csv';
    $existe1 = file_exists($filename1);
    $existe2 = file_exists($filename2);
    $Dados1 = fopen($filename1, mode:'a');
    $Dados2 = fopen($filename2, mode:'a');
    $csv = Writer::createFromStream($Dados1);

    if(!$existe1){  
    $csv ->insertOne([
        '0 - Area',
        '1 - Local da entrevista' ,
        '2 - Segmento',
        '3 – Gênero ',
        '4 – Identidade de gênero',
        '5 Orientação sexual',
        '6 – Faixa etária',
        '7 - Escolaridade',
        '8 - Faixa de renda',
        '9- Você possui algum animal de criação/estimação?',
        '10- Em sua residência alguma pessoa utiliza serviço de saúde como, plano de saúde, academia, farmácia, entre outros.',
        '11- Na sua residência há algum veículo?',
        '12 - Você costuma comprar pela internet?',
        '13- Com qual frequência costuma fazer essa compra por internet?',
        '14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente? select 01',
        '14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente? select 02',
        '14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente? select 03',
        '15 - Você já teve um negócio próprio antes?',
        '16 – Qual a sua ocupação de trabalho?',
        '17 – Qual método de pagamento que você mais utiliza',
        '18 – Você viaja para fora da cidade de Apodi, se sim com que frequência:',
        '19 – SE a resposta anterior tiver sido SIM, pra qual cidade você costuma viajar com mais frequência, se NÃO coloque a resposta a baixo como “Não”!',
        '20 – Caso a questão 17 tenha sido positiva, qual o motivo dessa viagem?',
        '21 – Tipo de moradia:',
        '22 – Quantas pessoas moram na sua casa:',
        '24 – Na sua opinião qual a maior fragilidade do comércio de Apodi, sua resposta pode abranger até 3 opções? (1,2,3)', 
        '25 – Qual tipo de comercio/ serviço você acharia interessante que existisse em Apodi?',
        '26 – Qual tipo de comercio/SERVIÇO você acha que já está saturado na cidade?',   
        '27 – Deixe sua sugestão. Algum comentário para o comércio apodiense?'
       
     ]);   
      
    }

    $q0         = $_POST['area'];
    if($q0 == 'Area Rural')
        $q1         = $_POST['area2'];
    else
        $q1         = $_POST['area1'];
    
    $q2         = $_POST['inlineRadioOptions-02'];
    $q3         = $_POST['inlineRadioOptions-03'];
    $q4         = $_POST['inlineRadioOptions-04'];
    $q5         = $_POST['inlineRadioOptions-05'];
    $q6         = $_POST['inlineRadioOptions-06'];
    $q7         = $_POST['inlineRadioOptions-07'];
    $q8         = $_POST['inlineRadioOptions-08'];
    $q9         = $_POST['inlineRadioOptions-09'];
    $q10        = $_POST['inlineRadioOptions-10'];
    $q11        = $_POST['inlineRadioOptions-11'];
    $q12        = $_POST['inlineRadioOptions-12'];
    $q13        = $_POST['inlineRadioOptions-13'];
    $select14_0 = $_POST['inputSelect14-00'];
    $select14_1 = $_POST['inputSelect14-01'];
    $select14_2 = $_POST['inputSelect14-02'];
    $q15        = $_POST['inlineRadioOptions-15'];//inlineRadioOptions-15 // anterior -> inlineRadioOptions-15
    $q16        = $_POST['inlineRadioOptions-16'];
    $q17        = $_POST['inlineRadioOptions-17'];
    $q18        = $_POST['inlineRadioOptions-18'];
    $q19        = $_POST['inlineRadioOptions-19'];
    if ($q19 == 'Sim') {
        $q19    = $_POST['inlineRadioSim-input-19'];
    }
    $q20        = $_POST['inlineRadioOptions-20'];
    if ($q20 == 'Outro') {
        $q20 = $_POST['inlineRadioOptions-20-outro'];
    }
    $q21        = $_POST['inlineRadioOptions-21'];
    $q22        = $_POST['inlineRadioOptions-22'];  
    $q24        = $_POST['ckb'];
    $q25        = $_POST['text-25'];   
    $q26        = $_POST['text-26'];  
    $q27        = $_POST['text-27'];  
 //================ Formulario ===================\\  
 for ($i=0; $i < $n; $i++) { 
    $Empresa[$i]         = $_POST['myInput'.$i    ];
    $Acessibilidade[$i]  = $_POST['rating-'.$i.'-2'];
    $Atendimento[$i]     = $_POST['rating-'.$i.'-3'];
    $Pagamento[$i]       = $_POST['rating-'.$i.'-4'];
    $Preco[$i]           = $_POST['rating-'.$i.'-5'];
    
}
 //===============================================\\
 /*$csv ->insertOne([
    '0 - Area',
     '1 - Local da entrevista' ,
     '2 - Segmento',
     '3 – Gênero ',
     '4 – Identidade de gênero',
    '5 Orientação sexual',
    '6 – Faixa etária',
    '7 - Escolaridade',
    '8 - Faixa de renda',
    '9- Você possui algum animal de criação/estimação?',
    '10- Em sua residência alguma pessoa utiliza serviço de saúde como, plano de saúde, academia, farmácia, entre outros.',
    '11- Na sua residência há algum veículo?',
    '12 - Você costuma comprar pela internet?',
    '13- Com qual frequência costuma fazer essa compra por internet?',
    '14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente? select 01',
    '14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente? select 02',
    '14 - Quais as 3 categorias que você mais compra na internet em uma ordem decrescente? select 03',
    '15 - Você já teve um negócio próprio antes?',
    '16 – Qual a sua ocupação de trabalho?',
    '17 – Qual método de pagamento que você mais utiliza',
    '18 – Você viaja para fora da cidade de Apodi, se sim com que frequência:',
    '19 – SE a resposta anterior tiver sido SIM, pra qual cidade você costuma viajar com mais frequência, se NÃO coloque a resposta a baixo como “Não”!',
    '20 – Caso a questão 17 tenha sido positiva, qual o motivo dessa viagem?',
    '21 – Tipo de moradia:',
    '22 – Quantas pessoas moram na sua casa:',
    '24 – Na sua opinião qual a maior fragilidade do comércio de Apodi, sua resposta pode abranger até 3 opções? (1,2,3)', 
    '25 – Qual tipo de comercio/ serviço você acharia interessante que existisse em Apodi?',
    '26 – Qual tipo de comercio/SERVIÇO você acha que já está saturado na cidade?',   
    '27 – Deixe sua sugestão. Algum comentário para o comércio apodiense?'
   
 ]); */
 //$Dados = fopen($filename , mode:"w");
 
 $csv ->insertOne([ 
    $q0        ,
    $q1        ,
    $q2        ,
    $q3        ,
    $q4        ,
    $q5        ,
    $q6        ,
    $q7        ,
    $q8        ,
    $q9        ,
    $q10       ,
    $q11       ,
    $q12       ,
    $q13       ,
    $select14_0,
    $select14_1,
    $select14_2,
    $q15       ,
    $q16       ,
    $q17       ,
    $q18       ,
    $q19       ,
    $q20       ,
    $q21       ,
    $q22       , 
    $q24       ,
    $q25       ,   
    $q26       ,
    $q27       ,

 ]); 


 /*
 $csv ->insertOne([ 
    ''
    
 ]); 

 $csv ->insertOne([ 
    ' '    
 ]); */
 //$csv = Reader::createFromStream($Dados1);
 //$csv -> setHeaderOffset(0);
 //$csv->output($DateAndTime.".csv");

 $csv2 = Writer::createFromStream($Dados2);
if (!$existe2) {  
  $csv2 ->insertOne([ 
    "Segmento",
    "Nome da empresa",
    "Acessibilidade",
    "Atendimento",
    "Forma de pagamento",
    "Preço"
    ]
    );
}

for ($i=0; $i < $n; $i++) { 
    $csv2 ->  insertOne([
        $Segmentos[$i], 
        $Empresa[$i],
        $Acessibilidade[$i],
        $Atendimento[$i],
        $Pagamento[$i],
        $Preco[$i]
    ]);
} 
//$csv = Reader::createFromStream($Dados2);
//$csv -> setHeaderOffset(0);
//$csv2->output($DateAndTime.".csv");
}
else
{  
     header('Location: '.'index.php');
     die();
}

?>