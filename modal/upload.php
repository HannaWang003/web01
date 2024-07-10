<h3 class="cent">更新<?php
                    switch ($_GET['table']) {
                        case "title":
                            echo "標題區";
                            break;
                        case "mvim":
                            echo "動畫";
                            break;
                        case "image":
                            echo "校園映像";
                            break;
                    }

                    ?>圖片</h1>
    <hr>
    <form action="./api/upload.php?table=<?= $_GET['table'] ?>" method="post" enctype="multipart/form-data">
        <table style="margin:auto">
            <tr>
                <td style="text-align: end;"><?php
                                                switch ($_GET['table']) {
                                                    case "title":
                                                        echo "標題區";
                                                        break;
                                                    case "mvim":
                                                        echo "動畫";
                                                        break;
                                                    case "image":
                                                        echo "校園映像";
                                                        break;
                                                }
                                                ?>圖片: </td>
                <td><input type="file" name="img"></td>
            </tr>
        </table>
        <div class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></div>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    </form>