<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
    <h3>Atualização de Dados</h3>
    <?php
    require('../app/Database.php');
    $DataBase = new DataBase();
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $binds = ['id'=> 3];
    $result = $DataBase->delete($sql, $binds);
    if($result){
        echo "<div class='success'> Deletado com sucesso </div>";

    }else{
        echo "Não foi possível excluir dados";
    }



    ?>
</div>
</body>
</html>
