<html>
<head>
<title>Search Result
</title>
</head>

<body>
Search Result<br><br>

<?php
$name = $_POST['un'];
// Query statement. Note the single-quote is a MUST!!
$query = " SELECT * FROM nba WHERE player LIKE '%$name%' ; " ; 
// Or:
// $query = " SELECT * FROM nba WHERE player LIKE \"%$name%\" ; " ; 

// Display to verify the correctness of text
echo "(Partial) User Name: " . $name ;
echo "<br>" ;
echo "Query Statement: " . $query ;
echo "<br><br>" ;

// Set up the connection to MySQL: 
//     MySQL Server IP, Server username, Server password, Default (starting) database name
// $con = mysqli_connect("127.0.0.1","tester","tester123","php_mysql_sample_db");
// Or better, move the connection information to a different file
// to keep your login credential confidential! :)
include 'connection.inc' ;

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
// Execute the query statement and catch the returned result
$result = mysqli_query($con, $query);

// Display all rows of the returned result
// NOTE!!! The cursor can ONLY move from the current record to the next record. It 
//   can NOT move back to a previous record. At least I am not going to teach you
//   how in this class. :)
// Note: 
//   while($row = mysqli_fetch_array($result)) is correct. 
//   while($row == mysqli_fetch_array($result)) is NOT correct. 
//   This is NOT to check the equality of two things. Instead, it is to check whether
//   the assignment is successful or not!!
// single = is for assignment. double == is for equality
while($row = mysqli_fetch_array($result)) {
  echo $row['player'] . " : " . $row['team'] . " : " . $row['number'] . " : " . $row['ppg'] ;
  echo "<br>";
}

// Close the connection to MySQL
mysqli_close($con);
?>

</body>
</html>