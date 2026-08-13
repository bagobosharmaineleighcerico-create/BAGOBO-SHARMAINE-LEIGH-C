<?php session_start();

if ($_SESSION['fname'] == 'leigh') {

?>

<DOCTYPE html>
    <html lang="en">

    <head>
        meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>WELCOME TO THE HOMEPAGE!</h1>
    <h2>
        <?php echo $_SESSION['fname'] . $_SESSION['iname'] ?>
</h2>
<a type="button"href="logout.php">Logout</a>
</body>

</html>

<?php } else {

    echo "you dont have permission to access this";

}?>
