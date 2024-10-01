                                        <?php
										if (isset($_SESSION['login'])) {
											to("back.php");
										}
										?>
                                        <!--正中央-->
                                        <form method="post" action="?do=admin">
                                        	<p class="t botli">管理員登入區</p>
                                        	<p class="cent">帳號 ： <input id="acc" name="acc" autofocus="" type="text">
                                        	</p>
                                        	<p class="cent">密碼 ： <input id="pw" name="pw" type="password"></p>
                                        	<p class="cent"><input value="送出" type="submit"><input type="reset"
                                        			value="清除"></p>
                                        </form>
                                        <script>
                                        	$('input[type="submit"]').on('click', () => {
                                        		let data = {
                                        			acc: $('#acc').val(),
                                        			pw: $('#pw').val()
                                        		}
                                        		$.post('./api/check.php?do=admin', data, (res) => {
                                        			if (res == 0) {
                                        				alert("帳號或密碼輸入錯誤");
                                        			} else {
                                        				location.href = "back.php";
                                        			}
                                        		})
                                        	})
                                        </script>