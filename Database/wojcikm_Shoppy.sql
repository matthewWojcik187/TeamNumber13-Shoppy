-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2022 at 01:36 PM
-- Server version: 10.4.25-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wojcikm_Shoppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `UserID` int(255) NOT NULL,
  `IsAdmin` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`UserID`, `IsAdmin`) VALUES
(1, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `Colour`
--

CREATE TABLE `Colour` (
  `Name` int(1) NOT NULL,
  `ID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Colour`
--

INSERT INTO `Colour` (`Name`, `ID`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `ProductID` int(255) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` double(7,2) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Rating` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Genre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Year` year(4) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`ProductID`, `Name`, `Price`, `Quantity`, `Description`, `Rating`, `Genre`, `Year`, `img`) VALUES
(1, 'Ant-Man', 19.99, 2, 'The next evolution of the Marvel Cinematic Universe harnesses the tiniest but mightiest force known to man and introduces the newest member of The Avengers: Marvel’s Ant-Man. Armed with the amazing ability to shrink in scale but increase in strength, master thief Scott Lang must channel his inner-hero and help his new mentor Dr. Hank Pym protect the secret behind his spectacular Ant-Man suit from a new generation of ruthless villains! With humanity’s fate in the balance, Pym and Lang must plan and pull off a daring heist against insurmountable odds. Filled with humor, awesome special effects and exclusive bonus features, this action-packed adventure takes you to new levels of pulse-pounding excitement!', 'PG13', 'Action', 2015, 'ant-man.jpg'),
(2, 'Ant-Man and the Wasp', 16.99, 1, 'From the Marvel Cinematic Universe comes Ant-Man and the Wasp, a new chapter featuring heroes with the astonishing ability to shrink. In the aftermath of Captain America: Civil War, Scott Lang grapples with his choices as both a super hero and a father. As he struggles to balance his home life with his responsibilities as Ant-Man, he\'s confronted by Hope van Dyne and Dr. Hank Pym with an urgent new mission. Scott must once again put on the suit and learn to fight alongside the Wasp as they join forces to uncover secrets from the past.', 'PG13', 'Action', 2018, 'Ant-Man_and_the_Wasp.jpg'),
(3, 'Avengers: Age of Ultron', 19.99, 8, 'Marvel Studios unleashes the next global phenomenon in the Marvel Cinematic Universe -- MARVEL\'S AVENGERS: AGE OF ULTRON. Good intentions wreak havoc when Tony Stark (Robert Downey Jr.) unwittingly creates Ultron (James Spader), a terrifying A.I. monster who vows to achieve \"world peace\" via mass extinction. Now Iron Man, Captain America (Chris Evans), Thor (Chris Hemsworth) and The Hulk (Mark Ruffalo) -- alongside Black Widow (Scarlett Johansson), Hawkeye (Jeremy Renner) and Nick Fury (Samuel L. Jackson) -- must reassemble to defeat Ultron and save mankind...if they can! This action-packed adventure is a mind-blowing blast!', 'PG13', 'Action', 2015, 'Avengers_age_of_ultron.jpg'),
(4, 'Avengers: Endgame', 50.00, 1, 'The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios\' grand conclusion to twenty-two films, \"Avengers: Endgame.\"', 'PG13', 'Action', 2019, 'avengers_end_game.jpg'),
(5, 'Avengers: Infinity War', 17.95, 7, 'An unprecedented cinematic journey ten years in the making and spanning the entire Marvel Cinematic Universe, Marvel Studios\' \"Avengers: Infinity War\" brings to the screen the ultimate, deadliest showdown of all time. As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.', 'PG13', 'Action', 2018, 'avengers_infinity_war.jpg'),
(6, 'Billy Madison', 29.99, 23, 'In order to inherit his fed up father\'s hotel empire, an immature and lazy man must repeat grades 1-12 all over again.', 'PG13', 'Comedy', 1995, 'billy_madison.jpg'),
(7, 'Black Panther', 12.00, 5, 'Starring Chadwick Boseman, Michael B. Jordan and Lupita Nyong\'o - \'Black Panther\' is the story of T\'Challa, king of the advanced African nation Wakanda. When a powerful old enemy reappears, T\'Challa is tested - both as a king and as the Black Panther - to save his homeland.', 'PG13', 'Action', 2018, 'Black_Panther.jpg'),
(8, 'Black Widow', 8.00, 120, 'In Marvel Studios’ action-packed spy thriller “Black Widow,” Natasha Romanoff aka Black Widow confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal with her history as a spy and the broken relationships left in her wake long before she became an Avenger.', 'PG13', 'Action', 2021, 'black_widow.jpg'),
(9, 'Blended', 42.00, 37, 'After a bad blind date, a man and woman find themselves stuck together at a resort for families, where their attraction grows as their respective kids benefit from the burgeoning relationship.', 'PG13', 'Romance', 2014, 'blended.jpg'),
(10, 'Captain America: Civil War', 18.95, 6, 'Marvel’s Captain America: Civil War finds Steve Rogers leading the newly formed team of Avengers in their continued efforts to safeguard humanity. But after another incident involving the Avengers results in collateral damage, political pressure mounts to install a system of accountability, headed by a governing body to oversee and direct the team. The new status quo fractures the Avengers, resulting in two camps—one led by Steve Rogers and his desire for the Avengers to remain free to defend humanity without government interference, and the other following Tony Stark’s surprising decision to support government oversight and accountability.', 'PG13', 'Action', 2016, 'captain_america_cw.jpg'),
(11, 'Captain America: The First Avenger', 19.99, 9, 'After being deemed unfit for military service, Steve Rogers volunteers for a top secret research project that turns him into Captain America, a superhero dedicated to defending America\'s ideals. Captain America leads the fight for freedom as the ultimate weapon against evil. When a terrifying force threatens everyone across the globe, the world\'s greatest soldier wages war on the evil HYDRA organization, led by the villainous Red Skull.', 'PG13', 'Action', 2011, 'captain_america_tfa.jpg'),
(12, 'Captain America: The Winter Soldier', 19.99, 0, 'After the cataclysmic events in New York with The Avengers, Marvel’s “Captain America: The Winter Soldier” finds Steve Rogers, aka Captain America, living quietly in Washington, D.C. and trying to adjust to the modern world. But when a S.H.I.E.L.D. colleague comes under attack, Steve becomes embroiled in a web of intrigue that threatens to put the world at risk. Joining forces with the Black Widow, Captain America struggles to expose the ever-widening conspiracy while fighting off professional assassins sent to silence him at every turn. When the full scope of the villainous plot is revealed, Captain America and the Black Widow enlist the help of a new ally, the Falcon. However, they soon find themselves up against an unexpected and formidable enemy—the Winter Soldier.', 'PG13', 'Action', 2014, 'captain_america_tws.jpg'),
(13, 'Captain Marvel', 0.50, 999, 'Set in the 1990s, Marvel Studios’ Captain Marvel is an adventure from a previously unseen period in the history of the Marvel Cinematic Universe that follows the journey of Carol Danvers as she becomes one of the universe’s most powerful heroes. When a galactic war between two alien races reaches Earth, Danvers finds herself and a small cadre of allies at the center of the maelstrom. “Captain Marvel” is an all-new adventure from a previously unseen period in the history of the Marvel Cinematic Universe.', 'PG13', 'Action', 2019, 'Captain_Marvel.jpg'),
(14, 'Click', 26.99, 38, 'A workaholic architect finds a universal remote that allows him to fast-forward and rewind to different parts of his life. Complications arise when the remote starts to overrule his choices.', 'PG13', 'Comedy', 2006, 'click.jpg'),
(15, 'Doctor Strange', 15.00, 19, 'From Marvel Studios comes DOCTOR STRANGE, the story of world-famous neurosurgeon Dr. Stephen Strange (Benedict Cumberbatch), whose life changes forever after a horrific car accident renders his hands useless. When traditional medicine fails him, he travels to remote Kamar-Taj in search of a cure, but instead discovers the mystical arts and becomes a powerful sorcerer battling dark forces bent on destroying our reality.', 'PG13', 'Action', 2016, 'Doctor_strange.jpg'),
(16, 'Eternals', 19.99, 69, 'Marvel Studios’ ETERNALS follows a group of ancient heroes from beyond the stars who had protected Earth since the dawn of man. When monstrous creatures called Deviants, long thought lost to history, mysteriously return, the Eternals are forced to reunite in order to defend humanity once again.', 'PG13', 'Action', 2021, 'eternals.jpg'),
(17, 'Finding Dory', 5.99, 6, 'Friendly but forgetful blue tang Dory begins a search for her long-lost parents, and everyone learns a few things about the real meaning of family along the way.', 'PG', 'Adventure', 2016, 'finding_dory.jpg'),
(18, 'Finding Nemo', 4.99, 2, 'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.', 'G', 'Adventure', 2003, 'finding_nemo.jpg'),
(19, 'Frozen', 8.99, 2, 'When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition.', 'PG', 'Children', 2013, 'frozen.jpeg'),
(20, 'Frozen II', 9.99, 4, 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.', 'PG', 'Children', 2019, 'frozen2.jpeg'),
(21, 'Gladiator', 50.00, 77, 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.', 'R', 'Action', 2000, 'Gladiator.png'),
(22, 'Grown Ups', 50.00, 4, 'After their high school basketball coach passes away, five good friends and former teammates reunite for a Fourth of July holiday weekend.', 'PG13', 'Comedy', 2010, 'grownups.jpg'),
(23, 'Grown Ups 2', 43.99, 14, 'After moving his family back to his hometown to be with his friends and their kids, Lenny finds out that between old bullies, new bullies, schizo bus drivers, drunk cops on skis, and four hundred costumed party crashers sometimes crazy follows you.', 'PG13', 'Comedy', 2013, 'grownups2.jpg'),
(24, 'Guardian of the Galaxy', 19.45, 16, 'From Marvel, the studio that brought you the global blockbuster franchises of Iron Man, Thor, Captain America and The Avengers, comes a new team—the Guardians of the Galaxy. An action-packed, epic space adventure, Marvel’s “Guardians of the Galaxy” expands the Marvel Cinematic Universe into the cosmos, where brash adventurer Peter Quill finds himself the object of an unrelenting bounty hunt after stealing a mysterious orb coveted by Ronan, a powerful villain with ambitions that threaten the entire universe. To evade the ever-persistent Ronan, Quill is forced into an uneasy truce with a quartet of disparate misfits—Rocket, a gun-toting raccoon, Groot, a tree-like humanoid, the deadly and enigmatic Gamora and the revenge-driven Drax the Destroyer. But when Quill discovers the true power of the orb and the menace it poses to the cosmos, he must do his best to rally his ragtag rivals for a last, desperate stand—with the galaxy’s fate in the balance.', 'PG13', 'Action', 2014, 'guardiansofthegalaxy.jpg'),
(25, 'Guardians of the Galaxy: Vol. 2', 17.99, 10, 'Set to the all-new sonic backdrop of Awesome Mixtape #2, Marvel Studios\' GUARDIANS OF THE GALAXY VOL. 2 continues the team\'s adventures as they traverse the outer reaches of the cosmos. The Guardians must fight to keep their newfound family together as they unravel the mystery of Peter Quill\'s true parentage. Old foes become new allies and characters from the classic comics come to their aid as the Marvel Cinematic Universe continues to expand.', 'PG13', 'Action', 2017, 'guardiansofthegalaxy2.jpg'),
(26, 'Happy Gilmore', 42.99, 40, 'A rejected hockey player puts his skills to the golf course to save his grandmother\'s house.', 'PG13', 'Comedy', 1996, 'happy_gilmore.jpg'),
(27, 'Home Alone', 4.99, 3, 'An eight-year-old troublemaker must protect his house from a pair of burglars when he is accidentally left home alone by his family during Christmas vacation.', 'PG', 'Comedy', 1990, 'home_alone.jpg'),
(28, 'Home Alone 2: Lost in New York', 4.99, 3, 'One year after Kevin McCallister was left home alone and had to defeat a pair of bumbling burglars, he accidentally finds himself stranded in New York City - and the same criminals are not far behind.', 'PG', 'Comedy', 1992, 'home_alone2.jpg'),
(29, 'Hotel Transylvania', 39.99, 35, 'Dracula, who operates a high-end resort away from the human world, goes into overprotective mode when a boy discovers the resort and falls for the count\'s teenaged daughter.', 'PG', 'Comedy', 2012, 'hotel_transylvania.jpg'),
(30, 'Hotel Transylvania 2', 45.00, 1, 'Dracula and his friends try to bring out the monster in his half human, half vampire grandson in order to keep Mavis from leaving the hotel.', 'PG', 'Comedy', 2015, 'hotel_transylvania2.jpg'),
(31, 'Hotel Transylvania 3: Summer Vacation', 45.79, 8, 'Count Dracula and company participate in a cruise for sea-loving monsters, unaware that their boat is being commandeered by the monster-hating Van Helsing family.', 'PG', 'Comedy', 2018, 'hotel_transylvania3.jpg'),
(32, 'How to Train Your Dragon', 44.00, 6, 'A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.', 'PG', 'Children', 2010, 'how_to_dragon.jpg'),
(33, 'How to Train Your Dragon 2', 55.00, 8, 'When Hiccup and Toothless discover an ice cave that is home to hundreds of new wild dragons and the mysterious Dragon Rider, the two friends find themselves at the center of a battle to protect the peace.\r\n', 'PG', 'Children', 2014, 'how_to_dragon2.jpg'),
(34, 'How to Train Your Dragon: The Hidden World', 70.00, 17, 'When Hiccup discovers Toothless isn\'t the only Night Fury, he must seek \"The Hidden World\", a secret Dragon Utopia before a hired tyrant named Grimmel finds it first.', 'PG', 'Children', 2019, 'how_to_dragon3.jpg'),
(35, 'Hubie Halloween', 42.99, 6, 'Despite his devotion to his hometown of Salem (and its Halloween celebration), Hubie Dubois is a figure of mockery for kids and adults alike. But this year, something is going bump in the night, and it\'s up to Hubie to save Halloween.', 'PG13', 'Comedy', 2020, 'hubie_halloween.jpg'),
(36, 'Hustle', 35.00, 23, 'A basketball scout discovers a phenomenal street ball player while in Spain and sees the prospect as his opportunity to get back into the NBA.', 'R', 'Comedy', 2022, 'hustle.jpg'),
(37, 'Iron Man', 20.99, 8, 'After surviving an unexpected attack in enemy territory, jet-setting industrialist Tony Stark builds a high-tech suit of armor and vows to protect the world as Iron Man. Straight from the pages of the legendary comic book, Iron Man is a hero who is built - not born - to be unlike any other.', 'PG13', 'Action', 2008, 'ironman.jpg'),
(38, 'Iron Man 2', 17.00, 10, 'Robert Downey Jr. returns as Tony Stark, the wealthy playboy whose exploits as Iron Man are now public knowledge after his admission at the close of the first film. in the follow-up, Stark is pitted against his Russian arch nemesis, Whiplash (Mickey Rourke), and corporate rival Justin Hammer (Sam Rockwell).', 'PG13', 'Action', 2010, 'ironman2.jpg'),
(39, 'Iron Man 3', 16.99, 33, 'The studio that brought you Marvel’s The Avengers unleashes the best Iron Man adventure yet with this must-own, global phenomenon starring Robert Downey Jr. and Gwyneth Paltrow. When Tony Stark/Iron Man finds his entire world reduced to rubble, he must use all his ingenuity to survive, destroy his enemy and somehow protect those he loves. But a soul-searching question haunts him: Does the man make the suit… or does the suit make the man?', 'PG13', 'Action', 2013, 'ironman3.jpg'),
(40, 'Jack and Jill', 12.00, 68, 'Family guy, Jack Sadelstein, prepares for the annual event he always dreads--the Thanksgiving visit of his fraternal twin sister, the needy, and passive-aggressive Jill, who then refuses to leave.', 'PG', 'Comedy', 2011, 'jack_jill.jpg'),
(41, 'Just Go with It', 42.99, 44, 'On a weekend trip to Hawaii, a plastic surgeon convinces his loyal assistant to pose as his soon-to-be-divorced wife in order to cover up a careless lie he told to his much-younger girlfriend.', 'PG13', 'Comedy', 2011, 'Just_Go_with_It_Poster.jpg'),
(42, 'Kung Fu Panda', 7.00, 20, 'To everyone\'s surprise, including his own, Po, an overweight, clumsy panda, is chosen as protector of the Valley of Peace. His suitability will soon be tested as the valley\'s arch-enemy is on his way.', 'PG', 'Children', 2008, 'kungfupanda.jpg'),
(43, 'Lightyear', 25.99, 7, 'While spending years attempting to return home, marooned Space Ranger Buzz Lightyear encounters an army of ruthless robots commanded by Zurg who are attempting to steal his fuel source.', 'PG', 'Action', 2022, 'Lightyear__film__poster.jpg'),
(44, 'Magic Mike', 69.00, 120, 'A male stripper teaches a younger performer how to party, pick up women, and make easy money.', 'R', 'Comedy', 2012, 'magic_mike.jpg'),
(45, 'Magic Mike XXL', 90.00, 5, 'Three years after Mike bowed out of the stripper life at the top of his game, he and the remaining Kings of Tampa hit the road to Myrtle Beach to put on one last blow-out performance.', 'R', 'Comedy', 2015, 'magic_mike_XXL.jpg'),
(46, 'Men, Women & Children', 12.00, 101, 'A group of high school teenagers and their parents attempt to navigate the many ways the Internet has changed their relationships, their communications, their self-images, and their love lives.', 'R', 'Drama', 2014, 'men_women_children.jpg'),
(47, 'Minions: The Rise of Gru', 95.20, 0, 'The untold story of one twelve-year-old\'s dream to become the world\'s greatest supervillain.', 'PG', 'Children', 2022, 'rise_of_gru.jpg'),
(48, 'Monsters, Inc.', 17.00, 22, 'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, two monsters realize things may not be what they think.', 'G', 'Children', 2001, 'monstersinc.jpg'),
(49, 'Murder Mystery', 26.99, 31, 'A New York cop and his wife go on a European vacation to reinvigorate the spark in their marriage, but end up getting framed and on the run for the death of an elderly billionaire.', 'PG13', 'Comedy', 2019, 'murdermystery.jpg'),
(50, 'Night at the Museum', 4.99, 4, 'A newly recruited night security guard at the Museum of Natural History discovers that an ancient curse causes the animals and exhibits on display to come to life and wreak havoc', 'PG', 'Comedy', 2006, 'nightatthemuseum.jpg'),
(51, 'Pixels', 39.99, 40, 'When aliens misinterpret video feeds of classic arcade games as a declaration of war, they attack the Earth in the form of the video games.', 'PG13', 'Action', 2015, 'pixels.jpg'),
(52, 'Pokemon Detective Pikachu', 7.99, 3, 'In a world where people collect Pokémon to do battle, a boy comes across an intelligent talking Pikachu who seeks to be a detective.', 'PG', 'Action', 2019, 'detective_pikachu.jpg'),
(53, 'Sandy Wexler', 29.99, 12, 'Sandy Wexler is a talent manager working in Los Angeles in the 1990s, diligently representing a group of eccentric clients on the fringes of show business.', 'TV14', 'Comedy', 2017, 'sandy_wexler.jpg'),
(54, 'Shang-Chi and the Legend of the Ten Rings', 12.55, 17, 'Marvel Studios’ SHANG-CHI AND THE LEGEND OF THE TEN RINGS stars Simu Liu as Shang-Chi, who must face the past he thought he left behind and confront his father, leader of the dangerous Ten Rings organization. The film also stars Awkwafina as Shang-Chi’s friend Katy, Meng’er Zhang, Fala Chen, and Florian Munteanu, with Michelle Yeoh as Ying Nan and Tony Leung as Xu Wenwu. SHANG-CHI AND THE LEGEND OF THE TEN RINGS is directed by Destin Daniel Cretton and produced by Kevin Feige and Jonathan Schwartz, with Louis D’Esposito, Victoria Alonso and Charles Newirth serving as executive producers. Screenplay by Dave Callaham & Destin Daniel Cretton & Andrew Lanham. Screen Story by Dave Callaham & Destin Daniel Cretton.', 'PG13', 'Action', 2021, 'shang_chi.jpg'),
(55, 'Shrek', 39.99, 10, 'A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back.', 'PG', 'Comedy', 2001, 'shrek.jpg'),
(56, 'Shrek 2', 39.99, 30, 'Shrek and Fiona travel to the Kingdom of Far Far Away, where Fiona\'s parents are King and Queen, to celebrate their marriage. When they arrive, they find they are not as welcome as they thought they would be.', 'PG', 'Comedy', 2004, 'shrek2.jpg'),
(57, 'Shrek Forever After', 39.99, 9, 'Rumpelstiltskin tricks a mid-life crisis burdened Shrek into allowing himself to be erased from existence and cast in a dark alternate timeline where Rumpelstiltskin rules supreme.', 'PG', 'Comedy', 2010, 'shrek_forever_after.jpg'),
(58, 'Shrek the Third', 39.99, 12, 'Reluctantly designated as the heir to the land of Far, Far Away, Shrek hatches a plan to install the rebellious Artie as the new king while Princess Fiona tries to fend off a coup d\'état by the jilted Prince Charming.', 'PG', 'Comedy', 2007, 'shrek_the_third.jpg'),
(59, 'Sing 2', 6.99, 2, 'Buster Moon and his friends must persuade reclusive rock star Clay Calloway to join them for the opening of a new show.', 'PG', 'Comedy', 2021, 'sing2.jpg'),
(60, 'Sonic the Hedgehog', 21.99, 2, 'After discovering a small, blue, fast hedgehog, a small-town police officer must help him defeat an evil genius who wants to do experiments on him.', 'PG', 'Action', 2020, 'sonic.jpg'),
(61, 'Sonic the Hedgehog 2', 22.99, 4, 'When the manic Dr Robotnik returns to Earth with a new ally, Knuckles the Echidna, Sonic and his new friend Tails is all that stands in their way.', 'PG', 'Action', 2022, 'sonic2.jpg'),
(62, 'Spider-Man: Far From Home', 14.50, 12, 'Following the events of Avengers: Endgame, Spider-Man must step up to take on new threats in a world that has changed forever.', 'PG13', 'Action', 2019, 'far_from_home.jpg'),
(63, 'Spider-Man: Homecoming', 14.99, 8, 'A young Peter Parker/Spider-Man (Tom Holland), who made his sensational debut in Captain America: Civil War, begins to navigate his newfound identity as the web-slinging super hero. Thrilled by his experience with the Avengers, Peter returns home, where he lives with his Aunt May (Marisa Tomei), under the watchful eye of his new mentor Tony Stark (Robert Downey Jr.). Peter tries to fall back into his normal daily routine – distracted by thoughts of proving himself to be more than just your friendly neighborhood Spider-Man – but when the Vulture (Michael Keaton) emerges as a new villain, everything that Peter holds most important will be threatened.', 'PG13', 'Action', 2017, 'homecoming.jpg'),
(64, 'Spider-Man: No Way Home', 14.20, 24, 'For the first time in the cinematic history of Spider-Man, our friendly neighborhood hero\'s identity is revealed, bringing his Super Hero responsibilities into conflict with his normal life and putting those he cares about most at risk. When he enlists Doctor Strange’s help to restore his secret, the spell tears a hole in their world, releasing the most powerful villains who’ve ever fought a Spider-Man in any universe. Now, Peter will have to overcome his greatest challenge yet, which will not only forever alter his own future but the future of the Multiverse.', 'PG13', 'Action', 2021, 'nowayhome.jpg'),
(65, 'That\'s My Boy', 26.49, 22, 'While in his teens, Donny fathered a son, Todd, and raised him as a single parent until Todd\'s 18th birthday. Now Donny resurfaces just before Todd\'s wedding after years apart, sending the groom-to-be\'s world crashing down.', 'R', 'Comedy', 2012, 'thats_my_boy.jpg'),
(66, 'The Avengers', 19.49, 7, 'Marvel makes cinematic history as it unites the Super Hero team of a lifetime. Iron Man (Robert Downey Jr.), Captain America (Chris Evans), The Hulk (Mark Ruffalo) and Thor (Chris Hemsworth) assemble together for the first time ever in this epic, action-packed blockbuster alongside Black Widow (Scarlett Johansson), Hawkeye (Jeremy Renner) and Nick Fury (Samuel L. Jackson). Director Joss Whedon creates an unprecedented masterpiece that has become a global phenomenon. Packed with spectacular special effects and great bonus features, MARVEL\'S THE AVENGERS will thrill your family over and over!', 'PG13', 'Action', 2012, 'theavengers_lob_crd_03.jpg'),
(67, 'The Cobbler', 29.99, 53, 'A cobbler, bored of his everyday life, stumbles upon a magical heirloom that allows him to become other people and see the world in a different way.', 'PG13', 'Comedy', 2014, 'the_cobbler.jpg'),
(68, 'The Do-Over', 29.99, 55, 'Two down-on-their-luck guys decide to fake their own deaths and start over with new identities, only to find the people they\'re pretending to be are in even deeper trouble.', 'TVMA', 'Action', 2016, 'The_Do-Over_Poster.png'),
(69, 'The Hunger Games', 13.99, 3, 'Katniss Everdeen voluntarily takes her younger sister\'s place in the Hunger Games: a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death.', 'PG13', 'Action', 2012, 'hunger_games.jpg'),
(70, 'The Hunger Games: Catching Fire', 15.99, 5, 'Katniss Everdeen and Peeta Mellark become targets of the Capitol after their victory in the 74th Hunger Games sparks a rebellion in the Districts of Panem.', 'PG13', 'Action', 2013, 'hg_catching_fire.jpg'),
(71, 'The Incredible Hulk', 22.99, 4, 'Academy Award® nominee Edward Norton stars as scientist Bruce Banner, a man who has been living in shadows, scouring the planet for an antidote to the unbridled force of rage within him in The Incredible Hulk. When the military masterminds who dream of exploiting his powers force him back to civilization, he finds himself coming face to face with his most formidable foe: the Abomination – a nightmarish beast of pure aggression whose powers match the Hulk\'s own!', 'PG', 'Action', 2008, 'hulk.jpg'),
(72, 'The Longest Yard', 26.78, 83, 'Prison inmates form a football team to challenge the prison guards.', 'PG13', 'Comedy', 2005, 'longest_yard.jpg'),
(73, 'The Meyerowitz Stories', 22.00, 35, 'An estranged family gathers together in New York City for an event celebrating the artistic work of their father.', 'TVMA', 'Comedy', 2017, 'meyerowitz.jpg'),
(74, 'The Ridiculous 6', 41.39, 13, 'An outlaw who was raised by Native Americans discovers that he has five half-brothers. Together the men go on a mission to find their wayward, deadbeat dad.', 'TV14', 'Action', 2015, 'the6.jpg'),
(75, 'The Week Of', 39.99, 1, 'Two fathers with opposing personalities come together to celebrate the wedding of their children. They are forced to spend the longest week of their lives together, and the big day cannot come soon enough.', 'TV14', 'Comedy', 2018, 'theweekof.jpg'),
(76, 'Thor', 17.99, 11, 'The world has many heroes...but only one is a god. When the arrogant warrior Thor (Chris Hemsworth, STAR TREK) is banished to Earth from his homeworld of Asgard, he must fight to reclaim his lost powers. Pursued by an invasion force sent to destroy him, the fallen God of Thunder must rise to the battle and learn what it takes to become a true hero.', 'PG13', 'Action', 2011, 'thor.jpg'),
(77, 'Thor: Ragnarok', 13.95, 6, 'In Marvel Studios’ \'Thor: Ragnarok,\' Thor is imprisoned on the other side of the universe without his mighty hammer and finds himself in a race against time to get back to Asgard to stop Ragnarok—the destruction of his homeworld and the end of Asgardian civilisation—at the hands of an all-powerful new threat, the ruthless Hela. But first he must survive a deadly gladiatorial contest that pits him against his former ally and fellow Avenger—the Incredible Hulk!', 'PG13', 'Action', 2017, 'thor_ragnarok.jpg'),
(78, 'Thor: The Dark World', 20.99, 45, 'Marvel’s \"Thor: The Dark World\" continues the adventures of Thor, the Mighty Avenger, as he battles to save Earth and all the Nine Realms from a shadowy enemy that predates the universe itself. In the aftermath of Marvel’s \"Thor\" and \"Marvel’s The Avengers,\" Thor fights to restore order across the cosmos...but an ancient race led by the vengeful Malekith returns to plunge the universe back into darkness. To defeat an enemy that even Odin and Asgard cannot withstand, Thor sets upon his most dangerous and personal journey yet, forced into an alliance with the treacherous Loki to save not only his people and those he loves…but our universe itself.', 'PG13', 'Action', 2013, 'thor_the_dark_world.jpg'),
(79, 'Top Gun', 30.00, 42, 'As students at the United States Navy\'s elite fighter weapons school compete to be best in the class, one daring young pilot learns a few things from a civilian instructor that are not taught in the classroom.', 'PG', 'Action', 1986, 'top-gun-2.jpg'),
(80, 'Top Gun: Maverick', 100.00, 60, 'After more than thirty years of service as one of the Navy\'s top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him.', 'PG13', 'Action', 2022, 'Top_Gun_Maverick_Poster.jpg'),
(81, 'Uncut Gems', 39.99, 40, 'With his debts mounting and angry collectors closing in, a fast-talking New York City jeweler risks everything in hope of staying afloat and alive.', 'R', 'Drama', 2019, 'Uncut_Gems_poster.jpg'),
(82, 'Up', 4.99, 5, '78-year-old Carl Fredricksen travels to Paradise Falls in his house equipped with balloons, inadvertently taking a young stowaway.', 'PG', 'Comedy', 2009, 'up.jpg'),
(83, 'Zookeeper', 39.99, 40, 'A group of zoo animals decide to break their code of silence in order to help their lovable zookeeper find love, without opting to leave his current job for something more illustrious.', 'PG', 'Comedy', 2011, 'zookeeper.jpg'),
(85, 'Sing', 4.99, 2, 'In a city of humanoid animals, a hustling theater impresarios attempt save his theater a singing competition becomes grander than he anticipates even as its finalists find that their lives will never be the same.', 'PG', 'Comedy', 2016, 'sing.jpg'),
(87, 'Paws of Fury: The Legend of Hank', 10.99, 4, 'Hank, a loveable dog with a head full of dreams about becoming a samurai, sets off in search of his destiny.', 'PG', 'Comedy', 2022, 'pawsoffury.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `OrderItem`
--

CREATE TABLE `OrderItem` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `OrderItem`
--

INSERT INTO `OrderItem` (`OrderID`, `UserID`, `ProductID`, `Quantity`) VALUES
(1, 1, 6, 1),
(1, 1, 16, 1),
(1, 1, 11, 1),
(2, 1, 3, 1),
(2, 1, 4, 1),
(3, 1, 1, 3),
(4, 1, 2, 1),
(5, 1, 1, 1),
(6, 1, 2, 1),
(7, 1, 1, 1),
(7, 1, 6, 1),
(7, 1, 60, 2),
(8, 1, 37, 2),
(9, 1, 37, 1),
(10, 1, 74, 1),
(11, 1, 39, 1),
(11, 1, 50, 2),
(12, 1, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`OrderID`, `UserID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `UserData`
--

CREATE TABLE `UserData` (
  `UserID` int(255) NOT NULL,
  `Username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `UserData`
--

INSERT INTO `UserData` (`UserID`, `Username`, `Email`, `Password`) VALUES
(1, 'wojcikm', 'wojcikm@uwindsor.ca', 'Shoppy'),
(10, 'schneidm', 'schneidm@uwindsor.ca', 'Soccer#120'),
(11, 'schneidm', 'michael1schnei@gmail.com', 'Soccer*119'),
(13, 'Testuser1234', 'test@gmail.com', 'Shoppy123!@#'),
(14, 'brandonnjm', 'maill11f@uwindsor.ca', 'Banana123!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `UserData`
--
ALTER TABLE `UserData`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Inventory`
--
ALTER TABLE `Inventory`
  MODIFY `ProductID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `UserData`
--
ALTER TABLE `UserData`
  MODIFY `UserID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
