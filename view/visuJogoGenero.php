<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Genero do jogo</label>
    <div class="input-group">
      <div class="input-group-text">Genero</div>
      <input type="text" name="generoJogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Genero do jogo">
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
$generojogo = isset ($_POST["generoJogo"])? $_POST["generoJogo"]:"" ;

if($generojogo){

$dado = visuJogoGenero($conn,$generojogo);

foreach($dado as $generoJogo): 
?>
    <tr>
      <th scope="row"><?=$generoJogo["idjogo"] ?></th>
      <td><?=$generoJogo["nomejogo"] ?></td>
      <td><?=$generoJogo["valorjogo"] ?></td>
      <td><?=$generoJogo["qtdjogo"] ?></td>
      <td><?=$generoJogo["generojogo"] ?></td>
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