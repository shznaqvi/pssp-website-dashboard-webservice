<?php
/* $server = the IP address or network name of the server
 * $userName = the user to log into the database with
 * $password = the database account password
 * $databaseName = the name of the database to pull data from
 * table structure - colum1 is cas: has text/description - column2 is data has the value
 */
$con = mysql_connect('localhost','app','abcd1234') ;

mysql_select_db('pssp_2016', $con); 

// write your SQL query here (you may use parameters from $_GET or $_POST if you need them)
$query = mysql_query("select * from rpt_district_status")or die(mysql_error());

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
    array('label' => 'District', 'type' => 'string'),
    array('label' => 'Not Started', 'type' => 'number'),
    array('label' => 'In Progress', 'type' => 'number'),
    array('label' => 'Completed', 'type' => 'number')
	
);



$rows = array();

while($r = mysql_fetch_assoc($query)) {
	$temp = array();
			$temp[] = array('v'=> $r['d_name']);
			$temp[] = array('v' => (int) $r['not_started']); 
			$temp[] = array('v' => (int) $r['in_progress']); 
			$temp[] = array('v' => (int) $r['completed']); 
		
		
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