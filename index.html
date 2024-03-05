<?php

include 'database.php';
session_start();

$message = ""; // Initialize an empty message variable

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $fullName = $row['firstName'] . ' ' . $row['lastName'];
         $_SESSION['admin_name'] = $fullName;
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin-home.php');

      }elseif($row['user_type'] == 'user'){

         $fullName = $row['firstName'] . ' ' . $row['lastName'];
         $_SESSION['user_name'] = $fullName;
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:user-home.php');

      }

   }else{
      $message = 'Incorrect email or password!'; // Set the message variable
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

<style> 
  /* Global Variables */
:root {
    --white-color: #ffffff; /* Define white color */
    --primary-color: #13547a; /* Define primary color */
    --secondary-color: #80d0c7; /* Define secondary color */
    --section-bg-color: #f0f8ff; /* Define section background color */
    --custom-btn-bg-color: #80d0c7; /* Define custom button background color */
    --custom-btn-bg-hover-color: #13547a; /* Define custom button background hover color */
    --dark-color: #000000; /* Define dark color */
    --p-color: #717275; /* Define paragraph color */
    --border-color: #ddd; /* Define border color */
    --link-hover-color: #13547a; /* Define link hover color */

    --body-font-family: 'Open Sans', sans-serif; /* Define body font family */
    --title-font-family: 'Montserrat', sans-serif; /* Define title font family */
}

/* Body Styles */
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color:  var(--section-bg-color) !important; /* Set background color */
}

/* Form Container Styles */
.form-container {
    background-color: #fff; /* Set background color */
    padding: 20px; /* Set padding */
    border-radius: 10px; /* Set border radius */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
    width: 400px; /* Set width */
    text-align: center; /* Center align content */
}

/* Logo Styles */
.form-container h3.logo {
    color: #333; /* Set color */
    font-size: 24px; /* Set font size */
    margin-bottom: 20px; /* Set bottom margin */
}

/* Input Styles */
.form-container input[type="email"],
.form-container input[type="password"],
.form-container input[type="submit"] {
    width: calc(100% - 40px); /* Set width */
    padding:10px ; /* Set padding */
    margin-bottom: 20px; /* Set bottom margin */
    border: 1px solid #ddd; /* Set border */
    border-radius: 5px; /* Set border radius */
    font-size: 18px; /* Set font size */
    outline: none; /* Remove outline */
}

/* Submit Button Styles */
.form-container input[type="submit"] {
    padding: 10px; /* Set padding */
    width: 95%; /* Set width */
    background-color: #80d0c7; /* Set background color */
    color: #ffffff; /* Set text color */
    border: none; /* Remove border */
    cursor: pointer; /* Set cursor */
    transition: background-color 0.3s ease; /* Add transition */
}

.form-container input[type="submit"]:hover {
    background-color: #13547a; /* Change background color on hover */
}

/* Paragraph Styles */
.form-container p {
    margin-top: 15px; /* Set top margin */
    font-size: 18px; /* Set font size */
    color: #555; /* Set color */
}

/* Link Styles */
.form-container p a {
    color: var(--primary-color); /* Set color */
    text-decoration: none; /* Remove text decoration */
}

.form-container p a:hover {
    text-decoration: underline; /* Underline link on hover */
}

/* Error Message Styles */
.error-message {
    color: red!important; /* Set color to red */
    margin-top: 10px; /* Set top margin */
    font-size: 18px; /* Set font size */
}

/* Modal Styles */
.modal {
    display: none; /* Hide modal by default */
    position: fixed; /* Set position */
    z-index: 1; /* Set z-index */
    left: 0; /* Set left position */
    top: 0; /* Set top position */
    width: 100%; /* Set width */
    height: 100%; /* Set height */
    overflow: auto; /* Add overflow */
    background-color: rgba(0,0,0,0.4); /* Set background color */
    align-items: center !important;
    
}

/* Modal Content Styles */
.modal-content {
    background-color: #fefefe; /* Set background color */
    margin: 15% auto; /* Set margin */
    padding: 20px; /* Set padding */
    border: 1px solid #888; /* Set border */
    width: 50%; /* Set width */
    height: 30%;
    max-width: 400px; /* Limit maximum width */
    border-radius: 10px; /* Set border radius */
    text-align: justify; /* Justify the content */
}

/* Modal Content Paragraph Styles */
.modal-content p {
   margin-top:80px;
   
    text-align: center; /* Center align the text */
    font-size: 20px; /* Set the font size to 20 pixels */
}


/* Close Button Styles */
.close {
    color: #aaa; /* Set color */
    float: right; /* Float to right */
    font-size: 28px; /* Set font size */
    font-weight: bold; /* Set font weight */
    position: relative; /* Set position to absolute */
    top: 10px; /* Adjust top position */
    right: 10px; /* Set right position */
}

.close:hover,
.close:focus {
    color: black; /* Change color on hover/focus */
    text-decoration: none; /* Remove text decoration */
    cursor: pointer; /* Set cursor */
}

</style>


</head>
<body>

<div class="form-container">

   <form action="" method="post">
   <h3 class="logo"><img src="images/ggcclogo.jfif" alt="Logo" width="30"> Manager</h3>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="Continue">
      <?php if(!empty($message)) { echo "<p class='error-message'>$message</p>"; } ?> <!-- Display the error message -->
      <p><a href="#" onclick="openModal()">Forgot Password?</a></p>
      <p>Not a member? <a href="register.php">Sign Up now</a></p>
   </form>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">
   <!-- Modal content -->
   <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <p>Forgot your password? Please contact your IT administrator for assistance or you can just <a href="register.php">register </a>again.</p>
   </div>
</div>

        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        function openModal() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        function closeModal() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

</body>
</html>
