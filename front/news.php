<div style="height:32px; display:block;margin:10px 20px;">
    <h3>更多最新消息顯示區</h3>
    <hr>
    <div class="ssaa">
        <?php
        $newsTotal = $News->count(['sh' => 1]);
        $div = 5;
        $pages = ceil($newsTotal / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $div;
        $news = $News->all(['sh' => 1], "limit $start,5");
        foreach ($news as $idx => $n) {
        ?>
            <div><?= ($now - 1) * $div + $idx + 1 ?>. <?=
                                                    mb_substr($n['text'], 0, 20) ?>
                <div class="all" style="display:none"><?= $n['text'] ?></div>
            </div>
        <?php
        }
        ?>
    </div>
    <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
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
    <!--正中央-->
    <div style="text-align:center;">
        <?php
        if ($now - 1 > 0) {
            $prev = $now - 1;
            echo "<a class='bl' style='font-size:30px;' href='?do=news&p=$prev'>&lt;&nbsp;</a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $style = "style='font-size:20px;color:red;'";
        ?>
            <a href="?do=news&p=<?= $i ?>" <?= ($now == $i) ? $style : "" ?>><?= $i ?></a>
        <?php
        }
        if ($now + 1 <= $pages) {
            $next = $now + 1;
            echo "<a class='bl' style='font-size:30px;' href='?do=news&p=$next'>&nbsp;&gt;</a>";
        }
        ?>

    </div>
</div>