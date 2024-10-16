<h3 class="botli">更多最新消息顯示區</h3>
<div style="padding:10px">
	<?php
	$div = 5;
	$now = ($_GET['p']) ?? 1;
	$p = $DB->pages($div, $now);
	$news = $DB->all(['sh' => 1], "limit {$p['start']},$div");
	foreach ($news as $idx => $n) {
	?>
		<div class="sswww"><?= $idx + 1 + $p['start'] ?>. <?= mb_substr($n['text'], 0, 10) ?>
			<div class="all" style="display:none;"><?= $n['text'] ?></div>
		</div>
	<?php
	}
	?>
</div>
<div style="text-align:center;">
	<a class="bl" style="font-size:30px;" href="?do=news&p=<?= $p['prev'] ?>">&lt;&nbsp;</a>
	<?php
	for ($i = 1; $i <= $p['pages']; $i++) {
		$style = ($now == $i) ? "font-size:30px" : "";
	?>
		<a href="?do=news&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
	<?php
	}
	?>
	<a class="bl" style="font-size:30px;" href="?do=news&p=<?= $p['next'] ?>">&nbsp;&gt;</a>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 10px; left: 100px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>").css({
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