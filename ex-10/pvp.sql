CREATE TABLE `pvp` (
    `enrollID` varchar(10) NOT NULL,
    `StudentID` varchar(12) NOT NULL,
    `JoiningDate` date NOT NULL
) -- Dumping data for table `pvp`
INSERT INTO `pvp` (`enrollID`, `StudentID`, `JoiningDate`)
VALUES ('007', '1', '2017-09-14'),
    ('008', '2', '2017-09-13'),
    ('009', '3', '2017-09-12');
CREATE TABLE `deptIT` (
    `StudentID` int(11) NOT NULL,
    `StudentName` varchar(11) NOT NULL,
    `college` varchar(11) NOT NULL
) --
-- Dumping data for table `deptIT`
--
INSERT INTO `deptIT` (`StudentID`, `StudentName`, `college`)
VALUES (2, 'ravikumar', 'pvpsit'),
    (3, 'varun', 'vrsec'),
    (4, 'vindhya', 'gec');