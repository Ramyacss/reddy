<?php

require 'dbinfo.php';


$sql = "SELECT name1, usr, pwd FROM saj ORDER BY name1";
$result = $connection->query($sql);

if(count($_POST) > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($_POST['usr'] != $row['usr'])
        {
            
            $val = false;
        }
        elseif($_POST['pwd'] != $row['pwd'])
        {
   
            $val = false;
        }
        else{
            echo "logged in successfully";
            $val = true;
            break;
        }

    }

    if($val === false){
        echo "input was wrong,Frist Try to signup first <br>";
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body   background="2.jpg">
        
			<form method="post" action="r1.php">
            <h1 align="center" style="color:red"> Welcome to my page</h1>
                    <label>User Name :</label><br>
                    <input type="text" name="usr" placeholder="Enter username" required>
                    <br>
                    <br>
					<label>Password :</label><br>
					<input type="password" name="pwd" placeholder="Enter password" required>
					<br>
					<br>
                    <input type="submit" name="submit" value="SUBMIT">
                    <br><br>
                    <a href="r2.php" class="link" title="Creating the  account" input type="signup" name="signup" value="signup">SIGNUP</a>
					<br><br>
				</form>
		</div>
    </body>
</html>
<?php

$result->close();
$connection->close();

?>