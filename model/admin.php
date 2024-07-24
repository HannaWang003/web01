    <h2 class="t botli">新增管理者帳號</h2>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">帳號 ：</td>
            <td><input name="acc" id="acc" type="text" style="width:300px;"></td>
        </tr>
        <tr>
            <td style="text-align:end">密碼 ：</td>
            <td><input name="pw" id="pw" type="password" style="width:300px;"></td>
        </tr>
        <tr>
            <td style="text-align:end">確認密碼 ：</td>
            <td><input name="pw2" id="pw2" type="password" style="width:300px;"></td>
        </tr>
        <tr>
            <td colspan="2"><input value="新增" type="submit"><input type="reset" value="重置"></td>
        </tr>
    </table>
    <script>
        $('input[type="submit"]').on('click', () => {
            if ($('#pw').val() != $('#pw2').val()) {
                alert("密碼不一致，請重新輸入");
            } else {
                let data = {
                    acc: $('#acc').val(),
                    pw: $('#pw').val()
                }
                $.post('./api/add_admin.php', data, () => {
                    location.reload();
                })
            }
        })
    </script>