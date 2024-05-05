-- Creating DATABASE
create database Company;

-- Selecting DATABASE
use Company;

-- Creating Table
create table Employees(
    -> EmployeeID INT PRIMARY KEY,
    -> FirstName VARCHAR(20),
    -> LastName VARCHAR(20),
    -> Age INT,
    -> Department VARCHAR(80)
    -> );

-- Inserting DATA into DATABASE
insert into Employees (EmployeeID, FirstName, LastName, Age, Department)
    -> VALUES
    -> (1, 'Daniel', 'Teves', 21, 'Sports'),
    -> (2, 'Andrey', 'Garcia', 21, 'Finance'),
    -> (3, 'Jericho', 'Borromeo', 21, 'HR'),
    -> (4, 'Angelo', 'Delos Santos', 21, 'Projects'),
    -> (5, 'Aurora', 'Bactol', 21, 'Sponsorship');

-- Viewing ALL DATA from  DATABASE
select * from Employees;

-- Updating DATA in DATABASE
update Employees set Department = 'Marketing' where EmployeeID = 2;

-- Deleting DATA in DATABASE
delete from Employees where EmployeeID = 3;

