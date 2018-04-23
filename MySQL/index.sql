INSERT INTO users(email,fullname,address, password,birthdate)
VALUES 
    ('huong05@gmail.com','Huong Huong 2', 'District 12', 1212121,'2017-12-3'),
    ('huong06@gmail.com','Huong Huong 2', 'District 12', 1212121,'2000-04-25'),
    ('huong07@gmail.com','Huong Huong 2', 'District 12', 1212121,'1999-09-20');



INSERT INTO users(id,email,fullname,address, password,birthdate)
SELECT id,email,fullname,address, password,birthdate
FROM users_backup
WHERE id = 12


INSERT INTO users
SELECT *
FROM users_backup
WHERE id = 12



UPDATE users 
SET birthdate='1998-2-27'
WHERE id=1;



UPDATE users 
SET 
    address='Tan Phú',
    password = '232323'
WHERE id IN (5,6)


UPDATE users 
SET 
    address='Tan Phú',
    password = '232323',
    id=12

WHERE id=5;


/*
    = >= <= > <
    AND
    OR
    NOT LIKE / LIKE '%keyword%'
    NOT IN(1,2,3) / IN(1,2,3)
    BETWEEN min AND max => BETWEEN 5 AND 7 => 5,6,7


*/

DELETE FROM users
WHERE email LIKE '%yahoo';



SELECT * 
FROM users
WHERE id>=1
AND id<=7 


SELECT fullname, email,password 
FROM users
WHERE email LIKE 'kpt%'

