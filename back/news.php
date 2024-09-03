<p class="t cent botli">最新消息資料管理</p>
<form method="post" action="./api/edit.php?do=<?= $table ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="86%">最新消息資料內容</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
            </tr>
            <?php
            $div = 5;
            $all = $DB->count();
            $pages = ceil($all / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            $rows = $DB->all("limit $start,$div");
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="86%">
                        <textarea name="text[]" style="width:90%;height:50px;"><?= $row['text'] ?></textarea>
                    </td>
                    <td width="7%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                </tr>
            <?php
            }
            ?>
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

    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $table ?>.php?do=<?= $table ?>')" value="新增最新消息資料">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>