CREATE DATABASE Doctor_Office;

--/// CREATING TABLES ///--

CREATE TABLE `Employees` (
    `Registration_Number` INT NOT NULL PRIMARY KEY,
    `Hire_Date` DATE NOT NULL,
    `Salary` INT NOT NULL,
    `Last_Name` VARCHAR(15) NOT NULL,
    `First_Name` VARCHAR(15) NOT NULL,
    `Email_Address` VARCHAR(45) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `Doctor` (
    `Doctor_Id` INT NOT NULL PRIMARY KEY,
    `Registration_Number` INT NOT NULL,
    `Doctor_Speciality` VARCHAR(20) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `Nurse` (
    `Nurse_Id` INT NOT NULL PRIMARY KEY,
    `Registration_Number` INT NOT NULL,
    `Contract` VARCHAR(3) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `Staff_Member` (
    `Staff_Id` INT NOT NULL PRIMARY KEY,
    `Registration_Number` INT NOT NULL,
    `Staff_Post` VARCHAR(20) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `Patient` (
    `Patient_Id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Doctor_Id` INT NOT NULL,
    `Patient_Last_Name` VARCHAR(15) NOT NULL,
    `Patient_First_Name` VARCHAR(15) NOT NULL,
    `Patient_SocialNumber` VARCHAR(15) NOT NULL,
    `Patient_BirthDate` DATE NOT NULL,
    `Patient_City` VARCHAR(15) NOT NULL,
    `Patient_Telephone` VARCHAR(10) NOT NULL,
    `Patient_Email` VARCHAR(45) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `Visits` (
    `Visit_Id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Patient_Id` INT NOT NULL,
    `Visit_Type` VARCHAR(15) NOT NULL,
    `Visit_Date` DATE NOT NULL,
    `Visit_Duration` TIME NOT NULL,
    `Visit_Cost` INT NOT NULL,
    `Visit_Description` TEXT NOT NULL
) ENGINE = INNODB;

ALTER TABLE Doctor ADD FOREIGN KEY (Registration_Number) REFERENCES Employees(Registration_Number);
ALTER TABLE Nurse ADD FOREIGN KEY (Registration_Number) REFERENCES Employees(Registration_Number);
ALTER TABLE Staff_Member ADD FOREIGN KEY (Registration_Number) REFERENCES Employees(Registration_Number);
ALTER TABLE Patient ADD FOREIGN KEY (Doctor_Id) REFERENCES Doctor(Doctor_Id);
ALTER TABLE Visits ADD FOREIGN KEY (Patient_Id) REFERENCES Patient(Patient_Id);

INSERT INTO `Employees`(`Registration_Number`,`Hire_Date`,`Salary`,`Last_Name`, `First_Name`,`Email_Address`) VALUES
('1','2021-11-18','1200','Dupont','Luc',   'tesail@eple.com'),
('2','2021-11-18','1200','Lucris', 'Paul',  'tesail@exle.com'),
('3','2021-11-18','1200','Portalier','Isabel','temail@exle.com'),
('4','2021-11-18','1200','Araujo', 'Plova',  'teil@ele.com'),
('5','2021-11-18','1200','Maman',  'Igor',  'tesail@exle.com'),
('6','2021-11-18','1200','JeanCul', 'Marie', 'tesail@exle.com');

INSERT INTO `Doctor` (`Doctor_Id`,`Registration_Number`,`Doctor_Speciality`) VALUES
('100','1','Generalist'),
('101','2','Chirurgien');

INSERT INTO `Nurse` (`Nurse_Id`,`Registration_Number`,`Contract`) VALUES
('200','3','CDI'),
('101','4','CDI');

INSERT INTO `Staff_Member` (`Staff_Id`,`Registration_Number`,`Staff_Post`) VALUES
('300','5','Assistant'),
('301','6','Security');

INSERT INTO `Patient` (`Doctor_Id`,`Patient_Last_Name`,`Patient_First_Name`,`Patient_SocialNumber`,`Patient_BirthDate`,`Patient_City`,`Patient_Telephone`,`Patient_Email`) VALUES
('100','Moro','Luc',123456789101112, '2000-01-01', 'Ruse', '0788194567', 'jesuis@tee.com'),
('101','Kardano','Pierre',123456788701112, '2000-07-01', 'Plovdiv', '0788004567', 'jess@bolo.com'),
('100','Boruit','Paul',123456946101112, '2000-01-21', 'Lyon', '0788194876', 'jeols@teyr.com'),
('101','Zdravitu','Jacque',123356789101112, '2007-11-01', 'Paris', '0766694567', 'jeyis@tele.com'),
('101','Carda','Papawembe',123457816101112, '2005-01-01', 'Ruse', '0678194567', 'carda@tee.com'),
('101','Varane','Erwan'   ,123456787701112, '1990-07-01', 'Ruse', '0788984567', 'varane@bolo.com'),
('100','Zizou','Lucie'    ,123450046101112, '2008-01-21', 'Paris', '0788004876', 'zizou@teyr.com'),
('101','Matudi','Paul',123356789098112, '1997-11-01', 'Paris', '0769094567', 'matudi@tele.com'),
('101','Pogba','Fanta',123457816101112, '2005-01-01', 'Sofia', '0678194567', 'fanta@tee.com'),
('101','Cosner','Coca'   ,123456787701112, '1998-07-01', 'Sofia', '0788984567', 'coca@bolo.com'),
('100','Arafa','Yves'    ,123450046101112, '2004-01-21', 'Paris', '0788004876', 'yves@teyr.com'),
('101','Zitoune','Paulo',123356789098112, '1999-11-01', 'Paris', '0769094567', 'polo@tele.com');

INSERT INTO `Visits` (`Patient_Id`,`Visit_Type`,`Visit_Date`,`Visit_Duration`,`Visit_Cost`,`Visit_Description`) VALUES
('1','AnualMeeting','2021-11-21','00:30:00',30,'nothing special'),
('2','AnualMeeting','2021-10-21','00:30:00',30,'nothing special'),
('3','AnualMeeting','2021-08-21','00:30:00',30,'nothing special'),
('4','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('1','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('2','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('3','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('4','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('1','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('2','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('3','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('4','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('1','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('2','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('3','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('4','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('5','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('6','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('7','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('8','AnualMeeting','2021-01-21','00:30:00',30,'nothing special'),
('5','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('6','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('7','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('8','AnualMeeting','2021-02-21','00:30:00',30,'nothing special'),
('5','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('6','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('7','AnualMeeting','2021-03-21','00:30:00',30,'nothing special'),
('8','AnualMeeting','2021-03-21','00:30:00',30,'nothing special');