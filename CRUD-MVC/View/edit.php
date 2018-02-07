<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Update</title>
</head>
<body>

<div class="container">
    <form action="update" method="post">
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="userid" value="<?php echo $_GET['uid'];?>">
        </div>
        <div class="form-group">
            <label>FirstName</label>
            <input type="text" class="form-control" name="fname">
        </div>
        <div class="form-group">
            <label>LastName</label>
            <input type="text" class="form-control" name="lname">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
</body>
</html>