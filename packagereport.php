<!DOCTYPE html>
<html>
<head>
    <title>Packages Report</title>
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
<?php include('includes/header.php');?><br><br><br><br><br>
    <h2>Packages</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Package Name</th>
            <th>Package Type</th>
            <th>Package Location</th>
            <th>Package Price</th>
            <th>Package Features</th>
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
            $sql = "SELECT id,packagename,packagetype,packagelocation,packageprice,packagefeatures FROM packages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Step 3: Generate Report - Format retrieved data
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['packagename'] . "</td>";
                    echo "<td>" . $row['packagetype'] . "</td>";
                    echo "<td>" . $row['packagelocation'] . "</td>";
                    echo "<td>" . $row['packageprice'] . "</td>";
                    echo "<td>" . $row['packagefeatures'] . "</td>";
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
