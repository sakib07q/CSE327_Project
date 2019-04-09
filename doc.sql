SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


CREATE TABLE `doctors`
(
  `id` int
(11) NOT NULL,
  `field` varchar
(20) DEFAULT NULL,
  `name` varchar
(20) DEFAULT NULL,
  `qualification` varchar
(200) DEFAULT NULL,
  `chamber` varchar
(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `doctors` (`
id`,`field
`, `name`, `qualification`, `chamber`) VALUES
(1, 'pain', 'Dr. M. Ali', 'Arthroscopy & Arthroplasty Surgeon\r\nMBBS, MS (Ortho.)\r\nCoordinator & Senior Consultant – Orthopaedics', 'Apollo Hospital'),
(2, 'pain', 'Dr. Nandkumar Katakd', 'MBBS, MS (Orthopaedics), SICOT Diploma,\r\nSenior Consultant – Orthopaedics- Arthritis, Sportsortho, Joint Replacement & Shoulder Clinic', 'Apollo Hospital'),
(3, 'pain', 'Dr. Amit Kapoor', 'MBBS, D. Ortho, DNB\r\nConsultant – Orthopaedics (Hip & Knee Joint Replacement Spine Surgery, Sports Medicine & Complex Trauma),\r\nJoint Replacement and Spine Surgery', 'Apollo Hospital'),
(4, 'pain', 'Dr. O.F.G. Kibria', 'MBBS, MS (Ortho.)\r\nConsultant – Orthopaedics', 'Apollo Hospital'),
(5, 'Arthroscopy & Arthroplasty Surgeon', 'Dr. M. Ali ', 'Arthroscopy & Arthroplasty Surgeon
MBBS, MS (Ortho.)
Coordinator & Senior Consultant � Orthopaedics
', 'Apollo Hospital'),
(6, 'Orthopaedics', 'Dr. Nandkumar Katakdhond
 ', 'MBBS, MS (Orthopaedics), SICOT Diploma,
Senior Consultant � Orthopaedics- Arthritis, Sportsortho, Joint Replacement & Shoulder Clinic
,', 'Apollo Hospital'),
(7, 'Orthopaedics', 'Dr. Amit Kapoor
 ', 'Consultant � Orthopaedics (Hip & Knee Joint Replacement Spine Surgery, Sports Medicine & Complex Trauma),
Joint Replacement and Spine Surgery
,', 'Apollo Hospital'),
(8, 'Orthopaedics', 'Dr. O.F.G. Kibria ', '  MBBS, MRCP (UK), D.Card. (London)
Senior Consultant � Clinical & Interventional Cardiology
,', 'Apollo Hospital'),
(9, 'Medicine', ' Prof. (Dr.) Md. Shahabuddin Talukder
', 'MBBS, D.Card. (DU), FCPS (Medicine)
Senior Consultant � Clinical & Interventional Cardiology
,', 'Apollo Hospital'),
(10, 'Cardiology', 'Prof. Dr. A. Q. M. Reza
 ', 'Senior Consultant & Coordinator � Clinical & Interventional Cardiology
MBBS, MD (Cardiology)
,', 'Apollo Hospital'),
(11, '-Cardiology', 'Prof. Dr. Tamzeed Ahmed
 ', 'MBBS, MRCP (UK)
Senior Consultant � Clinical & Interventional Cardiology
,', 'Apollo Hospital'),
(12, 'Cardiology', 'Dr. Kazi Atiqur Rahman
 ', 'MBBS, MD (Cardiology), MRCP (UK)
Senior Consultant-Cardiology
,', 'Apollo Hospital'),
(13, 'Pediatric and Neonatology
', 'Dr. Kazi Naushad-Un-Nabi
 ', 'Qualification: FRCP (Glasgow), MRCP (UK), MRCPCH (UK), DCH (IRE), MBBS (DMC) Chief Consultant, Dept. of Paediatric / Neonatology Labaid Specialized Hospital
,', 'LABAID Hospital'),
(14, 'Paediatrics & Neonatology', ' Dr.Quazi Md. Quamrul Hasan
', 'Qualification: MBBS, DCH,
Pediatric and Neonatology
Expertise: Consultant Paediatrics & Neonatology,', 'LABAID Hospital'),
(15, 'Pediatric and Neonatology
', 'Prof. (Dr.) Sayeeda Anwar
 ', 'Qualification: MBBS, FCPS (Paed) Fellowship Training in neonatal intensive care unit & newborn medicine (USA)
,', 'LABAID Hospital'),
(16, 'Neonatology', 'Prof. Dr. Md. Abdul Mannan
 ', 'Qualification: MBBS, FCPS, MD (Paed), MD (Neonatology), Fellow Neonatology, NUH (Singapore), University College London Hospital, U.k
Pediatric and Neonatology
,', 'LABAID Hospital'),
(17, 'Neonatology', 'Prof. Dr. Syed Khairul Amin
 ', 'Neonatology Qualification: MBBS, DCH(Glasgo), MRCP(UK), FRCP(Edin), FRCP(Glasgo)
Pediatric and 
,', 'LABAID Hospital'),
(18, 'Paediatric Cardiology
', '
Dr. Abdullah Shahriar ', 'Qualification: MBBS, MD (Paed)
Paediatric Cardiology
,', 'LABAID Hospital'),
(19, 'pain', '
Dr. Syed Saimul Haque
 ', 'MBBS,', 'LABAID Hospital'),


(20, 'Paediatric Nephrology
', ' ', 'MBBS,', 'LABAID Hospital'),


(21, 'pain', ' ', 'Qualification: MBBS, MD (Child Kidney), Clinical Fellow (Child kidney diseases)
Paediatric Nephrology
Child & Child Kidney Specialist
,', 'LABAID Hospital'),


(22, 'Cardiology
', ' DR. A K S ZAHID MAHAMUD KHAN
', 'Qualification: MBBS(Dhaka),MD(Cardiology
Cardiology
,', 'LABAID Hospital'),


(23, 'Cardiology
', ' Prof. (Dr.) Md. Abdul Kader Akanda
', 'Qualification: MBBS, FCPS (Med), MD (Card), FACC (USA)
Cardiology
,', 'LABAID Hospital'),


(24, 'NEURO SURGEON', 'PROF. DR. SK. SADER HOSSAIN 
 ', 'MBBS, FCPS, FICS
,', 'Apollo Hospital'),


(25, 'MEDICINE', 'DR. RUMANA HABIB
 ', 'MBBS,FCPS,', 'POPULAR Hospital'),


(26, 'NEUROLOGY', ' PROF. DR. SYED WAHIDUR RAHMAN
', 'Professor & Head(Trd.), Neuromedicine Department, Shaheed Suhrawardy Medical College & Hospital, Dhaka
,', 'POPULAR Hospital'),


(27, 'NEUROLOGY', 'DR. MD. MAHBUBUL ALAM
 ', 'MBBS, MCPS(MEDICINE), MD(NEUROLOGY)
SPECIALTY : NEUROLOGY
,', 'POPULAR Hospital'),


(28, 'NEURO SURGEON', 'DR. MOHAMMAD HOSSAIN ', 'MBBS, MS (NEUROSURGERY), FICS (NEUROSURGERY), TRAINED SPINE SURGERY, U.S.A,ENDOSCOPIC SPINE 

SURGERY, SWITZERLAND
SPECIALTY : NEURO SURGEON
,', 'POPULAR Hospital'),


(29, 'NEUROLOGY', 'DR. BIPLOB KUMAR ROY
 ', 'MBBS, MPH, MCPS (MEDICINE), MD (NEUROLOGY)
SPECIALTY : NEUROLOGY
,', 'POPULAR Hospital');








--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
ADD PRIMARY KEY
(`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
