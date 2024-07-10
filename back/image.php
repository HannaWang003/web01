<p class="t cent botli">校園映像資料管理</p>
<?php
$table = $_GET['do'] ?? "title";
$DB = ${ucfirst($table)};
$total = $DB->count();
$div = 3;
$pages = ceil($total / $div);
$now = $_GET['p'] ?? 1;
$start = ($now - 1) * $div;
$rows = $DB->all("limit $start,$div");
?>
<form method="post" action="./api/edit.php?table=<?= $table ?>">
    <table width="100%" style="text-align:center">
        <tbody>
            <tr class="yel">
                <td width="70%">校園映像資料圖片</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td></td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
            <tr>
                <td width="45%"><img src="./img/<?= $row['img'] ?>" style="width:150px;height:100px"></td>
                <td width=" 7%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                <td><input type="button" value="更新圖片"
                        onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $table ?>&id=<?= $row['id'] ?>')">
                </td>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </tr>
            <?php
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
            echo " <a href='?do=image&p=$prev'> < </a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $style = "style='font-size:20px;color:red;'";
        ?>
        <a href="?do=image&p=<?= $i ?>" <?= ($now == $i) ? $style : "" ?>><?= $i ?></a>
        <?php
        }
        if ($now + 1 <= $pages) {
            $next = $now + 1;
            echo " <a href='?do=image&p=$next'> > </a>";
        }
        ?>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <input type="hidden" name="table" name="title">
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增校園映像資料圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>