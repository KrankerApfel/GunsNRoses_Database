
----------------------------------------------------------------------------------------------------------------------
----------------------------- REQUÊTES POSTGRESQL --------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------

-- 1.Liste des albums du groupe
SELECT alb_titre FROM album;
-- 2.Liste des albums du groupe dont le nom contient le mot «Illusion»
SELECT alb_titre FROM album WHERE  alb_titre ~ 'Illusion';
-- 3.Liste des albums parus entre 1987 et 1991
SELECT alb_titre FROM album WHERE  alb_sortie BETWEEN '1987-01-01' AND '1991-01-01';
-- 4.Nombre d’albums du groupe
SELECT count(alb_id) FROM album;
-- 5.Liste des guitaristes des albums parus entre 1987 et 1991
SELECT art_nom,art_prenom, art_pseudo FROM artiste WHERE art_id IN (SELECT DISTINCT art_id FROM participe NATURAL JOIN album  WHERE participe.instrument ~ 'uitare' AND alb_sortie BETWEEN '1987-01-01' AND '1991-01-01');
-- 6.Batteur de l’album «The spaghetti incident?»
SELECT DISTINCT art_pseudo,art_nom,art_prenom  FROM Artiste A,Participe P WHERE A.art_id = P.art_id AND P.instrument = 'Batterie' AND P.alb_id = (SELECT alb_id FROM Album WHERE alb_titre = 'The Spaghetti Incident?');
-- 7.Liste des pianistes jouant dans des albums produit par Mike Clink
SELECT DISTINCT art_pseudo FROM Artiste A,Participe P WHERE A.art_id = P.art_id AND P.instrument = 'Claviers'  AND alb_id IN (SELECT alb_id FROM Album WHERE alb_producteur ~ 'Mike Clink');
-- 8.Liste des musiciens ayant participé à un album entre 1991 et 1993
SELECT art_nom,art_prenom, art_pseudo FROM artiste WHERE art_id IN (SELECT DISTINCT art_id FROM participe NATURAL JOIN album  WHERE alb_sortie BETWEEN '1991-01-01' AND '1993-01-01');
-- 9.Nombre d’albums par musicien (n'affiche pas les 0 albums)
SELECT art_pseudo,art_nom,art_prenom,count(alb_id) AS nb_album FROM artiste NATURAL JOIN participe
GROUP BY artiste.art_id;
-- 10.Musicien ayant participé à plus de 3 albums
 SELECT art_pseudo,art_nom,art_prenom, count(alb_id) AS nb_album FROM artiste NATURAL JOIN participe GROUP BY artiste.art_id HAVING count(alb_id) > 3;

---------------------------------------------------------------------------------------------------------------------------
----------------------------- REQUÊTES MYSQL ------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------


-- 1.Liste des albums du groupe
	SELECT alb_titre FROM Album;
-- 2.Liste des albums du groupe dont le nom contient le mot «Illusion»
	SELECT alb_titre FROM Album WHERE alb_titre REGEXP 'Illusion';
-- 3.Liste des albums parus entre 1987 et 1991
	SELECT alb_titre FROM Album WHERE alb_sortie BETWEEN 1987 AND 1991;
-- 4.Nombre d’albums du groupe
	SELECT COUNT(*) FROM Album;
-- 5.Liste des guitaristes des albums parus entre 1987 et 1991
	SELECT DISTINCT art_nom,art_prenom,art_pseudo  FROM Artiste A,Participe P WHERE A.art_id = P.art_id AND P.instrument REGEXP 'Guitare' AND 		P.alb_id IN (SELECT alb_id FROM Album WHERE alb_sortie BETWEEN 1981 AND 1991 );
-- 6.Batteur de l’album «The spaghetti incident?»
	SELECT DISTINCT art_nom,art_prenom,art_pseudo  FROM Artiste A,Participe P WHERE A.art_id = P.art_id AND P.instrument = 'Batterie' AND P.alb_id = 	(SELECT alb_id FROM Album WHERE alb_titre = 'The Spaghetti Incident?');
-- 7.Liste des pianistes jouant dans des albums produit par Mike Clink
	SELECT DISTINCT art_nom,art_prenom,art_pseudo FROM Artiste A,Participe P WHERE A.art_id = P.art_id AND P.instrument = 'Claviers'  AND alb_id IN (SELECT alb_id FROM 	Album WHERE alb_producteur REGEXP 'Mike Clink');
-- 8.Liste des musiciens ayant participé à un album entre 1991 et 1993
	SELECT DISTINCT art_nom,art_prenom,art_pseudo FROM Artiste A,Participe P WHERE A.art_id = P.art_id AND alb_id IN (SELECT alb_id FROM Album WHERE alb_sortie BETWEEN 	1991 AND 1993);
-- 9.Nombre d’albums par musicien (n'affiche pas les 0 albums)
	SELECT art_pseudo,COUNT(alb_id) FROM Artiste A NATURAL JOIN Participe GROUP BY A.art_pseudo;
-- 10.Musicien ayant participé à plus de 3 albums
	SELECT art_pseudo,COUNT(alb_id) FROM Artiste A NATURAL JOIN Participe GROUP BY A.art_pseudo HAVING COUNT(alb_id) > 3;


