-- *************************************
-- stored procedures unused in this code
-- they were used in the previous one

delimiter &&
create procedure sp_find_regno(in lastname VARCHAR(15), in firstname VARCHAR(15), out var int)
begin
select Registration_Number into var
from Employees
where Last_Name = lastname
and First_Name = firstname;
end &&
delimiter ;

delimiter &&
create procedure sp_delete_doctor(in regno int)
delete from `Doctor`
where Registration_Number = regno;
end &&
delimiter ;

delimiter &&
create procedure sp_delete_nurse(in regno int)
delete from `Nurse`
where Registration_Number = regno;
end &&
delimiter ;

delimiter &&
create procedure sp_delete_staff(in regno int)
delete from `Staff_Member`
where Registration_Number = regno;
end &&
delimiter ;

delimiter &&
create procedure sp_delete_employee(in regno int)
delete from `Employees`
where Registration_Number = regno;
end &&
delimiter ;

-- **********************************
-- usage of the 4th previous procedures

call sp_find_regno('Maman', 'Igor' , @res);
select @res as regno;
-- after
call sp_delete_doctor('1');
call sp_delete_employee('1');
-- or
call sp_delete_nurse('1');
call sp_delete_employee('1');
-- or
call sp_delete_staff('1');
call sp_delete_employee('1');

-- ***********************
-- implementation of views

CREATE VIEW [all_employees] AS
SELECT Last_Name as lastname, First_Name as firstname, Hire_Date as hiredate
FROM Employees;

CREATE VIEW [patient_data] AS
SELECT Last_name as docName, Patient_Last_Name as lastname, Patient_First_Name as firstname, Patient_Telephone as telephone
FROM Employees e, Doctor d, Patient p
WHERE e.Registration_Number = d.Registration_Number
AND d.Doctor_Id = p.Doctor_Id;