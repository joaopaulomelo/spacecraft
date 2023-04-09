<?php $this->layout("master") ?>

<div></div>
<h1>Lista de Naves</h1>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Modelo</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <?php foreach ($result as $results) : ?>

                <td>
                    <center><?= $this->e($results->name) ?></center>
                </td>

                <td>
                    <center><?= $this->e($results->model) ?></center>
                </td>


        </tr>
        <?php endforeach ?>

    </tbody>

</table>
