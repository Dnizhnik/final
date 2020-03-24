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

-- Дамп данных таблицы imagehosting.counter: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `counter` DISABLE KEYS */;
/*!40000 ALTER TABLE `counter` ENABLE KEYS */;

-- Дамп данных таблицы imagehosting.registration: ~28 rows (приблизительно)
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT IGNORE INTO `registration` (`id`, `login`, `password`, `email`) VALUES
	(11, 'Dnizhnik', '12345', 'dnizhnik@gmail.com'),
	(12, 'Dnizhnik', '1234', 'dnizhnik@gmail.com'),
	(13, 'Dnizhnik', '1234', 'dnizhnik@gmail.com'),
	(14, 'Dniz', '12345', 'dnizh@gmail.com'),
	(15, 'D', '123', 'dnizh@gmail.com'),
	(16, 'm', '123', 'dnizh@gmail.com'),
	(17, '4', '5', 'dnizh@gmail.com'),
	(18, '4', '123', 'dnizh4899@gmail.com'),
	(19, '6', '122', 'dnizh4899@gmail.com'),
	(20, '8', '12', 'dnizh4899@gmail.com'),
	(21, '9', '123', 'dnizh@gmail.com'),
	(22, '9', '123', 'dni@gmail.com'),
	(23, '9', '123', 'dnizhnik@gmail.com'),
	(24, '3', '123', 'dnizhnik@gmail.com'),
	(25, '8', '123', 'dnizhnik@gmail.com'),
	(26, '7', '123', 'dnizhnick@gmail.com'),
	(27, 'login', 'd9b1d7db4cd6e70935368a1efb10e377', 'yashik@mail.ru'),
	(28, 'log', '28c8edde3d61a0411511d3b1866f0636', 'ya@mail.ru'),
	(29, 'l', '1', 'y@mail.ru'),
	(30, '', '', ''),
	(31, 'lo', '123', '11@mail.ru'),
	(32, 'logi', '12', '23@mail.ru'),
	(33, 'loginn', '12', '231@mail.ru'),
	(34, 'loginnn', '12', '2311@mail.ru'),
	(35, 'loginnen', '12', '23112@mail.ru'),
	(36, 'lol', '1', '111@mail.ru'),
	(37, 'loo', '12', '112@mail.ru'),
	(38, 'gh', '12', 'df@mail.ru'),
	(39, 'fdgj', '1', 'fhh@mail.ru'),
	(40, 'fdgja', '1', 'fhdh@mail.ru'),
	(41, 'fdgjav', '1', 'fhdch@mail.ru'),
	(42, 'fdgjaz', '1', 'vn@mail.ru');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
