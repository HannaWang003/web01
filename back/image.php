<?php
$total = $Image->count();
$div = 3;
$pages = ceil($total / $div);
$now = $_GET['p'] ?? 1;
$start = ($now - 1) * $div;
$rows = $Image->all("limit $start,$div");
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit_image.php" method="post">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">校園映像資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="30%"></td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                        <tr>
                            <th><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;"></th>
                            <th><input type="checkbox" name="sh[]" <?= ($row['sh'] == 1) ? "checked" : "" ?> value="<?= $row['id'] ?>"></th>
                            <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
                            <th><input type="button" onclick="op('#cover','#cvr','./model/upload.php?table=image&id=<?= $row['id'] ?>')" value="更新圖片"></th>
                            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if ($now > 1) {
                $prev = $now - 1;
            ?>
                <a href="?do=image&p=<?= $prev ?>">
                    < </a>
                    <?php
                }
                for ($i = 1; $i <= $pages; $i++) {
                    $style = ($i == $now) ? "style='font-size:20px;color:red'" : "";
                    ?>
                        <a href="?do=image&p=<?= $i ?>" <?= $style ?>><?= $i ?></a>
                    <?php
                }
                if ($now < $pages) {
                    $next = $now + 1;
                    ?>
                        <a href="?do=image&p=<?= $next ?>"> > </a>
                    <?php
                }
                    ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/image.php')" value="新增校園映像圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="table" value="image">
    </form>
</div>