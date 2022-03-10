<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do jogo</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="nomeJogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do jogo">
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
  <?php
$nomejogo = isset ($_POST["nomeJogo"])? $_POST["nomeJogo"]:"" ;

if($nomejogo){

$dado = visuJogoNome($conn,$nomejogo);

foreach($dado as $nomeJogo): 
?>
    <tr>
      <th scope="row"><?=$nomeJogo["idjogo"] ?></th>
      <td><?=$nomeJogo["nomejogo"] ?></td>
      <td><?=$nomeJogo["valorjogo"] ?></td>
      <td><?=$nomeJogo["qtdjogo"] ?></td>
      <td><?=$nomeJogo["generojogo"] ?></td>
    </tr>
    <?php
      endforeach;
    }
    ?>
  </tbody>
</table>

</div>

<?php

include_once("../view/footer.php")

?>