<?php
$con = mysqli_connect("localhost","app","abcd1234","pssp_2016");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="select (case when (`forms`.`mna7` = 1) then 'Completed' when (`forms`.`mna7` = 2) then 'Locked' when (`forms`.`mna7` = 3) then 'Refuse' when (`forms`.`mna7` = 4) then 'Child not available' else 'Incompleted' end) AS `Status`,count(`forms`.`mna7`) AS `Frequency` from `forms` group by `forms`.`mna7`";

$result=mysqli_query($con, $sql);

$json = array();
while($json[] = mysqli_fetch_array ($result))
{
	
}

header('Content-Type: application/json');
echo json_encode($json);
die();
?>