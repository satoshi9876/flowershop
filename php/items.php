
<?php
$debug = true;
require_once dirname(__FILE__).'/functions.php';
$dbobj = connectPractice();
$sql = 'SELECT * FROM floweritem';
$resultSet = mysqli_query($dbobj, $sql) or die(mysqli_error($dbobj));
$bl = mysqli_affected_rows($dbobj);

echo '<ul class="itemListContainer">'. "\n";
while($data = mysqli_fetch_assoc($resultSet)) :
  echo '<li>' . "\n";
  echo '<img src="img/items/' . h($data['img']) . '" alt="">' . "\n";
  echo '<p>' . h($data['name']) . '</p>' . ' <!-- 商品名 -->' . "\n";
  echo '<p>' . '￥' . number_format(h($data['price'])) . h($data['postscript']) . '</p>' . ' <!-- 価格 -->' . "\n";
  echo '</li>' . "\n";
endwhile;
echo '</ul>'
?>