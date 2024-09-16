<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php?do=image">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">校園映像資料圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $num=$DB->count();
                $div=3;
                $pages=ceil($num/$div);
                $now=($_GET['p'])??1;
                $start=($now-1)*$div;
                $rows = $DB->all("limit $start,$div");
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td style="text-align:center"><img src="./img/<?= $row['img'] ?>"
                            style="width:100px;height:68px;border:1px solid #000" /></td>
                    <td style="text-align:center"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? "checked" : "" ?> />
                    </td>
                    <td style="text-align:center"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td style="text-align:center"><input type="button"
                            onclick="op('#cover','#cvr','./modal/update.php?do=image&id=<?= $row['id'] ?>')"
                            value="更換圖片">
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
            if($now>1){
                $prev=$now-1;
                ?>
            <a href="?do=image&p=<?=$prev?>">
                < </a>
                    <?php
            }
for($i=1;$i<=$pages;$i++){
    $style=($now==$i)?"font-size:20px;":"";
    ?>
                    <a href="?do=image&p=<?=$i?>" style="<?=$style?>"><?=$i?></a>
                    <?php
}
if($now< $pages){
    $next=$now+1;
    ?>
                    <a href="?do=image&p=<?=$next?>"> > </a>
                    <?php
}
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?do=image')"
                            value="新增校園映像資料圖片">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>