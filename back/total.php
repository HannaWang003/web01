<p class="t cent botli">進站總人數管理</p>
<form method="post" action="./api/total.php">
    <table width="60%" style="margin:auto">
        <tbody>
            <tr class="yel">
                <td width="50%">進站總人數:</td>
                <td width="50%" style="background:transparent"><input type="text" name="total"
                        value="<?= $DB->find(1)['total'] ?>" style="width:90%;"></td>
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