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
VALUES ('�A�����W�����g�i���j', 1000, '�i�ō��j', 20, '����', 'i001.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�A�����W�����g�i���j', 2500, '�i�ō��j', 15, '����', 'i002.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�A�����W�����g�i��j', 3500, '�i�ō��j', 10, '����', 'i003.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�A�����W�����g�i����j', 5000, '�i�ō��j', 5, '����', 'i004.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�X�^���h�i���j', 5000, '�i�ō��j', 20, '�X�^���h', 'i005.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�X�^���h�i���j', 15000, '�i�ō��j', 15, '�X�^���h', 'i006.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�X�^���h�i��j', 30000, '�i�ō��j', 10, '�X�^���h', 'i007.png', 1);
INSERT INTO floweritem (name, price, postscript, stock, keyword, img, maker)
VALUES ('�X�^���h�i�I���W�i���j', 50000, '�`', 5, '�X�^���h', 'i008.png', 1);