<?php
if (isset($_SESSION['admin'])) {
    to("back.php");
}
?>
<div style="height:32px; display:block;"></div>
<!--正中央-->
<form>
    <p class="t botli">管理員登入區</p>
    <p class="cent">帳號 ： <input name="acc" type="text" id="acc"></p>
    <p class="cent">密碼 ： <input name="pw" type="password" id="pw"></p>
    <p class="cent"><input value="送出" type="button" onclick="chk()"><input type="reset" value="清除"></p>
</form>
<script>
function chk() {
    let acc = $('#acc').val();
    let pw = $('#pw').val();
    $.post('./api/login.php', {
        acc,
        pw
    }, (res) => {
        if (res == 0) {
            alert("帳號或密碼錯誤，請重新輸入");
        } else {
            location.href = "back.php";
        }
    })
}
</script>