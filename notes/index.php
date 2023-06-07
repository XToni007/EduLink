<?php

$connection = require_once 'pdo.php';

$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => ''
];

if (isset($_GET['id'])){
    $currentNote = $connection->getNoteById($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css">
</head>

<body>
<header>
    <h1>EduLink</h1>
    <div class="navigation">
    <p><a href="../aboutus/"><strong>Our People</strong></a></p>
    <p><a href="../login/login.php"><strong>Login</strong></a></p>
    </div>
</header>
<div>
    <form class="new-note" action="save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>">
        <input type="text" name="title" placeholder="Note title" autocomplete="off" value="<?php echo $currentNote['title'] ?>">
        <input class="note-description" type="text" name="description" cols="30" rows="4"
                  placeholder="Note Description"><?php echo $currentNote['description'] ?></input>
        <button class="create">
            <?php if ($currentNote['id']): ?>
                Update Note
            <?php else: ?>
                New Note
            <?php endif; ?>
        </button>
    </form>
    <div class="notes">
        <?php foreach ($notes as $note): ?>
            <div class="note">
                <div class="title">
                    <a href="?id=<?php echo $note['id'] ?>"><?php echo $note['title'] ?></a>
                </div>
                <div class="description">
                    <?php echo $note['description'] ?>
                </div>
                <small><?php echo $note['create_date'] ?></small>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
                    <button class="close">X</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<footer>
    <div class="info">
        <div class="product">
            <div class="logo">
                <img src="../logo/logo_black.png">
            </div>
            <div class="brand">
                <h2>EduLink</h2>
            </div>
        </div>
        <p>Copyright © 2021 EduLink. All rights reserved.</p>
    </div>
    <div class="sosmed">
       <h1>Find Us:</h1>
       <a href="#"><img src="../assets/facebook.png"></a>
       <a href="#"><img src="../assets/instagram.png"></a>
       <a href="#"><img src="../assets/twitter.png"></a>
    </div>
</footer>
</body>

</html>