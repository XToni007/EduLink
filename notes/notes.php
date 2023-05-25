<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notes</title>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Podkova"/>
        <link rel="icon" type="images/png" href="logo/logo.png"/>
        <link rel="stylesheet" href="notes2.css">
    </head>
  <body>
    <header>
        <img src="../logo/logo.png"> 
        <p class="Logo" style="left: 10px; bottom: 8px; font-size: 40px;"><a href="index.php">EduLink</a></p>
        <p class="navbar"><a href="../service/services.php">Service</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../aboutus/aboutus.php">About Us</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../login/login.php">Login</a></p>
    </header>
    <main>
      <form>
        <label for="note">Create a new note:</label>
        <input type="text" id="note" name="note">
        <button type="submit">Add Note</button>
      </form>
      <ul id="notes-list"></ul>
    </main>
    <footer>
        <img src="..\assets\instagram.png">
        <img src="..\assets\facebook.png">
        <img src="..\assets\twitter.png">
    </footer>
  </body>
  <script src="../notes/notes.js"></script>
</html>