<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation des Événements</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        header a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        .welcome-page {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 80vh;
        }

        .user-details {
            background-color: #343a40;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            color: #fff;
            width: 300px;
        }

        .user-details h2,
        .user-details p {
            color: #fff;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .event,
        .reservation-details {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 300px;
        }

        .event h3,
        .reservation-details h2 {
            color: #343a40;
        }

        .event p,
        .reservation-details p {
            color: #666;
        }

        .event a,
        .reservation-details a {
            color: #343a40;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>YouÉvénements</h1>
        <nav>
            <a href="home.html">Accueil</a>
            <a href="login.html">Connexion</a>
            <a href="signup.html">Inscription</a>
        </nav>
    </header>

    <div class="welcome-page">
        <div class="user-details">
            <h2>Informations sur l'utilisateur</h2>
            <p><strong>Nom d'utilisateur:</strong>
                <?php echo $data[0]->nameUtilisateur; ?>
            </p>
            <p><strong>Email:</strong>
                <?php echo $data[0]->email; ?>
            </p>
            <!-- يمكنك استمرار عرض المعلومات الخاصة بالمستخدم هنا -->
        </div>
    </div>

    <main>
        <?php foreach ($data as $row): ?>
            <div class="event">
                


                <div class="reservation-details">
                    <h2>Détails de la Réservation</h2>
                    <p><strong>Nom de l'événement:</strong>
                        <?php echo $row->nameEvent; ?>
                    </p>
                    <p><strong>Description de l'événement:</strong>
                        <?php echo $row->descriptionEvent; ?>
                    </p>
                    <p><strong>locationEvent de l'événement:</strong>
                        <?php echo $row->locationEvent; ?>
                    </p>
                    <p><strong>date de l'événement:</strong>
                        <?php echo $row->dateEvent ?>
                    </p>
                    <p><strong>type de Ticket:</strong>
                        <?php echo $row->typeTicket ?>
                    </p>
                    <p><strong>Prix de Ticket:</strong>
                        <?php echo $row->priceTicket ?>
                    </p>
                    <p><strong>Content:</strong>
                        <?php echo $row->count;  ?>
                    </p>
                    <p><strong>Total:</strong>
                        <?php echo $row->priceTicket *$row->count;  ?>
                        $
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </main>



    <footer>
        <p>&copy; 2023 Présentation des Événements. Tous droits réservés.</p>
    </footer>
</body>

</html>