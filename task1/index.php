<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" id="inputT" name="text" placeholder="Tekst">
        <input type="submit" value="submit" name="submit">
        <div id="output"> <br>
        <?php
        if ($_POST['submit']!= '') {
            echo $_POST['text'];
        }
        ?>
        </div>
    </form>
</body>
</html>