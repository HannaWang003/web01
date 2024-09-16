<?php
if(isset($_SESSION['admin'])){
	to("back.php");
}
?>
<!--正中央-->
<p class="t botli">管理員登入區</p>
<p class="cent">帳號 ： <input name="acc" autofocus="" type="text" id="acc"></p>
<p class="cent">密碼 ： <input name="pw" type="password" id="pw"></p>
<p class="cent"><input value="送出" type="button" onclick="login()"><input type="button" value="清除" onclick="clean()"></p>
<script>
function login() {
    let acc = $('#acc').val();
    let pw = $('#pw').val();
    $.post('./api/login.php', {
        acc,
        pw
    }, (res) => {
        if (res > 0) {
            location.href = "back.php";
        } else {
            alert("帳號或密碼輸入錯誤");
            clean();
        }
    })
}

function clean() {
    location.reload();
}
</script>