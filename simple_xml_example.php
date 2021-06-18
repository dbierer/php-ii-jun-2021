<?php
$path = '/home/vagrant/Zend/workspaces/DefaultWorkspace/php2/src/ModWebServices/newproduce.xml';
$xml = simplexml_load_file($path);
$xpath = '//fruit';
$result = $xml->xpath($xpath);
var_dump($result);
