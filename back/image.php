<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="./api/edit.php?do=<?= $do ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="50%">校園映像資料圖片</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            $div = 3;
            $now = ($_GET['p']) ?? 1;
            $ps = $DB->pages($div, $now);
            $rows = $DB->all("limit {$ps['start']},$div");
            foreach ($rows as $row) {
            ?>
            <tr>
                <td class="cent"><img src="./img/<?= $row['img'] ?>"
                        style="width:150px;height:103px;border:3px solid #000;"></td>
                <td class="cent"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                </td>
                <td class="cent"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                <td class="cent"><input type="button" value="更換圖片"
                        onclick="op('#cover','#cvr','./modal/update.php?do=<?= $do ?>&id=<?= $row['id'] ?>')"></td>
            </tr>
            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="cent">
        <a href="?do=<?= $do ?>&p=<?= $ps['prev'] ?>">
            < </a>
                <?php
                for ($i = 1; $i <= $ps['pages']; $i++) {
                    $style = ($i == $now) ? "font-size:24px;margin:10px;" : "";
                ?>
                <a href="?do=<?= $do ?>&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
                <?php
                }
                ?>
                <a href="?do=<?= $do ?>&p=<?= $ps['next'] ?>"> > </a>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?do=<?= $do ?>')"
                        value="新增校園映像圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>