<p class="t cent botli">頁尾版權資料管理</p>
<form method="post" action="?do=<?= $do ?>">
    <table class="all60" style="table-layout:fixed">
        <tr class="yel">
            <td class="ct">頁尾版權資料 : </td>
            <th><input type="text" name="<?= $do ?>" value="<?= $DB->find(1)[$do] ?>" style="width:90%;"></th>
            <input type="hidden" name="id" value="1">
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>