<!DOCTYPE html>
<html lang="en">

<style>
    #id{
        display: none;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>YouEvent</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="card mt-3" style="background-color:#333 ;width:40%; color:#fff">
    

        <div class="card mt-5" style="background-color:#333 ;width:40%; color:#fff">
            <div class="card-header">
                <h3>Sign in</h3>
            </div>
            <div class="card-body mt-3">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="nom" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First name</label>
                        <input type="text" class="form-control" name="prenom" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="signIn">Sign up</button>
                    <div class="mb-3 text-end">
                        <a href="signIn" class="">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

            <form method="POST">
        <?php foreach ($input as $row): ?>
            <input type="text" class="form-control mt-3" id=<?php echo $row ?> placeholder=<?php echo $row ?> name=<?php echo $row ?>>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary mt-3" name="signUp">Sign up</button>
    </from>
            </div>
        </div>
    </div>
    <script>
            let pass =document.getElementById("passwords");
            pass.type = "password";
        
    </script>   

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>