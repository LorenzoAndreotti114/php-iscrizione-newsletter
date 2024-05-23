
<?php 

    $valid_email = "123@gmail.com";

    $cur_email = $_GET["mail"];

    if ($cur_email == $valid_email) {

        $email_verifier = true;

    }
    else {
        $email_verifier = false;
    };

    var_dump($cur_email);
    var_dump($email_verifier);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <form action="index.php" method="GET">

        <label for="mail">Inserire la propria mail</label>
        <input type="email" name="mail" id="mail">

        <input type="submit" value="INVIO">

    </form>

</body>

</html>