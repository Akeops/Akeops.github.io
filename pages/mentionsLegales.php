<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Andoni</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/app.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Contenu Principal -->
        <section class="identite">
            <br><br>
            <h1 class="ml"> Mentions Légales <br> </h1>
            <h2>
                <br> <b>Identité :</b> <br>
            </h2>
            <p class="texteMention">
                LALANNE-BERDUTICQ Andoni <br>
            </p>

            <h2>
                <br> <b>Coordonnées :</b> <br>
            </h2>
            <p class="texteMention">
                Domicile : Eysines, 33110 <br>
                E-mail : lalanne.andoni1@gmail.com <br>
                Téléphone : +33 6 62 45 57 92 <br>
            </p>

            <h2>
                <br> <b>Informations complémentaires :</b> <br>
            </h2>
            <p class="texteMention">
                Directeur de la publication et de la rédaction: LALANNE-BERDUTICQ Andoni <br>
                Hébergeur : OVH <br>
                Site internet : <a href="https://www.ovhcloud.com/fr/" target="_blank"rel="noreferrer"> https://www.ovhcloud.com/fr/ </a>
                <br>
                Adresse : 2 rue Kellermann, BP 80157, 59100 Roubaix, France <br>
            </p>
        </section>

        <?php
            $content = ob_get_clean();
            require "commons/template.php";
        ?>
    </body>
</html>