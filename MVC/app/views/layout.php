<!DOCTYPE html>
<html>
    <head>
        <title>My MVC Application</title>
    </head>
    <body>
        <?php require 'app/views/'. $vies . '.php'; ?>
    </body>
</html>

<!-- app/views/home.php -->
 <h1>Welcome to the Home page</h1>
 <h2>Users:</h2>
 <ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?></li>
    <?php endforeach; ?>
 </ul>