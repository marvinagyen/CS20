<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
  <?php
  // establish connection info
  $server = "sql306.epizy.com";
  $userid = "epiz_29671562";
  $pw = "WoquVwkBPcXD2";
  $db= "epiz_29671562_jadedelight";

  // // establish connection info
  // $server = "localhost";
  // $userid = "";
  // $pw = "";
  // // $db= "epiz_29671562_jadedelight";

  // Create connection
  $conn = new mysqli($server, $userid, $pw );
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  //select the database
  $conn->select_db($db);

  //run a query
  $sql = "SELECT * FROM itemName";
  echo "<br />The query is: " . $sql ."<br />";
  $result = $conn->query($sql);
  //get results
  if ($result->num_rows > 0)
  {
      while($row = $result->fetch_assoc())
     {
       echo $row["name"]. " " . $row["type"]. "<br>";
       }
  }
  else
    echo "no results";

//close the connection
$conn->close()

// $s = ""
// for ($i = 0; $i <= 10; $i++) {
//   $s += "<tr><td>";
//   $s += makeSelect("quan" + $i, 0, 10);
//   $s += "</td><td>" + menuItems[$i].name + "</td>";
//   $s += "<td> $ " + menuItems[$i].cost.toFixed(2) + "</td>";
//   $s += "<td>$<input type='text' name='cost'/></td></tr>";
// }

  ?>

<script language="javascript">

</script>

</body>
</html>
