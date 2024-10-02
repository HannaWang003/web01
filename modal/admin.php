<h1 class="cent">新增管理者帳號</h1>
<hr>
<table width="60%" style="margin:auto">
    <tr>
        <td style="text-align:end">帳號 : </td>
        <td><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td style="text-align:end">密碼 : </td>
        <td><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td style="text-align:end">確認密碼 : </td>
        <td><input type="password" name="pw2" id="pw2"></td>
    </tr>
</table>
<div class="cent"><input type="submit" value="新增"><input type="reset" value="重置" onclick="clean()">
</div>
<script>
$('input[type="submit"]').on('click', function() {
    let pw = $('#pw').val();
    let pw2 = $('#pw2').val();
    if (pw != pw2) {
        alert("密碼不一致")
    } else {
        let acc = $('#acc').val();
        $.post('../api/admin.php?do=admin', {
            acc,
            pw
        }, () => {
            location.reload();
        })
    }
})

function clean() {
    $('#acc').val("");
    $('#pw').val("");
    $('#pw2').val("")
}
</script>