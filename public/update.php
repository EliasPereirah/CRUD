<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
    <h3>Exclusão de Dados</h3>
    <?php
    require('../app/Database.php');
    $DataBase = new Database();
    $sql = "UPDATE usuarios SET descricao = :descricao WHERE id = :id";
    $binds = ['descricao'=>'Sou a Joana, mas pode me chamar de jô.','id'=> 4];
   $result = $Database->update($sql, $binds);
   if($result){
       echo "<div class='success'> Atualizado com sucesso </div>";

   }else{
       echo "Não foi possível fazer a atualização";
   }



    ?>
</div>
</body>
</html>
