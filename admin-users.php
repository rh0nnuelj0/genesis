
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manager</title>

    <!-- CSS FILES -->        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
</head>
<body class="topics-listing-page" id="top">
    <main>
        <!-- header file -->
        <?php include 'admin-header.php'; ?>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-home.php">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Form</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">User List</h2>
                    </div>
                </div>
            </div>
        </header>
        <!-- User List Section -->
        <section class="section-padding section-bg">
            <div class="container mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>ADDRESS</th>
                            <th>EMAIL</th>
                            <!-- <th>PASSWORD</th> -->
                            <th>USER</th>
                            <th>ACTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                // Include database connection file
                                include_once "database.php";

                                // Fetch users from the database
                                $query = "SELECT * FROM users";
                                $result = mysqli_query($conn, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['firstName'] . "</td>";
                                        echo "<td>" . $row['lastName'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        // echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['user_type'] . "</td>";
                                        echo "<td><button class='btn btn-info' data-bs-toggle='modal' data-bs-target='#editModal' onclick='populateEditForm(\"{$row['id']}\", \"{$row['firstName']}\", \"{$row['lastName']}\", \"{$row['address']}\", \"{$row['email']}\", \"{$row['password']}\", \"{$row['user_type']}\")'>Manage</button></td>";
                                        echo "<td><a href='admin-users.php' class='btn btn-orange' style='cursor: not-allowed;' onclick='return confirm(\"WARNING: Delete Button is Disabled!\");'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No users found</td></tr>";
                                }
                            ?>

                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit User Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for editing user information -->
                <form action="update_user.php" method="POST">
                    <!-- Input fields for editing user information -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user_type" class="form-label">User Type</label>
                                <input type="text" class="form-control" id="user_type" name="user_type" readonly>
                            </div>
                        </div>
                    </div>

                 

                        <!-- Add more input fields as needed -->

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer section-padding">
        <!-- Footer content -->
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>

    <!-- JavaScript code for populating edit form fields -->
    <script>
    function populateEditForm(id, firstName, lastName, address, email, password, user_type) {
        document.getElementById('firstName').value = firstName;
        document.getElementById('lastName').value = lastName;
        document.getElementById('address').value = address;
        document.getElementById('email').value = email;
        document.getElementById('password').value = password;
        document.getElementById('user_type').value = user_type;
    }
</script>

</body>
</html>
