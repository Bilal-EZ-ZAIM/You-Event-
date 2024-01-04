<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>YouEvent</title>
</head>

<body>
    <h2 class="m-3">Dashbord Admin</h2>
    <table class="table">
        <div class="d-flex justify-content-end p-2">
            <a href="add" class="btn btn-primary">add</a>


        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Utilisateur</th>
                <th scope="col">Email</th>
                <th scope="col">Role Utilisateur</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($data as $utilisateur) :
            ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $utilisateur->nom ?></td>
                    <td><?= $utilisateur->email  ?></td>
                    <td><?= $utilisateur->rolUtilisateur ?>
                    <td> <a href="delete?id=<?= $utilisateur->id ?>" class="btn btn-danger">delete</a>
                        <a href="update?id=<?= $utilisateur->id ?>" class="btn btn-warning">update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>