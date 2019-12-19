<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora Consumo Rejunte Inkor</title>
   <meta charset = "UTF-8">
    <font size="4">
</head>
<body>
   <form action="" method="post" >
       
       <pre> CALCULADORA CONSUMO REJUNTE INKOR 
       <pre>   
      Largura em cm: <input name="num1" type="text"><br>
      Comprimento em cm: <input name="num2" type="text"><br>
      Metros Quadrados de Assentamento m²: <input name="mqa" type="text"><br>   
      

      Profundidade: Conforme tabela 1
       <input name = "prof" type="text"><br>
       Largura da fuga em mm:
       <input name = "laf" type="text"><br>
       Coeficientes: Conforme tabela 2
       <input name = "coef" type="text"><br>
       <input type="submit" name="operacao" value="Calcular">
   <form> 

         TABELA 1                       TABELA 2
         
         PROFUNDIDADE                   COEFICIENTES
                                    
         PISO:8                         REJUNTE:1.75
         PORCELANATO:8                  HIPER:1.75
         PASTILHA:4                     HIPER PLUS:1.75
         PEDRA: MEDIR                   RESIKOR:2.54
                                        ACRILICO:1.58
       <pre>
      
<?php
  
   $lar = $_POST['num1'];
   $tota= $_POST['operacao'];
   $comp= $_POST['num2'];
   $prof= $_POST['prof'];
   $lf= $_POST['laf'];
   $coef= $_POST["coef"];
   $mqa= $_POST['mqa'];   
   
    if( !empty($tota) ) {
     if($tota == 'Calcular')
      $tota = (((($lar*10)+($comp*10))*$prof*$lf*$coef)/($lar*$comp*100))*$mqa;
   }
            echo "<pre> O resultado do Consumo é: $tota KG";
          
?>       
</body>
</html>