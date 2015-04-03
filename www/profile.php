
<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="profile">
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    
    </div>
    
    <style>
        a{
            
            text-decoration:none;
            padding:25px;
            background-color:red;
            border:1px solid black;
            border-radius:10px;
            color:white;
        }
        a:hover{
            background-color:darkred;
        }
    </style>
    <div>
    <a href="map.html">Access Map</a>
    </div>
</body>
</html>