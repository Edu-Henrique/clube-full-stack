<h2>Users</h2>

<ul class="list-group list-group-flush" >
    <?php foreach ($users as $user): ?>

        <li class="list-group-item" ><?php echo $user->nome; ?> | <a href="/user/<?php echo $user->id; ?>">detalhes</a></li>

    <?php endforeach; ?>
</ul>
