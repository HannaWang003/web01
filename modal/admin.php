<h3 class="t botli">管理者帳號</h3>
<table class="all60">
    <tr>
        <td class="l">帳號 : </td>
        <td><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="l">密碼 : </td>
        <td><input type="password" name="pw" id="pw"></td>
    </tr>

    <tr>
        <td class="l">確認密碼 : </td>
        <td colspan="2"><input type="password" name="pw2" id="pw2"></td>
    </tr>
    <tr>
        <td class="cent"><input type="button" value="新增" onclick="add()"><input type="button" value="重置" onclick="clean()"></td>
    </tr>
</table>
<script>
    function clean() {
        $('#acc,#pw,#pw2').val("");
    }

    function add() {
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        if (pw != pw2) {
            alert("密碼不一致");
        } else {
            let acc = $('#acc').val();
            $.post('./api/admin.php?do=admin', {
                acc,
                pw
            }, () => {
                location.href = "?do=admin";
            })
        }
    }
</script>