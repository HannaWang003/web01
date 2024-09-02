<p class="t cent botli">校園映像資料圖片管理</p>
<form method="post" action="./api/edit.php?do=<?= $table ?>">
    <table width="100%" style="text-align:center">
        <tbody>
            <tr class="yel">
                <td width="45%">校園映像資料圖片</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td width="23%"></td>
            </tr>
            <?php
            $div = 3;
            $all = $DB->count();
            $pages = ceil($all / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            $rows = $DB->all("limit $start,$div");
            foreach ($rows as $row) {
            ?>
            <tr>
                <td width="45%"><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;"></td>
                <td width="7%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                <td width="23%"><input type="button" value="更新圖片"
                        onclick="op('#cover','#cvr','./modal/upload.php?do=<?= $table ?>&id=<?= $row['id'] ?>')">
                </td>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $table ?>.php?do=<?= $table ?>')" value="新增校園映像圖片">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
    <div class="cent">
        <?php
        if ($now > 1) {
            $prev = $now - 1;
            echo "<a href='?do=$table&p=$prev'> < </a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $style = ($i == $now) ? "font-size:20px" : "";
        ?>
        <a href="?do=<?= $table ?>&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
        <?php
        }
        if ($now < $pages) {
            $next = $now + 1;
            echo "<a href='?do=$table&p=$next'> > </a>";
        }
        ?>
    </div>
</form>