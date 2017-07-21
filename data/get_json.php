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
$query = mysql_query("select (case when (`forms`.`mna7` = 1) then 'Completed' when (`forms`.`mna7` = 2) then 'Locked' when (`forms`.`mna7` = 3) then 'Refuse' when (`forms`.`mna7` = 4) then 'Child not available' else 'Incompleted' end) AS `Status`,count(`forms`.`mna7`) AS `Frequency` from `forms` group by `forms`.`mna7`;")or die(mysql_error());

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
    array('label' => 'Status', 'type' => 'string'),
    array('label' => 'Frequency', 'type' => 'number')
);

$rows = array();
while($r = mysql_fetch_assoc($query)) {
    $temp = array();
    // each column needs to have data inserted via the $temp array
    $temp[] = array('v' => $r['Status']);
    $temp[] = array('v' => (int) $r['Frequency']); 

    // insert the temp array into $rows
    $rows[] = array('c' => $temp);
}

// populate the table with rows of data
$table['rows'] = $rows;

// encode the table as JSON
$jsonTable = json_encode($table);

// set up header; first two prevent IE from caching queries
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

// return the JSON data
echo $jsonTable;
?>