<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora Consumo Rejunte Inkor</title>
   <img src="logo.png" alt="some text" width=310 height=75> 
   <meta charset = "UTF-8">
    <br/>
    <font style="font-family:fantasy"size="12" >
    <p>CALCULADORA&nbsp;&nbsp;CONSUMO&nbsp;&nbsp;DE&nbsp;&nbsp;REJUNTE</p> </font>
    <pre>
</head> 
<body>
<font size="6" color="Black"> <b>Insira as medidas abaixo:</b>

<form action="" method="post">
<font size="6 " color="red"> <b>Área da Peça</b></font>

    <font size="5" color="black"> <b>Largura em cm:</b>  <input type="text" name="lar" style="width:90px; height:25px;"><br> </font>
    <font size="5" color="black"> <b>Comprimento em cm:</b> <input type="text" name="comp" style="width:90px; height:25px;"><br> </font>
    <font size="5" color="black"> <b>Metros Quadrados de Assentamento M²:</b> <input type="text" name="mqa" style="width:90px; height:25px;"><br> </font>          
<font size="6" color="red"> <b>Dimensões da Junta</b></font> 
 
    <font size="5" color="black"> <b>Profundidade: Conforme tabela 1:</b> <input type="text" name="prof" style="width:90px; height:25px;"><br> </font>
    <font size="5" color="black"> <b>Largura da fuga em mm:</b> <input type="text" name="laf" style="width:90px; height:25px;"><br> </font>
<font size="6" color="red"> <b>Tipo de Rejunte</b> </font>
    
    <font size="5" color="black"> <b>Coeficientes: Conforme tabela 2:</b> <input type="text" name="coef" style="width:90px; height:25px;"><br> </font> 
 <input type="submit" style="width: 110px; height: 35px; background-color:#fa0000; font-family:sans-serif "name="total" value="CALCULAR">
   </form>
    <font size="6" style="background-color:#fa0000"> <b>TABELA 1</b> </font>                    <font size="6" style="background-color:#fa0000"> <b>TABELA 2</b> </font>
          
    <font size="5"> <b>PROFUNDIDADE</b>                          <b>COEFICIENTES</b>
                                    
      <b>PISO</b>:8                                 <b>REJUNTE</b>:1.75
      <b>PORCELANATO</b>:8                          <b>HIPER</b>:1.75
      <b>PASTILHA</b>:4                             <b>HIPER PLUS</b>:1.75
      <b>PEDRA</b>:MEDIR                            <b>RESIKOR</b>:2.54
                                             <b>ACRILICO</b>:1.58
       <pre>
      
<?php
  
          
  $lar = isset($_POST['lar']) ? $_POST['lar'] : '';
  $total = isset($_POST['total']) ? $_POST['total'] : '';
  $comp = isset($_POST['comp']) ? $_POST['comp'] : '';
  $prof = isset($_POST['prof']) ? $_POST['prof'] : '';
  $laf = isset($_POST['laf']) ? $_POST['laf'] : '';
  $coef = isset($_POST['coef']) ? $_POST['coef'] : '';
  $mqa = isset($_POST['mqa']) ? $_POST['mqa'] : '';   
   
    if( !empty($total) ) {
     if($total == 'CALCULAR')
      $total = (((($lar*10)+($comp*10))*$prof*$laf*$coef)/($lar*$comp*100))*$mqa;
   }
             echo "<pre> <b>O resultado do Consumo é: $total KG</b>;";
          
?>       
</body>
</html>
