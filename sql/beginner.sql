CREATE TABLE beginner_tests (
     `qid` INT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `test1` VARCHAR(100) NOT NULL,
     `test2` VARCHAR(100) NOT NULL,
     `test3` VARCHAR(100) NOT NULL
)

INSERT INTO 
     beginner_tests(test1,test2,test3)
VALUES(
     ('b'),('a'),('o')
),(
     ('o'),('y'),('i')
),(
     ('y'),('o'),('r')
),(
     ('n'),('i'),('e')
),(
     ('j'),('u'),('h')
),(
     ('x'),('u e'),('i')
),(
     ('f'),('o e y'),('c')
),(
     ('v'),('a e'),('d')
),(
     ('l'),('i a e'),('m')
),(
     ('d'),('u y'),('a')
);