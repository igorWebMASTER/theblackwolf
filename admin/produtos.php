<?php
include '../includes/userAdm.inc';
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/favicon.ico"/>
<script type="text/javascript" src="../slide.js"></script>

<title>The Black Wolf</title>
</head>

<body >

<div id="header">
<div id="dv1">

    <div id="bprocura2">
    </div>   

    <div id="carrinho"><a href="index.php"><img src="../images/administrator.png" height="25px"></a> &nbsp;
    <a href="../logout.php"><img src="../images/logout.png" height="25px"> </a>
</div>
<!-- lightbox-panel --><div id="lightbox-panel">
   <center> <h2>Faça seu Login </h2><p></center>
    <hr noshade size="5" width="100%" />
    <div id="login-box-label"> </div>
<div class="input-div" id="input-usuario">Email: &nbsp;
	<input type="text" value=""/>
</div>
<div class="input-div" id="input-senha">Senha:&nbsp;
	<input type="password" value"Senha"/>
<br>
</div>

<div id="botoes">
<div id="botão"></div>
<div id="lembrar-senha"> <input type="checkbox" />
Lembrar minha senha
</div><br/>

<input type="submit" value="Enviar" class="envio">&nbsp;&nbsp;
<a id="cadast" href="cadastrar.php" font color="black" >Cadastre-se</a></font> 
</div>
    
    
    
    </p>
    <p align="center">
        <a id="close-panel" href="#">Fechar</a>
    </p>
</div>
<!-- lightbox-panel -->

<!-- lightbox -->
<div id="lightbox"> </div>  
<!-- lightbox -->
 
</div>
<div class="wrap">
<div id="logo">
<img src="../images/logo.png" width="180" height="200"/>             
</div>
<nav id="menu">
<ul class="menu">
            <div style="width:900px; float:left;">
            <li><a href="index.php">Home</a></li>
                        <li><a href="listarUsuarios.php">Cliente</a>
        <ul>
                    <li> <a href="pedidos.php">Pedidos</a> </li>
                    <li> <a href="listarEndereco.php">Enderecos</a> </li>
                    <li> <a href="listaContatos.php">Contatos</a> </li> 
        </ul>
                            <li><a href="produtos.php">Produtos</a>
        <ul>
            <li><a href="listarCategorias.php"> Categoria </a></li>
            <li><a href="pagamentos.php">Pagamentos </a></li>
        </ul>
        </li>
            <div style="width:-100px; margin-left:100px; float:right;">
            <li><a href="administrador.php">Administrador</a></li>
            <li><a href="listaLogs.php">Logs</a></li>
            <li><a href="newsletter.php">Newsletter</a></li>
        </ul>
</nav>
<section>
    <div id="produtos" >
            <div ><img src="../images/produtos.png" class="icons"></div>
    <h2>Produtos Cadastrados</h2><br>
      <a href='inserirProduto.php'><input type="button" name="inserir" value="Inserir Produto" class="botao"></a>
   <?php
echo '<table  class="list_users"  width="1000px"';
echo '<tr>';
echo '<th>Código Produto</th>';
echo '<th>Nome</th>';
echo '<th>Descricao</th>';
echo '<th>Artista</th>';
echo '<th>Preço</th>';
echo '<th>Quantidade em estoque</th>';
echo '<th>Imagem</th>';
echo '<th colspan=2>Ação</th>';
 include '../conexao/conecta.inc';
     $query = "SELECT * FROM produto";
     $result = mysql_query($query);
        while($obj = mysql_fetch_array($result))
        {
    echo '</tr>';
    echo '<tr>';
    echo '<td>'.$obj['ID_PRODUTO'].'</td>';  
    echo '<td>'.$obj['NOME_PRODUTO'].'</td>';  
    echo '<td>'.substr($obj['DESCRICAO_PRODUTO'],0,40).'...</td>';  
    echo '<td>'.$obj['ARTISTA_PRODUTO'].'</td>';  
    echo '<td>R$'.$obj['PRECO_PRODUTO'].'</td>';  
    echo '<td>'.$obj['QTDE_PRODUTO'].'</td>';
    echo '<td>'.'<img src="../images/'.$obj['PRODUTO_IMAGEM'].'"  class="img_admin" >'.'</td>';  
    echo '<td> <a href=frmAtualizarProduto.php?codigo='.$obj['ID_PRODUTO'].'><img src="../images/edit2.png" class="icons"/> </a></td>';
    echo '<td> <a href=excluirProduto.php?codigo='.$obj['ID_PRODUTO'].'><img src="../images/delete6.png" class="icons"/>  </a></td>';
    echo '</tr>';

}

       echo '</table>';

?>

</div>
</div>
</section>


<div id="footer">



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
      ../;
        })
        $("a#close-panel").click(function() {
            $("#lightbox, #lightbox-panel").fadeOut(300);
        })
    })
</script>

</body>
</html>



