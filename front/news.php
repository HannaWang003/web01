                                        <!--正中央-->
                                        <h2>更多消息顯示區</h2>
                                        <hr>
                                        <?php
										$num = $DB->count();
										$div = 5;
										$pages = ceil($num / $div);
										$now = ($_GET['p']) ?? 1;
										$start = ($now - 1) * $div;
										$rows = $DB->all("limit $start,$div");
										foreach ($rows as $idx => $row) {
										?>
                                        	<div class="sswww"><?= $idx + $start + 1 ?>.
                                        		<?= mb_substr($row['text'], 0, 10) ?>
                                        		<div class="all" style="display:none"><?= $row['text'] ?></div>
                                        	</div>
                                        <?php
										}
										?>
                                        <div style="text-align:center;">
                                        	<?php
											if ($now > 1) {
												$prev = $now - 1;
											?>
                                        		<a class="bl" style="font-size:30px;" href="?do=news&p=<?= $prev ?>">
                                        			&lt;&nbsp; </a>
                                        	<?php
											}
											for ($i = 1; $i <= $pages; $i++) {
												$style = ($now == $i) ? "font-size:20px;" : "";
											?>
                                        		<a href="?do=news&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
                                        	<?php
											}
											if ($now < $pages) {
												$next = $now + 1;
											?>
                                        		<a class="bl" style="font-size:30px;" href="?do=news&p=<?= $next ?>">
                                        			&nbsp;&gt; </a>
                                        	<?php
											}
											?>

                                        </div>
                                        <pre id="alt"
                                        	style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 10px; left: 150px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
                                        </pre>
                                        <script>
                                        	$(".sswww").hover(
                                        		function() {
                                        			$("#alt").html("" + $(this).children(".all").html() + "").css({
                                        				"top": $(this).offset().top - 100
                                        			})
                                        			$("#alt").show()
                                        		}
                                        	)
                                        	$(".sswww").mouseout(
                                        		function() {
                                        			$("#alt").hide()
                                        		}
                                        	)
                                        </script>