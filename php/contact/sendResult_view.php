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
          <h2 class="wf-sawarabimincho"><?php echo $contMsgTitle ?></h2>
        </div><!-- /.subtitle -->
        <div class="contResultMsg">
          <p class="wf-sawarabimincho""><?php echo $message ?></p>
        </div><!-- /.contResultMsg -->
        <div class="contResultMsg">
            <div class="contactBtn">
              <button class="buttonForm wf-sawarabimincho" type="button" onclick="location.href='index.php'">戻る</button>
            </div><!-- /.contactBtn -->
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
</body>
</html>
