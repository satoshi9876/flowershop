CREATE DATABASE flowershop;
USE flowershop;
CREATE TABLE floweritem(
id INT AUTO_INCREMENT PRIMARY KEY,
name CHAR(20),
price INT,
postscript CHAR(10),
stock INT DEFAULT 0,
keyword TEXT,
img CHAR(20),
maker INT
);

INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('アレンジメント（小）', 1000, '（税込）', 20, '生花', 'i001.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('アレンジメント（中）', 2500, '（税込）', 15, '生花', 'i002.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('アレンジメント（大）', 3500, '（税込）', 10, '生花', 'i003.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('アレンジメント（特大）', 5000, '（税込）', 5, '生花', 'i004.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('スタンド（小）', 5000, '（税込）', 20, 'スタンド', 'i005.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('スタンド（中）', 15000, '（税込）', 15, 'スタンド', 'i006.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('スタンド（大）', 30000, '（税込）', 10, 'スタンド', 'i007.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('スタンド（オリジナル）', 50000, '～', 5, 'スタンド', 'i008.png', 1);