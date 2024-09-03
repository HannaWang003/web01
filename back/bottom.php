<?php
if (!empty($_POST['bottom'])) {
    $Bottom->save(['id' => 1, 'bottom' => $_POST['bottom']]);
}
?>
<p class="t cent botli">頁尾版權管理</p>
<form method="post" action="?do=bottom">
    <table width="60%" style="margin:auto">
        <tbody>
            <tr class="yel">
                <td width="50%">頁尾版權資料:</td>
                <td width="50%" style="background:transparent"><input type="text" name="bottom"
                        value="<?= $DB->find(1)['bottom'] ?>" style="width:90%;"></td>
            </tr>
        </tbody>
    </table>
    <table style="margin:40px auto; width:70%;">
        <tbody>
            <tr>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>