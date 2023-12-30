<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="card mt-3" style="background-color:#333 ;width:40%; color:#fff">
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

</html>