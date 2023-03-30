<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>page de reservation</title>
</head>

<body>


    <nav class=" navbar sticky-top navbar-expand-lg navbar-gray bg-gray" style="background-color:#D9D9D9;padding-left:15px;">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="destination.php">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="port.php">Ports</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="bg">




        <a class="btn" style="color: black;" href="http://">Reserver Votre Vol</a>
        <form style="background-color: #fff;height:50vh;" action="">

            <label style="color: black;margin-top: 150px;" for="aller-retour">aller-retour</label>
            <input type="text" name="ar" id="ar">
            <label style="color: black;margin-top: 150px;" for="aller-simple">aller-simple</label>
            <input type="text" name="as" id="as">
            <label style="color: black;margin-top :150px;" for="multidestination">multi-destination</label>
            <input type="text" name="multidestination" id="multidestination">
        </form>

    </section>

</body>

</html>