<?php

include 'database.php';
session_start();

$message = ""; // Initialize an empty message variable

if(isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
   //  $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    // Check if the email already exists in the database
    $check_email_query = "SELECT * FROM users WHERE email = '$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_result) > 0) {
        // Email already exists, display error message
        $message = "Email already exists!";
    } else {
        // Insert the new user into the database
        $insert_user = "INSERT INTO users (firstName, lastName, address, email, password, user_type) 
                        VALUES ('$firstName', '$lastName', '$address', '$email', '$password', '$user_type')";
        
        if(mysqli_query($conn, $insert_user)) {
            // Registration successful, redirect to home page
            header('location: index.php');
            exit();
        } else {
            // Registration failed, handle the error
            $message = "Error: " . $insert_user . "<br>" . mysqli_error($conn);
        }
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
      :root {
         --white-color: #ffffff;
         --primary-color: #13547a;
         --secondary-color: #80d0c7;
         --section-bg-color: #f0f8ff;
         --custom-btn-bg-color: #80d0c7;
         --custom-btn-bg-hover-color: #13547a;
         --dark-color: #000000;
         --p-color: #717275;
         --border-color: #ddd; /* Changed to match the border color of the login form */
         --link-hover-color: #13547a;

         --body-font-family: 'Open Sans', sans-serif;
         --title-font-family: 'Montserrat', sans-serif;
      }

      /* Additional styling for the login form */
      body {
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         background-color: var(--section-bg-color); /* Changed to section background color */
      }

      .form-container {
         background-color: var(--white-color); /* Changed to white color */
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
         width: 400px;
         text-align: center; /* Center align content */
      }

      .form-container h3.logo {
         color: var(--dark-color); /* Changed to dark color */
         font-size: 24px;
         margin-bottom: 20px;
      }

      .form-container h3.logo img {
         vertical-align: middle; /* Align the image vertically */
         margin-right: 10px; /* Add margin to separate the image from the text */
      }

      .form-container input[type="text"],
      .form-container input[type="email"],
      .form-container input[type="password"],
      .form-container input[type="submit"] {
         width: calc(100% - 40px);
         padding: 10px;
         margin-bottom: 20px;
         border: 1px solid var(--border-color); /* Changed to border color */
         border-radius: 5px;
         font-size: 18px;
         outline: none;
      }

      .form-container input[type="submit"] {
         padding: 10px;
         width: 95%;
         background-color: var(--custom-btn-bg-color); /* Changed to custom button background color */
         color: var(--white-color); /* Changed to white color */
         border: none;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }

      .form-container input[type="submit"]:hover {
         background-color: var(--custom-btn-bg-hover-color); /* Changed to custom button background hover color */
      }

      .form-container p {
         margin-top: 15px;
         font-size: 18px;
         color: var(--p-color); /* Changed to paragraph color */
      }

      .form-container p a {
         color: var(--primary-color); /* Changed to primary color */
         font-size: 18px;
         text-decoration: none;
      }

      .form-container p a:hover {
         text-decoration: underline;
      }

      .error-message {
         color: red;
         margin-bottom: 10px;
      }
   </style>
</head>
<body>

<div class="form-container">
   <form action="" method="post">
      <h3 class="logo"><img src="images/ggcclogo.jfif" alt="Logo" width="30"> Manager</h3>
      <input type="text" name="firstName" placeholder="First Name" required>
      <input type="text" name="lastName" placeholder="Last Name" required>
      <!-- <input type="text" name="address" placeholder="Address" required> -->
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <select style="display:none;" name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="Continue">
      <?php if(!empty($message)) { ?>
          <div class="error-message"><?php echo $message; ?></div>
      <?php } ?>
      <p>Already a member? <a href="index.php">Sign in now</a></p>
   </form>
</div>


</body>
</html>

