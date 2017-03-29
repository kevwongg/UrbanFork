INSERT INTO `restaurant` (`location`, `cuisine`, `description`, `phone`, `rname`) VALUES
('Vancouver', 'Italian', 'best past', '6049001900', 'Anton''s Pasta'),
('Vancouver', 'Italian', 'Pizza', '6044325053', 'italiano'),
('Vancouver', 'Italian', 'Testin', '6054320432', 'Italiano2'),
('Vancouver', 'Italian', 'Best Pizza', '6048998999', 'Pizza Locale');

INSERT INTO `contains` (`dishid`, `location`, `rname`, `type`) VALUES
(11111, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(11111, 'Vancouver', 'Pizza Locale', 'Dinner'),
(11111, 'Vancouver', 'Pizza Locale', 'Lunch'),
(22222, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(22222, 'Vancouver', 'Pizza Locale', 'Dinner'),
(22222, 'Vancouver', 'Pizza Locale', 'Lunch'),
(33333, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(33333, 'Vancouver', 'Pizza Locale', 'Dinner'),
(33333, 'Vancouver', 'Pizza Locale', 'Lunch'),
(44444, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(44444, 'Vancouver', 'Pizza Locale', 'Dinner'),
(44444, 'Vancouver', 'Pizza Locale', 'Lunch'),
(55555, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(55555, 'Vancouver', 'Pizza Locale', 'Dinner'),
(55555, 'Vancouver', 'Pizza Locale', 'Lunch');

INSERT INTO `menu` (`type`, `location`, `rname`) VALUES
('Breakfast', 'Vancouver', 'Pizza Locale'),
('Dinner', 'Vancouver', 'Pizza Locale'),
('Lunch', 'Vancouver', 'Pizza Locale');