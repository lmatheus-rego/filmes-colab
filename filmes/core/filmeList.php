<?php
use  \filmes\routes\filme;
use  \filmes\core\filmeDao;
require_once 'filmeDao.php';

$filmeList = new filmeDao();
$filmeList->read();
?>