<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $gender = $_POST['gender'];
    $hobies=$_POST["hobies"];
$hob = implode($hobies);
 

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `gender`,`hobies`) VALUES ('$first_name','$last_name','$gender','$hob')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>
<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>
      <input type="radio" id="male" name="gender" value="male">
  <label for="male">male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">female</label><br><br>
<input type="checkbox" value="cricket" name="hobies[]">cricket<br><br>
<input type="checkbox" value="music" name="hobies[]">music<br><br>
<input type="checkbox" value="reading" name="hobies[]">reading<br><br>



    <input type="submit" name="submit" value="submit">
</form>

</body>

</html>