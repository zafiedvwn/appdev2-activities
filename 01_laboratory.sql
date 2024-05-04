-- Creating a Database
CREATE DATABASE Company;


-- Selecting a Database
USE Company;

-- Creating a Table
CREATE TABLE Employees(
    -> EmployeeID INT PRIMARY KEY,
    -> FirstName VARCHAR(20),
    -> LastName VARCHAR(20),
    -> Age INT,
    -> Department VARCHAR(255)
    -> );

-- Insert data into the Table
INSERT INTO Employees (`EmployeeID`, `FirstName`, `LastName`, `Age`, `Department`)
    -> VALUES (2, "Nick", "Valensi", 44, "Finance"),
    -> (3, "Nikolai", "Fraiture", 46, "Admin"),
    -> (4, "Albert", "Hammond Jr.", 45, "Marketing"),
    -> (5, "Fabrizio", "Moretti", 43, "Development");

-- View data
SELECT * FROM Employees;

-- Update data
UPDATE Employees SET Department="Marketing" WHERE EmployeeID
=2;

-- Delete Data
DELETE FROM Employees
    -> WHERE EmployeeID = 3;

-- Drop Table
DROP TABLE Employees;