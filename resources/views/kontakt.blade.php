<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/KontaktCSS.css">

    <title>Se Odense</title>

</head>

<body>

<h3 class="text-center animated slideInRight"><br>Kontakt form</h3>

<form action="/">
    <button id="toggle" class="toggle-button d-block mx-auto">Gå til forsiden</button>
</form>

<div class="container animated slideInRight">
    <form action="/beskeder" method="post">
        {{csrf_field()}}
        <label for="fname">Fornavn</label>
        <input type="text" id="fname" name="fornavn" placeholder="Dit navn..">

        <label for="lname">Efternavn</label>
        <input type="text" id="lname" name="efternavn" placeholder="Dit efternavn..">

        <label for="subject">Besked</label>
        <textarea id="subject" name="besked" placeholder="Skriv noget.." style="height:200px"></textarea>

        <input type="submit" name="Indsend" value="Indsend">
    </form>
</div>

</body>

</html>
