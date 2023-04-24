<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>User form</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="name">First Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter Your First Name" name="first_name">
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Last Name:</label>
                <input type="name" class="form-control" placeholder="Enter Your Last Name" name="last_name">
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Address:</label>
                <textarea class="form-control" placeholder="Enter Your Address" name="address"></textarea>
            </div>
            <div class="mb-3 mt-3">
                <label for="name">City:</label>
                <input type="name" class="form-control" placeholder="Enter Your City" name="city">
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Contact:</label>
                <input type="number" class="form-control" placeholder="Enter Your Contact Number" name="contact">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="image">Image:</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>