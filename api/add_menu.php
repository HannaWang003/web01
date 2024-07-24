<?php
include_once "db.php";
$Menu->save($_POST);
to("../back.php?do=menu");
