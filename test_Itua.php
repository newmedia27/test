<?php
include ('data.php');
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<?=$err;?>
<form action="" enctype="multipart/form-data" role="form" method="post">
    <div class="form-group col-md-8" style="margin-top: 30px;">
        <label for="exampleInputPassword1">USER_NAME</label>
        <input type="text" value="<?=$_POST['userName']; ?>" required name="userName" class="form-control" id="exampleInputPassword1"
               placeholder="USER_NAME">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">NAME</label>
        <input type="text" value="<?=$_POST['name']; ?>" required name="name" class="form-control" id="exampleInputPassword1" placeholder="NAME">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" value="<?=$_POST['mail']; ?>" required name="mail" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group col-md-8">
        <textarea class="form-control" name="text" style="resize: none" rows="3" minlength="20"></textarea>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile" name="userFile">
    </div>


    <div class="col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Отправить</button>
    </div>
</form>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
</script>
</body>
</html>
