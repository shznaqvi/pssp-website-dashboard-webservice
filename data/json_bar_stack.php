<?php
/* $server = the IP address or network name of the server
 * $userName = the user to log into the database with
 * $password = the database account password
 * $databaseName = the name of the database to pull data from
 * table structure - colum1 is cas: has text/description - column2 is data has the value
 */
$con = mysql_connect('localhost','root','abcd1234') ;

mysql_select_db('pssp_2016', $con); 

// write your SQL query here (you may use parameters from $_GET or $_POST if you need them)
$query = mysql_query("select (case when (`pssp_2016`.`forms`.`mna3` = 11) then 'K.Abdullah' when (`pssp_2016`.`forms`.`mna3` = 12) then 'Quetta' when (`pssp_2016`.`forms`.`mna3` = 13) then 'Pishin' when (`pssp_2016`.`forms`.`mna3` = 21) then 'J&Bara' when (`pssp_2016`.`forms`.`mna3` = 22) then 'Town 1&2' when (`pssp_2016`.`forms`.`mna3` = 23) then 'Town 3&4' when (`pssp_2016`.`forms`.`mna3` = 31) then 'K-Zone1' when (`pssp_2016`.`forms`.`mna3` = 32) then 'K-Zone2' when (`pssp_2016`.`forms`.`mna3` = 33) then 'K-Zone3' when (`pssp_2016`.`forms`.`mna3` = 34) then 'Sukkur' when (`pssp_2016`.`forms`.`mna3` = 35) then 'Larkana' when (`pssp_2016`.`forms`.`mna3` = 41) then 'Rawalpindi' when (`pssp_2016`.`forms`.`mna3` = 42) then 'Lahore' when (`pssp_2016`.`forms`.`mna3` = 43) then 'Multan' else 'Others' end) AS `mna3`,count((case when (`pssp_2016`.`forms`.`mna7` = '1') then `pssp_2016`.`forms`.`uid` end)) AS `complete`,count((case when (`pssp_2016`.`forms`.`mna7` = '2') then `pssp_2016`.`forms`.`uid` end)) AS `Locked`,count((case when (`pssp_2016`.`forms`.`mna7` = '3') then `pssp_2016`.`forms`.`uid` end)) AS `Refuse`,count((case when (`pssp_2016`.`forms`.`mna7` = '4') then `pssp_2016`.`forms`.`uid` end)) AS `ChNA`,count((case when (`pssp_2016`.`forms`.`mna7` = '5') then `pssp_2016`.`forms`.`uid` end)) AS `Incomplete`,count(`pssp_2016`.`forms`.`mna3`) AS `TotalVisited` from `pssp_2016`.`forms` group by `pssp_2016`.`forms`.`mna3`")or die(mysql_error());

$table = array();
$table['cols'] = array(
    /* define your DataTable columns here
     * each column gets its own array
     * syntax of the arrays is:
     * label => column label
     * type => data type of column (string, number, date, datetime, boolean)
     */
    // I assumed your first column is a "string" type
    // and your second column is a "number" type
    // but you can change them if they are not
    array('label' => 'Region', 'type' => 'string'),
    array('label' => 'Complete', 'type' => 'number'),
    array('label' => 'Locked', 'type' => 'number'),
    array('label' => 'Refuse', 'type' => 'number'),
    array('label' => 'ChNA', 'type' => 'number'),
    array('label' => 'Incomplete', 'type' => 'number')
	
);


$rows = array();

while($r = mysql_fetch_assoc($query)) {
	$temp = array();
			$temp[] = array('v'=> $r['mna3']);
			$temp[] = array('v' => (int) $r['complete']); 
			$temp[] = array('v' => (int) $r['Locked']); 
			$temp[] = array('v' => (int) $r['Refuse']); 
			$temp[] = array('v' => (int) $r['ChNA']); 
			$temp[] = array('v' => (int) $r['Incomplete']); 
		
		
    $rows[] = array('c' => $temp);
}
	$table['rows'] = $rows;
// encode the table as JSON
$jsonTable = json_encode($table);

// set up header; first two prevent IE from caching queries
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

// return the JSON data
echo $jsonTable;
?>