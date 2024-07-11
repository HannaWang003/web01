<p class="t cent botli">新增動態文字廣告</p>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end;">帳號: </td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td style="text-align:end;">密碼: </td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td style="text-align:end;">確認密碼: </td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
    </table>
    <div class="cent"><input type="button" value="新增" onclick="reg()"><input type="reset" value="重置"></div>
</form>
<script>
function reg() {
    let pw = $('#pw').val();
    let pw2 = $('#pw2').val();
    if (pw != pw2) {
        alert("密碼不一致，請重新輸入")
    } else {
        let acc = $('#acc').val();
        $.post('./api/add.php?table=admin', {
            acc,
            pw
        }, () => {
            location.reload();
        })
    }
}
</script>