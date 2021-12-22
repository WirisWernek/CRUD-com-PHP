<?php
include_once './includes/header.php';
include_once './includes/message.php';
include_once './php_action/db_connect.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="striped">
        <thead>
        <tr>
            <th>Nome:</th>
            <th>Sobrenome:</th>
            <th>Email:</th>
            <th>Idade:</th>
        </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($connect, $sql);
            if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                
                    echo "<tr>";
                    echo "<td>" . $dados['nome'] . "</td>";
                    echo "<td>" . $dados['sobrenome'] . "</td>";
                    echo "<td>" . $dados['email'] . "</td>";
                    echo "<td>" . $dados['idade'] . "</td>";
                    echo '<td><a href="./editar.php?id=' . $dados['id'] . '" class="btn-floating orange"><i class="material-icons">edit</i></a></td>';
                    echo '<td><a href="#modal' . $dados['id'] . '" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>';
                
                ?>  
                <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                            <h4>Opa!</h4>
                            <p>Tem certeza que deseja excluir esse cliente?</p>
                        </div>
                            <div class="modal-footer">
                            
                            <form action="./php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </tr>
<?php 
                endwhile; 
            else: 
            ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <br>
    <a href="./adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>


<?php
include_once './includes/footer.php';
?>
