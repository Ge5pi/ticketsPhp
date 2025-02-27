<!DOCTYPE html>
<html>
<head>
    <title>Tickets Profile</title>
    <style>
        body {
            font-family: Arial;
            width: 100%;
            
        }

        nav{
            width: 110%;
            background-color: #1a237e;
            position: fixed;
            right:0px;
            display: flex;
            justify-content: end;
            padding: 10px;;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #1a237e;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .login{
            position: relative;
            right:10px;
            color:white;
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav>
                <a class="login" href="main-page.php">Log out</a>
        </nav>
        <br>
        <br>
    <h2>Tickets List</h2>
    
    <?php
    $conn = new mysqli('localhost', 'root', '', 'userstickets');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, name, phone FROM tickets";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                </tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["phone"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No tickets found";
    }
    
    $conn->close();
    ?>
</body>
</html>