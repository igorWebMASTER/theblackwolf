
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"/>
<script type="text/javascript" src="slide.js"></script>
<script type="text/javascript" src="js/funcs.js"></script> 
<title>The Black Wolf</title>
</head>
<body >
<?php 
echo '<meta charset=utf-8>';
require_once 'conexao/conecta.inc';
include 'includes/funcoesuteis.inc';
session_start();
$email       = isset($_SESSION['email'])?$_SESSION['email']:null;
$senha       = isset($_SESSION['senha'])?$_SESSION['senha']:null;
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;
$cod_usuario = isset($_SESSION['cod_usuario'])?$_SESSION['cod_usuario']:null;
if(isset($_SESSION['cod_usuario']) && isset($_SESSION['nomeUsuario'])){
include 'includes/headerUser.php';
}else{
include 'includes/header.php';
}

?>
<!-- lightbox-panel -->
<!-- lightbox -->
<div id="lightbox"> </div>  
<!-- lightbox -->
</div>
<div class="wrap">
<div id="logo">
<img class="logo" src="images/logo.png" width="180" height="200"/>             
</div>
<nav id="menu">
<ul class="menu">
            <div style="width:900px; float:left;">
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">CDs</a>
        <ul>
            <li> <a href="pop.php">Pop</a> </li>
            <li> <a href="heavymetal.php">Heavy Metal</a> </li>
            <li> <a href="alternativo.php">Alternativo</a> </li>
            <li> <a href="punk.php">Punk</a> </li>

        </ul>
            <li><a href="camisetas.php">Camisetas</a>
        <ul>
            <li><a href="masculino.php">Masculinas</a></li>
            <li><a href="feminino.php">Femininas</a></li>
        </ul>
        </li>
            <div   style="width:-100px; margin-left:100px; float:right;">
            <li><a href="contato.php">Contato</a></li>
            <li><a href="sobrenos.php">Sobre</a></li>
            <li><a href="index.php">Interatividade</a></li>
        </ul>
</nav>

<div id="banner">
<figure>
		<span class="trs next"></span>
		<span class="trs prev"></span>

		<div id="slider">
			<a href="#" class="trs"><img src="banner_img/1.jpg"/></a>
			<a href="#" class="trs"><img src="banner_img/2.jpg"/></a>
            <a href="#" class="trs"><img src="banner_img/3.jpg"/></a>
            <a href="#" class="trs"><img src="banner_img/4.jpg"/></a>		
		</div>
   <figcaption></figcaption>
	</figure>
</div>
<div id="lancamento">
<h2> Veja nossos lançamentos </h2>
<hr noshade size="5" width="100%" />
<center>
<table border="1" width="500" class="bordasimples" cellspacing="8" bgcolor="#990000">
  <tr>
    <td><a href="#" class="efeito">T shirt lançamento<img src="images/img1.jpg" name="img1" width="240" height="350" id="img1"></a> Preço : R$ 50,00</td>
    <td><a href="#" class="efeito">T shirt lançamento<img src="images/img2.jpg" name="img2" width="240" height="350" id="img2">Preço : R$ 50,00</td></a>
    <td><a href="#" class="efeito">T shirt lançamento<img src="images/img4.jpg" width="240" height="350">Preço : R$ 50,00</td></a>
    <td><a href="#" class="efeito">T shirt lançamento<img src="images/img6.jpg" width="240" height="350">Preço : R$ 50,00</td></a>
  </tr>
</table>

  <p>&nbsp;</p>
</center>
<div id="newsletter">
<center> <label><font size="4" >Newsletter</label><br/></font></center>
&nbsp;
Cadastre seu email para receber informações de produtos, novidades e promoções:<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
	<input type="text" name="email" value=""cols="100" rows="8"/> <input type="submit" value="Enviar" class="boton">


</div>
</div>
</div>

<div id="footer">

<div id="mapa1">/
  CDS  <br />  
  	<a href="sobrenos.php">Pop</a> <br />
    <a href="#">Rock</a><br />
    <a href="#">Punk</a><br />
    <a href="#">Metal</a><br />
    <a href="#">Eletronica</a><br />
</div>

<div id="mapa2">
CAMISETAS<br />
<a href="#">Feminino</a><br />
<a href="#">Masculino</a>
 </div>

<div id="pagamento">
 FORMAS DE PAGAMENTO <br />
<img src="images/pagamento.png" width="142" height="131"/>

</div>
 <div id="rodapelogo">
 <img src="images/logo.png" width="160" height="170"/><br/>
 <font color="#FFFFFF"> The Black wolf 2014
 </div></font>



<div id="redes">
REDES SOCIAIS<br />
<a href="#"><img src="images/insta.jpg" width="45" height="35"     /></a>
<a href="#"><img src="images/face.jpg" width="40" height="34"    /></a>
<a href="#"><img src="images/twitter.jpg" width="40" height="35"    /></a>
</div>





<script type="text/javascript">
	// Load jQuery
	google.load("jquery", "1.3");

	google.setOnLoadCallback(function() {
		// Seu código aqui
	});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("a#show-panel").click(function() {
            $("#lightbox, #lightbox-panel").fadeIn(300);
        })
        $("a#close-panel").click(function() {
            $("#lightbox, #lightbox-panel").fadeOut(300);
        })
    })
</script>

</body>
</html>