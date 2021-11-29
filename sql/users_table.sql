-- If you are just setting up the database, use this create table query

CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fname varchar(100) NOT NULL,
	lname varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	pass varchar(100) NOT NULL,

	diagDone BOOLEAN NULL DEFAULT NULL,
	diagTest tinyint(3) NOT NULL,

	beg1 tinyint(3),
	beg2 tinyint(3),
	beg3 tinyint(3),
	interm1 tinyint(3),
	interm2 tinyint(3),
	interm3 tinyint(3),
	adv1 tinyint(3),
	adv2 tinyint(3),
	adv3 tinyint(3)
);

-- If you already had the database set up, you can remove the comment symbols from below 
-- and use this to add the necessary fields (remove the fields that you already have from the query)

-- ALTER TABLE users
-- ADD COLUMN diagDone BOOLEAN NULL DEFAULT NULL,
-- diagTest tinyint(3) NOT NULL,
-- 
-- ADD COLUMN beg1 tinyint(3),
-- ADD COLUMN beg2 tinyint(3),
-- ADD COLUMN beg3 tinyint(3),
-- ADD COLUMN interm1 tinyint(3),
-- ADD COLUMN interm2 tinyint(3),
-- ADD COLUMN interm3 tinyint(3),
-- ADD COLUMN adv1 tinyint(3),
-- ADD COLUMN adv2 tinyint(3),
-- ADD COLUMN adv3 tinyint(3);
