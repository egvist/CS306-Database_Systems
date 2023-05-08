-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2022, 17:34:08
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cs306proj`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(255) DEFAULT NULL,
  `mnth_listening` int(11) DEFAULT NULL,
  `album_rating` double DEFAULT NULL,
  `album_genre` varchar(255) DEFAULT NULL,
  `album_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `mnth_listening`, `album_rating`, `album_genre`, `album_date`) VALUES
(1, 'album1', 1111, 10, 'pop', '2022-12-01'),
(2, 'album2', 2222, 9, 'rock', '2022-12-01'),
(3, 'album3', 3333, 8, 'rap', '2022-12-01'),
(4, 'album4', 4444, 7, 'pop', '2022-12-21'),
(5, 'album5', 5555, 6, 'edm', '2022-12-06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `artist`
--

CREATE TABLE `artist` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(55) DEFAULT NULL,
  `a_genre` varchar(55) DEFAULT NULL,
  `a_mnth_listeners` int(11) DEFAULT NULL,
  `a_most_popular_song` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `artist`
--

INSERT INTO `artist` (`a_id`, `a_name`, `a_genre`, `a_mnth_listeners`, `a_most_popular_song`) VALUES
(1, 'artist1', 'pop', 1111, 'song1'),
(2, 'artist2', 'edm', 2222, 'song2'),
(3, 'artist3', 'rock', 3333, 'song3'),
(5, 'artist5', 'classical', 5555, 'song5'),
(6, 'artist6', 'pop', 6666, 'song6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bargains`
--

CREATE TABLE `bargains` (
  `pub_id` int(11) NOT NULL,
  `platform_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `bargains`
--

INSERT INTO `bargains` (`pub_id`, `platform_id`, `price`) VALUES
(1, 4, NULL),
(2, 4, NULL),
(2, 8, NULL),
(3, 5, NULL),
(3, 8, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contains`
--

CREATE TABLE `contains` (
  `music_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `song_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `contains`
--

INSERT INTO `contains` (`music_id`, `album_id`, `song_number`) VALUES
(2, 1, NULL),
(2, 5, NULL),
(3, 3, NULL),
(4, 4, NULL),
(5, 3, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contracts`
--

CREATE TABLE `contracts` (
  `a_id` int(11) NOT NULL,
  `pub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `contracts`
--

INSERT INTO `contracts` (`a_id`, `pub_id`) VALUES
(1, 1),
(3, 2),
(5, 1),
(5, 3),
(6, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `creating`
--

CREATE TABLE `creating` (
  `a_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `creating`
--

INSERT INTO `creating` (`a_id`, `music_id`) VALUES
(2, 2),
(2, 4),
(3, 2),
(3, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `female_artist`
--

CREATE TABLE `female_artist` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(55) DEFAULT NULL,
  `f_rating` float DEFAULT NULL,
  `f_age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `have`
--

CREATE TABLE `have` (
  `music_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `n_of_musics` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `have`
--

INSERT INTO `have` (`music_id`, `playlist_id`, `n_of_musics`) VALUES
(2, 1, NULL),
(2, 2, NULL),
(3, 1, NULL),
(3, 3, NULL),
(5, 4, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lists_on`
--

CREATE TABLE `lists_on` (
  `platform_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `lists_on`
--

INSERT INTO `lists_on` (`platform_id`, `album_id`) VALUES
(4, 1),
(4, 2),
(5, 2),
(6, 3),
(7, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `male_artist`
--

CREATE TABLE `male_artist` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(55) DEFAULT NULL,
  `m_rating` float DEFAULT NULL,
  `m_age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `music`
--

CREATE TABLE `music` (
  `music_id` int(11) NOT NULL,
  `music_name` varchar(50) DEFAULT NULL,
  `total_plays` int(11) DEFAULT NULL,
  `music_rating` float DEFAULT NULL,
  `music_genre` varchar(50) DEFAULT NULL,
  `music_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `music`
--

INSERT INTO `music` (`music_id`, `music_name`, `total_plays`, `music_rating`, `music_genre`, `music_date`) VALUES
(2, 'music2', 2222, 10, 'turk sanat musikisi', '2022-12-09'),
(3, 'music3', 3333, 8, 'pop', '2022-12-07'),
(4, 'music4', 4444, 7, 'rock', '2022-12-29'),
(5, 'music5', 5555, 6, 'pop', '2022-12-13'),
(6, 'music6', 6666, 5, 'deep house', '2022-12-03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `platform`
--

CREATE TABLE `platform` (
  `platform_id` int(11) NOT NULL,
  `platform_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `platform`
--

INSERT INTO `platform` (`platform_id`, `platform_name`) VALUES
(4, 'platform1'),
(5, 'platform2'),
(6, 'platform3'),
(7, 'platform4'),
(8, 'platform5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int(11) NOT NULL,
  `playlist_title` varchar(50) DEFAULT NULL,
  `playlist_likes` int(11) DEFAULT NULL,
  `total_duration` float DEFAULT NULL,
  `n_of_songs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `playlist_title`, `playlist_likes`, `total_duration`, `n_of_songs`) VALUES
(1, 'playlist1', 1111, 1111, 1111),
(2, 'playlist2', 2222, 2222, 2222),
(3, 'playlist3', 3333, 3333, 3333),
(4, 'playlist4', 4444, 4444, 4444),
(5, 'playlist5', 5555, 5555, 5555);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `producer`
--

CREATE TABLE `producer` (
  `producer_id` int(11) NOT NULL,
  `prdoucer_name` varchar(255) DEFAULT NULL,
  `producer_rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `producer`
--

INSERT INTO `producer` (`producer_id`, `prdoucer_name`, `producer_rating`) VALUES
(1, 'producer1', 10),
(2, 'producer2', 9),
(3, 'producer3', 8),
(4, 'producer4', 7),
(5, 'producer5', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `produces`
--

CREATE TABLE `produces` (
  `music_id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `produce_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `produces`
--

INSERT INTO `produces` (`music_id`, `producer_id`, `produce_date`) VALUES
(2, 2, NULL),
(3, 1, NULL),
(3, 3, NULL),
(4, 4, NULL),
(6, 5, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `publisher`
--

CREATE TABLE `publisher` (
  `pub_id` int(11) NOT NULL,
  `pub_name` varchar(50) DEFAULT NULL,
  `pub_founded` date DEFAULT NULL,
  `pub_total_emp` int(11) DEFAULT NULL,
  `pub_revenue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_name`, `pub_founded`, `pub_total_emp`, `pub_revenue`) VALUES
(1, 'publisher1', '2022-12-16', 1111, 1111),
(2, 'publisher2', '2022-12-20', 2222, 2222),
(3, 'publisher3', '2022-12-15', 3333, 3333),
(4, 'publisher4', '2022-12-11', 4444, 4444),
(5, 'publisher5', '2022-12-12', 5555, 5555);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `publishes`
--

CREATE TABLE `publishes` (
  `pub_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `publishes`
--

INSERT INTO `publishes` (`pub_id`, `album_id`) VALUES
(1, 1),
(1, 3),
(2, 5),
(3, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `U_name` varchar(50) DEFAULT NULL,
  `u_password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `U_name`, `u_password`) VALUES
(1, 'baris', 1),
(2, 'tala', 123);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Tablo için indeksler `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `bargains`
--
ALTER TABLE `bargains`
  ADD PRIMARY KEY (`pub_id`,`platform_id`),
  ADD KEY `platform_id` (`platform_id`);

--
-- Tablo için indeksler `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`music_id`,`album_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Tablo için indeksler `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`a_id`,`pub_id`),
  ADD KEY `pub_id` (`pub_id`);

--
-- Tablo için indeksler `creating`
--
ALTER TABLE `creating`
  ADD PRIMARY KEY (`a_id`,`music_id`),
  ADD KEY `music_id` (`music_id`);

--
-- Tablo için indeksler `female_artist`
--
ALTER TABLE `female_artist`
  ADD PRIMARY KEY (`f_id`);

--
-- Tablo için indeksler `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`music_id`,`playlist_id`),
  ADD KEY `playlist_id` (`playlist_id`);

--
-- Tablo için indeksler `lists_on`
--
ALTER TABLE `lists_on`
  ADD PRIMARY KEY (`platform_id`,`album_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Tablo için indeksler `male_artist`
--
ALTER TABLE `male_artist`
  ADD PRIMARY KEY (`m_id`);

--
-- Tablo için indeksler `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Tablo için indeksler `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`platform_id`);

--
-- Tablo için indeksler `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Tablo için indeksler `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`producer_id`);

--
-- Tablo için indeksler `produces`
--
ALTER TABLE `produces`
  ADD PRIMARY KEY (`music_id`,`producer_id`),
  ADD KEY `producer_id` (`producer_id`);

--
-- Tablo için indeksler `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- Tablo için indeksler `publishes`
--
ALTER TABLE `publishes`
  ADD PRIMARY KEY (`pub_id`,`album_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `artist`
--
ALTER TABLE `artist`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `platform`
--
ALTER TABLE `platform`
  MODIFY `platform_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `producer`
--
ALTER TABLE `producer`
  MODIFY `producer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `publisher`
--
ALTER TABLE `publisher`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `bargains`
--
ALTER TABLE `bargains`
  ADD CONSTRAINT `bargains_ibfk_1` FOREIGN KEY (`pub_id`) REFERENCES `publisher` (`pub_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bargains_ibfk_2` FOREIGN KEY (`platform_id`) REFERENCES `platform` (`platform_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `contains_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contains_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `artist` (`a_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`pub_id`) REFERENCES `publisher` (`pub_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `creating`
--
ALTER TABLE `creating`
  ADD CONSTRAINT `creating_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `artist` (`a_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `creating_ibfk_2` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `have_ibfk_2` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`playlist_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `lists_on`
--
ALTER TABLE `lists_on`
  ADD CONSTRAINT `lists_on_ibfk_1` FOREIGN KEY (`platform_id`) REFERENCES `platform` (`platform_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lists_on_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `produces`
--
ALTER TABLE `produces`
  ADD CONSTRAINT `produces_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produces_ibfk_2` FOREIGN KEY (`producer_id`) REFERENCES `producer` (`producer_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `publishes`
--
ALTER TABLE `publishes`
  ADD CONSTRAINT `publishes_ibfk_1` FOREIGN KEY (`pub_id`) REFERENCES `publisher` (`pub_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `publishes_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
