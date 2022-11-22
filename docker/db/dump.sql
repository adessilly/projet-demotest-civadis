CREATE TABLE `mydb`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(100) NOT NULL , `firstname` VARCHAR(100) NOT NULL , `lastname` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `user` (`id`, `email`, `firstname`, `lastname`) VALUES (NULL, 'dupont.jean@gmail.com', 'Jean', 'Dupont');
INSERT INTO `user` (`id`, `email`, `firstname`, `lastname`) VALUES (NULL, 'gates.bill@gmail.com', 'Bill', 'Gates');
INSERT INTO `user` (`id`, `email`, `firstname`, `lastname`) VALUES (NULL, 'musk.elon@gmail.com', 'Elon', 'Musk');

commit;