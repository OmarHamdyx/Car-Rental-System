INSERT INTO CAR (License_no, Car_name, Plate_id, Car_type, Year, Daily_rate, Status, Office_location) VALUES
(17989343, 'Wagon R', 'KA19MG9910', 'Compact', 2018, 2000, 'active', 'cairo'),
(39088756, 'Innova', 'GA16NM9125', 'SUV', 2019, 2200, 'out of service', 'alex'),
(47927392, 'Ford Figo', 'GJ17HZ4001', 'Medium', 2002, 2200, 'rented', 'mansoura'),
(90293888, 'Swift Dzire', 'BR01HX8001', 'Large', 2010, 1600, 'in repair', 'kafr el-sheikh'),
(30487576, 'Suzuki Ciaz', 'TN17MS1997', 'Truck', 2021, 2000, 'active', 'qena'),
(72646459, 'Toyota Fortuner', 'GA08MX1997', 'Van', 2012, 3200, 'out of service', 'aswan'),
(83271366, 'Suzuki Ertiga', 'MH02DC1997', 'Compact', 2022, 2800, 'in repair', 'dahab'),
(44657670, 'Corolla', 'BK5-768', 'SUV', 2000, 5000, 'rented', 'luxor'),
(15576590, 'Mercedes', 'PKI-123', 'Large', 2007, 35000, 'active', 'matrouh'),
(22987676, 'Alto 800', 'ABC-1978', 'Truck', 2011, 8000, 'out of service', 'giza'),
(75830949, 'BWM', 'bmw-179', 'Van', 2006, 30000, 'rented', 'kafr el-sheikh');

INSERT INTO CUSTOMER (Fname, Lname, Mobile_no, Email, Password, Customer_id, Driving_license_no, Plate_id) VALUES
('ali', 'saad', '1561315616', 'sanif@gmail.com', '31d4', 1, 20104764, 'KA19MG9910'),
('mahmoud', 'ahmed', '1561315616', 'aaaaaaaaaa@gmail.com',  'cfdf3', 2, 3645119208, 'MH02DC1997'),
('omar', 'hossam', '1561315616', 'k163966@nu.edu.pk', '6a24f0c9', 3, 745679302, 'PKI-123'),
('omar', 'almas', '03352153303', 'sanifalimomin@gmail.com','4f0c9b83', 4, 2474090589, 'bmw-179'),
('karim', 'mohamed', '03352153303', 'ali@gmail.com', 'cb835b68cfd', 5, 877239202986, 'GA08MX1997'),
('fathy', 'el-prince', '1561315616', 'aaaaaaa@gmail.com', '44ff9102002', 6, 9878563902, 'TN17MS1997');

INSERT INTO RESERVATION (Reservation_id, Customer_id, Plate_id, Reservation_date, PickUp_date, Return_date, Payment_Date, Cost, Number_days) VALUES
(42, 1, 'KA19MG9910', '2021-4-19', '2021-4-22', '2021-6-9', '2021-4-22', 226700, 76),
(12, 2, 'MH02DC1997', '2019-4-19', '2019-4-22', '2019-6-9', '2019-4-22', 53246700, 87),
(43, 3, 'PKI-123', '2018-4-19', '2018-4-22', '2018-6-9', '2018-4-19', 8776700, 56),
(89, 4, 'bmw-179', '2020-4-19', '2020-4-22', '2020-6-9', '2020-4-22', 2645656757, 49),
(31, 5, 'GA08MX1997', '2017-4-19', '2017-4-22', '2017-6-9', '2017-4-22', 7878567883, 79),
(41, 6, 'TN17MS1997', '2011-4-19', '2011-4-22', '2011-6-9', '2011-4-19', 96878495550, 63);

INSERT INTO `ADMIN` (Admin_id, Admin_name, Email, Password, Reservation_id) VALUES
('6424', 'Loay Hesham', 'lolo@gmail.com', 'lolo000234', NULL);