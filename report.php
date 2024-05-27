<!DOCTYPE html>
<html>
<head>
    <title>Customer Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Customer Report</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
           
        </tr>
        <?php
            // Step 1: Connect to the MySQL Database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "tour_db";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Step 2: Retrieve Data - Write SQL queries
            $sql = "SELECT id,uname,email FROM signup";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Step 3: Generate Report - Format retrieved data
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['uname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No results found</td></tr>";
            }

            // Step 4: Close Database Connection
            $conn->close();
        ?>
    </table>
</body>
</html>
