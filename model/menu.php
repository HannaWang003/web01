<h2 class="t cent botli">新增主選單</h2>
<form method="post" action="./api/add.php" method="post" style="width:60%;margin:auto;">
    <table>
        <tr>
            <td style="text-align:end">主選單名稱：</td>
            <td><input type="text" name="text" id="" style="width:300px"></td>
        </tr>
        <tr>
            <td style="text-align:end">選單連結網址：</td>
            <td><input type="text" name="href" id="" style="width:300px"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="menu">
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>