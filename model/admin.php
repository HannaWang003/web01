<h2 class="t cent botli">新增管理者帳號</h2>
<form>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">帳號：</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td style="text-align:end">密碼：</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td style="text-align:end">確認密碼：</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="admin">
    <div class="cent"><input type="button" value="新增" onclick="add()"><input type="reset" value="重置"></div>
</form>
<script>
    function add() {
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        if (pw != pw2) {
            alert("密碼不一致");
            $('#pw').val("");
            $("#pw2").val("");
        } else {
            $.post('./api/add.php', {
                acc: $('#acc').val(),
                pw,
                table: "admin"
            }, () => {
                location.reload();
            })
        }
    }
</script>