                                        <!--正中央-->
                                        <?php
										if (isset($_SESSION['admin'])) {
											to("back.php");
										}
										if (isset($_GET['error'])) {
										?>
                                        <script>
alert(`<?= $_GET['error'] ?>`)
                                        </script>
                                        <?php
										}
										?>
                                        <form method="post" action="./api/check.php">
                                            <p class="t botli">管理員登入區</p>
                                            <p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
                                            <p class="cent">密碼 ： <input name="pw" type="password"></p>
                                            <p class="cent"><input value="送出" type="submit"><input type="reset"
                                                    value="清除"></p>
                                        </form>