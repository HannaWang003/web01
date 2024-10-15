<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php?do=<?= $do ?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">校園映像資料圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $div = 3;
                $now = ($_GET['p']) ?? 1;
                $p = $DB->pages($div, $now);
                $rows = $DB->all("limit {$p['start']},$div");
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td class="cent"><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px"></td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                    </td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td><input type="button" value="更換圖片"
                            onclick="op('#cover','#cvr','./modal/update.php?do=<?= $do ?>&id=<?= $row['id'] ?>')"></td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div style="text-align:center;">
            <a class="bl" style="font-size:30px;" href="?do=image&p=<?= $p['prev'] ?>">&lt;&nbsp;</a>
            <?php
    for ($i = 1; $i <= $p['pages']; $i++) {
        $style = ($now == $i) ? "font-size:30px;" : "";
    ?>
            <a href="?do=image&p=<?= $i ?>" style="<?= $style ?>"><?= $i ?></a>
            <?php
    }
    ?>
            <a class="bl" style="font-size:30px;" href="?do=image&p=<?= $p['next'] ?>">&nbsp;&gt;</a>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/upload.php?do=<?= $do ?>')" value="新增校園映像資料"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>