<?php
//必须引入之后才能使用
include '../model/Dbutils.php';
use Admin\Php\Model\Dbutils;

$model=new Dbutils();
$model->test();
