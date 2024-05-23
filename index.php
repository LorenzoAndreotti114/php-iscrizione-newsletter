
<?php 

    var_dump($_POST);

    $error;
    $result;

    include __DIR__ . "/functions.php";

    if (isset($_POST["email"])) {

        $user_email = $_POST["email"];

        if (empty($user_email)) {

            $error = "Inserisci email!";

        }
        else if (!emailValidator($user_email)) {

            $error = "email deve contenere @ o . ";

        }
        else {
            $result = "Login completato!";

            header("Location: ./template/thankyou.php");
            die();
        }

    }
    
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
    
    <form action="index.php" method="POST">

        <label for="email">Inserire la propria mail</label>
        <input type="email" name="email" id="email">

        <input type="submit" value="INVIO">

    </form>

    <?php if (isset($error)) { ?>

        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>

    <?php } else if(isset($result)) { ?>

        <div class="alert alert-success">
            <?php echo $result ?>
        </div>

    <?php } ?>

</body>

</html>