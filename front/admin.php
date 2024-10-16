<?php
if (isset($_SESSION['login'])) {
	to("back.php");
}
?>
<p class="t botli">管理員登入區</p>
<p class="cent">帳號 ： <input id="acc" name="acc" autofocus="" type="text"></p>
<p class="cent">密碼 ： <input id="pw" name="pw" type="password"></p>
<p class="cent"><input value="送出" type="button" onclick="login()"><input type="button" value="清除" onclick="clean()"></p>
<script>
	function login() {
		let acc = $('#acc').val();
		let pw = $('#pw').val();
		$.post('./api/login.php?do=admin', {
			acc,
			pw
		}, (res) => {
			if (res == 0) {
				alert("帳號或密碼錯誤");
				clean();
			} else {
				location.href = "back.php";
			}
		})
	}

	function clean() {
		$('#acc,#pw').val("");
	}
</script>