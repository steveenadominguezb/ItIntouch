<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .father{
            background-image: url("data:image/png;base64,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");
            height: 1000px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            background-color: white;
            padding: 50px;
            border: solid;
            border-color: black;
            
        }
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="father">
        <form class="child" method="POST" action="">
            @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="text" name="UserName" class="form-control" id="UserName" aria-describedby="userNameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('message')
            <p>Error</p>
        @enderror
        <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</body>
</html>