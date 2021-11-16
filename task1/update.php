<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="styleUpdate.css">
        <title>update</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" id="inputT" name="text" placeholder="Tekst">
            <input type="submit" value="update" name="submit">
            <div id="output"> <br>
    </body>
</html>



<?php
if ($_POST['submit'] = '') {
    echo "you pressed submit";
}

?>