<?php
include_once './includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Cliente</h3>
<form action="./php_action/create.php" method="post">
       <div class="input-field col s12">
           <input type="text" name="nome" id="nome">
           <label for="nome">Nome</label>
       </div>
       <div class="input-field col s12">
           <input type="text" name="sobrenome" id="sobrenome">
           <label for="sobrenome">Sobrenome</label>
       </div>
       <div class="input-field col s12">
           <input type="email" name="email" id="email">
           <label for="email">E-mail</label>
       </div>
       <div class="input-field col s12">
           <input type="number" name="idade" id="idade">
           <label for="idade">Idade</label>
       </div>

      <input class="btn" type="submit" name="btn-cadastrar" value="Cadastrar">
      <button class="btn green"><a href="./index.php">Lista de Clientes</a></button>
   </form>
    </div>
</div>


<?php
include_once './includes/footer.php';
?>
