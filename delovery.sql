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
  `country` VARCHAR(50) NOT NULL,
  `cookTime` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
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
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_goods_categories1_idx` (`categories_id` ASC) VISIBLE,
  CONSTRAINT `fk_goods_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `delovery`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `surname` VARCHAR(20) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `id_admin` ENUM('0', '1') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`order` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT UNSIGNED NOT NULL,
  `goods_order_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_order_user_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_order_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `delovery`.`user` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `delovery`.`order_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `delovery`.`order_details` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `goods_id` INT NOT NULL,
  `order_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_order_details_goods1_idx` (`goods_id` ASC) VISIBLE,
  INDEX `fk_order_details_order1_idx` (`order_id` ASC) VISIBLE,
  CONSTRAINT `fk_order_details_goods1`
    FOREIGN KEY (`goods_id`)
    REFERENCES `delovery`.`goods` (`id`),
  CONSTRAINT `fk_order_details_order1`
    FOREIGN KEY (`order_id`)
    REFERENCES `delovery`.`order` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
