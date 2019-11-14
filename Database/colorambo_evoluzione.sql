-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 14, 2019 alle 16:49
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colorambo_evoluzione`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `colors`
--

CREATE TABLE `colors` (
  `id_color` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(7) DEFAULT NULL,
  `creator_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `colors`
--

INSERT INTO `colors` (`id_color`, `name`, `code`, `creator_id`) VALUES
(1, 'Primo Colore del Mondo', '#aabbcc', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `favorities`
--

CREATE TABLE `favorities` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `color_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `favorities`
--

INSERT INTO `favorities` (`id`, `date`, `color_id`, `user_id`) VALUES
(1, '2019-10-31', 1, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) UNSIGNED NOT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `roles`
--

INSERT INTO `roles` (`id_roles`, `role_name`, `color`) VALUES
(1, 'admin', '#d35400'),
(2, 'creator', '#2ecc71');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id_user`, `f_name`, `l_name`, `birth_date`, `username`, `password`, `role_id`) VALUES
(1, 'Andrea', 'Mirandola', '1999-04-27', 'andrimiri', 'password', 1),
(2, 'Creatore ', 'Uno', '1999-05-12', 'creator', 'password', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`),
  ADD KEY `creator_fk` (`creator_id`);

--
-- Indici per le tabelle `favorities`
--
ALTER TABLE `favorities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_fk` (`color_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- Indici per le tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_fk` (`role_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `favorities`
--
ALTER TABLE `favorities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `creator_fk` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id_user`);

--
-- Limiti per la tabella `favorities`
--
ALTER TABLE `favorities`
  ADD CONSTRAINT `color_fk` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id_color`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`);

--
-- Limiti per la tabella `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
