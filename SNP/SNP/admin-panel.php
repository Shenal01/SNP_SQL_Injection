<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form id="login-form" method="post" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p id="message"></p>
    </div>
<br><br>

<div class="login-container">
    <table border = "1", width = 100%>
        <tr>
            <th><b>Admin Name</b></th>
            <th><b>Details</b></th>
          
          
        </tr>
        
        <?php
        require 'config.php';
        $sqli = "SELECT * FROM admin";
        $result = $conn->query($sqli);
        
        if($result->num_rows > 0)
        {	
            while($row = $result->fetch_assoc())
            {
                    $id = $row["admin_id"];
                    echo"<tr>";
                    echo"<td style = 'text-align:center'>".$row["admin_name"]."</td>";
                    echo"<td style = 'text-align:left'>";
                        echo"<li>Admin_ID: ".$row["admin_id"]."</li>";
                        echo"<li><font color = 'red'> Name :  </font>" .$row["admin_name"]. "</li>";
                        echo"<li>Password: ".$row["password"]."</li>";
                    echo"</td>";
                    echo"</tr>";
            }
        }
        else
        {
            echo"No Results";
        }
        
        ?>
        
    </table>
    </div>
   
</body>
</html>
