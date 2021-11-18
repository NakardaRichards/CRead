 

CREATE TABLE diagnostic_questions (
  eid text NOT NULL,
  qid text NOT NULL,
  question text NOT NULL,
  choice int(10) NOT NULL,
  question_num int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
