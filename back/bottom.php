<?php
if (!empty($_POST['bot'])) {
    $Bottom->save($_POST);
    to("?do=bottom");
}
?>
<p class="t cent botli">頁尾版權資料管理</p>
<form action="?do=bottom" method="post">
    <table width="60%" style="margin:auto;">
        <tbody>
            <tr class="yel">
                <td width="40%">頁尾版權資料: </td>
                <td width="60%"><input type="text" name="bot" value="<?= ($Bottom->find(1)['bot']) ?? "" ?>"
                        style="width:90%">
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="1">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>