<?php
$conn = new mysqli("localhost", "root", "", "form_data");


$result = $conn->query("SELECT * FROM users");


if ($result->num_rows > 0) {
  echo "<h2>User Information</h2>";
  echo "<table style='border: 1px solid black; border-collapse: collapse;' 
        border='1' cellpadding='10' cellspacing='0'>
          <tr>
              <th>ID</th> <th>Name</th> <th>Email</th> <th>Gender</th>
              <th>Interests</th> <th>About</th>
          </tr>";
  while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>" . $row["id"] . "</td> <td>" . $row["fullname"] . "</td>
              <td>" . $row["email"] . "</td> <td>" . $row["gender"] . "</td>
              <td>" . $row["interests"] . "</td>
              <td>" . $row["bio"] . "</td>
            </tr>";
  }
  echo "</table>";
} else {
  echo "<p>No records found</p>";
}
$conn->close();
?>
