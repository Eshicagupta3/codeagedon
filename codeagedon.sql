-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 12:49 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeagedon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `user`, `password`) VALUES
(1, 'codeagedon', 'codeagedon', '$2y$10$ZkNeoMWdF4tuDbN8xRsdKu.myL.pWRRxkJBp9AnmLA0ikeA0XVpwW');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `sno` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ans` varchar(255) NOT NULL,
  `number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sno`, `ques`, `ans`, `number`) VALUES
(1, 'Can you feel it when i think about you?', '$2y$10$s5WWjnRNEzvoKVAk1vewmO5DJyrSJsRanzVc.UNeDkQ8Lxbz6md02', 1),
(2, 'Identify 077065082073079  ?', '$2y$10$OGhEtGsTwjOVzkBXfhM5KuROW2z/eMwk9mfN.y4ui3HTgku5CIidK', 2),
(4, 'Wait You Can\'t Proceed?', '$2y$10$wKJXwC86kYl9fpWsUEHO5eRfVxulsGmpHZ7DETUUTw1IjaKXYji8y', 4),
(6, 'Move and play?', '$2y$10$thrzibdrwbbzQOQ0kPpN0O/0gaq0wNcw4qWC.qA2KgDQJWcrjGyB6', 5),
(7, 'Wow I did, did I ? Don\'t nod', '$2y$10$ongRl467BZyfmC/c0yJRqutfhWnhplP3KdFJrlP9mjK4ARV2z9H3a', 6),
(8, ' Can you see the face correctly?', '$2y$10$CfN2G59.umpFOFyVmricH.ITil8OifpXRV0gOM.PPDMXbXgmnH3qe', 7),
(11, 'de:ad:be:ef:ca:fe ?', '$2y$10$onLyDvzrhHbM/wxO2KQ4L.bqsyF6LLM6tmvk4Nm1MAuCephAYweZm', 10),
(12, 'In a container some gases were mixed and were compressed at a temperature \'t\' suddenly  a pierce was made in the container,give and idea so that there is less loss while compression?', '$2y$10$9SstvxaL0GBKp2Yc1Dfv8O6JlyBOCLm7tRQv6kDWLvZHe5tCYSUnK', 11),
(16, 'Think about  the one who doesn\'t keep the score, who\'s not looking to be richer, or who is not afraid of losing..', '$2y$10$wTjM5D2BjOZjHhJqRTFY7uWtcf.WWRAnZH6BdHvx46jQHm2oV.6Cu', 14),
(19, 'Jerremy\'s father brought icecream brick for the family , Jerremy want to save  ice-cream for his friend coming next day.His father urged him to break pieces of 1*1 size , calculate number of steps required to fragment an 6*5 size of icecream brick into 1*1 pieces? You can fragment an existing piece of brick horizontally or vertically. You cannot fragment two or more pieces at once . ', '$2y$10$T3Vn5WFBIcEMpqhEzaYcW.C1uTNlml2MUMxUflCjWMVTiukbsQiXa', 17),
(20, ' Long-haired Shizuka works for the Marketing Board. Hairy Shizuka at the board they call her. That\'s not very nice, is it? Anyway, Shizuka likes to eat her dinner by candlelight every evening with her parents . She saves all the candle ends because when she has collected seven ends, she can melt them down to make a new candle. At the last count she found that she had 34 candles and 50 candle ends. One candle burns down in one evening. For how many evenings can Shizuka have a candlelit dinner before she has to buy more candles?', '$2y$10$Zh0TqBLluUNHD75nPHh/z.SpUKsOTqSlsqrsvm1wnq9kaeCEB76Ee', 18),
(21, 'Sheen Estevez got a project on mesozoic era , for this he searched the internet read lots of books but didn\'t got satisfying content ,his mother gave him a book of her time, with a great book cover. Since a book cover is a distillation and  first impression is the last impression. Sheen was very much fascinated to see the book cover and tried to read the content inside. He learnt a lot and wanted to know more so he went to jimmy neutron and urged him to make a time machine so that they could  travel to mesozoic era . Jimmy made the time machine for his friend they travelled the mesozoic and finally made their project..', '$2y$10$QJV7pQoJv2YvU/NpewNRw.xS.mqAYgA9KCBSyXmWv1H1fLhF.VDTW', 19),
(22, 'Obviously the former is tough, but you need to honor the negative space, these saturation capacities were assidu valency though the resolution did not make everyone happy, it did effectively end the argument, she sympathized with the orphan and gave him some money..', '$2y$10$l/hT5TJjT9odXSwPfApJieuiTRoo5fWO5.9g5uHXd2CkEmlTXLstC', 20),
(23, 'Billgates is recruiting new commander of silicon valley. He gives this task to Satya Nadela to find that lucky man .There is a  circular hall with 10000 gates through which 9999 recruits  enter the hall. They stand in front of the gate and the gate behind them is then locked. Each of them is assigned a number 2 to 10000. At last through the open gate, Mr. Nadela enters the hall .He is the number-1 person. He kills the man standing to his immediate left and passes the sword to the person standing on the dead person\'s left .(Ex : The number 2 man dies and the sword is now in the hands of man number -3.)\nThe process continues untill only one worthy man is alive. Who will be the new commander of silicon valley?\n', '$2y$10$NqUVN3b.CkvmX/LwzhcqKeaY4LI3b5Pzmaf8F40rlk3vfz/lE8DZG', 21),
(24, 'Nobita got very less marks in science he was very upset ,he went to  Doraemon and asked him about why even after trying so hard he can\'t score well. Doraemon told him that  imagination is an integral part of science, equipped with your five senses, you explore the universe around you and call the adventure Science. Doraemon explained him that practical knowledge is an integral part of science, try to explore everything ,suddenly Nobita saw a shooting star and wished to score better marks in test ..Help Nobita to widen his field of view?', '$2y$10$PNH/Afr9vaaoiqe4pQtQfe011SKjXNv.J/cF1y/O/L6jqWT4Sf4ja', 22),
(25, 'Kick Buttowski aspires to become world\'s greatest daredevil for this he visited INDIA where an event of bike racing was going on , there were 4 bikes from which he has to choose they are-DUCATI 350 DESMO, HARLEY DAVIDSON LOW RIDER , BMW R69S and TVS Apache RTR 200 400V he is confused about which bike to take since the track was  90 km long and he was given a 125 litres of fuel to store . Help him to choose wisely !!', '$2y$10$c/wbEkZ5rckni5bI1OJmuOtpfWfaqLYaEUl/M91H46fx0sUSxx13q', 23),
(28, 'int i,j ;\n    char ar[100]=\"OKCANCODERMARSS\";\n    for(i=0 ; ar[i]!=\'\\0\' ; i  )\n    {\n        for(j=i 1 ; ar[j]!=\'\\0\' ; j  )\n        {\n            if(ar[i]==ar[j])\n             cout ar[i];\n        }\n     }\n', '$2y$10$EV0kqy4ssmADostaWvomNO6fObMGB6J6BbO6R3FnXqNtgx9yZNo4q', 8),
(29, 'If divarication is strong than it occurs in loss of remebrance?', '$2y$10$CDYOaduTZRhYRc4CwTwdsuyhjw872nANo.iUknTfF0PvwUUChv0wC', 9),
(30, 'Decipher ?\n                     â ¼â â ¼â Šâ ¼â ‘â ¼â ™?\n', '$2y$10$gS1s5.CTkZSnThOybBErb.nkHz7qB93Dl0PqeWASCeKTfzWmmFli2', 12),
(31, 'Pluck a ROSE  on loess and you move the lattermost light?', '$2y$10$TvRD1FczVr4Tt/Eg93T..OjgzkjnIe/.Oo93KLHrLZJh4EM0fI5/C', 13),
(32, 'A fast food stall sells chilly potatoto in orders of 6, 9, and 20. What is the largest number of pieces of chilli potato you cannot order from this restaurant?', '$2y$10$vi31X.0SqmwTux6SLZ4cTe0bKk3sR.WkIMpw6OPuontN2aRM1H8x6', 15),
(33, 'Phineas and Ferb went to australia in search of a very precious stone named Grandidierite, after lot of research they were unable to get that stone,they went to a PAWN SHOP who were having .1% pure Grandidierite. But they was asking for 1000$ for that, Phineas was having his father\'s debit card but was unable to make the payment.Help him !!', '$2y$10$9hNbUmyT6ipU1XLKXp3UoOQFZov4lPMnWSNzkPwZebtwzBbSus142', 24),
(34, 'Dexter is in his laboratory working on a chemical machine. He was in need of someone to help him in his projects, suddenly Dee Dee enters the lab , Dexter goes into a closet where he has a bunch of brains. He takes a brain and goes to see what to put it in. He goes up to a rat and says no because it\'s too small, he goes to a giant robot and says no because it is too big, then Dee Dee is there. Dexter has no other choice. He must do it to her.Dexter puts the brain inside of Dee Dee and she becomes smart. To test her  Dexter told Dee Dee to combine chemicals, she must only do one drop and she is being very careful about it, he started speaking the name of the chemicals ferociously, Dee Dee urged go ahead i\'m listening and added all the chemicals easily,and quickly..!', '$2y$10$EbAQ6ASCWXx8hT9hi1JdjeOfBnxU7Hs7Z19YH9QDtzBUeQsN6kAn6', 25),
(35, 'When i was a boy i always saw myself as a hero in books and movies. I grew up believing this dream . I always wanted to be a person who\'s mind is faster than computers, someone who is wise, who kills the evils of the society who helps the needy and is a simple man.', '$2y$10$eTJID0UpizCYNc82kFJlken1L8uxot75tpiKgCeF7Elae3jUoxXBS', 26),
(36, 'Today is Shinchan\'s birthday and his mom have a gift for him which shinchan is really excited to see but his mom had hidden it somewhere which shinchan has to search. Her mom gave him a clue that \"Don\'t you start with this and you finish with that\"! Help shinchan to search his gift !', '$2y$10$Gmx.a8K0hxsiXMe79F37/.nyLeZK5ImGpmA6FZQwCL7u6hOj.R1mC', 27),
(37, 'Once Ron asked Hermione that harry and Cho Chang were best friends but he married Ginny Weasly, why?.  Hermione answered it was written in his  destiny, Harry and Cho Chang were best friends , but the destiny said Harry should marry Ginny. The destiny that we learned when we entered Hogwarts . Harry needed a girl who makes him laugh who can take away all his pain with a simple game of quidditch.  Jerremy was confused about destiny, are you too?', '$2y$10$G7Lhuwjbo09Ay4WKX9WP2uk1gHPAoVn6lx6tMTHyXgAMbx68O9iLu', 28),
(38, 'One night while going to market Velma  saw an old lady lying on the lonely road she took the lady to the hospital , unfortunately the lady was dead. They were not knowing even her name so that they can inform her family. For investigation velma called Shaggy,Scooby and daphny , even after 2 days of investigation the team was not able to get a single clue to find  anything about that lady,one night that lady came to velma\'s dream and said \" It was a fact that i was dead ,and a theory that you don\'t know my name, if you thing the fact is right then reveal the theory.! else leave it \"..Help velma to reveal the theory !!', '$2y$10$hME2Hs2pShK/BJ6sf74xbOyrIV7iMXINkxlXWJPfaVRWGvRP9SikW', 29),
(39, 'Dora  need to find the right gate to win the reality show. She has three doors in front of him out of which only one leads to the main stage.Out of the other two gates, one leads to the trap for 1 hour and then back to the gate and the other leads to the trap where she needs to stay for two hours and back to the gate. If she choses one of these gates,the gates are shuffled when she returns back How long will it take her to reach the main stage?', '$2y$10$07YVfFeqrvM9uvswb06zEu0GtAzXJapkNdnK9yQzT6En3xmAcCLkG', 30),
(42, 'a=4,b=6,c=9 ,d=8\n        c       b  c   d   - a/2 ?\nint  main()\n       {\n       int a=-2;\n      printf(\"%x\",a>>3);\n        }\n', '$2y$10$wY7N1WlPobYLwPOD9Huy..Q3l6WEU1MkEHxppesAXgZBkFClAdwCq', 16),
(43, 'I don\'t played with you but i was there for you?', '$2y$10$5O1VTmwdVRo6AB9bdgRe2./sHho.R1ufMJMI2lfd47I9D3dq8NpnW', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `zealid` varchar(30) NOT NULL,
  `number` int(255) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `password`, `zealid`, `number`, `datetime`) VALUES
(20, 'isha', 'e@gmail.com', '$2y$10$ZkNeoMWdF4tuDbN8xRsdKu.myL.pWRRxkJBp9AnmLA0ikeA0XVpwW', '234', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
