<?php
include_once "./api/db.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <link href="./file/css.css" rel="stylesheet" type="text/css">
    <script src="./file/jquery-1.9.1.min.js"></script>
    <script src="./file/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <div id="main">
        <a title="<?= $Title->find(['sh' => 1])['text'] ?>" href="index.php">
            <div class="ti"
                style="background:url('./img/<?= $Title->find(['sh' => 1])['img'] ?>'); background-size:cover;">
            </div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">主選單區</span>
                    <?php
                    $bigs = $Menu->all(['big_id' => 0]);
                    foreach ($bigs as $big) {
                    ?>
                        <div class="big">
                            <div class="mainmu">
                                <a style="color:#000; font-size:13px; text-decoration:none;" href="<?= $big['url'] ?>">
                                    <?= $big['text'] ?>
                                </a>
                            </div>
                            <?php
                            $mids = $Menu->all(['big_id' => $big['id']]);
                            foreach ($mids as $mid) {
                            ?>
                                <div class="mainmu2" style="display:none;">
                                    <a style="color:#000; font-size:13px; text-decoration:none;" href="<?= $mid['url'] ?>">
                                        <?= $mid['text'] ?>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <script>
                    $('.big').hover(function() {
                        $('.mainmu2').hide();
                        $(this).find('.mainmu2').show();
                    }, () => {
                        $('.mainmu2').hide();
                    })
                </script>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :
                        <?= $Total->find(1)['total'] ?> </span>
                </div>
            </div>
            <div class="di"
                style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                    <?php
                    $ads = $Ad->all(['sh' => 1]);
                    foreach ($ads as $ad) {
                    ?>
                        <span><?= $ad['text'] ?></span>
                    <?php
                    }
                    ?>
                </marquee>
                <div style="height:32px; display:block;"></div>
                <!--正中央-->
                <?php
                $do = ($_GET['do']) ?? "main";
                $file = "./front/$do.php";
                if (file_exists($file)) {
                    $DB = (${ucfirst($do)}) ?? "";
                    include $file;
                } else {
                    include "./front/main.php";
                }
                ?>
            </div>
            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="location.href='<?= (isset($_SESSION['login'])) ? 'back.php' : '?do=admin' ?>'">管理登入</button>
                <div style="width:89%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
                    <div class="cent"><img src="./icon/up.jpg" onclick="pp(1)"></div>
                    <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
                        <?php
                        $images = $Image->all(['sh' => 1]);
                        foreach ($images as $idx => $img) {
                        ?>
                            <img src="./img/<?= $img['img'] ?>"
                                style="width:150px;height:103px;border:10px solid rgba(255,100,10,0.5);margin:5px;"
                                class="im" id="ssaa<?= $idx ?>">
                        <?php
                        }
                        ?>
                    </div>
                    <div class="cent"><img src="./icon/dn.jpg" onclick="pp(2)"></div>
                    <script>
                        var nowpage = 0,
                            num = $('.im').length;

                        function pp(x) {
                            var s, t;
                            if (x == 1 && nowpage > 0) {
                                nowpage--;
                            }
                            if (x == 2 && nowpage < num - 3) {
                                nowpage++;
                            }
                            $(".im").hide()
                            for (s = 0; s <= 2; s++) {
                                t = s * 1 + nowpage * 1;
                                $("#ssaa" + t).show()
                            }
                        }
                        pp(1)
                    </script>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom'] ?></span>
        </div>
    </div>

</body>

</html>