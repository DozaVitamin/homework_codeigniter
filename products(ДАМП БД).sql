-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 25 2016 г., 11:54
-- Версия сервера: 5.5.52-0ubuntu0.14.04.1
-- Версия PHP: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brand_name` (`brand_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `brand_name`) VALUES
(13, 'Acer'),
(1, 'Apple'),
(8, 'Asus'),
(7, 'Dell'),
(12, 'HP'),
(4, 'HTC'),
(11, 'IBM'),
(9, 'Lenovo'),
(10, 'LG'),
(3, 'Meizu'),
(6, 'Microsoft'),
(2, 'Samsung'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(5, 'Гибрид планшет-ноутбук'),
(1, 'Мобильные телефоны'),
(3, 'Ноутбуки'),
(4, 'Персональные компьютеры'),
(2, 'Планшеты');

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country` (`country`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `country`) VALUES
(3, 'Вьетнам'),
(1, 'Китай'),
(4, 'Россия'),
(2, 'США');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` int(12) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `manufacturer_id` (`manufacturer_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `price`, `category_id`, `manufacturer_id`, `brand_id`) VALUES
(1, 'iPhone 7', 'Норм телефон.\r\nНорм камера.\r\nВсе ок с ним.', 25000, 1, 2, 1),
(2, 'Galaxy Note 7', 'Клевый смарт.\nКлевый экран.\nАфигенная камера.\nВзрывоопасный немного.', 20000, 1, 1, 2),
(3, 'iPad Pro', 'Снова “amazing”\nСхожие ощущения испытываешь, беря новый iPad Pro 9.7 в руки. Он выглядит точь в точь, как iPad Air 2 и внешне их спутать очень легко. Однако “начинка” нового планшета настолько мощная, что при его использовании волосы на голове могут просто растрепаться, как от сильного ветра.', 35000, 2, 2, 1),
(7, 'Macbook pro 13''''', '13-дюймовый ноутбук MacBook Pro получил обновленную конструкцию, более мощный графический контроллер от Nvidia, интерфейс DisplayPort, тачпад с поддержкой технологии MultiTouch (поддерживает одновременно несколько нажатий и распознает жесты), а также обновленный внешний вид, благодаря которому они стали похожи на MacBook Pro. За счет новой конструкции, очередное поколение мобильных компьютеров MacBook стало прочнее и устойчивее к крутильной деформации, в то время как толщина корпуса составляет 2,4 см, а вес 2 кг. Все разъемы располагаются на левой стороне. Здесь же размещен светодиодный индикатор заряда батареи. Благодаря изменению конструкции можно получить доступ к жесткому диску, всего лишь вынув батарею. Изменения коснулись и графической подсистемы: встроенный контроллер Intel сменила Nvidia GeForce 9400M с 16 вычислительными ядрами, которая, в зависимости от приложения, обеспечивает пятикратный прирост мощности по сравнению с предыдущими ноутбуками. Тачпад ноутбука увеличен на 39%, теперь он может распознавать жесты и поддерживает виртуальные программные кнопки.', 44000, 3, 2, 1),
(8, 'Pro 6', 'Сила – в красоте!\nИнновационная технология сенсорного ввода, прекрасное управление одной рукой, надежные компоненты и высокая скорость передачи данных – залог успеха нового, легкого и, вместе с тем, мощного Meizu PRO 6.', 10000, 1, 1, 3),
(9, 'Aspire One A110-Ab', 'Acer открывает путь в мир мобильного интернета с Aspire One, революционным ноутбуком, который сочетает превосходный дизайн, прекрасную производительность и ультра-компактный форм-фактор 8,9". Aspire One готов к работе всего через 15 секунд с момента включения (с операционной системой Linpus Linux Lite). После включения, интерфейс поражает своей простотой: начальный экран разделен на 4 области, включающие все приложения, необходимые вам для постоянного подключения, работы, развлечения и организации вашей жизни в пути. И поскольку ваш Aspire One является таким же уникальным, как и способ его применения, вы можете настроить вид приложения на начальном экране в соответствии со своими предпочтениями. Легкая, простая и неописуемо стильная. Это - ваша новая жизнь с Aspire One.', 12000, 3, 3, 13);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `prodcut_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodcut_ibfk_2` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodcut_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
