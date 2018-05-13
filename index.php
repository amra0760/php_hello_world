<!--<pre>-->
<?php
$db = new mysqli(
    'localhost',    //Hostname
    'amra0760',     //UserID
    '',             //Password
    'mvp'           //Name of Database
    );
    
// print_r($db);

if ($db->connect_errno != 0){
    die("Error in DB connection $db->connect_error");
} else{
    // printf("Yes, connected \n");
    $result = $db->query ('SELECT username, password FROM mvp_table');
    // print_r($result);
    printf("<table>");
    printf("<tr><th> My Usernames</th><th>My Passwords</th></tr>");
    while($row = $result->fetch_assoc()) {
        printf("<tr><td>%s</td> <td>%s</td></tr>\n", $row['username'], $row['password']);
    };
    printf("<table>");
}

?>
<!--</pre>-->