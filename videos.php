<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agriculture Videos</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="font.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="adsty.css">

  <style>
  body{
  background: #00b09b;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #96c93d, #00b09b);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #96c93d, #00b09b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  a{
    color: black;
  }
  table {width:100%; color: #262626;}
  table, th, td { border: 1px solid white; border-collapse: collapse;}
  th, td {padding: 28px; text-align: left;}
  th {
      font-size: 16px;
  }
  tr:nth-child(even){background-color:#dbdfea;}
  tr:nth-child(odd){background-color:#c4c9d6;}
  tr:hover{background-color:#eeeff1;}
  th{background-color: dimgray; color:white;}
</style>
</head>

  <body>
<h1><span class="headblack">AGRICUTURE VIDEOS</span></h1>
<br><br><br><br><br>
<?php
$sql="select * from videos";
$query=mysqli_query($connection,$sql);
echo "<center>";
echo '<table border=1px>';  // opening table tag
echo'<th>CATEGORY</th><th>DESCRIPTION</th><th>LINK</th>'; //table headers
while($data = mysqli_fetch_array($query))
{
// we are running a while loop to print all the rows in a table
echo"<tr>"; // printing table row
echo "<td>".$data['category']."</td><td>".$data['description']."</td><td><a href=".$data['link']." style='text-decoration:underline;'>Go To Videos!</a></td>"; 
// we are looping all data to be printed till last row in the table
echo'</tr>'; // closing table row
}
echo '</table>'; 
echo "</center>";
?>
  </body>
</html>