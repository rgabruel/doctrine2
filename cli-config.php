<?php
// cli-config.php
require_once "bootstrap.php";

echo 'test...';

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)

));


return $helperSet;
