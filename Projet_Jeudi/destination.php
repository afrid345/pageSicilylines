<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Découverte PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body style="background-color:gray">

    <nav class="navbar sticky-top navbar-expand-lg navbar-gray bg-gray" style="background-color:#D9D9D9;padding-left:15px;">
        <img src="images/syclines.jpg" alt="" srcset="" height="34" widht="54"> <a class="navbar-brand" href="index.php">Accueil</a>
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


    <br>
    <center>
        <img src="images/loupe.png" height="34" width="34" alt="" srcset=""><input type="search" id="site-search" name="q">

        <button>Search</button>

        <a href="http://"><img style="margin: 15px;" src="images/panier.png" height="34" width="34" alt="" srcset=""></a>
    </center>

    <nav class="navbar navbar-expand-lg navbar-gray bg-gray sticky-top">





        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        trié par prix <input type="text" placeholder="Nos suggestions" id="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ajouter un produit</a>
                        <a class="dropdown-item" href="#">Modifier un produit</a>
                        <a class="dropdown-item" href="#">Supprimer un produit</a>
                    </div>
                </li>
        </div>

        </ul>


    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/syclines.jpg" alt="" srcset="">
                </div>
                <div class="col-md-4">
                    Hotel Kyriad Saint Malo Plage
                    <span class="C2etoiles">
                        <div>1</div>

                        <span class="C2etoiles">
                            <div>2</div>

                            <span class="C2etoiles">
                                <div>3</div>

                                <span class="C2etoiles">
                                    <div>4</div>

                                    <span class="C2etoiles">
                                        <div>5</div> <!-- les div ici permettent l'affichage de l'étoile via la propriété "content", avec le sélecteur ".C2etoiles div::after" -->
                                    </span>
                                </span>
                            </span>
                        </span>
                    </span>
                    <p>8,2 très bien</p>
                </div>

                <div style="background-color: #CDFFCC;" class="col-md-4">
                    site de l’hotel<br><br><br>
                    74 euro <a style="background:green;color:#fff;text-decoration:none;padding:4px;" href="http://">voir l'offre</a>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21028.00802166977!2d2.314315936270311!3d48.79141599693198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6713b8ca26d31%3A0x40b82c3688b39b0!2sCachan!5e0!3m2!1sfr!2sfr!4v1679570125869!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
            <input style="background:green;color:#fff" class="btn btn-success" type="button" value="valider">
            <input style="background:red;color:#fff" class="btn btn-danger" type="button" value="annuler">
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>