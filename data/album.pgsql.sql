-- structure de la table Artiste,Album et Participe

CREATE TABLE Artiste(
       art_id SERIAL PRIMARY KEY,
       art_pseudo VARCHAR(50),
       art_nom VARCHAR(50) NOT NULL,
       art_prenom VARCHAR(50) NOT NULL,
       art_dateNaissance DATE,
       art_dateMort DATE
);

CREATE TABLE Album(
      alb_id SERIAL PRIMARY KEY,
      alb_titre  VARCHAR(50),
      alb_sortie DATE NOT NULL,
      alb_duree  TIME NOT NULL,
      alb_genre  VARCHAR(50) NOT NULL,
      alb_producteur VARCHAR(50) NOT NULL,
      alb_label VARCHAR(50) NOT NULL
);

CREATE TABLE Participe(
      alb_id INT NOT NULL,
      art_id INT NOT NULL,
      instrument VARCHAR(40) NOT NULL,
      FOREIGN KEY (alb_id) REFERENCES Album(alb_id),
      FOREIGN KEY (art_id) REFERENCES Artiste(art_id),
      PRIMARY KEY (alb_id,art_id,instrument)
);

-- insertion des données YYYY-MM-DD.

INSERT INTO Artiste(art_pseudo, art_prenom, art_nom, art_dateNaissance,art_dateMort) VALUES
       ('Axl Rose','William','Rose','1962-02-06',NULL),
       ('Dizzy Reed','Dareen','Reed','1963-06-18',NULL),
       (NULL,'Ole','Beich',NULL,'1991-10-16'),
       ('Duff McKagan','Micheal','McKagan','1964-02-05',NULL),
       ('Tommy Stinson','Thomas','Stinson','1966-10-06',NULL),
       ('Tracii Guns','Tracy','Ulrich','1966-01-20',NULL),
       ('Slash','Saul','Hudson','1965-07-23',NULL),
       (NULL,'Robin','Finck','1971-11-07',NULL),
       ('DJ Ashba','Daren','Ashba','1972-11-10',NULL),
       ('Izzy Stradlin','Jeffrey','Isbel','1962-04-08',NULL),
       (NULL,'Gilby','Clarke','1962-08-17',NULL),
       ('Paul Huge','Paul','Tobias','1963-02-06',NULL),
       (NULL,'Richard','Fortus','1966-11-17',NULL),
       (NULL,'Rob','Gardner',NULL,NULL),
       ('Steven Adler','Micheal','Coletti','1965-01-22',NULL),
       ('Matt Sorum','Matthew','Sorum','1960-11-19',NULL),
       (NULL,'Josh','Freese','1972-12-24',NULL),
       ('Brain','Bryan','Mantia','1963-02-04',NULL),
       (NULL,'Frank','Ferrer','1966-03-25',NULL),
       ('Buckethead','Brian','Caroll','1969-05-13',NULL),
       ('Bumblefoot','Ron','Thal','1969-09-25',NULL),
       (NULL,'Chris','Pitman','1976-02-25',NULL),
       ('Melissa Reese','Rose','William','1962-02-06',NULL);


INSERT INTO Album(alb_titre, alb_sortie, alb_duree,alb_genre,alb_producteur,alb_label) VALUES
      ('Appetite for Destruction', '1987-07-21', '00:53:26', 'Hard rock, Heavy metal, Blues rock', 'Mike Clink', 'Geffen Records'),
      ('G N R Lies', '1988-11-29', '00:33:17', 'Hard rock', 'Mike Clink', 'Geffen Records' ),
      ('Use Your Illusion I', '1991-09-16', '01:16:00', 'Hard rock, Heavy metal', 'Mike Clink', 'Geffen Records'),
      ('Use Your Illusion II', '1991-09-17', '01:15:52', 'Hard rock, Heavy metal', 'Mike Clink', 'Geffen Records'),
      ('The Spaghetti Incident?', '1993-11-23', '00:46:11', 'Hard rock, Punk rock, Heavy Metal', 'Mike Clink, Jim Mitchell', 'Geffen Records'),
      ('Chinese Democracy', '2008-11-23', '01:11:18', 'Hard rock', 'Caram Costanzo', 'Geffen Records, Black Frog');

INSERT INTO Participe(art_id,alb_id,instrument) VALUES
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
