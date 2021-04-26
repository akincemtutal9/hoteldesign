<html>
<head>
<style type ="text/css">
* table{
    padding: 1;
    margin: 1;
    box-sizing: border-box;
}
body {
    margin: 50px auto;
    text-align: center;
    width: 1000px;
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
</style>
</head>
<body>
<h1>Akın Cem Tutal Hotel</h1>
<h2>LOGIN</h2>
<?php
if(!empty($_POST['username']) and !empty($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
if($username=="akincemtutal" and $password == "1"){
    header("Location:/client/index_user.html?username=$username");
    die();
}
else{
    echo "WRONG!";
}
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
username: <input type="text" name="username" value=""><br>
password: <input type="password" name="password" value=""><br>
<input type="submit" value="Confirm">
<p>If you don't have account please register :<a href="register.html"> Register </a> </p>
<p>If you just want to surf in website <a href="index.html"</a>Hotel Website </p>
</form>
</body>