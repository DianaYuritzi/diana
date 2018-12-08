
CREATE DATABASE IF NOT EXISTS `id7033059_proyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id7033059_proyecto`;

-- Procedimientos
DELIMITER $$

CREATE DEFINER=`id7033059_squash`@`%` PROCEDURE `spActualizarDatosJu` (IN `ID` INT, IN `NOM` VARCHAR(50), IN `AP` VARCHAR(50), IN `AM` VARCHAR(50), IN `EDAD` INT, IN `SEXO` VARCHAR(50), IN `MAIL` VARCHAR(50), IN `USUARIO` VARCHAR(50), IN `CONTRA` VARCHAR(50), IN `CAT_CVE` INT)  BEGIN
IF EXISTS(SELECT * FROM bd_usuario WHERE usu_usuario=USUARIO) THEN
SELECT '0' CLAVE;
ELSE
UPDATE bd_usuario set usu_nombre=NOM, usu_ap=AP, usu_am=AM, usu_edad=EDAD, usu_sexo=SEXO, usu_mail=MAIL, usu_usuario=USUARIO, usu_contra=CONTRA, usu_cat_cve=CAT_CVE
where usu_cve=ID;
select '1' CLAVE;
END IF;
END$$

CREATE DEFINER=`id7033059_squash`@`%` PROCEDURE `spCategorias` ()  BEGIN
SELECT '1' CLAVE,
A.cat_cve ID,
A.cat_tipo NOMBRE,
A.cat_description descrip
FROM
bd_categoria A;
END$$

CREATE DEFINER=`id7033059_squash`@`%` PROCEDURE `spRegistrarUsuario` (IN `NOM` VARCHAR(50), IN `AP` VARCHAR(50), IN `AM` VARCHAR(50), IN `EDAD` INT, IN `SEXO` VARCHAR(50), IN `MAIL` VARCHAR(50), IN `USUARIO` VARCHAR(50), IN `CONTRA` VARCHAR(50), IN `CAT_CVE` INT)  BEGIN
IF EXISTS(SELECT * FROM bd_usuario WHERE usu_usuario=USUARIO) THEN
SELECT '0' CLAVE;
ELSE
INSERT INTO bd_usuario VALUES(NULL,NOM,AP,AM,EDAD,SEXO,MAIL,USUARIO,CONTRA,0,CAT_CVE);
SELECT '1' CLAVE;
END IF;
END$$

CREATE DEFINER=`id7033059_squash`@`%` PROCEDURE `spReservaCancha` (IN `USUARIO` INT, IN `NUMEROJ` INT, IN `FECHA` DATE, IN `INICIO` TIME, IN `FINAL` TIME, IN `TELEFONO` VARCHAR(50), IN `CANCHA` INT)  BEGIN
IF EXISTS(SELECT * FROM bd_reserva_cancha WHERE brc_fecha=FECHA && brc_hora_inicio=INICIO && brc_hora_fin=FINAL) THEN
SELECT '0' CLAVE;
ELSE
INSERT INTO bd_reserva_cancha VALUES(null,USUARIO,NUMEROJ,FECHA,INICIO,FINAL,TELEFONO,CANCHA,0);
SELECT '1' CLAVE;
END IF;
END$$

CREATE DEFINER=`id7033059_squash`@`%` PROCEDURE `spValidarAcceso` (IN `USUARIO` VARCHAR(50), IN `CONTRA` VARCHAR(50))  BEGIN
IF EXISTS(SELECT * FROM bd_usuario WHERE usu_usuario=USUARIO && usu_contra=CONTRA) THEN
SELECT '1' CLAVE,
CONCAT(A.USU_NOMBRE,' ',A.USU_AP,' ',A.USU_AM,' ') NOMBRE,
A.usu_cve ID,
A.usu_nombre NOM,
A.usu_ap AP,
A.usu_am AM,
A.usu_edad EDAD,
A.usu_sexo SEXO,
A.usu_mail MAIL,
A.usu_usuario USU,
A.usu_contra CONTRA,
A.usu_admin ADMIN,
A.usu_cat_cve CATEGORIA
FROM bd_usuario A
WHERE
A.usu_usuario=USUARIO && A.usu_contra=CONTRA;
ELSE
SELECT '0' CLAVE;
END IF;
END$$

DELIMITER ;


CREATE TABLE IF NOT EXISTS `bd_cancha` (
  `can_cve` int(11) NOT NULL AUTO_INCREMENT,
  `can_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `can_inicio` time NOT NULL,
  `can_final` time NOT NULL,
  `can_estatus` int(11) NOT NULL,
  PRIMARY KEY (`can_cve`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `bd_cancha` (`can_cve`, `can_nombre`, `can_inicio`, `can_final`, `can_estatus`) VALUES
(1, 'Cancha 1', '09:00:00', '10:00:00', 1),
(2, 'Cancha 2', '09:00:00', '10:00:00', 0),
(3, 'Ambas', '09:00:00', '10:00:00', 0);


CREATE TABLE IF NOT EXISTS `bd_categoria` (
  `cat_cve` int(11) NOT NULL AUTO_INCREMENT,
  `cat_tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_cve`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `bd_categoria` (`cat_cve`, `cat_tipo`, `cat_description`) VALUES
(1, 'fuerza 1', 'S/D'),
(2, 'fuerza 2', 'S/D'),
(3, 'fuerza 3', 'S/D'),
(4, 'fuerza 4', 'S/D'),
(5, 'fuerza 5', 'S/D'),
(6, 'infantil', 'S/D'),
(7, 'Master A', 'S/D'),
(8, 'Master B', 'S/D'),
(9, 'Master C', 'S/D'),
(10, 'Master D', 'S/D');


CREATE TABLE IF NOT EXISTS `bd_reserva_cancha` (
  `brc_cve` int(11) NOT NULL AUTO_INCREMENT,
  `brc_usu` int(11) NOT NULL,
  `brc_numero_jugadores` int(11) NOT NULL,
  `brc_fecha` date NOT NULL,
  `brc_hora_inicio` time NOT NULL,
  `brc_hora_fin` time NOT NULL,
  `brc_telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `brc_can_cve` int(11) NOT NULL,
  `brc_estatus` int(11) NOT NULL,
  PRIMARY KEY (`brc_cve`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `bd_reserva_cancha` (`brc_cve`, `brc_usu`, `brc_numero_jugadores`, `brc_fecha`, `brc_hora_inicio`, `brc_hora_fin`, `brc_telefono`, `brc_can_cve`, `brc_estatus`) VALUES
(1, 2, 11, '2011-02-20', '07:00:00', '10:00:00', '7711898970', 1, 0),
(2, 2, 4, '2019-02-11', '09:00:00', '10:00:00', '77889741', 1, 0),
(3, 3, 4, '2018-11-01', '09:00:00', '10:00:00', '551269878', 1, 0),
(4, 3, 4, '2019-12-05', '09:00:00', '10:00:00', '551269878', 1, 0),
(5, 6, 2, '2018-12-27', '09:00:00', '10:00:00', '5544667788', 1, 0),
(6, 8, 2, '2018-12-06', '13:00:00', '16:00:00', '7751139721', 1, 0),
(7, 6, 4, '2018-12-20', '13:00:00', '16:00:00', '5544667788', 1, 0),
(8, 9, 3, '2018-12-13', '12:00:00', '13:00:00', '43527689', 1, 0),
(9, 6, 2, '2018-12-13', '11:00:00', '13:00:00', '5544667788', 1, 0),
(10, 11, 4, '2018-12-27', '10:00:00', '12:00:00', '66554477738', 1, 0),
(11, 12, 4, '2018-12-20', '11:00:00', '14:00:00', '66554443332', 1, 0),
(12, 13, 4, '2019-01-03', '13:00:00', '14:00:00', '5544332277', 1, 0),
(13, 6, 2, '2018-12-20', '12:00:00', '17:00:00', '556667878', 1, 0);


CREATE TABLE IF NOT EXISTS `bd_reserva_torneo` (
  `brt_cve` int(11) NOT NULL AUTO_INCREMENT,
  `brt_tor_cve` int(11) NOT NULL,
  `brt_use_cve` int(11) NOT NULL,
  `brt_estatus` int(11) NOT NULL,
  PRIMARY KEY (`brt_cve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `bd_torneo` (
  `tor_cve` int(11) NOT NULL AUTO_INCREMENT,
  `tor_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tor_categoria_cve` int(11) NOT NULL,
  `tor_fecha_registroI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tor_fecha_registroF` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tor_fecha_torneoI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tor_fecha_torneoF` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tor_estatus` int(11) NOT NULL,
  PRIMARY KEY (`tor_cve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `bd_usuario` (
  `usu_cve` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_ap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_am` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_edad` int(11) NOT NULL,
  `usu_sexo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_contra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usu_admin` int(11) NOT NULL,
  `usu_cat_cve` int(11) NOT NULL,
  PRIMARY KEY (`usu_cve`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `bd_usuario` (`usu_cve`, `usu_nombre`, `usu_ap`, `usu_am`, `usu_edad`, `usu_sexo`, `usu_mail`, `usu_usuario`, `usu_contra`, `usu_admin`, `usu_cat_cve`) VALUES
(1, 'Arturo', 'Gutierrez', 'Ponce', 52, 'Masculino', 'arturo.gp@yahoo.es', 'ADMIN', 'ADMIN', 1, 1),
(2, 'Ana Lesly', 'Jiemenez', 'Esparza', 20, 'Femenino', 'correof@upmh.edu.mx', 'les', 'les', 0, 7),
(3, 'Luis Arturo', 'Gutierrez', 'Pablo', 21, 'Masculino', '153110367@upmh.edu.mx', 'Luisgp11', 'Luisgp', 0, 6),
(4, 'Jose Luis', 'Funtes', 'Monroy', 26, 'Femenino', '888p@upmh.edu.mx', 'josfv', 'josfv', 0, 8),
(5, 'Jose Luis', 'Gutierrez', 'Pablo', 20, 'Masculino', '153110367@upmh.edu.mx', 'josegp', 'josegp', 0, 1),
(6, 'Diana', 'Duarte', 'Flores', 21, 'Masculino', 'diana@htomail.com', 'diana', '123', 0, 2),
(7, 'Leslie', 'Jiménez', 'Esparza', 21, 'Femenino', 'les.ukisseop17@gmail.com', 'Les_lie97', 'ki', 0, 1),
(8, 'Mark', 'Siwat', 'Jumlongkul', 18, 'Masculino', 'siwat@gmail.com', 'mark_siwat', 'jumlongkul', 0, 2),
(9, 'yuritzi', 'Perez', 'Jimenez', 23, 'Femenino', 'yuritzi@hotmail.com', 'yuri', '1234', 0, 3),
(10, 'Paco', 'Fuentes', 'Estrada', 23, 'Masculino', 'paco@hotmail.com', 'paco', 'paco', 0, 4),
(11, 'Paco', 'Perez', 'Duarte', 25, 'Masculino', 'paco@hotmail.com', 'perez', 'perez', 0, 4),
(12, 'Juan', 'Espinosa', 'Espejel', 10, 'Masculino', 'juan@hotmail.com', 'juan', 'juan', 0, 1),
(13, 'Cristian', 'Cabrera', 'Loaisa', 5, 'Masculino', 'cris@hotmail.com', 'cris', 'cris', 0, 1),
(14, 'Cristiana', 'Cabrera', 'Loaisa', 7, 'Masculino', 'asasq@hotmail.com', 'ccle', 'ccl', 0, 5),
(15, 'Pepe', 'Lorenzo', 'Cabrera', 20, 'Masculino', 'luisfv', 'pepel', 'pepel', 0, 1);
COMMIT;
