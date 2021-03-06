-- MySQL Script generated by MySQL Workbench
-- 10/25/15 01:43:31
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema nursesshift
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `nursesshift` ;

-- -----------------------------------------------------
-- Schema nursesshift
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `nursesshift` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `nursesshift` ;

-- -----------------------------------------------------
-- Table `nursesshift`.`clinic`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nursesshift`.`clinic` ;

CREATE TABLE IF NOT EXISTS `nursesshift`.`clinic` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `cl_name` INT NOT NULL COMMENT '',
  `cl_proistamenos` VARCHAR(60) NOT NULL COMMENT '',
  `cl_tomearxhs` VARCHAR(60) NOT NULL COMMENT '',
  `cl_dieuthunths` VARCHAR(60) NOT NULL COMMENT '',
  `cl_phone1` VARCHAR(45) NOT NULL COMMENT '',
  `cl_phone2` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nursesshift`.`nurse`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nursesshift`.`nurse` ;

CREATE TABLE IF NOT EXISTS `nursesshift`.`nurse` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nu_onoma` VARCHAR(60) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL COMMENT '',
  `nu_epitheto` VARCHAR(60) NULL COMMENT '',
  `nu_bathmida` VARCHAR(5) NULL COMMENT '',
  `nu_is_meiomenou` TINYINT(1) NULL COMMENT '',
  `nu_ores_ergasias` FLOAT NULL COMMENT '',
  `nu_is_ekpaideuomanos` TINYINT(1) NULL COMMENT '',
  `ns_is_proistamenos` TINYINT(1) NULL COMMENT '',
  `nu_is_apospasmenos` TINYINT(1) NULL COMMENT '',
  `nu_apospasmenos_perigafh` VARCHAR(150) NULL COMMENT '',
  `nu_upoloipo_adeias` INT NULL COMMENT '',
  `nu_upoloipo_repo` INT NULL COMMENT '',
  `nu_profile` VARCHAR(300) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nursesshift`.`shifts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nursesshift`.`shifts` ;

CREATE TABLE IF NOT EXISTS `nursesshift`.`shifts` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `sh_date` DATE NOT NULL COMMENT '',
  `sh_is_argia` TINYINT(1) NOT NULL COMMENT '',
  `sh_is_efhmeria` TINYINT(1) NOT NULL COMMENT '',
  `sh_is_weekend` TINYINT(1) NOT NULL COMMENT '',
  `sh_elaxisto_prosopiko` INT NOT NULL COMMENT '',
  `sh_bardia` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nursesshift`.`types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nursesshift`.`types` ;

CREATE TABLE IF NOT EXISTS `nursesshift`.`types` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `description` VARCHAR(45) NULL COMMENT '',
  `isReduced` TINYINT(1) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nursesshift`.`nurse_shift`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nursesshift`.`nurse_shift` ;

CREATE TABLE IF NOT EXISTS `nursesshift`.`nurse_shift` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `ns_nurseID` INT NOT NULL COMMENT '',
  `ns_shiftID` INT NOT NULL COMMENT '',
  `ns_type` INT NOT NULL COMMENT '',
  `ns_hours` INT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  INDEX `fk_ns_nurse_idx` (`ns_nurseID` ASC)  COMMENT '',
  INDEX `fk_ns_shift_idx` (`ns_shiftID` ASC)  COMMENT '',
  INDEX `fk_ns_type_idx` (`ns_type` ASC)  COMMENT '',
  CONSTRAINT `fk_ns_nurse`
    FOREIGN KEY (`ns_nurseID`)
    REFERENCES `nursesshift`.`nurse` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ns_shift`
    FOREIGN KEY (`ns_shiftID`)
    REFERENCES `nursesshift`.`shifts` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ns_type`
    FOREIGN KEY (`ns_type`)
    REFERENCES `nursesshift`.`types` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
