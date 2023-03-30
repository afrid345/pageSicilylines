<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>page d'inscription</title>
</head>

<body>
    <center>
        <form style="background-image: url('images/fond1.jpg');width: 500px;padding: 20px;background-size:cover;margin: 35px;" class="form2">
            <div style="background-color:#fff;">
                <img style="margin-left:395px;" height="45" width="45" src="images/syclines.jpg">
                <center>
                    <h1 style="color: #000;">Inscription</h1>
                </center>
                <label style="color: #000;" for="nom">
                    Nom:
                </label>
                <input type="text" name="nom" value="nom">
                <br><br>
                <label style="color: #000;" for="tel">
                    telephone mobile:

                </label>
                <input type="text" name="tel" value="tel">
                <br><br>
                <label style="color: #000;" for="courriel">
                    Adresse courriel :

                </label>
                <input type="email" name="email" value="email">
                <br><br>
                <label style="color: #000;" for="mdp">
                    Mot de passe :

                </label>

                <input type="password" name="mdp" value="mdp">
                <br>
                <label style="color: #000;">I agree to the terms & service and privacy policy</label>
                <input type="checkbox">
                <br><br>
                <input class="form-submit-button2" type="submit" value="S'inscrire">
            </div>
        </form>
    </center>
</body>

</html>