<?php 
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deletarusUario($conn,$codigoUsu)){
 echo ("Usuariio excluido com sucesso.");   
}else{
echo ("Usuariio não excluio.");
}
include_once("../view/footer.php");  

?>