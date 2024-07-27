                                        <?php
                                        if (isset($_SESSION['admin'])) {
                                            to("back.php");
                                        }
                                        ?>
                                        <!--正中央-->
                                        <p class="t botli">管理員登入區</p>
                                        <p class="cent">帳號 ： <input name="acc" id="acc" type="text"></p>
                                        <p class="cent">密碼 ： <input name="pw" id="pw" type="password"></p>
                                        <p class="cent"><input value="送出" type="button" onclick="login()"><input type="button" value="清除" onclick="clean()"></p>
                                        <script>
                                            function login() {
                                                let acc = $('#acc').val();
                                                let pw = $('#pw').val();
                                                $.post('./api/check.php', {
                                                    acc,
                                                    pw
                                                }, (res) => {
                                                    if (res == 0) {
                                                        alert("帳號或密碼錯誤");
                                                        clean()
                                                    } else {
                                                        location.href = 'back.php';
                                                    }
                                                })
                                            }

                                            function clean() {
                                                $("#acc,#pw").val("");
                                            }
                                        </script>