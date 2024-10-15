    <p class="t botli">新增管理者帳號</p>
    <p class='cent'><span style="display:inline-block;width:100px;text-align:end;">帳號 ：</span><input type='text'
            id='acc' style='width:20%;'></p>
    <p class='cent'><span style="display:inline-block;width:100px;text-align:end;">密碼 ：</span><input type='password'
            id='pw' style='width:20%;'></p>
    <p class='cent'><span style="display:inline-block;width:100px;text-align:end;">確認密碼 ：</span><input type='password'
            id='pw2' style='width:20%;'></p>
    <p class="cent"><input value="新增" type="button" onclick="add()"><input type="button" value="重置" onclick="clean()">
    </p>
    <script>
        function add() {
            let pw = $('#pw').val();
            let pw2 = $('#pw2').val();
            if (pw != pw2) {
                alert("密碼不一致");
            } else {
                let acc = $('#acc').val();
                $.post('../api/edit.php?do=admin', {
                    acc,
                    pw
                }, () => {
                    location.reload();
                })
            }
        }
    </script>