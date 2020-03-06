<?php
namespace Telnet;
include ('TelnetClient.php');


$telnet = new TelnetClient('172.16.13.242', 23);
$telnet->connect();
$telnet->setPrompt('#');
$telnet->login('admin', 'dlpatm197');
$sair = 'sair';
$comando = 0;

if (isset($_POST["comand"])) {
$comando = $_POST['comand'];}


do{
//$comando = readline();
//$comando = $_POST['comand'];
$cmdResult = $telnet->execute($comando);
echo($cmdResult);
}while($comando != $sair);

$telnet->disconnect();


?>


