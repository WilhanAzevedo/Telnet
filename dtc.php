<?php
namespace Telnet;
include ('TelnetClient.php');

//use TelnetClient;

//Uncomment this to get debug logging
//TelnetClient::setDebug(true);

$telnet = new TelnetClient('172.16.13.242', 23);
$telnet->connect();
$telnet->setPrompt('#'); //setRegexPrompt() to use a regex
//$telnet->setPruneCtrlSeq(true); //Enable this to filter out ANSI control/escape sequences
$telnet->login('admin', 'dlpatm197');
$sair = 'sair';

do{
$comando = readline();
$cmdResult = $telnet->execute($comando);
echo($cmdResult);
}while($comando != $sair);

$telnet->disconnect();
?>