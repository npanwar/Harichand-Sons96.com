<?php require_once('inc/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
$query=$conn->prepare("select date from time");
$query->execute();
$query->store_result();
$query->bind_result($dat);
$query->fetch();
$date=getdate($dat);
$day=$date['mday'];
$mon=$date['month'];
$mon=var_dump($mon['month']);
$year=$date['year'];
$ch_query=$conn->prepare("select id from token where tokens=? and category=? and image_name=? ");
                            $ch_query->bind_param("i",$id);
                            $ch_query->execute();
                            $ch_query=$check_query->get_result();
$count = $ch_query + 1;

$year=$year%2000;
echo "#C".$year.$mon.$count;
?>

</body>
</html>