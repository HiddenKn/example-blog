<?php
/**
 * Created by PhpStorm.
 * User: Alice
 * Date: 17/12/2018
 * Time: 04:55
 */

require_once("config.php");

$sql = new mysqli($config->getDatabaseHost(), $config->getDatabaseUser(), $config->getDatabasePassword(), $config->getDatabaseName());
print($sql->get_server_info());
