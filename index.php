<?php
session_start();
include ("config.php");
$link_tp = mysqli_query($mysqli, "SELECT * FROM data WHERE id=1");

$row = mysqli_fetch_array($link_tp);
$url = $row['link_tp'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEA Laboratory Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="asset/index/seachan-serious.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="script.js">
</head>
<body id="body"> 
    <header>
        <nav class="navbar">
            <i class="fa fa-bars" aria-hidden="true" style="position: absolute;top:5vh;right: 6vw;width: 5vw;transform: translateX(50%);" onclick="ShowMenu()"></i>
            <div>
                <a href="#section1" class="logo"><img id="logo" src="asset/index/Logo SEA.png"></a>
            </div>
            <div class="ul-container" id="menu">
                <i class="fa bi-arrow-bar-right" style="position: absolute;top:0;left: -50vw;width: 5vw;height: 100vh;padding-top: 5vh;padding-left: 45vw;opacity: 0;" onclick="CloseMenu()"></i>
                <ul>
                    <li><a href="#section2" id="navlist1">PRAKTIKUM</a></li>
                    <li><a href="#section3" id="navlist2">EVENT</a></li>
                    <li><a href="#section4" id="navlist3">ABOUT</a></li>
                    <li><a href="#section5" id="navlist4">LINKS</a></li>
                    <li><i class="bi bi-sun" id="change" onclick="TurnDark()"></i></li>
                    <li><i class="bi bi-moon" id="changeback" onclick="TurnLight()"></i></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="containere">
            <section class="section" id="section1">
                <div class="section-content" id="section-content1" style="z-index: 1;">
                    <div class="group1-1">
                        <h1>SEA<br>LABORATORY</h1>
                        <p><em>Website Praktikum SEA Laboratory</em></p>
                    </div>
                    <div class="group2-1">
                        <img src="asset/index/seachan-ganbatte.png" id="sea1">
                    </div>
                    <div class="group3-1">
                        <img src="asset/index/seachan-serious.png" id="sea2">
                    </div>
                </div>
                <div class="dek" id="dek">
                    <img src="asset/index/Acsry.png">
                </div>
            </section>
            <section class="section" id="section2" style="background-color: #c9eefa;">
                <div class="section-content" id="section-content2">
                    <div class="imag video">
                        <a href="https://youtube.com/@SEALaboratory?si=zwMAD6vivLq6DyF-" target="_blank">
                            <div class="layer" id="box5">
                                <p>VIDEO<br>PRAKTIKUM</p>
                            </div>
                        </a>
                    </div>
                    <div class ="prak">
                        <div class="group-prak">
                            <div>
                                <a href="https://shorturl.at/uvwK7" target="_blank">
                                    <div class="modul" id="box1">
                                        <p>MODUL<br>PRAKTIKUM</p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <?php
                            if (!empty($url)) {
                                echo '<a href="' . $url . '" target="_blank">';
                                echo '<div class="tp" id="box2">';
                                echo '<p>TES<br>PENDAHULUAN</p>';
                                echo '</div></a>';
                            } else {
                                echo 'No URL found in the database for ID 1';
                            }
                            ?>
                            </div>
                        </div>
                        <div>
                            <a href="https://shorturl.at/hkBRZ" target="_blank">
                                <div class="jadwalkel" id="box3">
                                    <p>JADWAL<br>&<br>KELOMPOK</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" id="section3">
                <div class="section-content" id="section-content3">
                    <div class="event-group">
                        <div class="imag group1-3" >
                            <a href="sg.php">
                                <div class="layer">
                                    <p>STUDY<br>GROUP</p>
                                </div>
                            </a>
                        </div>
                        <div class="imag group2-3" >
                            <a href="rg.php">
                                <div class="layer">
                                    <p>RESEARCH<br>GROUP</p>
                                </div> 
                            </a>
                        </div> 
                    </div>
                </div>
            </section>
            <section class="section" id="section4" style="background-color: #c9eefa;">
                <div class="section-content" id="section-content4">
                    <div class="about">
                        <div></div>
                        <div>
                            <h1 style="font-size: 6vh;">ABOUT</h1>
                            <br>
                            <p>SEA Laboratory (Software Engineering and Application) Lab yang berfokus pada pengembangan perangkat lunak (Software) dan Aplikasi.</p>
                            <a href="assistants.php">
                                <div class="assis" id = "box6">
                                    <p>ASSISTANTS</p>
                                </div>
                            </a>
                        </div>  
                    </div>
                    <div class="group-abt">
                        <div></div>
                        <img id = "box4" src="asset/index/seachan-smile.png">
                    </div>
                </div>
            </section>
            <section class="section" id="section5">
                <div class="section-content" id="section-content5">
                    <div>
                        <h1 style="font-size: 6vw;">OUR LINKS</h1>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="socmed">
                        <div>
                            <a href="https://www.instagram.com/sea.laboratory/?hl=en" id="icon1" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                        <div>
                            <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=748waapd" id="icon2" target="_blank"><i class="bi bi-line"></i></a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/channel/UCIxFBfOtf-EZA_9A9Xb4EpQ" id="icon3" target="_blank"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="script.js">
        </script>
    </main>
</body>
</html>