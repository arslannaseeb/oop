Q:1) query to find specific campus: 

SELECT teacher.name FROM teacher INNER JOIN campus ON teacher.id = campus.id WHERE campus.CampusName = 'fsl'

Q:2) no. of teachers who teaches in khi,lhr,fsl campuses \
 
SELECT COUNT(campus.id),campus.CampusName FROM teacher INNER JOIN campus ON teacher.id = campus.id GROUP BY campus.CampusName

Q:3)  Adding teacher who teaches algo in ISL

INSERT INTO `campus`(`CampusID`, `CampusName`, `id`) VALUES ('','isl',1)

Q:4) teacher who teaches toa in KHI

DELETE FROM `campus` WHERE CampusName='khi' AND id=3

Q:5) changing subject of teacher

UPDATE `teacher` SET `subject`='oop' WHERE id=5



