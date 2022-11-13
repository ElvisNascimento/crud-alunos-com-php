<?php
include_once('config.php');

$sql = "SELECT * FROM db_alunos.alunos ORDER BY matricula";

$result = $conexao->query($sql);

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container md-3">
    <h1>Alunos</h1>
    <hr />
    <table class=" table table-dark table-striped table-hover" sx={}>
        <thead class="table-dark">
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $aluno) {
                echo "<tr>
                <td>{$aluno['matricula']}</td>
                <td>{$aluno['name']}</td>
                <td>{$aluno['cidade']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

</div>