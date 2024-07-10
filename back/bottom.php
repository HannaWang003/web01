<?php
if (isset($_POST['bottom'])) {
    $Bottom->save(['id' => 1, 'bottom' => $_POST['bottom']]);
}

?>
<h2 class="cent">頁尾版權資料管理管理</h2>
<hr>
<form action="?do=bottom" method="post">
    <table style="margin:auto;width:60%;">
        <tr class="yel">
            <td>頁尾版權資料: </td>
            <td><input type="text" name="bottom" value="<?= $Bottom->find(1)['bottom'] ?>" style="width:80%"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>