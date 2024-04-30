<?php
    //print_r($_SERVER);
    //print_r($_POST);
    
    // if(isset($_GET['name'])) {
    //     echo $_GET['name'];
    // }
    // if(isset($_GET['age'])) {
    //     echo $_GET['age'];
    // } 

   
    $email = htmlspecialchars($_POST['email']) ?? '';//coalescing   
    $email = filter_var($_POST['email'], 
        FILTER_SANITIZE_SPECIAL_CHARS); 
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $email;
    echo $password;
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form 
        action="<?php echo 
            htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST"
        >
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>