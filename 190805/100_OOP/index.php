<?php
session_start();
    if(isset($_POST["btnOK"])){
        $username = $_POST["txtUserName"];
        if($username == ""){
            $prompt = "please keyin";
        }else{
        $_SESSION["uid"]=$_POST["txtUserName"];
        header("location: hello.php");
        }
    }else{
        echo "first time";
    }
$prompt="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        Your name:
        <input type="text" name="txtUserName">
        <input type="submit" name="btnOK" value="OK">
        <br>
        <?php echo $prompt ;?>
    </form>
</body>
</html>