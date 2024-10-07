<?php
if (isset($_SESSION['admin'])) {
	to("back.php");
}
?>
<p class="t botli">管理員登入區</p>
<p class="cent">帳號 ： <input name="acc" autofocus="" type="text" id="acc"></p>
<p class="cent">密碼 ： <input name="pw" type="password" id="pw"></p>
<p class="cent"><input value="送出" type="button" onclick="login()"><input type="button" value="清除" onclick="clean()"></p>
<script>
	function clean() {
		location.reload();
	}

	function login() {
		let data = {
			acc: $('#acc').val(),
			pw: $('#pw').val()
		}
		$.post('./api/login.php?do=admin', data, (res) => {
			if (res == 0) {
				alert("帳號或密碼輸入錯誤");
				clean()
			} else {
				location.href = "back.php";
			}
		})
	}
</script>