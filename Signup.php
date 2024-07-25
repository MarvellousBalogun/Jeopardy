<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Charlie </title>
    </head>
    <body>
        <div>
            <form action="Signup.php" method="post">
                <div>
                    <label>username</label><br>
                    <input type="text" name="username">  
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" name="password"> 
                </div>
                <div>
                    <input type="submit"  name="signup" value="signup">
                </div>
                <a href="Login.php"> Login </a>
            </form>
        </div>
    </body>
</html>

<?php
    include("database.php");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $hash =  password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (Username, Password)
        VALUES ('$username', '$hash')";

        if( !empty($username) && !empty($password) ){
        
            try{
        
            mysqli_query($conn, $sql);
            echo "User has been registered!";
            }
            catch(mysqli_sql_exception){
        
                echo "User already exists!";
            }

        }
        else{
            echo "Please enter a username or passord.";
        }        
    }

    mysqli_close($conn);
?>