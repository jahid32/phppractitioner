
<?php require_once 'partials/header.php'; ?>
<?php
foreach ($users as $user)
    echo $user->name . '<br>';
?>

<form action="/names" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
<?php require_once 'partials/footer.php'; ?>