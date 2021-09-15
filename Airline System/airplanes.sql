CREATE TABLE IF NOT EXISTS `flights` (
 `f_no` varchar(20) NOT NULL,
 `f_name` varchar(30) NOT NULL,
 `f_src` varchar(20) NOT NULL,
 `f_dest` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `flights` (`f_no`, `f_name`, `f_src`, `f_dest`) VALUES
('JA501', 'Jet Airways', 'Mumbai', 'Sydney'),
('EM909', 'Fly Emirates', 'Chennai', 'Singapore'),
('AI504', 'Air India', 'Ahmedabad', 'London'),
('AI873', 'Air India', 'London', 'Mumbai'),
('EM547', 'Emirates', 'Abu Dhabi', 'Goa'),
('BR432', 'British Airways', 'New york', 'Mumbai’);



CREATE TABLE IF NOT EXISTS `passenger` (
 `P_id` int(11) NOT NULL AUTO_INCREMENT,
 `Fname` varchar(20) NOT NULL,
 `Lname` varchar(20) NOT NULL,
 `age` int(11) NOT NULL,
 `mno` varchar(30) DEFAULT NULL,
 `email` varchar(30) NOT NULL,
 `password` varchar(30) NOT NULL,
 `f_no` varchar(30) DEFAULT NULL,
 PRIMARY KEY (`P_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

CREATE TABLE IF NOT EXISTS `tickets` (
 `t_no` int(30) NOT NULL,
 `t_fare` int(30) NOT NULL,
 f_no varchar(20) ,
 foreign key (f_no) references flights(f_no)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



insert into tickets values
(19116, 30000,'AI504'),
(12934, 45000,'AI873'),
(19115, 50000,'BR432'),
(12876, 300000,'EM547'),
(19001, 300000,'EM909'),
(17002, 360000,'JA501');
