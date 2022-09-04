
<?php
include('dbase.php');
?>

<?php
$fname  =  $_POST['fname'];
$lname  =  $_POST['lname'];
$dob  =  $_POST['dob_day'] . "/" . $_POST['dob_month'] . "/" . $_POST['dob_year']; 
$gender  =  $_POST['gender'];
$country  =  $_POST['country'];
$email  =  $_POST['email'];
$phone  =  $_POST['phone'];
$pass  =  $_POST['pass'];
$confirmpass  =  $_POST['confirmpass'];
$checkbox = $_POST['checkbox'];

$sql = "insert into details values ('$fname', '$lname','$phone', '$email','$gender','$country','$pass','$dob')";

 if (mysqli_query($con, $sql)) {
 echo "<script>alert('New records created successfully')
                    </script>";
 header('location:RegistrationPage.html');
 
                } else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
 mysqli_close($con);
 
?>