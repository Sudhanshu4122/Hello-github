<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LEADERBOARD</title>
	<script type="text/JavaScript">
	function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
	}
	</script>
<?php
include("connect.php");

$ld1="SELECT * from login";
$ld2=mysqli_query($g,$ld1);
if (!$ld2) {
    die("Query to show fields from table failed");
} 
$ld3=mysqli_fetch_array($ld2);
$fields_num = mysqli_num_fields($ld2);

echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++){
    $field = mysqli_fetch_field($ld2);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
//$row = mysqli_fetch_row($ld2);
while($row = mysqli_fetch_row($ld2))
{
    echo "<tr>";

    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";


    echo "</tr>\n";
}
?>
</head>

<body onload="JavaScript:timedRefresh(5000);">
</body>
</html>
