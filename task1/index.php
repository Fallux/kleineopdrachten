<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>index</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" id="inputT" name="text" placeholder="Tekst">
        <input type="submit" value="submit" name="submit">
        <div id="output"> hier komt de tekst: <br> </br>
        <?php
        if (isset($_POST['submit'])!= '') {
            echo $_SESSION['text'];
        }
        ?>
        </div>
    </form>
    <div><a href="update.php">update de tekst</a></div>
</body>
</html>