CREATE TABLE Admins (
	cf CHAR(16) NOT NULL PRIMARY KEY,

	FOREIGN KEY (cf) REFERENCES Profiles(cf)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);
