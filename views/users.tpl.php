
<?php require_once 'partials/header.php'; ?>
<h1>User list</h1>
<?php
foreach ($users as $user)
    echo $user->name . '<br>';
?>
<h2>Add User</h2>
<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
<?php require_once 'partials/footer.php'; ?>