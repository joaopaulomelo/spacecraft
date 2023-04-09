<?php $this->layout("master") ?>

<div></div>
<h1>Lista de Naves - Completo</h1>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Fabricante</th>
            <th>Custo em créditos</th>
            <th>Comprimento</th>
            <th>Velocidade atmosférica máxima</th>
            <th>Equipe</th>
            <th>Passageiros</th>
            <th>Capacidade de Carga</th>
            <th>Consumíveis</th>
            <th>Avaliação do hiperdrive</th>
            <th>MGLT</th>
            <th>Classe de nave estelar</th>
            <th>Pilotos</th>
            <th>Filmes</th>
            <th>Criado</th>
            <th>Editado</th>
            <th>Url</th>
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

                <td>
                    <center><?= $this->e($results->manufacturer) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->cost_in_credits) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->length) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->max_atmosphering_speed) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->crew) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->passengers) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->cargo_capacity) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->consumables) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->hyperdrive_rating) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->MGLT) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->starship_class) ?></center>
                </td>
                <td>
                    <?php if ($results->pilots) : ?>
                        <?php foreach ($results->pilots as $pilots) : ?>
                            <center><a href="<?= $this->e($pilots) ?>"><?= $this->e($pilots) ?></a></center><br>
                        <?php endforeach ?>
                    <?php endif ?>
                </td>
                <td>
                    <?php if ($results->films) : ?>
                        <?php foreach ($results->films as $films) : ?>
                            <center><a href="<?= $this->e($films) ?>"><?= $this->e($films) ?></a></center><br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <center>N/A</center>

                    <?php endif ?>
                </td>

                <td>
                    <center><?= $this->e($results->created) ?></center>
                </td>
                <td>
                    <center><?= $this->e($results->edited) ?></center>
                </td>
                <td>
                    <center><a href="<?= $this->e($results->url) ?>"><?= $this->e($results->url) ?></a></center><br>

                </td>
        </tr>
    <?php endforeach ?>

    </tbody>

</table>