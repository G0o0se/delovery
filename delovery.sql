-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema delovery
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema delovery
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `delovery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `delovery` ;

-- -----------------------------------------------------
-- Table `delovery`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `cookTime` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 76
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`goods`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`goods` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `price` DOUBLE NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 44
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`news` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NULL DEFAULT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `image` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 17
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_0900_ai_ci' NOT NULL,
  `surname` VARCHAR(20) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_0900_ai_ci' NOT NULL,
  `email` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_0900_ai_ci' NOT NULL,
  `password` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_0900_ai_ci' NOT NULL,
  `id_admin` INT NOT NULL,
  `phone` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_0900_ai_ci' NOT NULL,
  `adress` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 19
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_as_ci;


-- -----------------------------------------------------
-- Table `delovery`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT UNSIGNED NOT NULL,
  `products` JSON NULL DEFAULT NULL,
  `amount` INT NULL DEFAULT NULL,
  `status` VARCHAR(45) NULL DEFAULT NULL,
  `date_order` DATETIME NULL DEFAULT NULL,
  `payment` VARCHAR(45) NULL DEFAULT NULL,
  `delivery` VARCHAR(80) NULL DEFAULT NULL,
  `users_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_orders_users1_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `fk_orders_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `delovery`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 23
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`orders_has_goods`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`orders_has_goods` (
  `orders_id` INT NOT NULL,
  `goods_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  PRIMARY KEY (`orders_id`, `goods_id`),
  INDEX `fk_orders_has_goods_goods1_idx` (`goods_id` ASC) VISIBLE,
  INDEX `fk_orders_has_goods_orders_idx` (`orders_id` ASC) VISIBLE,
  CONSTRAINT `fk_orders_has_goods_orders`
    FOREIGN KEY (`orders_id`)
    REFERENCES `delovery`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_goods_goods1`
    FOREIGN KEY (`goods_id`)
    REFERENCES `delovery`.`goods` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
