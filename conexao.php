<?php
namespace Telnet;
include ('TelnetClient.php');

$telnet = new TelnetClient('172.16.13.242', 23);
$telnet->connect();
$telnet->setPrompt('#');
$telnet->login('admin', 'dlpatm197');
$sair = 'sair';

do{
$comando = readline();
$cmdResult = $telnet->execute($comando);
echo($cmdResult);
}while($comando != $sair);
$telnet->disconnect();

?>