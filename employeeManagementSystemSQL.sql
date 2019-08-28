DROP DATABASE IF EXISTS `ems`;
CREATE schema `ems`;
USE `ems`;

CREATE TABLE `ems`.`Employee` (
  `EmployeeID` INT NOT NULL AUTO_INCREMENT,
  `EmployeeName` VARCHAR(45) NULL,
  `Age` VARCHAR(45) NULL,
  `Gender` VARCHAR(45) NULL,
  `Department` VARCHAR(45) NULL,
  `Manager` VARCHAR(45) NULL,
  `Salary` VARCHAR(45) NULL,
  `DateJoined` VARCHAR(45) NULL,
  PRIMARY KEY (`EmployeeID`));

INSERT INTO `Employee` (`EmployeeID`, `EmployeeName`, `Age`, `Gender`, `Department`, `Manager`, `Salary`, `DateJoined`)
VALUES ('2', 'Kieran Abelen', '28', 'M', 'Computing', 'Mike', '25000', 'Jan 1'), ('3', 'Jerry Wang', '28', 'M', 'Computing', 'Mike', '25000', 'Jan 1'), ('2', 'Mike', '28', 'M', 'Computing', 'Sandy', '25000', 'Jan 1');

