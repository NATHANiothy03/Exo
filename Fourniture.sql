--Creation Tableau--
CREATE TABLE `fourniture`.`Categorie` (`ID` INT NOT NULL , `Categorie` VARCHAR(100) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
CREATE TABLE `fourniture`.`Fourniture` (`ID` INT NOT NULL , `Nom` VARCHAR(100) NOT NULL , `ID_Categorie` INT NOT NULL , `Prix` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
CREATE TABLE `fourniture`.`stock` (`ID` INT NOT NULL , `ID_Fourniture` INT NOT NULL , `Date_Stock` DATE NOT NULL , `Qte_Stock` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

--Insertion Tableau Categorie--
INSERT INTO `categorie`(`ID`, `Categorie`) VALUES ('01','Ecriture');
INSERT INTO `categorie`(`ID`, `Categorie`) VALUES ('02','Cahier et Papier');
INSERT INTO `categorie`(`ID`, `Categorie`) VALUES ('03','Accessoires');

--Insertion Tableau Fourniture--
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('10','Stylo Bleu','01','2000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('11','Stylo Rouge','01','2000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('12','Crayon HB','01','1000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('13','Feutre de couleur','01','8000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('14','Correcteur','01','4000');

INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('15','Cahier 100 Pages','02','5000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('16','Cahier 200 Pages','02','8000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('17','Bloc-Notes','02','3500');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('18','Papier A4','02','25000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('19','Carnet de Notes','02','6000');

INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('20','Regle 30cm','03','2500');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('21','Equerre','03','3000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('22','Compas','03','7000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('23','Trousse','03','12000');
INSERT INTO `fourniture`(`ID`, `Nom`, `ID_Categorie`, `Prix`) VALUES ('24','Sac a dos','03','45000');

--Insertion Tableau Stock--
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('100','10','2026-06-19','200');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('101','11','2026-06-19','200');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('102','12','2026-06-21','150');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('103','13','2026-06-25','100');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('104','14','2026-06-25','150');

INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('105','15','2026-06-25','250');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('106','16','2026-06-25','200');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('107','17','2026-06-19','100');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('108','18','2026-06-19','60');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('109','19','2026-06-21','130');

INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('110','20','2026-06-19','70');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('111','21','2026-06-21','35');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('112','22','2026-06-22','40');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('113','23','2026-06-20','60');
INSERT INTO `stock`(`ID`, `ID_Fourniture`, `Date_Stock`, `Qte_Stock`) VALUES ('114','24','2026-06-24','15');

--Reponse--

--1--
SELECT `ID`, `Nom`, `ID_Categorie`, `Prix` FROM `fourniture`;

--2--
SELECT  `Categorie` FROM `categorie` ;

--3--
SELECT  `Nom` FROM `fourniture` ;

--4--
SELECT  `Nom`, `Prix` FROM `fourniture` ;

--5--
SELECT  `Prix` FROM `fourniture` WHERE prix >5000;

--6--
SELECT  `Prix` FROM `fourniture` WHERE prix <6000;

--7--
SELECT  `Nom`, `Prix`,`Categorie` FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie WHERE c.Categorie='Ecriture';

--8--
SELECT  `Nom`, `Prix`,`Categorie` FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie WHERE c.Categorie='Accessoires';

--9--
SELECT * FROM `fourniture` WHERE Prix BETWEEN 3000 AND 10000;

--10--
SELECT * FROM `fourniture` WHERE Nom='Compas';

--11--
SELECT * FROM `fourniture` ORDER BY Prix ASC;

--12--
SELECT * FROM `fourniture` ORDER BY Prix DESC;

--13--
SELECT * FROM `fourniture` ORDER BY Nom;

--14--
SELECT * FROM `fourniture` LIMIT 3;

--15--
SELECT * FROM `fourniture` ORDER BY Prix DESC LIMIT 5;

--16--
SELECT COUNT(*) FROM `fourniture` ;

--17--
SELECT SUM( `Prix`) FROM `fourniture`;

--18--
SELECT SUM( `Prix`)/COUNT(*) FROM `fourniture`;

--19--
SELECT * FROM `fourniture` ORDER BY Prix ASC LIMIT 1;

--20--
SELECT * FROM `fourniture` ORDER BY Prix DESC LIMIT 1;

--21--
SELECT  `Nom`,`Categorie` FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie;

--22--
SELECT  `Nom`, `Prix`,`Categorie` FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie;

--23--
SELECT  f.*,c.* FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie WHERE c.Categorie='Ecriture';

--24--
SELECT  f.*,c.* FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie WHERE c.Categorie='Cahier et Papier';

--25--
SELECT  f.*,c.* FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie WHERE f.Prix>7000;

--26--
SELECT SUM( f.Prix)/COUNT(*) FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie GROUP BY c.Categorie;

--27--
SELECT SUM(f.prix) FROM `fourniture`as f JOIN `categorie` as c ON c.ID =f.ID_Categorie GROUP BY c.Categorie;

--28--
SELECT * FROM `fourniture` WHERE Nom LIKE '%Cahier%' OR '%cahier%';

--29--
SELECT * FROM `fourniture` WHERE Nom LIKE 'S%';

--30--
SELECT * FROM `fourniture` ORDER BY Prix DESC LIMIT 1 OFFSET 1;

--31--
SELECT  f.*,s.* FROM `fourniture`as f JOIN `stock` as s ON f.ID =s.ID_Fourniture WHERE s.Qte_Stock>50;

--32--
SELECT  SUM(s.Qte_Stock) FROM `fourniture`as f JOIN `stock` as s ON f.ID =s.ID_Fourniture ;

--33--
SELECT  f.*,s.* FROM `fourniture`as f JOIN `stock` as s ON f.ID =s.ID_Fourniture WHERE s.Date_Stock > '2026-06-06'

--34
SELECT  f.*,s.*,c.* FROM `fourniture`as f JOIN `stock` as s ON f.ID =s.ID_Fourniture JOIN `categorie` as c  ON f.ID_Categorie=c.ID   WHERE c.Categorie='Ecriture';