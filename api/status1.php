<?php
$con = mysqli_connect("localhost","root","abcd1234","pssp_2016");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="select (case when (`pssp_2016`.`forms`.`mna3` = 11) then 'K.Abdullah' when (`pssp_2016`.`forms`.`mna3` = 12) then 'Quetta' when (`pssp_2016`.`forms`.`mna3` = 13) then 'Pishin' when (`pssp_2016`.`forms`.`mna3` = 21) then 'J&Bara' when (`pssp_2016`.`forms`.`mna3` = 22) then 'Town 1&2' when (`pssp_2016`.`forms`.`mna3` = 23) then 'Town 3&4' when (`pssp_2016`.`forms`.`mna3` = 31) then 'K-Zone1' when (`pssp_2016`.`forms`.`mna3` = 32) then 'K-Zone2' when (`pssp_2016`.`forms`.`mna3` = 33) then 'K-Zone3' when (`pssp_2016`.`forms`.`mna3` = 34) then 'Sukkur' when (`pssp_2016`.`forms`.`mna3` = 35) then 'Larkana' when (`pssp_2016`.`forms`.`mna3` = 41) then 'Rawalpindi' when (`pssp_2016`.`forms`.`mna3` = 42) then 'Lahore' when (`pssp_2016`.`forms`.`mna3` = 43) then 'Multan' else 'Others' end) AS `mna3`,count((case when (`pssp_2016`.`forms`.`mna7` = '1') then `pssp_2016`.`forms`.`uid` end)) AS `complete`,count((case when (`pssp_2016`.`forms`.`mna7` = '2') then `pssp_2016`.`forms`.`uid` end)) AS `Locked`,count((case when (`pssp_2016`.`forms`.`mna7` = '3') then `pssp_2016`.`forms`.`uid` end)) AS `Refuse`,count((case when (`pssp_2016`.`forms`.`mna7` = '4') then `pssp_2016`.`forms`.`uid` end)) AS `ChNA`,count((case when (`pssp_2016`.`forms`.`mna7` = '5') then `pssp_2016`.`forms`.`uid` end)) AS `Incomplete`,count(`pssp_2016`.`forms`.`mna3`) AS `TotalVisited` from `pssp_2016`.`forms` group by `pssp_2016`.`forms`.`mna3`";

$result=mysqli_query($con, $sql);

$json = array();
while($json[] = mysqli_fetch_array ($result))
{
	
}

header('Content-Type: application/json');
echo json_encode($json);
die();
?>