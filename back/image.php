<?php
$table = $_GET['do'] ?? 'title';
$DB = ${ucfirst($table)};
?>
<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="./api/edit.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="68%">校園映像資料圖片</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td width="18%"></td>
            </tr>
            <?php
            $div = 3;
            $total = $DB->count();
            $pages = ceil($total / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            $rows = $DB->all("limit $start,$div");
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="68%" class="cent"><img src="./img/<?= $row['img'] ?>" style="width:130px;height:80px"></td>
                    <td width="7%" class="cent"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                    <td width="7%" class="cent"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td class="cent"><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./model/upload.php?table=<?= $table ?>&id=<?= $row['id'] ?>')">
                    </td>
                </tr>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="cent">
        <?php
        if ($now != 1) {
            $prev = $now - 1;
            echo "<a href='?do=image&p=$prev'> < </a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $style = ($now == $i) ? "style='font-size:20px;color:skyblue;margin:0 10px;'" : "";
            echo "<a href='?do=image&p=$i' $style>$i</a>";
        }
        if ($now != $pages) {
            $next = $now + 1;
            echo "<a href='?do=image&p=$next'> > </a>";
        }
        ?>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/image.php')" value="新增校園映像資料圖片">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="table" value="<?= $table ?>">
</form>