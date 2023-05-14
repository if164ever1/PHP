<?php

$title = 'User list';
ob_start();
?>

<h1>User list</h1>
<a href="#" class="btn btn-success">Create new user</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">Admin</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <th scope="row"><?php $user['id']; ?></th>
                <td><?php $user['login']; ?></td>
                <td><?php $user['is_admin'] ? 'Yes' : 'No'; ?></td>
                <td><?php $user['created_at']; ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#"class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php 
$content = ob_get_clean();
include "app/views/layout.php";
?>