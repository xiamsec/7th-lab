<?php
include "connection.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo '<a href="create.php" class="btn">Add Data</a>';

if ($result->num_rows > 0) {
    echo "<h2>User Information</h2>";
    echo "<table class='user-table'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Interests</th>
                <th>Country</th>
                <th>Message</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["interests"] . "</td>
                <td>" . $row["country"] . "</td>
                <td>" . $row["message"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No records found</p>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #5c6bc0;
        }

        .btn {
            display: block;
            text-align: center;
            padding: 10px 20px;
            margin: 20px auto;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            width: 150px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .user-table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .user-table th, .user-table td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: center;
        }

        .user-table th {
            background-color: #5c6bc0;
            color: white;
        }

        .user-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .user-table tr:hover {
            background-color: #f1f1f1;
        }

        p {
            text-align: center;
            font-size: 18px;
            color: #e53935;
        }
    </style>
</head>
<body>

</body>
</html>
