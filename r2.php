<?php

require 'dbinfo.php';

if(count($_POST) > 0)
{
    $full = $_POST['name1'];
    $usern = $_POST['usrd'];
    $passwd = $_POST['pwd'];

    $sql = "SELECT DISTINCT usr FROM saj WHERE usr='$user'";
    $resultObj = $connection->query($sql);
    
    while($row = $resultObj->fetch_assoc())
    {
        $usr = $row['usr'];
        
    }
    $checkn = strcmp($usern,$usr);

       if($checkn == 0)
        {
            echo "Already exist. Try another username. <br> Thank you!";
            return 0;
        }else{
            $query = "INSERT INTO saj VALUES ('$full', '$usern', '$passwd')";
            $result=$connection->query($query);

            if ($connection->query($query) === TRUE) {
                print "yes ".$full." your new record created successfully";
            } 
            else {
                echo "no: " . $query . "<br>" . $connection->error;
            }
        
        }

}

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body  background="3.jpg">
    
			<form method="post" action="r2.php">
					<h1  align="center" style="color:blue">Creating page</h1>
					<label>Name :</label><br>
					<input type="text" name="name1" placeholder="Enter name">
					<br>
                    <br>
                    <label>Username :</label><br>
					<input type="text" name="usr" placeholder="Enter name">
					<br>
                    <br>
					<label>Password :</label><br>
					<input type="password" name="pwd" placeholder="password">
					<br>
					<br>
                    <input type="submit" name="submit" value="SUBMIT">
			</form>
		</div>
    </body>
</html>
<?php


$connection->close();

?>