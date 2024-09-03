<p class="t cent botli">新增管理者帳號</p>
<form action="" method="post">
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
            <td><input type="password" id="pw2"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>
<script>
    $('input[type="button"]').on('click', function() {
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        if (pw != pw2) {
            alert("密碼不一致，請重新輸入");
        } else {
            let acc = $('#acc').val();
            $.post('../api/add_admin.php', {
                acc,
                pw
            }, () => {
                location.reload();
            })
        }
    })
</script>