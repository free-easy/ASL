CREATE TABLE Users (
	id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
	email VARCHAR(256) NOT NULL,
	password VARCHAR(256) NOT NULL,
	role VARCHAR(20) NOT NULL
);
