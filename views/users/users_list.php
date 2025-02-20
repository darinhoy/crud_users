<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user_id'])) :
    $userRole = $_SESSION['user_role']; // Get the user role from session
?>
<div class="container mt-4">
    <h1>Users List</h1>

    <!-- Display "Create" button for admin users only -->
    <?php if ($userRole == 'admin') : ?>
        <a href="/users/create" class="btn btn-primary">Create</a>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <!-- Display "Actions" column only for admin users -->
                <?php if ($userRole == 'admin') : ?>
                    <th>Actions</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index=> $user): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['role'] ?></td>

                <!-- Display action buttons only for admin users -->
                <?php if ($userRole == 'admin') : ?>
                    <td>
                        <a href="/users/edit/<?= $user['id'] ?>"><i class="material-icons">edit</i></a>
                        <a href="/users/delete/<?= $user['id'] ?>"><i class="material-icons text-danger">delete</i></a>
                    </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php 
else: 
    $this->redirect("/users/login"); 
endif; 
?>