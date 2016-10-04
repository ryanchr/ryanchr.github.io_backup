<?php
// First start the session, before any code that output data
session_start();

// Then can add the rest of the page code
?>
<!doctype html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Counter Online Users and Visitors</title>
 <meta name="description" content="PHP script to count and show the number of online users and visitors" />
 <meta name="keywords" content="online users, online visitors" />
</head>
<body>

<?php
// include the script ("usersontxt.php", or "usersmysql.php")
// in the place you want to show the number of online
include('usersontxt.php');
?>

</body>
</html>