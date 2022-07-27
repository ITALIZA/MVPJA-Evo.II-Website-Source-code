<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('./component/head.php');
    ?>

</head>


<body class="wow fadeIn">
    <?php
    include('./component/navbar.php');
    ?>


    <video class="wow fadeIn" data-wow-delay="0.9s" id="background-video" autoplay loop muted>
        <source src="assets/images/scan.mp4" type="video/mp4">
    </video>

    <div class="container d-flex" style="height:100vh">
        <div class="align-self-center">
            <h1 align="" class="header wow fadeInUp" data-wow-delay="0.3s" style="color:white;font-size:100px;line-height:1">


                INFORMATION
                <br>
                FROM RESEARCHING
            </h1>
            <h4 class="wow fadeInUp" data-wow-delay="0.6s" style="color:white;">
                ข้อมูลที่ได้จากการสำรวจ
            </h4>
        </div>
        <section id="section05" class="align-self-end">
            <a href="#map"><span></span></a>
        </section>
    </div>
    <div class="main pt-5" style="margin:0">
        <div class="container pb-5 pt-5">

            <h1 style="font-size:50px"><b>ข้อมูลแผนที่และทรัพยากร</b></h1>

            <div class="row">
                <div class="col-xl-6 pt-4">
                    <h2><b>ทรัพยากรใต้ธรณี</b></h2>
                    <img src="./assets/images/ore.jpg" class="img-fluid" style="border-radius:10px" alt="">
                    <div class="row">
                        <div class="col-8">
                            <p> <br>จากการสำรวจทรัพยากรใต้ธรณีโดย KHAOS EAGLE ทำให้สามารถระบุตำแหน่งและปริมาณความหนาแน่นของแร่ธาตุใต้ธรณีได้ โดยใช้เกณฑ์ดังนี้</p>

                        </div>
                        <div class="col-4">
                            <img src="./assets/images/rate.png" class="img-fluid pt-3" alt="">

                        </div>
                    </div>

                </div>
                <div class="col-xl-6 pt-4">
                    <h2><b>พื้นที่ที่น่าอาศัยอยู่</b></h2>

                    <img src="./assets/images/liveable.jpg" class="img-fluid" style="border-radius:10px" alt="">
                    <p> <br>จากข้อมูลทรัพยากรใต้ธรณีและการสำรวจเพิ่มเติมสามารถสรุปได้ว่า พื้นที่ในรูปภาพนั้นคือพื้นที่ที่น่าอาศัยอยู่เนื่องจากมีความหนาแน่นของชั้นบรรยากาศสูง อุณหภูมิพอเหมาะ และปริมาณแร่สามารถขุดเจาะขึ้นมาใช้งานได้</p>

                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 pt-5">
                    <h1 align="center" class="mt-5 pt-5" style="font-size:50px"><b>ความน่าอยู่อาศัยเปรียบเทียบระหว่างโลกกับดาวอีฟ</b></h1>
                    <img src="./assets/images/different earth eve.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-xl-12">
                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>ฤดูกาล</b></h1>
                    <div class="row">
                        <div class="col-xl-4">
                            <img src="./assets/images/entri.gif" class="img-fluid" alt="">

                        </div>
                        <div class="col-xl-12">
                            <h5><br>บนดาวอีฟไม่มีฤดูกาลเพราะว่า ค่าแกนมุมดาวที่เอียงกระทำต่อคาบโคจรมีค่าประมาณ 0.01 ซึ่งมีค่าน้อยมาก จึงสามารถอธิบายเหตุการณ์ที่ดาวอีฟมีอุณหภูมิแตกต่างกันเล็กน้อยใน 1 ปีเนื่องจากเป็นไปตามกฎ kepler law ซึ่งอธิบายถึงความใกล้ไกลดวงอาทิตย์
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="col-xl-7">
                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>วันและเวลา</b></h1>
                    <img src="./assets/images/day.png" class="img-fluid" alt="">
                    <p> 1 วันบนดาว Eve มีค่าเท่ากับ 76 ชั่วโมง หรือประมาณ 80500 วินาทีของ Kerbin และ 1 ปีบนดาว Eve ประมาณ 261 วัน บนดาว Kerbin  </p>

                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>การโคจรของดวงจันทร์ Gilly</b></h1>
                    <div class="embed-responsive embed-responsive-16by9 pt-5 pb-5 mb-5">
                        <iframe style="border-radius:5px" class="embed-responsive-item" src="https://www.youtube.com/embed/lHT-JhLFRlo?autoplay=0" allow="autoplay; encrypted-media"></iframe>
                    </div>
                    <p><br>ดวงจันทร์ Gilly เป็นดวงจันทร์เพียงดวงเดียวของดาว Eve มีค่าความรีของวงโคจรเท่ากับ 0.55 และความเอียงของวงโคจรเท่ากับ 10 องศา มีคาบการโคจรรอบดาวอีฟประมาณ 17 วันชองดาว Kerbin</p>

                </div>
                <div class="col-xl-7">
                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>ชั้นบรรยากาศ</b></h1>
                    <p><br>อีฟมีบรรยากาศหนาแน่นมาก มีมวลประมาณ 1.9×10^17 กิโลกรัม ความดันจากระดับน้ำทะเล 506.625 กิโลปาสกาล (5 ความดันบรรยากาศ) และความลึก 90,000 เมตร เมื่อเทียบกับบรรยากาศของ Kerbin , บรรยากาศของ Eve มีมวล 4 เท่าและความดันระดับน้ำทะเล 5 เท่า   ที่ระดับความสูง 14,579 เมตรในอีฟ ความกดอากาศจะเท่ากับที่ระดับน้ำทะเลบน Kerbin (1 atm) ความกดอากาศที่ยอดสูงสุดของยอดเขาอีฟคือ 2.4 atm
                           น้ำหนักโมเลกุลเฉลี่ยของอีฟแอร์คือ 43 กรัม/โมล และดัชนีอะเดียแบติกของมันคือ 1.20 แม้ว่าไม่ทราบองค์ประกอบของบรรยากาศของอีฟ แต่ค่าเหล่านี้บ่งชี้ว่าอาจประกอบด้วยคาร์บอนไดออกไซด์เป็นส่วนใหญ่ ความเป็นไปได้อีกอย่างหนึ่งคือบรรยากาศเต็มไปด้วยก๊าซอีเทน (C2H6 ที่มีความจุความร้อน 1.2 และน้ำหนักโมเลกุล 30 กรัม/โมล) และสารประกอบอื่นๆ ถ้าสมมุติว่า LiquidFuel เป็นน้ำมันก๊าซ เรื่องตลกที่ว่าทะเลสาบของ Eve 
                           เป็น LiquidFuel นั้นจะมีสีม่วงเข้มขึ้น เนื่องจากมันมักจะผสมกับสีย้อมสีม่วงก่อนขาย ด้วยบรรยากาศที่หนาแน่นซึ่งเต็มไปด้วยไฮโดรคาร์บอน จึงเป็นเรื่องง่ายที่จะจินตนาการถึงปฏิกิริยาที่จะให้สารประกอบ เช่น RP-1 ซึ่งเป็นเกรดของน้ำมันก๊าซที่ใช้เป็นเชื้อเพลิงจรวด บรรยากาศของ CO2 90% และ C2H6 10% จะมีน้ำหนักโมเลกุลและดัชนีอะเดียแบติกที่ใกล้เคียงกับสิ่งที่เห็นในอีฟ แม้ว่าจะมีการรวมตัวของก๊าซอื่นๆ ที่ใช้งานได้เช่นกัน </p>
                    <img src="./assets/images/atmos.webp" class="img-fluid" alt="">
                    
                </div>
            </div>



        </div>
    </div>



    <?php
    include('./component/footer.php');
    ?>

    <?php
    include('./component/js.php');
    ?>


</body>

</html>