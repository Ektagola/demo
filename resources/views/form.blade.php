<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asste('css/app.css')}}">
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <h1 class="text-center">Registation Form</h1>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="un" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pwd" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="eml" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="tel" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
    </form>
</body>
</html>