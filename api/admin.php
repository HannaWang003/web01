<?php
include_once "db.php";
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Admin->del($id);
    } else {
        $Admin->save(['id' => $id, 'acc' => $_POST['acc'][$key], 'pw' => $_POST['pw'][$key]]);
    }
}
to("../back.php?do=admin");
