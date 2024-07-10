<?php
if (isset($_SESSION['login'])) {
    to("back.php");
}
?>
<h2 class="cent">管理登入</h2>
<hr>
<form action="">
    <table style="margin:auto;">
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
    </table>
    <div class="cent"><input type="button" value="送出" onclick="login()"><input type="reset" value="清除"></div>
</form>
<script>
    function login() {
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        $.post('./api/admin.php', {
            acc,
            pw
        }, (res) => {
            if (res == 0) {
                alert("帳號或密碼錯誤");
                location.reload();
            } else {
                location.href = "back.php";
            }
        })
    }
</script>