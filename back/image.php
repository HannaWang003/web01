<?php
$div = 3;
$total = $DB->count();
$pages = ceil($total / $div);
$now = ($_GET['p']) ?? "1";
$start = ($now - 1) * $div;
$rows = $DB->all("limit $start,$div");
?>
<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="./api/edit.php?do=<?= $table ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="68%">校園映像資料圖片</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
            <tr>
                <td class="cent"><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;"></td>
                <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                <td><input type="button" value="更換圖片"
                        onclick="op('#cover','#cvr','./modal/update.php?do=<?= $table ?>&id=<?= $row['id'] ?>')"></td>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="cent">
        <?php
        $prev = ($now > 1) ? $now - 1 : $now;
        $next = ($now < $pages) ? $now + 1 : $now;
        echo "<a href='?do=image&p=$prev'> < </a>";
        for ($i = 1; $i <= $pages; $i++) {
            $style = ($i == $now) ? "font-size:22px;margin:0 10px" : "";
            echo "<a href='?do=image&p=$i' style='$style'>$i</a>";
        }
        echo "<a href='?do=image&p=$next'> > </a>";
        ?>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/upload.php?do=<?= $table ?>')" value="新增校園映像圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>