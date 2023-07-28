 <?php 
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $year = $_POST['year'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
  }

  ?>

  <table border="1">
    <tr>
      <td>First Name:</td>
      <td><?php echo $fname; ?></td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td><?php echo $lname; ?></td>
    </tr>
    <tr>
      <td>Username:</td>
      <td><?php echo $user; ?></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><?php echo $pass; ?></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td>Academic Year:</td>
      <td><?php echo $year; ?></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><?php echo $mail; ?></td>
    </tr>
    <tr>
      <td>Phone No:</td>
      <td><?php echo $_POST["phone"]; ?></td>
    </tr>
  </table>

