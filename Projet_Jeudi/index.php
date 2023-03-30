<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">
    <title>page d'acceuil</title>
</head>

<body>

    <nav class="navbar  navbar-expand-lg navbar-gray bg-gray " style="background-color: #D9D9D9;">
        <div class="container-fluid">
            <img height="55" widht="55" src="images/syclines.jpg" alt="">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="float-left">
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="form-submit-button2" href="inscription.php">Register</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="form-submit-button2" href="connexion.php">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>


    <br>

    <nav class="navbar sticky-top navbar-expand-lg navbar-gray bg-gray" style="background-color:#D9D9D9;padding-left:15px;">
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
                    <a class="nav-link" href="#">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ports</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="background">

        <div class="container">

            <img src="images/bgr.jpg" alt="" style="width:100%;">

            <div class="centered">Welcome to Sicilylines</div>
        </div>

        <i class="fa-solid fa-tricycle"></i>

    </div>

</body>

</html>