                <?php
                $table = $_GET['do'];
                $DB = ${ucfirst($table)};
                ?>
                <div style="display:block;">
                    <span class="t botli" style="text-align:start">更多最新消息顯示區</span>
                    <style>
                    div.ssaa div.all {
                        display: none;
                    }
                    </style>
                    <div class="ssaa" style="list-style-type:decimal;">
                        <?php
                        $all = $DB->count(['sh' => 1]);
                        $div = 5;
                        $pages = ceil($all / $div);
                        $now = $_GET['p'] ?? 1;
                        $start = ($now - 1) * $div;
                        $news = $DB->all(['sh' => 1], "limit $start,$div");
                        foreach ($news as $idx => $n) {
                        ?>
                        <div><span style="padding:10px;"><?= ($now - 1) * $div + $idx + 1 ?>.
                            </span><?= mb_substr($n['text'], 0, 10) ?>
                            <div class="all"><?= $n['text'] ?></div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div id="altt"
                        style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
                    </div>
                    <script>
                    $(".ssaa div").hover(
                        function() {
                            $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                            $("#altt").show()
                        }
                    )
                    $(".ssaa div").mouseout(
                        function() {
                            $("#altt").hide()
                        }
                    )
                    </script>
                </div>
                <!--正中央-->
                <div style="text-align:center;">
                    <?php
                    if ($now - 1 > 0) {
                        $prev = $now - 1;
                        echo "<a class='bl' style='font-size:30px;' href='?do=$table&p=$prev'>&lt;&nbsp;</a>";
                    }
                    for ($i = 1; $i <= $pages; $i++) {
                        $style = ($now == $i) ? "style='font-size:20px;color:red'" : "";
                        echo "<a href='?do=$table&p=$i' $style>$i</a>";
                    }
                    if ($now + 1 <= $pages) {
                        $next = $now + 1;
                        echo "<a class='bl' style='font-size:30px;' href='?do=$table&p=$next'>&nbsp;&gt;</a>";
                    }
                    ?>
                </div>