<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/app.css" type="text/css">

    <title></title>
  </head>
<style media="screen">

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body>

 <form class="" action="index.html" method="post">

 </form>

 <div class="annonce">


 <h1>SICHT AN 9 165 DOUDESANNONCEN</h1>
  <?php
  include 'inc/db_params.inc.php';
  include 'inc/contents/details.inc.php';
  include("inc/ALLOWED_PAGES.inc.php");

  if(isset($_GET["view"])){
        if(in_array($_GET["view"],ALLOWED_PAGES) && file_exists("inc/contents/{$_GET["view"]}.inc.php")){
          $view = $_GET["view"];
        }
        else{
          $view = "uebersicht";
        }
      }
      else{
        $view = "uebersicht";
      }

  echo "
  <form class='' action='index.php' method='post'>
   <input type='text' class='virnumm' name='' value='' placeholder='Virnumm'> <input type='text' name='' value='' placeholder='Familljennumm'>
   <button type='submit'><i class='fa fa-search'></i></button> <input type='date' name='' value='' placeholder='14.09.2022'>
   <br>
   <a href='' class='sich'>Erweidert sich</a>
    <p class='exampleText'>SICHT________</p>
    <button type='button' name='button' class='doudesannonce'>Doudesannonce publizéiren</button>
  </form>
  ";

  echo "<p class='new'>NEISTEN</p>";
  echo "<p class='newannonce'>ANNONCE______</p>";
  echo "<p class='verstuerwe'>VERSTUERWE</p>";
  echo "<p class='perso'>PERSÉINLECHKEETEN_____</p>";
  echo "<p class='kaerz'>KÄERZEN_____</p>";
  echo "<p class='premium'>PREMIUM</p>";
  echo "<p class='partners'>PARTNERS_____</p>";
  echo "<p class='wat'>WAT</p>";
  echo "<p class='maachen'>MAACHEN</p>";
  echo "<p class='bei'>BEI</p>";
  echo "<p class='engem'>ENGEM</p>";
  echo "<p class='doudesfall'>DOUDESFALL__</p>";
  ?>
 </div>
<hr>
 <table class="tabelle">
   <tr>
     <td><img src="img/marie-elise.png" id="pictures"></td>
      <td><img src="img/anna-maria.png" id="pictures"></td>
       <td><img src="img/gerty-heinen.png" id="pictures"></td>
        <td><img src="img/alexandre-schlesser.png" id="pictures"></td>
   </tr>
 </table>

<table class="populartabelle">
  <tr>
    <td><img src="img/queen.png" id="pictures"></td>
     <td><img src="img/michail.png" id="pictures"></td>
      <td><img src="img/olivia.png" id="pictures"></td>
       <td><img src="img/dusty.png" id="pictures"></td>
  </tr>
</table>

<table class="thirdtabelle">
  <tr>
    <td><img src="img/welter.png" id="pictures"></td>
  </tr>
</table>


<table class="fourtabelle">
  <tr>
    <td><img src="img/partners.png" id="pictures"></td>
  </tr>
</table>

<table class="fifthtabelle">
  <tr>
    <td><img src="img/doudeschain.png" id="pictures"></td>
  </tr>
  <tr>
    <td><img src="img/verpflichtung.png" id="pictures"></td>
  </tr>
  <tr>
    <td><img src="img/testament.png" id="pictures"></td>
  </tr>
</table>
  </body>
</html>
