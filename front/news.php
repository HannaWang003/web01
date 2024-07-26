<div style="padding:20px;">
    <span class="t botli" style="text-align:start;">更多最新消息顯示區</span>
    <?php
    $total = $News->count(['sh' => 1]);
    $div = 5;
    $pages = ceil($total / $div);
    $now = $_GET['p'] ?? 1;
    $start = ($now - 1) * $div;
    $news = $News->all(['sh' => 1], "limit $start,$div");
    foreach ($news as $idx => $n) {
    ?>
        <div class="sswww"><span><?= $start + $idx + 1 ?>. </span><?= mb_substr($n['text'], 0, 25) ?>
            <div class="all" style="display:none"><?= $n['text'] ?></div>
        </div>
    <?php
    }
    ?>
    <br>
    <div class="cent">
        <?php
        if ($now > 1) {
            $prev = $now - 1;
            echo "<a href='?do=news&p=$prev'> < </a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $style = ($i == $now) ? "style='font-size:20px;color:skyblue;margin:0px 10px;'" : "";
            echo "<a href='?do=news&p=$i' $style >$i</a>";
        }
        if ($now < $pages) {
            $next = $now + 1;
            echo "<a href='?do=news&p=$next'> > </a>";
        }
        ?> </div>
</div>