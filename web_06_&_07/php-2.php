
<!DOTYPE html>
<html>
  <body> 
    <form action="connect.php" method="post">
      <table>
        <tr>
          <td>First Name:</td>
          <td>
            <input name="fname">
          </td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td>
            <input name="lname">
          </td>
        </tr>
        <tr>
          <td>Username:</td>
          <td>
            <input name="user">
          </td>
        </tr>
        <tr>
          <td>Password:</td>
          <td>
            <input type="password" name="pass">
          </td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td colspan="1"></td>
        </tr>
        <tr>
          <td colspan="1"></td>
          <td>
            <input type="radio" name="gender" value="male">Male
          </td>
        </tr>
        <tr>
          <td colspan="1"></td>
          <td>
            <input type="radio" name="gender" value="female">Female
          </td>
        </tr>
        <tr>
          <td colspan="2">Academic year:</td>
        </tr>
        <tr>
          <td colspan="1"></td>
          <td>
            <select name="year">
              <option value="1st year">1st Year</option>
              <option value="2nd year">2nd Year</option>
              <option value="3rd year">3rd Year</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
            <input type="email" name="mail">
          </td>
        </tr>
        <tr>
          <td>Phone No:</td>
          <td>
            <input name="phone">
          </td>
        </tr>
        <tr>
          <td colspan="1"></td>
          <td>
            <input type="submit" name="submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>