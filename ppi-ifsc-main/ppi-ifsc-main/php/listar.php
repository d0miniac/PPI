
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-s">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        include_once("db.php");
        include_once("pessoa_da.php");
        $lista_pessoa=getUsuarios();
        //array[0]{i:1, nome:"Henrique", email: henrique@gmail.com"}
        ?>
    <table>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>email</th>
        </tr>
        <?php //sem foreach
        for($i =0. $i<count($lista_pessoalista);$i++){
            ?>
        <tr>
            <td><?php echo $lista_pessoa[$i]["id"]?></td>
            <td><?php echo $lista_pessoa[$i]["nome"]?></td>
           <td><?php echo $lista_pessoa[$i]["email"]?></td> 
        </tr>
        <?php
        }

    </table>
    
    </pre>
</body>
</html>

