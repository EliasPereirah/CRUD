# CRUD
Essa é uma classe CRUD simples mas muito funcional para realizar as quatros operações básicas no SQL (CREATE - READ - UPDATE - DELETE)

# USO - exemplo para select
```php
<?php
require __DIR__."/config.php";
require __DIR__."/app/Database.php";
$Database = new \app\Database();
$sql = "SELECT * FROM table_name WHERE id > :id LIMIT 10";
$binds = ['id' => 4];
$select = $Database->select($sql, $binds);
if($select->rowCount()){
    $dados = $select->fetchAll();
    print_r($dados);
}else{
    echo "Sem resultados";
}
