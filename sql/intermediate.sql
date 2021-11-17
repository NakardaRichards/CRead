CREATE TABLE interm_tests (
     `qid` INT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `test1` VARCHAR(100) NOT NULL,
     `test2` VARCHAR(100) NOT NULL,
     `test3` VARCHAR(100) NOT NULL
);

INSERT INTO 
     interm_tests(test1,test2,test3)
VALUES(
     ('adjective'),('predicate'),('simile')
),(
     ('verb'),('subject'),('personification')
),(
     ('adverb'),('predicate'),('metaphor')
),(
     ('verb'),('subject'),('personification')
),(
     ('preposition'),('subject'),('metaphor')
),(
     ('pronoun'),('no'),('personification')
),(
     ('noun'),('yes'),('simile')
),(
     ('adjective'),('no'),('personification')
),(
     ('adverb'),('no'),('simile')
),(
     ('noun'),('yes'),('simile')
);