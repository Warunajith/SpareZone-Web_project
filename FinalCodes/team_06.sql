-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 01, 2021 at 05:13 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_06`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(20) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `Pnumber` int(10) NOT NULL,
  `district` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hometown` text NOT NULL,
  `postalcode` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `Fname`, `Lname`, `email`, `password`, `address`, `Pnumber`, `district`, `hometown`, `postalcode`) VALUES
(1, 'Nimal', 'Perera', 'nimal1@gmail.com', '90c64de2f8119962568478c78d886687', 'No 15, Main road Galle', 115689369, 'Galle', 'Udugama', '78123'),
(2, 'Kamal', 'Silva', 'kamal54@gmail.com', '2e1854dbd65f6734f5927a885c483160', 'Colombo 07', 119689863, 'Colombo', 'Borella', '12359'),
(3, 'Kasun', 'Tharaka', 'kasun147@gmail.com', '85a726f0fb51c46f812a187acad11523', 'No,25 Kandy', 304596789, 'Kandy', 'Peradeniya', '78965'),
(4, 'sunil', 'bandara', 'warunajithbandara@gmail.com', '202cb962ac59075b964b07152d234b70', '18/410', 769438403, 'kp', 'Kuliyapitiya', '60200'),
(5, 'Nimantha', 'Gayan', 'nimanthagayan0309@gmail.com', '202cb962ac59075b964b07152d234b70', '130/Thissamaharama,Hambanthota', 775698123, 'Hambanthota', 'Thissamaharama', '78009');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `des` text NOT NULL,
  `stock` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `des`, `stock`, `code`, `rate`) VALUES
(5, 'OE Type Car Front Bumper', 5000, 'There are a number of reasons you may be in the market to buy car bumpers online. Car bumpers can get dented or damaged due to another vehicle hitting your car, or when you or another driver run into something.', 80, 'P103', 4),
(6, 'OE Type Car Rear Bumper', 5000, 'There are a number of reasons you may be in the market to buy car bumpers online. Car bumpers can get dented or damaged due to another vehicle hitting your car, or when you or another driver run into something.', 199, 'P104', 5),
(7, 'Non Breakable Plastic Car Mud Flaps', 1500, 'Mud flaps are important car part, which protects the mud accumulation under the car while driving on day to day basis so these mud flaps saves your vehicle from unwanted rusting which happen due to accumulation of mud.', 148, 'P105', 1),
(8, 'Oil Cap Maruti', 50, 'Littal 09-15 Oil Cap Maruti 800/Van', 344, 'P106', 3),
(9, 'Oil Cap Gypsy King', 200, 'Littal 09-41 Oil Cap Gypsy King', 449, 'P107', 2),
(10, 'Side Door Mirror  Type-1 Left', 1000, 'Clear, Strong, Sleek and Stylish Door Mirror by DRIZZLE for your convenience to negotiate with the oncoming traffic from behind.', 70, 'P108', 4),
(11, 'Side Door Mirror  Type-1 Right', 1000, 'Clear, Strong, Sleek and Stylish Door Mirror by DRIZZLE for your convenience to negotiate with the oncoming traffic from behind.', 420, 'P109', 3),
(12, 'Side Door Mirror Type-3 ELECTRICAL Left', 2200, 'Far Vision Car Side Door Mirrors are your most affordable OE replacement mirrors and they are manufactured from the highest quality, corrosion-resistant materials to withstand all types of weather. Far Vision Car Side Door Mirrors specializes in producing mirrors for all vehicle makes and models; Our mirrors go through rigorous weather, swing, and vibration testing to make sure you receive the highest quality mirrors.', 310, 'P110', 2),
(13, 'Side Door Mirror Type-3 ELECTRICAL Right', 2200, 'Far Vision Car Side Door Mirrors are your most affordable OE replacement mirrors and they are manufactured from the highest quality, corrosion-resistant materials to withstand all types of weather. Far Vision Car Side Door Mirrors specializes in producing mirrors for all vehicle makes and models; Our mirrors go through rigorous weather, swing, and vibration testing to make sure you receive the highest quality mirrors.', 238, 'P111', 5),
(14, 'Rear View Mirror', 300, 'Sleek and Stylish Rear view Mirror by Far Vision will not only facilitate your driving but also add a classy finish to the interiors of your car.', 200, 'P112', 1),
(15, 'Power Window Switch Driver', 4500, 'Power Window Switch Driver Side(4) With Auto, Window & Door Lock Esteem (Minda)', 350, 'P113', 4),
(16, 'Car International Power Window Regulator', 2600, 'POWER WINDOW REGULATOR WITH MOTOR ZEN ESTILO REAR LHS', 400, 'P114', 3),
(17, 'R G HANDLE INSERT', 20, 'R G HANDLE (INSERT) METAL MILLING MARUTI 800 TYPE-1 (LAL)', 150, 'P115', 2),
(18, 'Car International Outer Door Handle', 200, 'OUTER DOOR HANDLE ESTEEM REAR LHS CI-1002L', 295, 'P116', 5),
(19, 'Car International Fuel Tank Unit', 625, 'FUEL TANK UNIT TATA ACE CI-5416', 300, 'P117', 3),
(20, 'Fuel Pipe Roll -5 Meter', 550, 'FUEL PIPE ROLL CAR (5 METER) (LITTAL)', 250, 'P118', 2),
(21, 'Gear Shifter Cable', 10500, 'Gear Shifter Cable Camry (Set of 2) (New Era)', 200, 'P119', 4),
(22, 'Hand Brake Cable', 1850, 'New Era is a leading automotive car cables brand manufacturing Clutch Cables, Accelerator Cables, Speedometer Cables, R C Lever Cables, Parking Hand Brake Cables, Bonnet Cables, Dicky Boot Cables, Fuel Lid Cables for all the leading car brands including Maruti Suzuki, Hyundai, Honda, Tata, Skoda, Toyota, Opel, Ford, Mahindra, Nissan, Renault, Volkswagen, Chevrolet.', 100, 'P120', 3),
(23, 'Motherson  Battery Cable -20 Meters', 16000, 'Domestic cables from India\'s largest auto wires manufacturer- Motherson. India\'s leading lead free and RoHS compliant wires. Save electricity bills. Oxygen index of over 32 percent. More than 100 percent conductivity. Temperature index of over 250 degree Celsius. 99.97 percent pure electrolytic grade copper. 105 degree Celsius continuous operating temperature.', 249, 'T103', 2),
(24, 'Valeo Alternator Assembly  Petrol', 15600, 'Valeo is the O.E. leader in Electrical Systems with extensive experience in spare parts manufacturing. Valeo is the main O.E. and O.E.S. partner of all major car manufacturers. Valeo original spare parts guarantee the same levels of quality and reliability as Original Equipment certified by Valeo.', 100, 'T104', 1),
(25, 'Valeo Starter Assembly CRDI', 10000, 'Valeo is the O.E. leader in Electrical Systems with extensive experience in spare parts manufacturing. Valeo is the main O.E. and O.E.S. partner of all major car manufacturers. Valeo original spare parts guarantee the same levels of quality and reliability as Original Equipment certified by Valeo.', 300, 'T105', 4),
(26, 'Huco  Ignition Coil ', 9500, 'Ignition Coil Hyundai Eon 1.0 (Huco)', 150, 'T106', 3),
(27, 'Lucas Distributor Alto ', 6100, 'Lucas TVS Distributor Alto 26041011', 193, 'T107', 5),
(28, 'Combination Switch Double Stalk ', 5720, 'Combination Switch Double Stalk (Lamp & Wiper) With 3 Channel Clock Spring Xylo H8/C8 (Minda).', 50, 'T108', 4),
(29, 'Hot Film Air Mass Meter Sensor', 5000, 'Hot Film Air Mass Meter Sensor Bolero/Scorpio/Thar/Xylo (BOSCH)', 350, 'T109', 3),
(30, 'Valeo Rotor Assembly', 4600, 'Valeo is the O.E. leader in Electrical Systems with extensive experience in spare parts manufacturing.Valeo is the main O.E. and O.E.S. partner of all major car manufacturers.Valeo original spare parts guarantee the same levels of quality and reliability as Original Equipment certified by Valeo.', 100, 'T110', 2),
(31, 'Lucas  Solenoid Switch', 3000, 'Lucas TVS Solenoid Switch Hino J Series 26245796.', 398, 'T111', 1),
(32, 'Valeo Pulley Diesel', 2800, 'Valeo is the O.E. leader in Electrical Systems with extensive experience in spare parts manufacturing.Valeo is the main O.E. and O.E.S. partner of all major car manufacturers.Valeo original spare parts guarantee the same levels of quality and reliability as Original Equipment certified by Valeo.', 150, 'T112', 3),
(33, 'Rectifier Assembly', 2400, 'Rectifier Assembly (BOSCH).', 200, 'T113', 5),
(34, 'Lucas  Alternator Stator', 2300, 'Quality Alternator Stators from HP are manufactured using optimum quality carbon, stainless steel and alloys to ensure productivity, durability and corrosion free performance of the concerned process.', 250, 'T114', 2),
(35, 'Valeo Regulator Assembly', 2250, 'Valeo is the O.E. leader in Electrical Systems with extensive experience in spare parts manufacturing.Valeo is the main O.E. and O.E.S. partner of all major car manufacturers.Valeo original spare parts guarantee the same levels of quality and reliability as Original Equipment certified by Valeo.', 450, 'T115', 1),
(36, 'Combination Switch Single Stalk', 2000, 'Combination Switch Single Stalk (Wiper)High End Innova (Minda).', 100, 'T116', 4),
(37, 'Lever Combnation Alto', 2000, 'MINDA Combination Switch manufactured using optimum quality material. Moreover, these switches are undoubtedly durable and sturdy in design', 350, 'T117', 3),
(38, 'Hitachi  Ignition Coil', 1800, 'For more than 100 years in the automotive industry, Hitachi / Huco provides efficient and effective solutions for ignition systems with low cost. Their ignition products stand out in performance, quality, and longevity as they offer an improved and innovative technology design to meet vehicle enthusiasts needs and preferences.', 300, 'T118', 5),
(39, 'STEERING LOCK', 1750, 'STEERING LOCK MITSUBISHI CANTER. CI-858', 200, 'T119', 2),
(40, 'Huco Sensor Wheel Speed', 1720, 'If your VSS light\'s turned on, Huco\'s OE replacement vehicle speed sensor will restore efficient data transmission to your transmission with its perfect fit and long-lasting quality. Since 1918, Huco Products has supplied the automotive aftermarket with high-quality replacement parts, hardware and fasteners.', 150, 'T120', 4),
(41, 'AC Compressor', 13750, 'AC Compressor Ertiga/XL6 Petrol(2018-20) (Motherson)', 250, 'G101', 1),
(42, 'V6 Axle Assembly Left', 13150, 'Quality Driveshaft Assembly from V6, gives you higher torque capacity, extended lube interval, and industry-leading performance. This axle assembly works to transfer the torque from your vehicle\'s transmission to the wheels & will permit your car to perform optimally for an extended period of time.', 450, 'G102', 2),
(43, 'V6 Axle Assembly Right', 13150, 'Quality Driveshaft Assembly from V6, gives you higher torque capacity, extended lube interval, and industry-leading performance. This axle assembly works to transfer the torque from your vehicle\'s transmission to the wheels & will permit your car to perform optimally for an extended period of time.', 99, 'G103', 3),
(44, 'Valeo Clutch Set', 12725, 'Clutch Set (Clutch + Pressure Plate) Mahidra Xuv Diesel (Valeo)', 350, 'G104', 4),
(45, 'Carburetor', 8300, 'Carburetor Maruti Zen (Brand - Kpacco)', 300, 'G105', 1),
(46, 'Carburetor Esteem', 7000, 'Carburetor Esteem (Pacco)', 199, 'G106', 5),
(47, 'Front Wheel Bearing', 6270, 'Newstar has been an expert in precision bearings. The company\'s years of experience in manufacturing wheel bearings – a part that has to handle particularly high load – is a considerable advantage for garages, which benefit from Newstar\'s expertise. Since 2005, Newstar wheel bearings have been available in the spare parts market, and the manufacturer\'s wheel bearings are now among the most sought-after products of their kind', 250, 'G107', 2),
(48, 'Rear Wheel Bearing', 6270, 'Newstar has been an expert in precision bearings. The company\'s years of experience in manufacturing wheel bearings – a part that has to handle particularly high load – is a considerable advantage for garages, which benefit from Newstar\'s expertise. Since 2005, Newstar wheel bearings have been available in the spare parts market, and the manufacturer\'s wheel bearings are now among the most sought-after products of their kind', 150, 'G108', 4),
(49, 'Rear Hub', 5500, 'Newstar has been an expert in precision bearings. The company\'s years of experience in manufacturing wheel bearings – a part that has to handle particularly high load – is a considerable advantage for garages, which benefit from Newstar\'s expertise. Since 2005, Newstar wheel bearings have been available in the spare parts market, and the manufacturer\'s wheel bearings are now among the most sought-after products of their kind', 450, 'G109', 3),
(50, 'Silencer REAR', 5800, 'Carstar Silencer Assembly Verna Fludic Rear', 400, 'G110', 4),
(51, 'Fuel Pump', 4600, 'EPE Fuel Pump restores fast-pressure performance and system integrity, translating to better pumping through less energy. Has increased durability and enhanced stability due to internal springs preventing fuel tube chafing and possible loss of fuel flow and pressure.Improved durability with steel plated, all metal internal components.Longer pump life as a result of a two-strainer system keeping out contaminants.Lower failure rates due to design that is maximized to operate under extreme temperatures and to avoid low-fuel hesitation.', 100, 'G111', 3),
(52, 'Fan Belt Adjuster', 4325, 'Enabling low-resistance rotations of the wheels.Transferring axial and radial forces.Support for wheel hub, wheel and brake disc or brake drum. Sending rotational speed signals (in vehicles with driver assistance systems like ABS, ESP, etc.).At PartsBigBoss all products are 100% genuine and brand new. The pictures shown of the product are generic in nature, the actual product may vary as per vehicle specification.', 150, 'G112', 5),
(53, 'Radiator Fan', 4050, 'Radiator Fan Motor Assembly Super Ace 26075033', 350, 'G113', 1),
(54, 'Clutch Release Bearing', 4000, 'Enabling low-resistance rotations of the wheels .Transferring axial and radial forces. Support for wheel hub, wheel and brake disc or brake drum. Sending rotational speed signals (in vehicles with driver assistance systems like ABS, ESP, etc.).', 200, 'G114', 2),
(55, 'Clutch Disc', 3500, 'Clutch Disc Tata Indica Petrol (Valeo)', 400, 'G115', 4),
(56, 'Clutch Cover', 3300, 'Clutch Cover Tata Winger Tc (Valeo)', 450, 'G116', 5),
(57, 'Battery Charger', 3100, 'The Bosch C3 battery charger is an intelligent four-stage automatic battery charger with pulse charging and trickle charging capabilities. Its trickle charging mode enables the charger to monitor and keep the battery at a high level of charge which helps to reduce self-discharge', 300, 'G117', 2),
(58, 'Water Pump', 2900, 'SWP water pumps feature a smooth-turning bearing assembly and precision-designed impeller for quiet, efficient performance.', 100, 'G118', 3),
(59, 'Steering & Suspension Kit', 2850, 'Steering & Suspension Kit (With Track Control Lower Arm) Maruti Eeco, Versa (STARKE)', 250, 'G119', 1),
(60, 'Timing Belt Tensioner', 2750, 'Newstar has been an expert in precision bearings. The company\'s years of experience in manufacturing wheel bearings – a part that has to handle particularly high load – is a considerable advantage for garages, which benefit from Newstar\'s expertise. Since 2005, Newstar wheel bearings have been available in the spare parts market, and the manufacturer\'s wheel bearings are now among the most sought-after products of their kind.', 150, 'G120', 4),
(61, '135-HLA-PRJ-M18L Head Light Lamp Left', 24000, 'Equal parts durable and cost-effective, Lumax\'x OE replacement car lights are crafted to restore safe visibility without breaking the bank. Lumax is a global company that engineers thermal, powertrain and other automotive systems with emission reduction and intuitive driving in mind.', 200, 'L101', 3),
(62, '135-HLA-PRJ-M18L Head Light Lamp Right', 24000, 'Equal parts durable and cost-effective, Lumax\'x OE replacement car lights are crafted to restore safe visibility without breaking the bank. Lumax is a global company that engineers thermal, powertrain and other automotive systems with emission reduction and intuitive driving in mind.', 100, 'L102', 2),
(63, '133-HLU-CRS-PRO-L Head Light Lamp Left', 16800, 'Top quality guaranteed from design to production.Latest technology optics design for sharp focus.Crafted and tested to Valeo’s exclusive manufacturing standards.Constructed with premium materials.Designed to match original for easy and proper fitment.', 350, 'L103', 1),
(64, '133-HLU-CRS-PRO-L Head Light Lamp Right', 16800, 'Top quality guaranteed from design to production.Latest technology optics design for sharp focus.Crafted and tested to Valeo’s exclusive manufacturing standards.Constructed with premium materials.Designed to match original for easy and proper fitment.', 250, 'L104', 5),
(65, '148-HLA-CT17-L Head Light Lamp Left', 9000, 'In lieu of the competitive nature of the market, the products offered by our partner brands are affordable without compromising on the quality levels. Our partner brands manufacture the products with regard to specifications of direct fit, form and function for customers which will surpass their expectations', 150, 'L105', 1),
(66, '148-HLA-CT17-L Head Light Lamp Right', 9000, 'In lieu of the competitive nature of the market, the products offered by our partner brands are affordable without compromising on the quality levels. Our partner brands manufacture the products with regard to specifications of direct fit, form and function for customers which will surpass their expectations', 300, 'L106', 5),
(67, '072-RCA-YRS-L-BSL Tail Light Lamp Left', 8100, 'Equal parts durable and cost-effective, Lumax\'x OE replacement car lights are crafted to restore safe visibility without breaking the bank. Lumax is a global company that engineers thermal, powertrain and other automotive systems with emission reduction and intuitive driving in mind.', 450, 'L107', 2),
(68, '072-RCA-YRS-L-BSL Tail Light Lamp Right', 8100, 'Equal parts durable and cost-effective, Lumax\'x OE replacement car lights are crafted to restore safe visibility without breaking the bank. Lumax is a global company that engineers thermal, powertrain and other automotive systems with emission reduction and intuitive driving in mind.', 300, 'L108', 3),
(69, 'Fog Light Lamp', 7500, 'Factory Original Equipment Style Fog Lights by GLOBEX. GLOBEX Fog Light Lamps make sure you are able to see the road ahead of you in fog, rain or other conditions of reduced visibility by replacing your non-functional fog light lamps with these top-notch Factory style fog light lamps by GLOBEX. GLOBEX fog light lamps feature the highest-grade materials, an extremely durable construction, and sleek OE styling to ensure they will bring your pride and joy back to its original glory while providing bright light to keep you safe on the road.', 250, 'L109', 4),
(70, '115-RCA-HXA-BSL Tail Light Lamp Left', 6350, 'Top quality guaranteed from design to production.Latest technology optics design for sharp focus.Crafted and tested to Valeo’s exclusive manufacturing standards.Constructed with premium materials.Designed to match original for easy and proper fitment.', 200, 'L110', 5),
(71, '115-RCA-HXA-BSL Tail Light Lamp Right', 6350, 'Top quality guaranteed from design to production.Latest technology optics design for sharp focus.Crafted and tested to Valeo’s exclusive manufacturing standards.Constructed with premium materials.Designed to match original for easy and proper fitment.', 400, 'L111', 1),
(72, 'Autogold Fog Light', 5000, 'Autogold Fog Light Lamp Assembly DRL LED Creta.', 350, 'L112', 2),
(73, '184-HLA-ML Head Light Left', 4100, 'Equal parts durable and cost-effective, Lumax\'x OE replacement car lights are crafted to restore safe visibility without breaking the bank. Lumax is a global company that engineers thermal, powertrain and other automotive systems with emission reduction and intuitive driving in mind.', 100, 'L113', 3),
(74, '184-HLA-ML Head Light Right', 4100, 'Equal parts durable and cost-effective, Lumax\'x OE replacement car lights are crafted to restore safe visibility without breaking the bank. Lumax is a global company that engineers thermal, powertrain and other automotive systems with emission reduction and intuitive driving in mind.', 200, 'L114', 4),
(75, '072-RCU-CRSTA-L Tail Light Lamp Left', 3700, 'At PartsBigBoss all products are 100% genuine and brand new. The pictures shown of the product are generic in nature, the actual product may vary as per vehicle specification.', 300, 'L115', 5),
(76, '072-RCU-CRSTA-L Tail Light Lamp Right', 3700, 'At PartsBigBoss all products are 100% genuine and brand new. The pictures shown of the product are generic in nature, the actual product may vary as per vehicle specification.', 400, 'L116', 4),
(77, '148-RCA-WRV-L Tail Light Lamp Left', 3200, 'The product comes with PartsBigBoss 100% Fitment Guarantee. If the product has any fitment issues/defects; we will replace the same else the product will be taken back and the amount will be refunded.', 250, 'L117', 3),
(78, '148-RCA-WRV-L Tail Light Lamp Right', 3200, 'The product comes with PartsBigBoss 100% Fitment Guarantee. If the product has any fitment issues/defects; we will replace the same else the product will be taken back and the amount will be refunded.', 150, 'L118', 2),
(79, 'LED Indicator Bulb  Multi Color', 8, 'LED Indicator Bulb by Auto Gold is a Replacement part suitable for wide variety of cars.', 350, 'L119', 1),
(80, 'LED Indicator Bulb White', 8, 'LED Indicator Bulb by Auto Gold is a Replacement part suitable for wide variety of cars.', 100, 'L120', 4),
(81, 'BP-PAU29FC Brake Pads Front', 13000, '100% Asbestos Free.Ensures Safety and Prevents Healt hazards.Eliminates Noise and Vibration.Ensures Durability, Stopping power and Noise Controlling.', 200, 'B101', 4),
(82, 'F002H239318F8 Brake Disc Rotor RHS', 7800, 'While braking, most pressure is applied on the brake disc. Made from high-quality cast steel, Bosch Brake Disc Rotors are resistant to corrosion and wear, providing assured stopping power over a long operating life. Designed for high performance in the most extreme conditions, Bosch Brake Disc Rotors are featured as original equipment by leading auto-makers in their vehicles.', 450, 'B102', 3),
(83, 'F002H239318F8 Brake Disc Rotor LHS', 7800, 'While braking, most pressure is applied on the brake disc. Made from high-quality cast steel, Bosch Brake Disc Rotors are resistant to corrosion and wear, providing assured stopping power over a long operating life. Designed for high performance in the most extreme conditions, Bosch Brake Disc Rotors are featured as original equipment by leading auto-makers in their vehicles.', 248, 'B103', 5),
(84, 'Pressure Regulator Swift', 7400, 'Pressure Regulator Swift (BOSCH)', 130, 'B104', 2),
(85, 'Starke Tie Rod End Set', 6700, 'Tie Rod End Set With Suspension Ball Joints Chevrolet Tavera (STARKE)', 250, 'B105', 5),
(86, 'Suspension Bush Kit Laura Rear', 6600, 'Suspension Bush Kit Laura Rear (Set of 14)', 299, 'B106', 1),
(87, 'Tie Rod End Set', 5900, 'Tie Rod End Set With Suspension Ball Joints Tata Sumo (STARKE)', 160, 'B107', 4),
(88, 'Shock Absorber Assembly Front Right', 5200, 'Shock Absorber Assembly Front Ertiga Diesel (RHS) (MONROE)', 430, 'B108', 3),
(89, 'Shock Absorber Assembly Front  Left', 5200, 'Shock Absorber Assembly Front Ertiga Diesel (RHS) (MONROE)', 500, 'B109', 5),
(90, 'S V Master', 5100, 'BOSCH 02047059814AR S V Master Assembly with Brake Booster Swift New Model (ABS) (Petrol)', 400, 'B110', 2),
(91, 'TRACK CONTROL ARM LHS', 3500, 'V6 control arms are used to carry the suspension load and transmit them to the spring or shock absorber with absolute ease. They are made out of high quality steel for extended durability.', 50, 'B111', 3),
(92, 'TRACK CONTROL ARM RHS', 3500, 'V6 control arms are used to carry the suspension load and transmit them to the spring or shock absorber with absolute ease. They are made out of high quality steel for extended durability.', 60, 'B112', 3),
(93, 'Strut Assembly Front Left', 3300, 'Strut Assembly Front Left Maruti Van Type II (Valeo)', 700, 'B113', 4),
(94, 'Strut Assembly Front Right', 3300, 'Strut Assembly Front Left Maruti Van Type II (Valeo)', 850, 'B114', 5),
(95, 'Braking Force Regulator', 3200, 'BOSCH 02043189994AR Braking Force Regulator ( LSPV Assy)', 460, 'B115', 3),
(96, 'Tandem Master Cylinder', 3000, 'Tandem Master Cylinder Assembly With Reservoir Gypsy MPFI (BOSCH)', 65, 'B116', 2),
(97, 'SILVER Triangular Left', 2250, 'TRIANGULAR (LEFT) ALFA MAHINDRA ALFA (Silver)', 350, 'B117', 1),
(98, 'SILVER Triangular Right', 2250, 'TRIANGULAR (Right) ALFA MAHINDRA ALFA (Silver)', 250, 'B118', 5),
(99, 'BALL JOINT KIT', 1800, 'BALL JOINT KIT(2Pcs BSJ upper + 2pcs BSJ lower ) SUITABLE FOR QUALIS (V6)', 180, 'B119', 4),
(100, 'F002H238288F8 Brake Pad', 1700, 'Advanced semi-metallic and ceramic copper free friction technology makes Bosch brake pad the best in class providing end user with high braking performance and safety with long operational life.', 400, 'B120', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(200) NOT NULL,
  `price` int(100) NOT NULL,
  `c_id` int(15) NOT NULL,
  `s_quantity` int(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `price`, `c_id`, `s_quantity`, `date`) VALUES
(13, 27250, 4, 9, '2021-09-29'),
(11, 15950, 4, 4, '2021-09-29'),
(7, 19450, 5, 9, '2021-09-29'),
(5, 10850, 5, 7, '2021-09-29'),
(4, 8300, 2, 3, '2021-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

DROP TABLE IF EXISTS `temporary`;
CREATE TABLE IF NOT EXISTS `temporary` (
  `code` varchar(15) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
