<?php $this->layout('master', ['title' => $this->e($title)]) ?>
<h2>Users</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Detalhes</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $user): ?>

    <tr>
        <th scope="row"><?php echo $user->id; ?></th>
        <td><?php echo $user->nome; ?></td>
        <td><?php echo $user->sobrenome; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><a href="/user/<?php echo $user->id; ?>">detalhes</a></td>
    </tr>

    <?php endforeach; ?>

    </tbody>
</table>