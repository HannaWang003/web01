    <div style="padding:10px 20px;">
        <h3>更多最新消息顯示區</h3>
        <hr>
        <?php
        $div = 5;
        $now = ($_GET['p']) ?? 1;
        $pages = $DB->pages($div, $now, "where `sh`='1'");
        $news = $News->all(['sh' => 1], "limit {$pages['start']},$div");
        foreach ($news as $idx => $n) {
        ?>
            <div class="sswww"><?= $idx + $pages['start'] + 1 ?> . <?= mb_substr($n['text'], 0, 10) ?>
                <div class="all" style="display:none;"><?= $n['text'] ?></div>
            </div>
        <?php
        }
        ?>
        <div id="alt"
            style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204);left: 200px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
        </div>
        <div style="text-align:center;">
            <a class="bl" style="font-size:30px;" href="?do=news&p=<?= $pages['prev'] ?>">&lt;&nbsp;</a>
            <?php
            for ($i = 1; $i <= $pages['pages']; $i++) {
                $style = ($i == $now) ? "font-size:22px" : "";
            ?>
                <a href="?do=news&p=<?= $i ?>" style="<?= $style ?>;text-decoration:none;"><?= $i ?></a>
            <?php
            }
            ?>
            <a class="bl" style="font-size:30px;" href="?do=news&p=<?= $pages['next'] ?>">&nbsp;&gt;</a>
        </div>
    </div>
    <script>
        $(".sswww").hover(
            function() {
                $("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                $("#alt").show()
            }
        )
        $(".sswww").mouseout(
            function() {
                $("#alt").hide()
            }
        )
    </script>