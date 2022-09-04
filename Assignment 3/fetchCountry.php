<?php
include('dbase.php');
?>
<html>
<head>
<style>
#customers {
 font-family: Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 50%;
 margin-left:25%;
 margin-top:2%;

}

#customers td, #customers th {
 border: 1px solid blue;
 text-align: center;
 padding: 4px;

}
#customers tr{
 background-color: #00003f;
 color: orange;
}

#customers tr:nth-child(even){background-color: #f2f2f2;color: #00003f;}

#customers tr:hover {background-color: #8000ff;}

#customers th {
 padding-top: 8px;
 padding-bottom: 8px;
 text-align: center;
 background-color: orange;
 color: white;
}

</style>
</head>
<body>
<div align ="center">
<form method = "post" >
 <input type="text" name="country" placeholder="search country" autocomplete="off"/>
 <input type="submit" name ="submit" value="Search">
</form>
</div>
</body>
</html>
<?php
if ( isset( $_POST['submit'] ) )
{
 $country = $_POST['country'];

 $sql = "SELECT * FROM details where country='$country'";

 $result = $con->query($sql);


echo "<table id='customers'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Mobile</th>
<th>Email</th>
<th>Country</th>
<th>Gender</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['country'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "</tr>";
}
echo " </table>";
mysqli_close($con);
}
?>
