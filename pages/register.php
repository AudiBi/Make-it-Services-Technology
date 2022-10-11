<?php

$host = "localhost";
$user = "root";
$password ="########";
$database = "#makeeat#";

$id = "";
$fname = "";
$lname = "";
$email = "";
$pass_word = "";
$role = "";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['email'];   
    $posts[4] = $_POST['pass_word'];
    $posts[5] = $_POST['role'];

    return $posts;
}

// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $session_name = $_SESSION['email'];
    $pass_word = $_POST['pass_word']; 
    $pass_word1 = sha1($pass_word);

    

    $insert_Query = "INSERT INTO `users`(`id`,`fname`,`lname`,`email`,`pass_word`,`role`) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$pass_word1', '$data[5]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Thank you for adding a new data';
            }else{
                echo 'Failed to adding your data please try again';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	
	<form action="" method="POST">
        <div>
            <div class="">
                <label>First Name</label>
                <input type="text" name="fname" id="first_name" >
            </div>
            <div class="">
                <label>Last Name</label>
                <input type="text" name="lname" id="last_name">
            </div>
            <div class="">
                <label>Username</label>
                <input type="text" name="email" id="last_name" required>
            </div>
            <div class="">
                <label>Password</label>
                <input type="password" name="pass_word" id="nif" required>
            </div>
            <div class="">
                <label>Role</label>
                    <select name="role">
                        <option value="">Choose...</option>
                        <option value="Client">Client</option>
                        <option value="Employee">Employee</option>
                        <option value="ADMIN">ADMIN</option>
                    </select>
            </div>
            <!-- <div class="">
                <label>Date Ajour</label>
                <input type="date" name="date_ajout">
            </div> -->
            <div class="input-group">
            <button type="submit" class="btn" name="insert">Register</button>
            </div>
        </div>
	</form>
 
</body>	
</html>