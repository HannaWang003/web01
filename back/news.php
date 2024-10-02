<?php
$total = $News->count();
$div = 5;
$pages = ceil($total / $div);
$now = ($_GET['p']) ?? 1;
$start = ($now - 1) * $div;
$rows = $News->all("limit $start,$div");
?>
<p class="t cent botli">最新消息資料管理</p>
<form method="post" action="./api/edit.php?do=<?= $table ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="68%">最新消息資料內容</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
            <tr>
                <td><textarea name="text[]" style="width:90%"><?= $row['text'] ?></textarea></td>
                <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                </td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div style="text-align:center;">
        <?php
											$prev = ($now > 1) ? $now - 1 : $now;
											$next = ($now < $pages) ? $now + 1 : $now;
											?>
        <a class="bl" style="font-size:30px;" href="?do=news&p=<?= $prev ?>">&lt;&nbsp;</a>
        <?php
											for ($i = 1; $i <= $pages; $i++) {
												$style = ($now == $i) ? "font-size:20px;font-weight:bolder;margin:0 10px;" : "";
											?>
        <a href="?do=news&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
        <?php
											}
											?>
        <a class="bl" style="font-size:30px;" href="?do=news&p=<?= $next ?>">&nbsp;&gt;</a>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/text.php?do=<?= $table ?>')"
                        value="新增最新消息資料"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>