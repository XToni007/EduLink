<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title>Drop-down Profile Menu</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <header>
        <img src="../logo/logo.png" class="logo"> 
        <p class="Logo" style="left: 10px; bottom: 8px; font-size: 40px;"><a href="index.php">EduLink</a></p>
        <p class="navbar"><a href="../notes/notes.php">Notes</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../forum/forums.php">Forums</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../vbl/VBL.php">VBL</a></p>
        <p style="font-size: 40px; bottom: 18px;">|</p> 
            <img src="../assets/antonio.jpg" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                    <div class="user-info">
                        <img src="../assets/antonio.jpg">
                        <h3>Antonio Fandako</h3>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="../assets/profile.png">
                        <h3>Edit Profile</h3>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="../assets/setting.png">
                        <h3>setting account</h3>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="../assets/logout.png">
                        <h3>Log Out</h3>
                        <span>></span>
                    </a>
                </div>
            </div>
    </header>
    <h1>Welcome to Our <br>Website</h1>
    <h2>Enjoy Learning</h2>
    <hr width="40%">
    <button type="button"><a href="../register/register.php">Join Us !</a></button>

    <footer>
        <img src="../assets/instagram.png">
        <img src="../assets\facebook.png">
        <img src="../assets\twitter.png">
    </footer>
    
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

    </script>

</body>
</html>