<?php require_once('inc/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
$date=time();
$query=$conn->prepare("insert into time(date) values(?)");
$query->bind_param("s",$date);
$query->execute();
?>

</body>
</html>