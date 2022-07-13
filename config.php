<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";


$uName = $_GET['userName'];
$email = $_GET['email'];
$psw = $_GET['psw'];
$confirmPassword = $_GET['confirmPassword'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(validateForm())
{
    $sql = "INSERT INTO user (uName, email , psw)
    VALUES ('$uName', '$email' ,'$psw')";

    if ($conn->query($sql) === TRUE) {
      $a = "HI " .$uName . " You Have successfully login</h1>";
      echo "<h1 style='text-align:center; padding:23% ; font-size:3rem'>$a</h1>";

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else {
  $b = "form validation fails";
  echo "<h1 style='text-align:center; padding:23% ; font-size:3rem'>$b</h1>";

}

$conn->close();
?>
 <SCRIPT type="text/javascript">
        function validateForm(params) {
            emailVaalidation();
            passwordValidation();
        }
        function emailVaalidation(params) {
            let x = document.forms["myForm"]["email"].value;
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
            {
                return (true)
            }
                alert("You have entered an invalid email address!")
                return (false)
        }
        function passwordValidation(params) {
            let x = document.forms["myForm"]["psw"].value;
            let y = document.forms["myForm"]["confirmPassword"].value;
            if(x==y){
                return (true)
            }
            else
            {
                alert("Password Mismatch")
                returnToPreviousPage();
                return (false)
            }
            
        }
    </SCRIPT>




echo "# userLogin" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/naren0706/userLogin.git
git push -u origin main