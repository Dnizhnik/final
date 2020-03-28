-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы imagehosting.counter: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `counter` DISABLE KEYS */;
/*!40000 ALTER TABLE `counter` ENABLE KEYS */;

-- Дамп данных таблицы imagehosting.mypictures: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `mypictures` DISABLE KEYS */;
/*!40000 ALTER TABLE `mypictures` ENABLE KEYS */;

-- Дамп данных таблицы imagehosting.registration: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT IGNORE INTO `registration` (`id`, `login`, `password`, `email`) VALUES
	(62, '1', '28c8edde3d61a0411511d3b1866f0636', '1@mail.ru'),
	(63, '3', '38026ed22fc1a91d92b5d2ef93540f20', '3@mail.ru'),
	(64, '2', '665f644e43731ff9db3d341da5c827e1', '2@mail.ru'),
	(65, '4', '011ecee7d295c066ae68d4396215c3d0', '4@mail.ru'),
	(66, '5', '4e44f1ac85cd60e3caa56bfd4afb675e', '5@mail.ru');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
