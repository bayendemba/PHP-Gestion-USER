<!DOCTYPE>

<html>

    <head>
        <title> LISTE DES UTILISATEURS</title>
        <link rel="stylesheet" type="text/css" href="../../style/style.css"/>
        <script type="text/javascript" src="../script/script.js"></script>
    </head>

    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>LOGIN </th>
                <th>PASSWORD </th>
                <th colspan="2">ACTION</th>
            </tr>
            <?php
            require_once '../../Model/IUserImpl.php';
            $usimp = new IUserImpl();
            foreach($usimp->listeUser() as $row){
                ?>
                <tr>
                    <td> <?php echo $row[0] ?> </td>
                    <td> <?php echo $row[1] ?> </td>
                    <td> <?php echo $row[2] ?> </td>
                    <td> <a href='../../Controller/User/index.php?action=supp&id=<?=$row[0]?>'>Supprimer</a> </td>
                    <td> <a href="../../Controller/User/index.php?action=modif&id=<?=$row[0]?>">Editer</a> </td>
                </tr>
            <?php } ?>
        </table>
        </br>

    </body>
</html>