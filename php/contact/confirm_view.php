<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- ビューポートの設定 -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>ATELIER MORI</title>
<?php
require 'html/css.html'
?>

<style>
  #header {
    position: relative;
    background-color: rgba(38,118,56,1.0);
  }
  .nav {
    display: none;
  }
</style>
</head>
<body>
  <div id="wrapper">

    <?php
    require 'html/header.html'
    ?>

    <div id="main">
      <div class="contGroup contents03">
        <div id="contents03" class="subtitle">
          <h2 class="wf-sawarabimincho">送信内容確認</h2>
        </div><!-- /.subtitle -->
        <p class="confMsg">以下の内容でよろしければ「OK」ボタンを押してください。</p>
        <div class="contactContainer">
          <form id="form" class="contactForm" method="post" action="sendResult.php">
            <div class="contactBoth">
              <div class="contactLeft">
                <div class="formparts formName radRem formConfView">
                  <label for="name">お名前</label>
                  <input class="inputBox radRem wf-sawarabimincho" type="text" placeholder="お名前" disabled="readonly" value="<?php echo $name; ?>">
                </div><!-- /.formName -->
                <div class="formparts formEmail radRem formConfView">
                  <label for="email">メールアドレス</label>
                  <input class="inputBox radRem wf-sawarabimincho" type="email" placeholder="メールアドレス" disabled="readonly" value="<?php echo $email; ?>">
                </div><!-- /.formEmail -->
                <div class="formparts formTel radRem">
                  <label for="tel">電話番号</label>
                  <input class="inputBox radRem wf-sawarabimincho" type="tel" placeholder="電話番号" disabled="readonly" value="<?php echo $tel; ?>">
                </div><!-- /.formEmail -->
              </div><!-- /.contactLeft -->
              <div class="contantRight">
                <div class="formparts formTextarea">
                  <label for="msg">メッセージ</label>
                  <textarea class="areaBox radRem wf-sawarabimincho" name="msg" id="" cols="25" rows="7" maxlength="500" placeholder="メッセージ(500字以内)" disabled="readonly"><?php echo $msg; ?></textarea>
                </div><!-- /.formTextarea -->
              </div><!-- /.contantRight -->
            </div><!-- /.contactBoth -->
            <div class="contactBtn">
              <button class="buttonForm wf-sawarabimincho" type="submit" onclick="confReturnTop();">戻る</button><button class="buttonForm wf-sawarabimincho" type="submit" onclick="proceedSendok();">OK</button>
            </div><!-- /.contactBtn -->
            <input type="hidden" name="ticket" value="<?php echo $ticket; ?>">
          </form><!-- /.contactForm -->
        </div><!-- /.contactContainer -->
      </div><!-- /.contents03 -->
    </div><!-- /#main -->

    <a id="page-top" class="button" href="#"><span class="appleChanceFontClass">top</i></span><span><i class="fa fa-arrow-up" aria-hidden="true"></i></span></a>

    <?php
    require 'html/footer.html'
    ?>

  </div><!-- /#wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/uparrowAnim.js"></script>
  <script src="js/confChangeBtn.js"></script>
</body>
</html>
