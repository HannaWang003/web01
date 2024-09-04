                <div style="height:32px; display:block;"></div>
                <div style="margin:auto;width:90%;">
                    <span class="t botli">更多最新消息顯示區</span>
                    <div>
                        <?php
                        $div = 5;
                        $total = $News->count(['sh' => 1]);
                        $pages = ceil($total / $div);
                        $now = ($_GET['p']) ?? 1;
                        $start = ($now - 1) * $div;
                        $news = $News->all(['sh' => 1], "limit $start,$div");
                        foreach ($news as $key => $n) {
                        ?>
                            <div class="sswww"><?= $start + $key + 1 ?>．<?= mb_substr($n['text'], 0, 20) ?>...
                                <div class="all" style="display:none"><?= $n['text'] ?></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!--正中央-->
                    <div style="text-align:center;">
                        <?php
                        $prev = ($now == 1) ? "1" : $now - 1;
                        $next = ($now == $pages) ? "$pages" : $now + 1;
                        ?>
                        <a class="bl" style="font-size:30px;" href="?do=news&p=<?= $prev ?>">&lt;&nbsp;</a>
                        <?php
                        for ($i = 1; $i <= $pages; $i++) {
                            $style = ($now == $i) ? "font-size:20px;" : "";
                        ?>
                            <a style="<?= $style ?>" href="?do=news&p=<?= $i ?>"><?= $i ?></a>
                        <?php
                        }
                        ?>
                        <a class="bl" style="font-size:30px;" href="?do=news&p=<?= $next ?>">&nbsp;&gt;</a>
                    </div>
                </div>

                <div id="alt"
                    style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 0px; left: 100px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
                </div>
                <script>
                    $(".sswww").hover(
                        function() {
                            $("#alt").html("" + $(this).children(".all").html() + "").css({
                                "top": $(this).offset().top - 10
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