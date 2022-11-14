<?php
include_once('config.php');

$sql = "SELECT * FROM db_alunos.alunos ORDER BY matricula";

$result = $conexao->query($sql);

"INSERT INTO `db_alunos`.`alunos` (`matricula`, `name`, `cidade`) VALUES ('025', 'Allan', 'fortaleza');"

    ?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container md-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Alunos</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Novo Cadastro
        </button>
    </div>
    <hr />
    <!-- modal para adicionar Cadastro -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Aluno</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="cadastro.php" method="POST">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="nome">

                        <label>Cidade:</label>
                        <input class="form-control" type="text" name="cidade">

                        <label>Matricula:</label>
                        <input class="form-control" type="number" name="matricula">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button class="btn btn-secondary" name="cadastrar" data-bs-dismiss="modal">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class=" table table-dark table-striped table-hover" sx={}>
        <thead class="table-dark">
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Cidade</th>
               <!-- <th>Ações</th>-->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $aluno) {
                echo "<tr>
                <td>{$aluno['matricula']}</td>
                <td>{$aluno['nome']}</td>
                <td>{$aluno['cidade']}</td>
                <!--<td><button class='btn btn-warning'>Editar</button>
                <button onclick='deletar()' class='btn btn-danger'>Apagar</button>-->
                </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</div>