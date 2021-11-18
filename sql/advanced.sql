CREATE TABLE adv_tests (
     `qid` INT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `test1` VARCHAR(100) NOT NULL,
     `test2` VARCHAR(100) NOT NULL,
     `test3` VARCHAR(100) NOT NULL
)

INSERT INTO 
     adv_tests(test1,test2,test3)
VALUES(
     ('play'),('.'),('yes')
),(
     ('is'),('.'),('no')
),(
     ('have'),('?'),('no')
),(
     ('is'),('.'),('yes')
),(
     ('drink'),('?'),('no')
),(
     ('know'),('.'),('monday')
),(
     ('eat'),('?'),('feet')
),(
     ('travel'),('.'),('centimetres')
),(
     ('put'),('.'),('minute')
),(
     ('wear'),('!'),('postscript')
);