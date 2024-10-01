                                        <!--正中央-->
                                        <h2>更多最新消息顯示區</h2>
                                        <hr>
                                        <style>
.sswww {
    margin: 10px 20px;

    .all {
        display: none;
    }
}
                                        </style>
                                        <?php
										$total = $News->count(['sh' => 1]);
										$div = 5;
										$pages = ceil($total / $div);
										$now = ($_GET['p']) ?? 1;
										$start = ($now - 1) * $div;
										$news = $News->all(['sh' => 1], "limit $start,$div");
										foreach ($news as $idx => $n) {
										?>
                                        <div class="sswww">
                                            <?= $start + $idx + 1 ?>.<?= mb_substr($n['text'], 0, 10) ?>
                                            <div class="all"><?= $n['text'] ?></div>
                                        </div>
                                        <?php
										}
										?>
                                        <div style="text-align:center;">
                                            <?php
											$prev = ($now > 1) ? $now - 1 : $now;
											$next = ($now < $pages) ? $now + 1 : $now;
											?>
                                            <a class="bl" style="font-size:30px;"
                                                href="?do=news&p=<?= $prev ?>">&lt;&nbsp;</a>
                                            <?php
											for ($i = 1; $i <= $pages; $i++) {
												$style = ($now == $i) ? "font-size:20px;font-weight:bolder;margin:0 10px;" : "";
											?>
                                            <a href="?do=news&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
                                            <?php
											}
											?>
                                            <a class="bl" style="font-size:30px;"
                                                href="?do=news&p=<?= $next ?>">&nbsp;&gt;</a>
                                        </div>
                                        <div id="alt"
                                            style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
                                        </div>
                                        <script>
$(".sswww").hover(
    function() {
        $("#alt").html("" + $(this).children(".all").html() + "").css({
            left: $(this).offset().left - 200,
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