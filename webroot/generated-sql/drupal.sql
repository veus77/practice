
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- book
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    `last_name` VARCHAR(32) NOT NULL,
    `age` INTEGER NOT NULL,
    `developer` INTEGER(32) NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `book_fk_566cdd`
        FOREIGN KEY (`id`)
        REFERENCES `publisher` (`id`),
    CONSTRAINT `book_fk_4e3873`
        FOREIGN KEY (`id`)
        REFERENCES `car` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- car
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `car`;

CREATE TABLE `car`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    `type` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- publisher
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `publisher`;

CREATE TABLE `publisher`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
