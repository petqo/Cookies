

<?php

if(isset($_GET["name"])) {
    $cookie_name = "user";
    $cookie_value = $_GET["name"];
    setcookie("name", $_GET["name"], time() + (86400 * 30), "/"); // 86400 = 1 day
    $name = $_GET["name"];
}

else{
    if(isset($_COOKIE["name"]))
        $name = $_COOKIE["name"];
    else $name = "";
}
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="image">
        <a href="index.php  ">
    <img src="cookie.png">
        </a>
    </div>
    <h1>Hello this website is made to learn how cookies are used.</h1>
    <hr>
</nav>

<form method="GET" action="index.php">
    <input placeholder="Enter cookie name" type="text" id="name" name="name" value="<?=$name?>"><br>
    <input type="submit" value="Save Cookies">
</form>


<div class="buttons">
    <input type="button" value="Clear Cookies" onclick="smazatCookie();">
</div>
<script>
    function smazatCookie() {
        document.cookie = "name=;"
        alert("Cookies deleted");

    }
</script>


</body>
</html>