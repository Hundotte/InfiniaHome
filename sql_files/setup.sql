-- ------------------------------------------------------------------
-- InfiniaPress Setup SQL File
-- ------------------------------------------------------------------
-- Note: This file is meant to be parsed by the setup system
-- DO NOT EXECUTE THIS VIA phpMyAdmin or any sort of SQL
-- administration service or InfiniaPress may break
-- Do so ONLY if you know what you are doing
--
-- ------------------------------------------------------------------
-- Written by xiurobert & Hundotte
-- License: MIT (See LICENSE in root folder)
-- (C) Infinia Press Dev Team 2016
-- ------------------------------------------------------------------

-- Setup users table
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, -- Set a safe value for the int
  `username` VARCHAR(100) NOT NULL,
  `fullname` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL, -- This will be a hashed salted value for the password
  `email` VARCHAR(100) NOT NULL,
  `registered` ENUM('Y', 'N') NOT NULL DEFAULT 'N',
  `tokencode` VARCHAR(100) NOT NULL, -- If code valid, will change the user status
  `status` ENUM('Y', 'N') NOT NULL DEFAULT 'N' COMMENT  'User status', 
  `statusReason` VARCHAR( 255 ) NOT NULL COMMENT  'Explanation for user status'

) ENGINE = InnoDB;

