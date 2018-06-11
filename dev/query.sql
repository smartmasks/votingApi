CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `std` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
ALTER TABLE `votes` ADD PRIMARY KEY (`id`);
ALTER TABLE `votes` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;



INSERT INTO `votes` (`id`, `vote`, `name`, `std`,`role`) VALUES
(1, 9 , 'Find bugs', 'XI', 'SPL'),
(2,8 ,'Review code', 'VII', 'SPL'),
(3, 4,'Fix bugs', 'VI', 'SPL'),
(4,4 ,'Refactor Code','X', 'ASPL'),
(5, 8,'Push to prod','IX', 'ASPL');