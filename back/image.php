<?php
$table = $_GET['do'];
$DB = ${ucfirst($table)};
$all = $DB->count();
$div = 3;
$pages = ceil($all / $div);
$now = $_GET['p'] ?? 1;
$start = ($now - 1) * 3;
$rows = $DB->all("limit $start,$div");
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="70%">校園映像資料圖片</td>
                    <td width="15%">顯示</td>
                    <td width="15%">刪除</td>
                    <td></td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                <tr>
                    <td style="text-align:center;"><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;">
                    </td>
                    <td style="text-align:center;"><input type="checkbox" name="sh[]"
                            <?= ($row['sh'] == 1) ? "checked" : "" ?> value="<?= $row['id'] ?>"></td>
                    <td style="text-align:center;"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td style="text-align:center;"><input type="button" value="更換圖片"
                            onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $table ?>&id=<?= $row['id'] ?>')">
                    </td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <style>
        a {
            text-decoration: none;
        }
        </style>
        <div class="cent">
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
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/<?= $table ?>.php?table=<?= $table ?>')"
                            value="新增校園映像資料圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        <input type="hidden" name="table" value="<?= $table ?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>