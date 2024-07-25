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
            <form action="Login.php" method="post">
                <div>
                    <label>username</label><br>
                    <input type="text" name="username"> 
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" name="password">
                </div>
                <div>
                    <input type="submit"  name="login" value="login">
                </div>
                <a href="Signup.php"> Signup </a>
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


        if(isset($_POST["login"])){

            if(!empty($_POST["username"] && !empty($_POST["password"]))){

                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;

                $sql = "SELECT * FROM users WHERE Username = '$username'";   
                $result = mysqli_query($conn, $sql);


                if(mysqli_num_rows($result) > 0){
                
                    $row = mysqli_fetch_assoc($result);

                    if($username == $row["Username"] && 
                        password_verify($password, $row["Password"])){
                    
                        header("location: Home.php");
                    }
                    else{
                        echo "Wrong username or password!";
                    }
                }
                else{
                    echo "User does not exist!";
                }
            }
            else{
                echo "Missing username or password <br>";
            }

        }
    }

    mysqli_close($conn);
?>