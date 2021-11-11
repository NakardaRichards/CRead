CREATE TABLE history (
  email varchar(50) NOT NULL,
  eid text NOT NULL,
  score int(11) NOT NULL,
  level int(11) NOT NULL,
  wrong int(11) NOT NULL,
  date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
