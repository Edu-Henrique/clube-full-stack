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


<?php $this->start('script') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js" integrity="sha512-lTLt+W7MrmDfKam+r3D2LURu0F47a3QaW5nF0c6Hl0JDZ57ruei+ovbg7BrZ+0bjVJ5YgzsAWE+RreERbpPE1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    axios.defaults.headers = {
        "Content-type":"application/json",
        HTTP_X_REQUESTED_WITH: "XMLHttpRequest",
    }

    async function loadUSers()
    {
        try{
            const {data} = await axios.get('/users');
            console.log(data);
        } catch (error){
            console.log('error', error);
        }
    }
    loadUSers();
</script>

<?php $this->stop()?>
