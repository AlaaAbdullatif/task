CREATE TABLE `Main_Menu` (
  `Name` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `Main_Menu` (`Name`, `details`, `price`) VALUES
('GARLIC SHRIMP', 'Serrano ham, spinach, roasted red peppers, tomato',$19.99 ),
('GRILLED HANGER STEAK', 'Serrano ham, spinach, roasted red peppers, tomato,, tomato',$24.99 ),
('PAN ROASTED ', 'Serrano ham, spinach, roasted red peppers, tomato',$15.5 ),
('GRILLED FREE RANGE', 'Mesclun greens, pepperjack cheese, bacon, avocado, corn',$19.9 ),
('GARLIC SHRIMP', 'Hibiscus sweet ranch coleslaw, hand cut frie',$23.00),




CREATE TABLE `Dinner` (
  `Name` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `Dinner` (`Name`, `details`, `price`) VALUES
('CHICKEN LIVER PARFAIT', 'Chicken, onion, vegetable oil, Sour cream sauce, pepper, sal',$19.99 ),
('ITALIAN TASTING PLATTER', 'Three Italian Favorites: Baked Clams, Fried Calamari and Stuffed Shrimp, tomato',$24.99 ),
('PAN ROASTED ', 'Serrano ham, spinach, roasted red peppers, tomato, pil pil sauce',$15.5 ),
('CRAB CONGEE', 'Biscuits with fresh sausage patties & country gravy',$19.9 ),
('SALT AND PEPPER CALAMARI', 'Rocket, lime, chipotle aioli, hand cut frie',$23.00),




CREATE TABLE `Lunch` (
  `Name` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `Lunch` (`Name`, `details`, `price`) VALUES
('CORNISH-MACKEREL', 'CORNISH-MACKERE',$15.00 ),
('ROASTED STEAK ROULADE', 'Parsley with apple cider vinegar, salt, sugar & spices',$35.00 ),
('“COUNTRY” BREAKFAST', 'Biscuits with fresh sausage patties & country grav',$23.00 ),
('SALT AND PEPPER CALAMAR', 'Rocket, lime, chipotle aiol',$19.9 ),
('WESTERN SUNRISE', 'Two fried eggs with cheese & two breakfast meats made to perfection',$23.00),