-- structure de la table Artiste

CREATE TABLE Artiste(
	art_id INT PRIMARY KEY,
	art_pseudo VARCHAR(40),
	art_nom VARCHAR(40) NOT NULL,
	art_prenom VARCHAR(40) NOT NULL,
	art_dateNaissance DATE,
	art_dateMort DATE
	);

-- insertion des données

INSERT INTO Artiste VALUES
	(1, 'Axl Rose', 'Rose', 'William', '1962-02-06', NULL),
	(2, 'Dizzy Reed', 'Reed', 'Darren', '1963-06-18', NULL),
	(3, 'Ole Beich', 'Beich', 'Ole', NULL, '1991-10-16'),
	(4, 'Duff McKagan', 'McKagan', 'Michael', '1964-02-05', NULL),
	(5, 'Tommy Stinson', 'Stinson', 'Thomas', '1966-10-06', NULL),
	(6, 'Tracii Guns', 'Ulrich', 'Tracy', '1966-01-20', NULL),
	(7, 'Slash', 'Hudson', 'Saul', '1965-07-23', NULL),
	(8, 'Robin Finck', 'Finck', 'Robin', '1971-11-07', NULL),
	(9, 'DJ Ashba', 'Ashba', 'Daren', '1972-11-10', NULL),
	(10, 'Izzy Stradlin', 'Isbell', 'Jeffrey','1962-04-08', NULL),
	(11, 'Gilby Clarke', 'Clarke', 'Gilby', '1962-08-17', NULL),
	(12, 'Paul Huge', 'Tobias', 'Paul', '1963-02-06', NULL),
	(13, 'Richard Fortus', 'Fortus', 'Richard', '1966-11-17', NULL),
	(14, 'Rob Gardner', 'Gardner', 'Rob', NULL, NULL),
	(15, 'Steven Adler', 'Coletti', 'Michael', '1965-01-22', NULL),
	(16, 'Matt Sorum', 'Sorum', 'Matt', '1960-11-19', NULL),
	(17, 'Josh Freese', 'Freese', 'Josh', '1972-12-25', NULL),
	(18, 'Brain', 'Mantia', 'Brain', '1963-02-04', NULL),
	(19, 'Frank Ferrer', 'Ferrer', 'Frank', '1966-03-25', NULL),
	(20, 'Buckethead', 'Carroll', 'Brian', '1969-03-13', NULL),
	(21, 'Bumblefoot', 'Thal', 'Ronald', '1969-09-25', NULL),
	(22, 'Chris Pitman', 'Pitman', 'Chris', '1976-02-25', NULL),
	(23, 'Melissa Reese', 'Reese', 'Melissa', '1985-03-01', NULL);





-- structure de la table Album

CREATE TABLE Album(
	alb_id INT PRIMARY KEY,
	alb_titre VARCHAR(40) NOT NULL,
	alb_sortie YEAR NOT NULL,
	alb_duree TIME NOT NULL,
	alb_genre VARCHAR(40) NOT NULL,
	alb_producteur VARCHAR(40) NOT NULL,
	alb_label VARCHAR(40) NOT NULL
	);

-- insertion des données

INSERT INTO Album VALUES
	(1, 'Appetite for Destruction', 1987, '00:53:26', 'Hard rock, Heavy metal, Blues rock', 'Mike Clink', 'Geffen Records'),
	(2, 'G N R Lies', 1988, '00:33:17', 'Hard rock', 'Mike Clink', 'Geffen Records' ),
	(3, 'Use Your Illusion I', 1991, '01:16:00', 'Hard rock, Heavy metal', 'Mike Clink', 'Geffen Records'),
	(4, 'Use Your Illusion II', 1991, '01:15:52', 'Hard rock, Heavy metal', 'Mike Clink', 'Geffen Records'),
	(5, 'The Spaghetti Incident?', 1993, '00:46:11', 'Hard rock, Punk rock, Heavy Metal', 'Mike Clink, Jim Mitchell', 'Geffen Records'),
	(6, 'Chinese Democracy', 2008, '01:11:18', 'Hard rock', 'Caram Costanzo', 'Geffen Records, Black Frog');





-- structure de la table Participe

CREATE TABLE Participe(
	art_id INT NOT NULL,
	alb_id INT NOT NULL,
	instrument VARCHAR(40) NOT NULL,
	FOREIGN KEY(art_id) REFERENCES Artiste(art_id),
	FOREIGN KEY(alb_id) REFERENCES Album(alb_id),
	PRIMARY KEY(art_id, alb_id, instrument)
);

-- insertion des données

INSERT INTO Participe VALUES
	(1,1,'Chant'),
	(4,1,'Basse'),
	(7,1,'Guitare solo'),
	(10,1,'Guitare rythmique'),
	(15,1,'Batterie'),
	(1,2,'Chant'),
	(4,2,'Basse'),
	(7,2,'Guitare solo'),
	(10,2,'Guitare rythmique'),
	(15,2,'Batterie'),
	(1,3,'Chant'),
	(2,3,'Claviers'),
	(4,3,'Basse'),
	(7,3,'Guitare solo'),
	(10,3,'Guitare rythmique'),
	(16,3,'Batterie'),
	(1,4,'Chant'),
	(2,4,'Claviers'),
	(4,4,'Basse'),
	(7,4,'Guitare solo'),
	(10,4,'Guitare rythmique'),
	(16,4,'Batterie'),
	(1,5,'Chant'),
	(2,5,'Claviers'),
	(4,5,'Basse'),
	(7,5,'Guitare solo'),
	(10,5,'Guitare rythmique'),
	(16,5,'Batterie'),
	(1,6,'Chant'),
	(2,6,'Claviers'),
	(5,6,'Basse'),
	(8,6,'Guitare solo'),
	(12,6,'Guitare rythmique'),
	(18,6,'Batterie'),
	(21,6,'Troisième guitare'),
	(22,6,'Claviers');
