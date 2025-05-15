<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metadata and page setup -->
	<meta charset="UTF-8">
	<meta name="description" content="Home page">
	<meta name="keywords" content="HTML5, tags">
	<meta name="author" content="Lucas Jurgec">
	<title>Home Page</title>

</head>
<body>
    <?php
        require_once"settings.php";
        $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);

        if ($dbconn){
            $query = "SELECT * FROM cars";
            $result = mysqli_query($dbconn, $query);

            if ($result){
                echo "<p>Connection complete.</p>";

                echo "<table border='1'>";
                echo "<tr>
                        <th>Car ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Year of Manufacture</th>
                </tr>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

            }

            else {
                echo "<p>Unable to select from database.</p>";
            }
            
            mysqli_close($dbconn);
        }
        else {
            echo "<p>Unable to connect to the database.</p>";
        }
        
    ?>
</body>
</html>