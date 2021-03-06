<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Temporary</title>
  </head>
  <body>
    <?php
      $studentDetails =
      [['PES1201700003', 'A', 'Ashwin R Bharadwaj'],
     ['PES1201700015', 'A', 'K Suhaas'],
     ['PES1201700025', 'A', 'Shreya Maheshwari'],
     ['PES1201700040', 'A', 'Kaustubh Jha'],
     ['PES1201700041', 'A', 'Abhilash Balaji'],
     ['PES1201700044', 'A', 'Nahusha Acharya'],
     ['PES1201700050', 'A', 'Akhilarka Jayanthi'],
     ['PES1201700055', 'A', 'Vidhaan Mishra'],
     ['PES1201700083', 'A', 'Nimisha Katyayani'],
     ['PES1201700097', 'A', 'Sriram Srinivasan Krishna'],
     ['PES1201700108', 'A', 'Siddarth Vinay'],
     ['PES1201700112', 'A', 'Prathiba P'],
     ['PES1201700119', 'A', 'Tejvi M'],
     ['PES1201700125', 'A', 'Hritvik Patel'],
     ['PES1201700142', 'A', 'Prithvi Manoj Krishna'],
     ['PES1201700155', 'A', 'Harikrishnan V'],
     ['PES1201700158', 'A', 'Sanket H Sannellappar'],
     ['PES1201700161', 'A', 'Navneetha R'],
     ['PES1201700183', 'A', 'Vishal Sathyanarayana'],
     ['PES1201700213', 'A', 'Sathvik N Jois'],
     ['PES1201700214', 'A', 'Sukanya Harshvardhan'],
     ['PES1201700221', 'A', 'Tushar Raj'],
     ['PES1201700226', 'A', 'Sparsha P'],
     ['PES1201700243', 'A', 'Pushpender Singh'],
     ['PES1201700264', 'A', 'Sulabh Mittal'],
     ['PES1201700294', 'A', 'Sirisha Lanka'],
     ['PES1201700298', 'A', 'Shashank M G'],
     ['PES1201700659', 'A', 'Kevin Arulraj'],
     ['PES1201700692', 'A', 'Karthik N'],
     ['PES1201700949', 'A', 'K S Sahazeer'],
     ['PES1201700951', 'A', 'Athreya K M'],
     ['PES1201700956', 'A', 'Shreyas Bs'],
     ['PES1201700963', 'A', 'Keerthan G'],
     ['PES1201701061', 'A', 'Anusha B'],
     ['PES1201701119', 'A', 'Alok Dinesh Mehandale'],
     ['PES1201701249', 'A', 'Shreyas Prashanth'],
     ['PES1201701261', 'A', 'Prajna Girish'],
     ['PES1201701296', 'A', 'Umashankar Sivakumar'],
     ['PES1201701350', 'A', 'Uday Kiran M'],
     ['PES1201701399', 'A', 'Adarsh'],
     ['PES1201701404', 'A', 'Yadhunandhan S'],
     ['PES1201701421', 'A', 'Bhat Thejas Orkombu'],
     ['PES1201701439', 'A', 'Naveen Viswas G'],
     ['PES1201701452', 'A', 'Atul Anand Gopalakrishnan'],
     ['PES1201701502', 'A', 'Punit Pranesh Koujalgi'],
     ['PES1201701511', 'A', 'Hitesh Kumar'],
     ['PES1201701523', 'A', 'Nishchal M N'],
     ['PES1201701543', 'A', 'Archana P'],
     ['PES1201701551', 'A', 'Suraj M M'],
     ['PES1201701554', 'A', 'Abhaay S'],
     ['PES1201701565', 'A', 'Sai Priya L'],
     ['PES1201701566', 'A', 'Hemanth C'],
     ['PES1201701573', 'A', 'Rachana Jayaram'],
     ['PES1201701580', 'A', 'V Nayana'],
     ['PES1201701744', 'A', 'V Yoshitha'],
     ['PES1201701775', 'A', 'Chintapalli Vishal Ratnam'],
     ['PES1201701789', 'A', 'D Krithi'],
     ['PES1201701802', 'A', 'Bhargavi Priyash Kumar'],
     ['PES1201701807', 'A', 'T Pramoth Sakthi'],
     ['PES1201701826', 'A', 'Swathi'],
     ['PES1201702067', 'A', 'Nitin Mohan'],
     ['PES1201702073', 'A', 'Ashwini Sridhar'],
     ['PES1201702078', 'A', 'Vidhya M'],
     ['PES1201702110', 'A', 'Ityala Sai Teja'],
     ['PES1201702124', 'A', 'Vikas S A'],
     ['PES1201702138', 'A', 'Aman Raj'],
     ['PES1201702147', 'A', 'Radha.N'],
     ['PES1201702150', 'A', 'Y Siddartha Reddy'],
     ['PES1201702235', 'A', 'Sindhu N'],
     ['PES1201702242', 'A', 'Aisha Siddiqa'],
     ['PES1201702270', 'A', 'Pratiksha R Reddy'],
     ['PES1201702272', 'A', 'Ramya S'],
     ['PES1201702276', 'A', 'Meenakshi M M'],
     ['PES1201702285', 'A', 'Somashekar M'],
     ['PES1201702309', 'A', 'Vinayaka B M'],
     ['PES1201702312', 'A', 'Nisha D'],
     ['PES1201702336', 'A', 'Lakshmi Raju L'],
     ['PES1201702366', 'A', 'Heemashree'],
     ['PES1201702388', 'A', 'Rahul C'],
     ['PES1201702392', 'A', 'Abinaya S'],
     ['PES1201702396', 'A', 'Yogesha'],
     ['PES1201702397', 'A', 'Deepthi'],
     ['PES1201702407', 'A', 'Supriya A'],
     ['PES1201702414', 'A', 'Shraddha P Gaikwad'],
     ['PES1201702417', 'A', 'Sangeeta'],
     ['PES1201702434', 'A', 'Parikshitkumar'],
     ['PES1201702437', 'A', 'Mohammed Sulaiman Bakash'],
     ['PES1201702446', 'A', 'Ankita R Shekar'],
     ['PES1201702463', 'A', 'Sharfuddin Khan'],
     ['PES1201702465', 'A', 'S Sanjith'],
     ['PES1201700005', 'B', 'Bharani Ujjaini Kempaiah'],
     ['PES1201700019', 'B', 'Sreedhar K'],
     ['PES1201700032', 'B', 'Bhavya Charan'],
     ['PES1201700075', 'B', 'Dheeraj D Gharde'],
     ['PES1201700084', 'B', 'G Shreya'],
     ['PES1201700096', 'B', 'Harshith U'],
     ['PES1201700102', 'B', 'Abhiram G K'],
     ['PES1201700113', 'B', 'Kashish Oberoi'],
     ['PES1201700138', 'B', 'Aditya Vinod Kumar'],
     ['PES1201700146', 'B', 'Ananya Nair'],
     ['PES1201700148', 'B', 'Sakshi Goel'],
     ['PES1201700167', 'B', 'Motamarry Rohit'],
     ['PES1201700174', 'B', 'Pranav Shantanu Kelkar'],
     ['PES1201700177', 'B', 'Gad Sujay Surendra'],
     ['PES1201700180', 'B', 'Amogh Rajesh Desai'],
     ['PES1201700189', 'B', 'Ishwar Choudhary'],
     ['PES1201700194', 'B', 'Ch Abhishek'],
     ['PES1201700207', 'B', 'Advaith K Vasisht'],
     ['PES1201700225', 'B', 'Unnati Chaturvedi'],
     ['PES1201700240', 'B', 'Arpan Ghoshal'],
     ['PES1201700253', 'B', 'Arya Rajiv Chaloli'],
     ['PES1201700260', 'B', 'Rahul Pandia'],
     ['PES1201700269', 'B', 'Anish Poddar'],
     ['PES1201700282', 'B', 'Gaurav H Sangappa'],
     ['PES1201700283', 'B', 'Datthesh Padmanabh Shenoy'],
     ['PES1201700646', 'B', 'Tanvi P Karennavar'],
     ['PES1201700686', 'B', 'Drasti N Vadhar'],
     ['PES1201700714', 'B', 'Mayur R Baggan'],
     ['PES1201700749', 'B', 'Divya Tandalam Puranam'],
     ['PES1201700770', 'B', 'Aishwarya Pramod Ponnamparambil'],
     ['PES1201700802', 'B', 'Kamma Sai Sahiti'],
     ['PES1201700811', 'B', 'Rohan R Kamath'],
     ['PES1201700842', 'B', 'Prakruthi K.S'],
     ['PES1201700905', 'B', 'Sanjana Shekar'],
     ['PES1201700912', 'B', 'Isukapalli Hari Kiran'],
     ['PES1201700913', 'B', 'Sagar Ratan Garg'],
     ['PES1201700921', 'B', 'Namrata R'],
     ['PES1201701016', 'B', 'Bhargava N Reddy'],
     ['PES1201701116', 'B', 'Avi Bansal'],
     ['PES1201701124', 'B', 'Suraj Chadha'],
     ['PES1201701125', 'B', 'Vivek Aditya'],
     ['PES1201701128', 'B', 'Abhinandan Singla'],
     ['PES1201701131', 'B', 'Vaibhav V Pawar'],
     ['PES1201701295', 'B', 'Amit Kumar'],
     ['PES1201701332', 'B', 'T Devaraj Nayak'],
     ['PES1201701385', 'B', 'K Anilkumar'],
     ['PES1201701509', 'B', 'Kruthik Jt'],
     ['PES1201701531', 'B', 'Akshatha N K'],
     ['PES1201701537', 'B', 'Arun Kumar Kashinath Agasar'],
     ['PES1201701575', 'B', 'Aishwarya Kumaraswamy'],
     ['PES1201701600', 'B', 'Vinayaka M Hegde'],
     ['PES1201701602', 'B', 'Rakesh Devani'],
     ['PES1201701621', 'B', 'S Thejas'],
     ['PES1201701634', 'B', 'P Sudhamshu Rao'],
     ['PES1201701654', 'B', 'Vikas Kalagi'],
     ['PES1201701667', 'B', 'Mahesh H A'],
     ['PES1201701674', 'B', 'K Anjali Kamath'],
     ['PES1201701731', 'B', 'Ganesha K S'],
     ['PES1201701822', 'B', 'Jnanesh D'],
     ['PES1201701906', 'B', 'K Ramakrishnan'],
     ['PES1201700007', 'C', 'Vikash Agarwal'],
     ['PES1201700009', 'C', 'Aarya Arun'],
     ['PES1201700024', 'C', 'Maneesha S'],
     ['PES1201700026', 'C', 'Atharv Verma'],
     ['PES1201700080', 'C', 'Satyam Shreevikas Lal'],
     ['PES1201700094', 'C', 'Suryanarayan N'],
     ['PES1201700098', 'C', 'Shivangi Raj'],
     ['PES1201700110', 'C', 'Priyanshu Gupta'],
     ['PES1201700117', 'C', 'Vishal Kanteppa Mahesh'],
     ['PES1201700122', 'C', 'Dhruv Bhavesh Pathak'],
     ['PES1201700139', 'C', 'Abhijeet Murthy R'],
     ['PES1201700150', 'C', 'Ishaan Kiran Lagwankar'],
     ['PES1201700152', 'C', 'Rithvik K'],
     ['PES1201700160', 'C', 'Shrutiya.M'],
     ['PES1201700202', 'C', 'Ishar Menon'],
     ['PES1201700208', 'C', 'Pranjal Srivastava'],
     ['PES1201700212', 'C', 'Shreya D Nanda'],
     ['PES1201700231', 'C', 'Adithya Kiran'],
     ['PES1201700247', 'C', 'Siddhant Samyak'],
     ['PES1201700266', 'C', 'Amruth Karnam'],
     ['PES1201700276', 'C', 'Hrishikesh.V'],
     ['PES1201700652', 'C', 'Varun R Gupta'],
     ['PES1201700662', 'C', 'Richa Sharma'],
     ['PES1201700706', 'C', 'Ravendra Singh'],
     ['PES1201700716', 'C', 'Prithvi Vasanth Kumar'],
     ['PES1201700740', 'C', 'Tejaswini A'],
     ['PES1201700788', 'C', 'M Adithya Vardhan'],
     ['PES1201700794', 'C', 'Malavikka R'],
     ['PES1201700795', 'C', 'Indu Anuhya R'],
     ['PES1201700847', 'C', 'Daksha Singhal'],
     ['PES1201700896', 'C', 'Chirag P Tubakad'],
     ['PES1201700930', 'C', 'Abhimanyu B Shetty'],
     ['PES1201700952', 'C', 'Gagana G S'],
     ['PES1201700980', 'C', 'Guruprasad Hadimani'],
     ['PES1201701084', 'C', 'Arpit Agarwal'],
     ['PES1201701090', 'C', 'Nandakrishna'],
     ['PES1201701123', 'C', 'K Sachin Nayak'],
     ['PES1201701135', 'C', 'Ashish Christopher Victor'],
     ['PES1201701136', 'C', 'Kavya'],
     ['PES1201701267', 'C', 'Pranav Praveen Badami'],
     ['PES1201701279', 'C', 'Arumilli Meghana'],
     ['PES1201701294', 'C', 'Anujeet Dubey'],
     ['PES1201701348', 'C', 'Avinash.M.S'],
     ['PES1201701403', 'C', 'Varun Venkatesh'],
     ['PES1201701528', 'C', 'Nagesh K J'],
     ['PES1201701532', 'C', 'Zenkar S'],
     ['PES1201701540', 'C', 'Shubha M'],
     ['PES1201701561', 'C', 'S P Nithesh Kumar'],
     ['PES1201701576', 'C', 'Manoj Pissay A'],
     ['PES1201701584', 'C', 'K Sasi Kiran Reddy'],
     ['PES1201701597', 'C', 'Sachetan Ganapati Sabhahit'],
     ['PES1201701618', 'C', 'Gagana R'],
     ['PES1201701632', 'C', 'Laxman'],
     ['PES1201701633', 'C', 'Athira A D'],
     ['PES1201701640', 'C', 'Niveditha C U'],
     ['PES1201701771', 'C', 'Sanathkumar G'],
     ['PES1201701808', 'C', 'Aekansh Dixit'],
     ['PES1201701831', 'C', 'K Prathusha'],
     ['PES1201701835', 'C', 'Pamidi Satya Praneeth'],
     ['PES1201701868', 'C', 'Kritika Kapoor'],
     ['PES1201700016', 'D', 'Rashmi B'],
     ['PES1201700029', 'D', 'Neel Krishna'],
     ['PES1201700046', 'D', 'P A Bharath'],
     ['PES1201700092', 'D', 'Kayan K Katrak'],
     ['PES1201700099', 'D', 'Rishabh Kumar Jain'],
     ['PES1201700109', 'D', 'Kundan Kumar'],
     ['PES1201700130', 'D', 'Anand Singhania'],
     ['PES1201700147', 'D', 'Likith R Shekar'],
     ['PES1201700169', 'D', 'Omar Sharieff'],
     ['PES1201700181', 'D', 'Shreyas Bharadwaj V'],
     ['PES1201700188', 'D', 'Nihal S'],
     ['PES1201700195', 'D', 'Ketan Panwar'],
     ['PES1201700196', 'D', 'Nidige Shreerashmi'],
     ['PES1201700200', 'D', 'Sudhanva Srinivasa Prasad'],
     ['PES1201700204', 'D', 'K Nidhi Karanth'],
     ['PES1201700215', 'D', 'Niharika Pentapati'],
     ['PES1201700223', 'D', 'Kanishk Singh'],
     ['PES1201700246', 'D', 'C . Diya'],
     ['PES1201700274', 'D', 'Shivangi Gupta'],
     ['PES1201700293', 'D', 'Vinay Jagadeesh'],
     ['PES1201700651', 'D', 'Aayush Shah'],
     ['PES1201700665', 'D', 'Mahima V'],
     ['PES1201700674', 'D', 'Anirudh Vidyabhushan'],
     ['PES1201700691', 'D', 'Siddharth Shankar'],
     ['PES1201700700', 'D', 'Kushal D'],
     ['PES1201700707', 'D', 'Rohit Menon C'],
     ['PES1201700742', 'D', 'Neha.N.D'],
     ['PES1201700780', 'D', 'Chetana V Kulkarni'],
     ['PES1201700857', 'D', 'Dinakar S Murthy'],
     ['PES1201700945', 'D', 'Harsh Lalit Changela'],
     ['PES1201700954', 'D', 'Salman Ahmed Fairoze'],
     ['PES1201700970', 'D', 'Amrita Shivananda Hegde'],
     ['PES1201700990', 'D', 'A Mukesh'],
     ['PES1201701000', 'D', 'Manikanta R'],
     ['PES1201701002', 'D', 'Mainaki Saraf'],
     ['PES1201701113', 'D', 'Tejashree Mahesh'],
     ['PES1201701129', 'D', 'Tejas Verma'],
     ['PES1201701130', 'D', 'Kartikeya Jain'],
     ['PES1201701142', 'D', 'Karan Panjabi'],
     ['PES1201701354', 'D', 'Pooja Patil'],
     ['PES1201701359', 'D', 'Samarth S'],
     ['PES1201701370', 'D', 'Chaitra H P'],
     ['PES1201701395', 'D', 'Syed Zubeir Abdulla'],
     ['PES1201701460', 'D', 'Vasireddy Sathvika'],
     ['PES1201701492', 'D', 'Suhas B N'],
     ['PES1201701496', 'D', 'Sirajahamed N Dharmayath'],
     ['PES1201701500', 'D', 'Abhinav Vigneshwar B M'],
     ['PES1201701549', 'D', 'Chandan M'],
     ['PES1201701604', 'D', 'Ajeya. B. S'],
     ['PES1201701637', 'D', 'Samarth Shetty'],
     ['PES1201701644', 'D', 'Abhilash H'],
     ['PES1201701649', 'D', 'Ajay Chavan'],
     ['PES1201701730', 'D', 'Anup Basavaraj Sajjan'],
     ['PES1201701736', 'D', 'Prajwala D'],
     ['PES1201701742', 'D', 'Bhanu Priya C G'],
     ['PES1201701767', 'D', 'K Suman'],
     ['PES1201701777', 'D', 'Dhanush N'],
     ['PES1201701809', 'D', 'Anvitha Poosarla'],
     ['PES1201701867', 'D', 'Shambu Nandish'],
     ['PES1201701897', 'D', 'Sakinala Nishith Vihar'],
     ['PES1201700020', 'E', 'Nikunj Goyal'],
     ['PES1201700051', 'E', 'Madineni Sruthi'],
     ['PES1201700057', 'E', 'Raghu G'],
     ['PES1201700058', 'E', 'Kishan K P'],
     ['PES1201700079', 'E', 'Keshav Kansal'],
     ['PES1201700104', 'E', 'Aniket S Hegde'],
     ['PES1201700129', 'E', 'Hardik Gourisaria'],
     ['PES1201700132', 'E', 'Vandrangi Srujan'],
     ['PES1201700159', 'E', 'Siva Girish R'],
     ['PES1201700164', 'E', 'Bagyasree S'],
     ['PES1201700166', 'E', 'Jayadev M'],
     ['PES1201700193', 'E', 'Eshwar H S'],
     ['PES1201700197', 'E', 'Mithun H M'],
     ['PES1201700206', 'E', 'R S Sai Prashanth'],
     ['PES1201700217', 'E', 'Madhav Agal'],
     ['PES1201700219', 'E', 'Aninditha Ramesh'],
     ['PES1201700224', 'E', 'Meishty Pande'],
     ['PES1201700242', 'E', 'Anish Sekhar'],
     ['PES1201700256', 'E', 'Swathi M'],
     ['PES1201700267', 'E', 'Saransh Gupta'],
     ['PES1201700297', 'E', 'Sanjana Moudgalya'],
     ['PES1201700663', 'E', 'Vishnu Santhosh Atreyapurapu'],
     ['PES1201700816', 'E', 'K Suhas'],
     ['PES1201700837', 'E', 'Shreyas S Mavanoor'],
     ['PES1201700856', 'E', 'Ruthu G S'],
     ['PES1201700888', 'E', 'Varad Ganesh Rane'],
     ['PES1201700916', 'E', 'Kautsubh Raghavan'],
     ['PES1201700973', 'E', 'Shamitha K'],
     ['PES1201701085', 'E', 'Kethan Mv'],
     ['PES1201701121', 'E', 'Ashwath Janardhanan'],
     ['PES1201701126', 'E', 'Prakruti Prakash Rao'],
     ['PES1201701132', 'E', 'Srivatsa S Vantmuri'],
     ['PES1201701274', 'E', 'Samhitha D'],
     ['PES1201701327', 'E', 'Nishchay Karle'],
     ['PES1201701333', 'E', 'Sneha Nemadi'],
     ['PES1201701336', 'E', 'Parshva B Jain'],
     ['PES1201701339', 'E', 'Meghana Venkatesh Nayak'],
     ['PES1201701346', 'E', 'Ashika Meryl Pinto'],
     ['PES1201701347', 'E', 'Pushpavathi K N'],
     ['PES1201701349', 'E', 'Mayank Agarwal'],
     ['PES1201701375', 'E', 'Chetan Chavhannavar'],
     ['PES1201701417', 'E', 'Shashidhar R'],
     ['PES1201701419', 'E', 'Venugopal N B'],
     ['PES1201701515', 'E', 'P Sai Krishna'],
     ['PES1201701525', 'E', 'K Shrinidhi Bhagavath'],
     ['PES1201701526', 'E', 'Anirudh Avadhani'],
     ['PES1201701536', 'E', 'Anusha S Rao'],
     ['PES1201701539', 'E', 'Saqlain Pasha'],
     ['PES1201701542', 'E', 'Vadeyarahalli Sampreeths Virupaksha'],
     ['PES1201701557', 'E', 'Pramod M N'],
     ['PES1201701558', 'E', 'Anirudh Joshi'],
     ['PES1201701582', 'E', 'Naveen D'],
     ['PES1201701603', 'E', 'Vihan Srinath Murthy'],
     ['PES1201701703', 'E', 'Prajwal Pothalkar'],
     ['PES1201701726', 'E', 'Rachana Hs'],
     ['PES1201701740', 'E', 'Md Faizan Siddiqui'],
     ['PES1201701746', 'E', 'Vithal P Nakod'],
     ['PES1201701773', 'E', 'Akash P S'],
     ['PES1201701873', 'E', 'Surya R'],
     ['PES1201701878', 'E', 'V S Vishruth'],
     ['PES1201700038', 'F', 'Apoorve Gupta'],
     ['PES1201700047', 'F', 'Pranav Aditya C P'],
     ['PES1201700090', 'F', 'Tanvir Husain'],
     ['PES1201700107', 'F', 'P R Aravind Perichiappan'],
     ['PES1201700111', 'F', 'Pulleh Bhatia'],
     ['PES1201700121', 'F', 'Rahul M Koushik'],
     ['PES1201700126', 'F', 'Pratyush Mishra'],
     ['PES1201700134', 'F', 'Parth Vipul Shah'],
     ['PES1201700135', 'F', 'Laksh Sethi'],
     ['PES1201700144', 'F', 'Tanay Gangey'],
     ['PES1201700173', 'F', 'Tanmay Kumar'],
     ['PES1201700175', 'F', 'Aditya Prasanna'],
     ['PES1201700190', 'F', 'Mithali Shashidhar'],
     ['PES1201700198', 'F', 'Shreya Banerjee'],
     ['PES1201700218', 'F', 'Sharanya Venkat'],
     ['PES1201700232', 'F', 'Monish Prakasan'],
     ['PES1201700241', 'F', 'Saahil Bharat Jain'],
     ['PES1201700250', 'F', 'Hari Om'],
     ['PES1201700295', 'F', 'Goutham K S'],
     ['PES1201700301', 'F', 'Anagha Ananth'],
     ['PES1201700494', 'F', 'Sai Tarun K'],
     ['PES1201700649', 'F', 'Ashrith S'],
     ['PES1201700653', 'F', 'Rachana B Karennavar'],
     ['PES1201700703', 'F', 'Arushi Bohra'],
     ['PES1201700745', 'F', 'Abhishek Banerji'],
     ['PES1201700759', 'F', 'Phalguni Kamani'],
     ['PES1201700769', 'F', 'Ria Kalia'],
     ['PES1201700772', 'F', 'Yash Kumar M'],
     ['PES1201700815', 'F', 'Kasturi Bhamidipati'],
     ['PES1201700829', 'F', 'Amrutha S'],
     ['PES1201700872', 'F', 'Aishwarya M A Ramanath'],
     ['PES1201700924', 'F', 'Vaibhav K T'],
     ['PES1201700957', 'F', 'Shankaranarayana Hebbar H S'],
     ['PES1201700959', 'F', 'Adeesh'],
     ['PES1201700962', 'F', 'Manojkumar S'],
     ['PES1201700965', 'F', 'Nithish Ranjan Yemol'],
     ['PES1201700986', 'F', 'Pradyumna Y M'],
     ['PES1201700988', 'F', 'Siva Teja S'],
     ['PES1201700992', 'F', 'Sushanth Jain'],
     ['PES1201701018', 'F', 'Amrutanshu Narayan Bhat'],
     ['PES1201701102', 'F', 'Anagha M Anil Kumar'],
     ['PES1201701120', 'F', 'Naman Batra'],
     ['PES1201701133', 'F', 'Nilay Gupta'],
     ['PES1201701134', 'F', 'Rajath S'],
     ['PES1201701369', 'F', 'Krithika Padmanabha Suwarna'],
     ['PES1201701387', 'F', 'Varsha C'],
     ['PES1201701435', 'F', 'Harish P B'],
     ['PES1201701497', 'F', 'Prerana Sirigeri'],
     ['PES1201701498', 'F', 'Manthan B Y'],
     ['PES1201701501', 'F', 'Shubham S Hosalikar'],
     ['PES1201701507', 'F', 'Abhishek Patil'],
     ['PES1201701529', 'F', 'Premshekhar'],
     ['PES1201701590', 'F', 'Vimarsha R'],
     ['PES1201701608', 'F', 'Prince T Jha'],
     ['PES1201701615', 'F', 'Darshana Upadhyay'],
     ['PES1201701629', 'F', 'Pruthvish E'],
     ['PES1201701646', 'F', 'Anush V Kini'],
     ['PES1201701665', 'F', 'Vikas Matam'],
     ['PES1201701759', 'F', 'Krishna Jadhav'],
     ['PES1201701853', 'F', 'Yash Goel'],
     ['PES1201700048', 'G', 'S Sriya'],
     ['PES1201700062', 'G', 'Bhavna Arora'],
     ['PES1201700072', 'G', 'Raunak Sengupta'],
     ['PES1201700077', 'G', 'Sarthak Gupta'],
     ['PES1201700085', 'G', 'Ritwik Sinha'],
     ['PES1201700095', 'G', 'Aniket Nitin Kaulavkar'],
     ['PES1201700103', 'G', 'Deepika P Karanji'],
     ['PES1201700105', 'G', 'Ruben John Mampilli'],
     ['PES1201700118', 'G', 'Saioni Chatterjee'],
     ['PES1201700133', 'G', 'Akash Mukhopadhyay'],
     ['PES1201700151', 'G', 'Achintya Shivam'],
     ['PES1201700171', 'G', 'Jasraj Singh Anand'],
     ['PES1201700172', 'G', 'Bhoomika S'],
     ['PES1201700186', 'G', 'Dev Bhartra'],
     ['PES1201700210', 'G', 'Aditi M Manohar'],
     ['PES1201700229', 'G', 'G.R.Dheemanth'],
     ['PES1201700239', 'G', 'Pavan Mitra'],
     ['PES1201700249', 'G', 'Parv Nangalia'],
     ['PES1201700251', 'G', 'Kumar Abhishek'],
     ['PES1201700261', 'G', 'Bhavya B'],
     ['PES1201700262', 'G', 'Yash Pradhan'],
     ['PES1201700272', 'G', 'Pratik Byathnal'],
     ['PES1201700278', 'G', 'Sanjay Chari'],
     ['PES1201700281', 'G', 'Dhruv Vohra'],
     ['PES1201700286', 'G', 'R Ananth'],
     ['PES1201700289', 'G', 'Keshav Agarwal'],
     ['PES1201700648', 'G', 'Mukund Kadlabal'],
     ['PES1201700710', 'G', 'Aditya Shankaran'],
     ['PES1201700754', 'G', 'Rishi Ravikumar'],
     ['PES1201700798', 'G', 'Lavanya L'],
     ['PES1201700801', 'G', 'Vishnu Manoj'],
     ['PES1201700958', 'G', 'Sujeeth A Vankudari'],
     ['PES1201700987', 'G', 'Skanda V C'],
     ['PES1201701029', 'G', 'Cherukuri Yamini'],
     ['PES1201701110', 'G', 'Athul Sandosh'],
     ['PES1201701122', 'G', 'Mehul Thakral'],
     ['PES1201701244', 'G', 'Lamya Bhasin'],
     ['PES1201701256', 'G', 'Sarvesh Kedia'],
     ['PES1201701321', 'G', 'Vishwas N S'],
     ['PES1201701342', 'G', 'Pragnya Sridhar'],
     ['PES1201701384', 'G', 'Archana.C'],
     ['PES1201701438', 'G', 'Chiranth Jawahar'],
     ['PES1201701457', 'G', 'Melavoy Thanusha Sai'],
     ['PES1201701489', 'G', 'Pavan Kumar A'],
     ['PES1201701545', 'G', 'Navneet Raju C'],
     ['PES1201701546', 'G', 'S Varun'],
     ['PES1201701563', 'G', 'Abhishek M'],
     ['PES1201701581', 'G', 'Ravichandra Gidd'],
     ['PES1201701583', 'G', 'Aprameya Kulkarni'],
     ['PES1201701624', 'G', 'Vishnu S Murali'],
     ['PES1201701626', 'G', 'Venkatesh K'],
     ['PES1201701635', 'G', 'Ambarish D Y'],
     ['PES1201701643', 'G', 'Keerthipriya P'],
     ['PES1201701672', 'G', 'Nisha Nemasing Rathod'],
     ['PES1201701774', 'G', 'Manvith J'],
     ['PES1201701801', 'G', 'Britney D Mungra'],
     ['PES1201701871', 'G', 'Srihari S'],
     ['PES1201701886', 'G', 'Manasa H K'],
     ['PES1201701910', 'G', 'Ziyan Zafar'],
     ['PES1201700012', 'H', 'Aditya Sivaram Nair'],
     ['PES1201700014', 'H', 'Rithvik Chandan'],
     ['PES1201700030', 'H', 'Shivang Saxena'],
     ['PES1201700056', 'H', 'Anuj Sanjay Tambwekar'],
     ['PES1201700064', 'H', 'T. Pradhiksha Nandini'],
     ['PES1201700088', 'H', 'Anantharam R Ubaradka'],
     ['PES1201700115', 'H', 'Nishanth L. Shastry'],
     ['PES1201700120', 'H', 'Siddarth Karki'],
     ['PES1201700149', 'H', 'Amardeep Mj'],
     ['PES1201700162', 'H', 'Malla Rishika'],
     ['PES1201700170', 'H', 'Anirudh Maiya'],
     ['PES1201700185', 'H', 'Aniket Anand'],
     ['PES1201700201', 'H', 'Yalipi Revanth'],
     ['PES1201700227', 'H', 'Madhav Mahesh Kashyap'],
     ['PES1201700228', 'H', 'Cyrus William Dlima'],
     ['PES1201700230', 'H', 'Kirthika Gurumurthy'],
     ['PES1201700252', 'H', 'Aditya Manuraj'],
     ['PES1201700255', 'H', 'Anshuman Pandey'],
     ['PES1201700275', 'H', 'Akanksha'],
     ['PES1201700279', 'H', 'Harsh Choudhary'],
     ['PES1201700636', 'H', 'Krishnamoorthy M'],
     ['PES1201700667', 'H', 'Shashank Prasad'],
     ['PES1201700688', 'H', 'Richa'],
     ['PES1201700689', 'H', 'Roshan Jinesh'],
     ['PES1201700704', 'H', 'Vishwas Belimallur Rajashekar'],
     ['PES1201700792', 'H', 'Jyosna.S'],
     ['PES1201700830', 'H', 'Challa Dheeraj Reddy'],
     ['PES1201700948', 'H', 'Megha M'],
     ['PES1201700950', 'H', 'Rachana Sudhindra Dani'],
     ['PES1201700960', 'H', 'Gadhamsetty Rachana Rao'],
     ['PES1201700972', 'H', 'Sarang Ravindra'],
     ['PES1201700989', 'H', 'Gaurav C G'],
     ['PES1201701017', 'H', 'Khamaroddin Shekh'],
     ['PES1201701025', 'H', 'Goutham R'],
     ['PES1201701094', 'H', 'Sai Praneeth D R'],
     ['PES1201701103', 'H', 'Gaurang Rammohan Rao'],
     ['PES1201701114', 'H', 'Inumella Sricharan'],
     ['PES1201701117', 'H', 'Kona Supriya'],
     ['PES1201701139', 'H', 'Sangam S Kedilaya'],
     ['PES1201701271', 'H', 'Aiswarya Y B'],
     ['PES1201701324', 'H', 'Priyadith T P'],
     ['PES1201701345', 'H', 'Durga Prasad S N'],
     ['PES1201701373', 'H', 'Vinutha M N'],
     ['PES1201701411', 'H', 'Nishikanth C.S'],
     ['PES1201701416', 'H', 'Khushi M'],
     ['PES1201701420', 'H', 'Suhail Rahman'],
     ['PES1201701505', 'H', 'Amrut S'],
     ['PES1201701592', 'H', 'Nitish S Manya'],
     ['PES1201701593', 'H', 'Chandan N Bhat'],
     ['PES1201701595', 'H', 'Pratheek Kamath M'],
     ['PES1201701611', 'H', 'Naveen Karthik M J'],
     ['PES1201701628', 'H', 'Roshan Bhaskar Poojary'],
     ['PES1201701666', 'H', 'Monish Reddy B S'],
     ['PES1201701702', 'H', 'Radhika Sadananda Moger'],
     ['PES1201701725', 'H', 'Sachin'],
     ['PES1201701727', 'H', 'Sharath V'],
     ['PES1201701799', 'H', 'Akanksha'],
     ['PES1201701814', 'H', 'Riya Vijay'],
     ['PES1201701898', 'H', 'Namana']];

     $servername = "localhost";
     $username = "root";
     $password = "";

     $connection = mysqli_connect($servername, $username, $password, "STUD");

     if(!$connection) {
       die("Connexion Error!<br>Error Message: " . mysqli_connect_error()."<br>");
     }
     echo "Connexion Suxessful!<br>";

     foreach ($studentDetails as $key) {
       $command = "INSERT INTO studentDetails(SRN, Section, Name) VALUES (\"$key[0]\", \"$key[1]\", \"$key[2]\");";

       print($command);
       if(mysqli_query($connection, $command)) {
         echo "Value Inserted Suxessfully";
       } else {
         echo "ERROR! " . mysqli_error($connection);
       }
     }
     mysqli_close($connection);
    ?>
  </body>
</html>
