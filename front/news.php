<!--正中央-->
<span class="t botli" style="text-align:start;margin:10px 10px;">更多最新消息顯示區</span>
<?php
$total = $News->count(['sh' => 1]);
$div = 5;
$pages = ceil($total / $div);
$now = $_GET['p'] ?? 1;
$start = ($now - 1) * $div;
$news = $News->all(['sh' => 1], "limit $start,$div");
foreach ($news as $idx => $n) {
?>
	<div class="sswww" style="list-style-type:decimal;margin:5px 10px;">
		<span><?= $start + $idx + 1 ?></span>.&nbsp;&nbsp;<?= mb_substr($n['text'], 0, 20) ?>
		<div class="all" style="display:none"><?= $n['text'] ?></div>
	</div>
<?php
}
?>
<div style="text-align:center;">
	<?php
	$prev = ($now > 1) ? $now - 1 : $now;
	?>
	<a class="bl" style="font-size:30px;" href="?do=news&p=<?= $prev ?>">&lt;&nbsp;</a>
	<?php
	for ($i = 1; $i <= $pages; $i++) {
		$style = "style='font-size:20px;color:skyblue'";
	?>
		<a href="?do=news&p=<?= $i ?>" <?= ($i == $now) ? $style : "" ?>><?= $i ?></a>
	<?php
	}
	$next = ($now < $pages) ? $now + 1 : $now;
	?>
	<a class="bl" style="font-size:30px;" href="?do=news&p=<?= $next ?>">&nbsp;&gt;</a>
</div>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
				"top": $(this).offset().top - 50
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