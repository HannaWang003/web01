<?php
include_once "db.php";
$Total->save(['id' => 1, 'total' => $_POST['total']]);
to("../back.php?do=total");
