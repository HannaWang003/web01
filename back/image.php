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
            $div = 3;
            $num = $DB->count();
            $pages = ceil($num / $div);
            $now = ($_GET['p']) ?? "1";
            $start = ($now - 1) * $div;
            $rows = $DB->all("limit $start,$div");
            foreach ($rows as $row) {
            ?>
            <tr class="cent">
                <td><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;border:1px solid #000"></td>
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
$prev=$now-1;
echo ($now > 1)?"<a href='?do=$table&p=$prev'> < </a>":"";
for($i=1;$i<=$pages;$i++){
    $style=($i==$now)?"font-size:20px;":"";
    ?>
        <a href="?do=<?=$table?>&id=<?=$i?>" style="<?=$style?>"><?=$i?></a>
        <?php
}
$next=$now+1;
echo ($now < $pages)?"<a href='?do=$table&p=$next'> > </a>":"";

?>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/upload.php?do=<?= $table ?>')" value="新增校園映像資料圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>