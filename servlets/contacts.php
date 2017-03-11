<?php

$dbconn = pg_connect("host = 54.93.65.5 port = 5432 dbname = 5alina user = fasttrackit_dev password = fasttrackit_dev");

//or die ('Could not connect: '.pg_last_error());

$query = 'SELECT id , lname ,fname , phone  FROM agenda ORDER BY lname';
$result = pg_query($query) or die ('Query failed :'.pg_last_error());

$allContacts = array();

while ($line = pg_fetch_array($result , null , PGSQL_ASSOC)){
    $allContacts[] = array(

        "firstName" => $line["fname"],
        "lastName" => $line ["id"],
        "phone" => $line ["phone"]

    );

}
echo json_encode($allContacts);

pg_close($dbconn);
?>