<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => 'new_password', 
    'db'   => 'Rfis2.0' 
); 
 
// DB table to use 
$table = 'UniqueVMSreceiversV1_2022-23_csv1'; 
 
// Table's primary key 
$primaryKey = 'Mobile'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'Mobile', 'dt' => 0 ), 
    array( 'db' => 'State',  'dt' => 1 ), 
    array( 'db' => 'District', 'dt' => 2 ), 
    array( 'db' => 'SubDistrict','dt' => 3 ), 
    array( 'db' => 'Category',    'dt' => 4 )
    /*array( 
        'db'        => 'created', 
        'dt'        => 5, 
        'formatter' => function( $d, $row ) { 
            return date( 'jS M Y', strtotime($d)); 
        } 
    ), 
    array( 
        'db'        => 'status', 
        'dt'        => 6, 
        'formatter' => function( $d, $row ) { 
            return ($d == 1)?'Active':'Inactive'; 
        } 
    ) */
); 
 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);