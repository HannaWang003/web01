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
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <div id="main">
        <a title="" href="index.php">
            <div class="ti"
                style="background:url('./img/<?= $Title->find(['sh' => 1])['img'] ?>'); background-size:cover;"></div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">主選單區</span>
                    <?php
                    $menus = $Menu->all(['sh' => 1, 'big_id' => 0]);
                    foreach ($menus as $menu) {
                    ?>
                    <div class="nav" sthle="position:relative;">
                        <a style="color:#000; font-size:13px; text-decoration:none;" href="<?= $menu['href'] ?>">
                            <div class="mainmu">
                                <?= $menu['text'] ?></div>
                        </a>
                        <?php
                            $subs = $Menu->all(['sh' => 1, 'big_id' => $menu['id']]);
                            foreach ($subs as $sub) {
                            ?>
                        <a class="sub"
                            style="color:#000; font-size:13px; text-decoration:none;display:none;width:100%;position:relative;top:-10px;right:-30px"
                            href="<?= $sub['href'] ?>">
                            <div class="mainmu2">
                                <?= $sub['text'] ?></div>
                        </a>
                        <?php
                            }
                            ?>

                    </div>
                    <?php
                    }
                    ?>
                </div>
                <script>
                $('.nav').hover(function() {
                        $(this).children('.sub').show();
                    },
                    () => {
                        $('.sub').hide();
                    })
                </script>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :
                        <?= $Total->find(1)['total'] ?></span>
                </div>
            </div>
            <div class="di"
                style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                </marquee>
                <!-- include -->
                <?php
                $do = $_GET['do'] ?? "main";
                $file = "./front/$do.php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    include "./front/main.php";
                }

                ?>
            </div>
            <div id="alt"
                style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
            </div>
            <script>
            $(".sswww").hover(
                function() {
                    $("#alt").html("" + $(this).children(".all").html() + "").css({
                        "top": $(this).offset().top - 50
                    })
                    $("#alt").show()
                }
            )
            $(".sswww").mouseout(
                function() {
                    $("#alt").hide()
                }
            )
            </script>
            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <?php
                if (isset($_SESSION['admin'])) {
                    $str = "返回管理";
                    $href = "back.php";
                } else {
                    $str = "管理登入";
                    $href = "?do=admin";
                }
                ?>
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo('<?= $href ?>')"><?= $str ?></button>
                <div style="width:89%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
                    <div style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                        <img src="./icon/up.jpg" onclick="pp(1)">
                        <?php
                        $images = $Image->all(['sh' => 1]);
                        foreach ($images as $idx => $image) {
                        ?>
                        <img src="./img/<?= $image['img'] ?>"
                            style="width:150px;height:103px;margin:10px;border:5px solid orange" class="im"
                            id="ssaa<?= $idx ?>">
                        <?php
                        }
                        ?>
                        <img src="./icon/dn.jpg" onclick="pp(2)">
                    </div>
                    <script>
                    var nowpage = 1,
                        num = <?= $Image->count(['sh' => 1]) ?>;

                    function pp(x) {
                        var s, t;
                        if (x == 1 && nowpage - 1 >= 0) {
                            nowpage--;
                        }
                        if (x == 2 && nowpage + 1 <= num - 3) {
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
            <span class="t" style="line-height:123px;">
                <?= $Bottom->find(1)['bot'] ?>
            </span>
        </div>
    </div>

</body>

</html>