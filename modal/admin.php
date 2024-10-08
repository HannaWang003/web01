<h2 class="t cent botli">新增管理者帳號</h2>
<table width="50%" style="margin:auto">
    <tr>
        <td style="text-align:end;width:40%;">帳號 : </td>
        <td><input type="text" name="acc" style="width:80%;" id="acc"></td>
    </tr>
    <tr>
        <td style="text-align:end;">密碼 : </td>
        <td><input type="password" name="pw" id="pw" style="width:80%;"></td>
    </tr>
    <tr>
        <td style="text-align:end;">確認密碼 : </td>
        <td><input type="password" name="pw2" id="pw2" style="width:80%;"></td>
    </tr>
    <tr class="cent">
        <td colspan="2"><input type="button" value="新增" onclick="add()"><input type="button" value="重置"
                onclick="clean()"></td>
    </tr>
</table>
<script>
function add() {
    let acc = $('#acc').val();
    let pw = $('#pw').val();
    let pw2 = $('#pw2').val();
    if (acc == "" || pw == "" || pw2 == "") {
        alert("不得空白");
    } else {
        if (pw != pw2) {
            alert("密碼不一致，請重新輪入");
        } else {
            $.post('../api/edit.php?do=admin', {
                acc,
                pw
            }, () => {
                location.reload();
            })
        }
    }
}

function clean() {
    $('#acc, #pw, #pw2').val("");
}
</script>