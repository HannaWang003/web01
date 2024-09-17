<h2 class="cent">新增管理者帳號</h2>
<hr>
<form action="">
    <div class="cent">帳號: <input type="text" name="acc" id="acc"></div>
    <div class="cent">密碼: <input type="password" name="pw" id="pw"></div>
    <div class="cent">確認密碼: <input type="password" name="pw2" id="pw2"></div>
    <div class="cent"><input type="button" value="新增" onclick="add()"><input type="reset" value="重置"></div>
</form>
<script>
    function add() {
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        if (pw != pw2) {
            alert("密碼不一致，請重新輸入");
        } else {
            let acc = $('#acc').val();
            $.post('./api/upload.php?do=<?= $_GET['do'] ?>', {
                acc,
                pw
            }, () => {
                location.reload();
            })
        }
    }
</script>