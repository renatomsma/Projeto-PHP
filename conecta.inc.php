<?php
// conectando ao servidor
$conexao = mysqli_connect("localhost","id13745096_root","5oIH(/VH#pK\U9_u");
// conectando ao BD criado
$db = mysqli_select_db($conexao, "id13745096_site");
// Executando query e retornando valores da tabela "pedidos"
$query = mysqli_query($conexao, "SELECT * FROM pedidos");
if($conexao)
?>
