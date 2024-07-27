<p class="t cent botli">頁尾版權資料管理</p>
<?php
if (!empty($_POST['bottom'])) {
    $Bottom->save($_POST);
    to("?do=bottom");
}
?>
<form method="post" action="?do=bottom">
    <table width="60%" style="margin:auto">
        <tbody>
            <tr class="yel">
                <td width="40%">頁尾版權資料：</td>
                <th width="60%"><input type="text" name="bottom" value="<?= $Bottom->find(1)['bottom'] ?>"
                        style="width:95%"></td>
            </tr>
            <input type="hidden" name="id" value="1">
        </tbody>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>