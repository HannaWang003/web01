<p class="t cent botli">最新消息資料管理</p>
<form method="post" action="./api/edit.php?do=<?= $do ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="76%">最新消息資料內容</td>
                <td width="12%">顯示</td>
                <td width="12%">刪除</td>
            </tr>
            <?php
            $div = 5;
            $now = ($_GET['p']) ?? 1;
            $p = $DB->pages($div, $now);
            $rows = $DB->all("limit {$p['start']},$div");
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td>
                        <textarea name="text[]" style="width:90%;height:50px;"><?= $row['text'] ?></textarea>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                </tr>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            <?php
            }
            ?>
        </tbody>
    </table>
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
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/text.php?do=<?= $do ?>')" value="新增最新消息資料"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
            </tr>
        </tbody>
    </table>

</form>