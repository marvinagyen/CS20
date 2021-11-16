<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
  <?php

  //establish connection info
  $server = "sql306.epizy.com";
  $userid = "epiz_29671562";
  $pw = "WoquVwkBPcXD2";
  $db= "epiz_29671562_jadedelight";

  // Create connection
  $conn = new mysqli($server, $userid, $pw );
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  // //select the database
  // $conn->select_db($db);
  //
  // //run a query
  // $sql = "SELECT * FROM pets";
  // $result = $conn->query($sql);
  // //get results
  // if ($result->num_rows > 0)
  // {
  //     while($row = $result->fetch_assoc())
  //    {
  //      echo $row["name"]. " " . $row["type"]. "<br>";
  //      }
  // }
  // else
  //   echo "no results";

//close the connection
$conn->close()

  ?>

</body>
</html>
