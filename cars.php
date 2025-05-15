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
        $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db)

        if ($dbconn){
            $query = "SELECT * FROM cars"
            $result = mysqli_query($dbconn, $query);

            if ($result){
                echo "<p>Connection complete.</p>";
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