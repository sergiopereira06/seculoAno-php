<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Século Ano</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input name="ano" type="text" placeholder="Digite o Ano">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    error_reporting(E_ERROR | E_PARSE);
    if($_GET['seculo']){?>
        <h5>Ano <?php print_r ($_GET['ano']); ?> = século <?php print_r ($_GET['seculo']); ?></h5>
    <?php }?>
    
</body>
</html>