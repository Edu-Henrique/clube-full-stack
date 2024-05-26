<a href="?page=create_user">Create user</a>

<a href="/?page=contato">Contato</a>

<h1>Página inicial</h1>

<?= get("message"); ?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>id</td>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <?php
        $users = all("users");
        foreach ($users as $user):
    ?>
    <tr>
        <td><?= $user->id; ?></td>
        <td><?= $user->nome; ?></td>
        <td><?= $user->sobrenome; ?></td>
        <td><a href="?page=edit_user&id=<?= $user->id; ?>" class="btn btn-success">Editar</a></td>
        <td><a href="?page=delete_user&id=<?= $user->id; ?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
