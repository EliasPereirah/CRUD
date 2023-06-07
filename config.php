const PRODUCTION = false;

#DATABASE CONFIG
const DB_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => 'db_name',
    "username" => 'user_name',
    "password" => 'the_password',
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];


if(!PRODUCTION){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}
