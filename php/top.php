<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- ビューポートの設定 -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>ATELIER MORI</title>
<?php
require 'html/css.html';
?>
</head>
<body>
  <div id="wrapper">

    <?php
    require 'html/header.html';
    ?>

    <div id="main">
      <div class="contentsTopImg"><img src="img/top.png" alt="topImg"></div><!-- /.contentTitle -->
      <!-- <img class="contentsTopImg" src="img/top.png" alt="topImg">/.contentTitle -->
      <div class="contGroup contentsDesc bgGreen">
        <div class="innerDisc">
          <div class="descImg"><img src="img/descImg.png" alt=""></div> <!-- /.descImg -->
          <div class="descCont">
            <div class="innerDescCont">
              <h2>生活に彩りを</h2><p>新宿区東中野の花屋 atelier MORIでは<br>「インテリア&オフィスワークと花」を<br>キーワードに心を癒すフラワースタイルを<br>ご提案しています。</p>
            </div><!-- /.innerDescCont -->
          </div> <!-- /.descCont -->
        </div><!-- /.innerDisc -->
      </div><!-- /.contentsDesc -->
      <div class="contGroup contents01">
        <div id="contents01" class="subtitle">
          <h2 class="appleChanceFontClass">Price</h2>
        </div><!-- /.subtitle -->

        <?php
        require 'php/items.php';
        ?>

      </div><!-- /.contents01 -->
      <div class="contGroup contents02 bgGreen">
        <div id="contents02" class="subtitle">
          <h2 class="appleChanceFontClass">Access</h2>
        </div><!-- /.subtitle -->
        <div class="ggmapContainer">
          <div class="ggmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.8344714724053!2d139.68421896565303!3d35.70569078018859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2cbdde9e159%3A0x1fded477ca8ab30a!2z44CSMTY0LTAwMDMg5p2x5Lqs6YO95Lit6YeO5Yy65p2x5Lit6YeO77yR5LiB55uu77yV77yQ4oiS77ySIOOCquOCr-ODiOajruODk-ODqw!5e0!3m2!1sja!2sjp!4v1517370033571" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="companyInfo">
            <div class="subContainer addressInfoContainer">
              <div class="postalCode"><p>〒164-8787</p></div>
              <div class="addressFirst"><p>東亰都中野区東中野4-2-3</p></div>
              <div class="addressSecond"><p>森ビル1F</p></div>
            </div>
            <div class="subContainer contactInfoContainer">
              <div class="telNum"><p>TEL:03-3360-8155</p></div>
              <div class="faxNum"><p>FAX:03-3360-8840</p></div>
              <div class="emailAddress"><p>E-mail:info@ateliermori.co.jp</p></div>
            </div>
            <div class="subContainer shopBusinessDays">
              <div class="businessHours"><p>Open 9:00 - Closed 17:30</p></div>
              <div class="regularHolidays"><p>定休日 日曜・祝日</p></div>
              <div class="shopInfoEtc"><p>配達は年中無休</p></div>
            </div>
          </div>
        </div>
      </div><!-- /.contents02 -->
      <div class="contGroup contents03">
        <div id="contents03" class="subtitle">
          <h2 class="appleChanceFontClass">Contact</h2>
        </div><!-- /.subtitle -->

        <?php if (isset($error)): ?>
          <ul class="error">
        <?php foreach ($error as $val): ?>
          <li><?php echo $val; ?></li>
        <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <div class="contactContainer">
          <form class="contactForm" action="confirm.php" method="post">
            <div class="contactBoth">
              <div class="contactLeft">
                <div class="formparts formName radRem">
                  <label for="name"></label>
                  <input class="inputBox radRem wf-sawarabimincho" type="text" name="name" value="<?php echo $name; ?>" placeholder="お名前">
                </div><!-- /.formName -->
                <div class="formparts formEmail radRem">
                  <label for="email"></label>
                  <input class="inputBox radRem wf-sawarabimincho" type="email" name="email" value="<?php echo $email; ?>" placeholder="メールアドレス">
                </div><!-- /.formEmail -->
                <div class="formparts formTel radRem">
                  <label for="tel"></label>
                  <input class="inputBox radRem wf-sawarabimincho" type="tel" name="tel" value="<?php echo $tel; ?>" placeholder="電話番号">
                </div><!-- /.formEmail -->
              </div><!-- /.contactLeft -->
              <div class="contantRight">
                <div class="formparts formTextarea">
                  <label for="msg"></label>
                  <textarea class="areaBox radRem wf-sawarabimincho" name="msg" value="<?php echo $msg; ?>" id="" cols="25" rows="7" maxlength="500" placeholder="メッセージ(500字以内)"></textarea>
                </div><!-- /.formTextarea -->
              </div><!-- /.contantRight -->
            </div><!-- /.contactBoth -->
            <div class="contactBtn">
              <button class="buttonForm wf-sawarabimincho" type="submit">送信</button>
            </div><!-- /.contactBtn -->
            <input type="hidden" name="ticket" value="<?php echo $ticket; ?>">
          </form><!-- /.contactForm -->
        </div><!-- /.contactContainer -->
      </div><!-- /.contents03 -->
    </div><!-- /#main -->

    <a id="page-top" class="button" href="#"><span class="appleChanceFontClass">top</i></span><span><i class="fa fa-arrow-up" aria-hidden="true"></i></span></a>

    <?php
    require 'html/footer.html';
    ?>

  </div><!-- /#wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/uparrowAnim.js"></script>
</body>
</html>
