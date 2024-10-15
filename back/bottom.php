<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="?do=<?=$do?>">
        <table width="60%" style="margin:auto;">
            <tbody>
                <tr class="yel">
                    <td width="50%">頁尾版權資料</td>
                    <th width="50%"><input type="text" name="<?=$do?>" value="<?= $DB->find(1)[$do] ?>"
                            style="width:90%"></th>
                    <input type="hidden" name="id" value="1">
                </tr>
            </tbody>
        </table>
        <table style="margin:40px auto; width:60%;">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>