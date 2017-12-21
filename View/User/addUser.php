<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../style/style.css"/>
</head>
<body>
    <div id="ajout">
        <fieldset>
            <legend>AJOUTER UN UTILISATEUR</legend>
            <form method="post" action="../../Controller/User/index.php">
                <br>
                <input type="hidden" class="champs" name="action" value="ajout"/>
                <input type="text" class="champs" placeholder=" Login ..." name="login" value="" required="true"/>&nbsp;
                <input type="password" class="champs" placeholder=" Password ..." name="password" value="" required="true"/>&nbsp;
                <input type="submit" id="submit" name="envoyer" value="Enregistrer" />
                <input type="reset" id="reset" name="annuler" value="Annuler" />
            </form>
        </fieldset>
    </div>

</body>
</html>

