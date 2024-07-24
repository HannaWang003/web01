<?php
$total = $News->count();
$div = 5;
$pages = ceil($total / $div);
$now = $_GET['p'] ?? 1;
$start = ($now - 1) * $div;
$rows = $News->all("limit $start,$div");
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit_news.php" method="post">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%">最新消息資料內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                <tr>
                    <th><textarea name="text[]" style="width:95%;height:100px;"><?= $row['text'] ?></textarea></th>
                    <th><input type="checkbox" name="sh[]" <?= ($row['sh'] == 1) ? "checked" : "" ?>
                            value="<?= $row['id'] ?>"></th>
                    <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
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
            <a href="?do=news&p=<?= $prev ?>">
                < </a>
                    <?php
                }
                for ($i = 1; $i <= $pages; $i++) {
                    $style = ($i == $now) ? "style='font-size:20px;color:red'" : "";
                    ?>
                    <a href="?do=news&p=<?= $i ?>" <?= $style ?>><?= $i ?></a>
                    <?php
                }
                if ($now < $pages) {
                    $next = $now + 1;
                    ?>
                    <a href="?do=news&p=<?= $next ?>"> > </a>
                    <?php
                }
                    ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/news.php')"
                            value="新增最新消息資料"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="table" value="news">
    </form>
</div>