<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title> MODIFIER USER </title>
    <link rel="stylesheet" type="text/css" href="../../CSS/User/style.css"/>
</head>
<body>
<div>
    <fieldset>
        <legend>MODIFIER L'UTILISATEUR</legend>
        <form method="POST" action="../../Controller/User/index.php">
            <br>
            <?php foreach($user as $us): ?>
                <input type="hidden" class="champs" name="action" value="modif"/>
                <input type="hidden" class="champs" name="id" value="<?= $us[0] ?>"/>
                <input type="text" class="champs" placeholder=" Login ..." name="login" value="<?= $us[1] ?>" required="true"/>&nbsp;
                <input type="password" class="champs" placeholder=" New password ..." name="password" value="<?= $us[2] ?>" required="true"/><br> <br>
                <input type="submit" id="submit" name="envoyer" value="Enregistrer" />
                <input type="reset" id="reset" name="annuler" value="Annuler" />
            <?php endforeach; ?>
        </form>
    </fieldset>
</div>

</body>
</html>

