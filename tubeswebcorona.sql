-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 08:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswebcorona`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `idArtikel` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idArtikel`, `penulis`, `judul`, `isi`) VALUES
(1, 'Rory Sullivan, CNN', 'Spain\'s coronavirus death toll rises to over 20,000', 'The Spanish Ministry of Health confirmed Saturday that more than 20,000 people have now died from coronavirus in the country.\r\n\r\nOnly the US and Italy have recorded more deaths from Covid-19 than Spain.\r\nThe nation\'s official death toll currently stands at 20,043, a rise of 565 from the number recorded Friday.\r\nThe percentage increase of 2.9% is in line with the daily results of the past week.\r\nHowever, Spanish authorities have said they are bringing in a new system for reporting cases and are also increasing testing, which may mean that the data fluctuates.\r\nThe region of Catalonia recently declared that its number of cases and deaths was higher than previously thought, after adopting a new formula to assess the impact of Covid-19.\r\nEarlier this week, the Spanish government decided to ease some of the restrictions after a month of national lockdown.\r\nThose unable to work from home, including people in the construction and manufacturing industries, were allowed to return to their jobs.\r\nIt is thought that around 300,000 nonessential workers returned to work in the Madrid region on Monday, a spokesperson for Madrid\'s regional government told CNN.\r\nShops, bars, restaurants and other nonessential businesses are still shut, with the country\'s state of emergency expected to last until at least April 26.\r\nLast week, Prime Minister Pedro Sanchez stressed that the nation\'s return to normal activity will be \"progressive\" and will occur in phases.\r\n\"The climb has been difficult, the descent will also be,\" Sanchez told parliament.\r\nSome opposition politicians criticized the government\'s decision to ease restrictions, with Quim Torra, president of Catalonia, calling it \"irresponsible and reckless.\"\r\nHe made the comments in a video statement posted to his verified Twitter account.\r\nJesus Vaquero, one the country\'s most prominent doctors, was among those who have died from the virus in Spain in recent days.\r\nVaquero, a leading specialist in back surgery, was working as head of neurosurgery at the Puerta del Hierro Hospital in Madrid.\r\nAccording to Johns Hopkins University, there have been more than 2.25 million cases of Covid-19 globally and at least 154,000 deaths caused as a result of it.'),
(2, 'Yudha Baskoro, JakartaGlobe', 'Jokowi Calls on Districts to Boost Testing as Coronavirus Cases Surpass 6,000', 'President Joko “Jokowi” Widodo instructed all governors, district heads and mayors to intensify screening for coronavirus in their respective regions as confirmed cases continued to grow and reached 6,248 on Saturday.\r\n\r\nThe central government cannot work alone but it needs support from its regional arms until the smallest unit of the administration to tackle the outbreak, the president said in a video message.\r\n\r\n“I need to tell all regional governments to ramp up testing massively and trace contacts aggressively, to be followed by strict isolation procedures [in confirmed cases],” the president said in the two-minute video published by the State Secretariat.\r\n\r\n“The government cannot work alone. Participation by all elements of the community is very crucial. This is not easy to us all but I certainly believe we can get through this ordeal together and come out stronger as a nation,” he said.\r\n\r\nJokowi has ordered health officials to conduct at least 10,000 tests nationwide per day. Since the first cases were confirmed early last month, Indonesia has conducted less than 50,000 tests.\r\n\r\nEarlier in the day, the Covid-19 Task Force said confirmed cases increased by 325 after a record high of 407 a day earlier. Given the highly fluctuating new cases daily, it remains hard to predict when the country’s outbreak will reach its peak.\r\n\r\nTask force spokesman Achmad Yurianto said 24 patients have fully recovered over the last 24 hours to bring the total recovery to 631, but the death toll also increased by 15 to 535.\r\n\r\nJakarta remains the country’s epicenter of the outbreak with 2,092 confirmed cases and 257 deaths, while only 206 patients have recovered.\r\n\r\nThe Foreign Affairs Ministry reported on Friday that at least 394 Indonesian citizens had contracted the infectious illness in foreign countries. In India alone, 75 Indonesians have tested positive for the virus after participating in a Muslim pilgrimage. \r\n\r\nForeign Minister Retno Marsudi said 717 Indonesian Muslims had joined the pilgrimage and remained in India. As both countries are imposing travel restrictions, evacuations of the Indonesian citizens could not immediately commence.'),
(3, 'Jeanna Bryner - Live Science Editor-in-Chief', 'Wuhan lab says there\'s no way coronavirus originated there. Here\'s the science.', 'An unprecedented amount of research has been focused solely on understanding the novel coronavirus that has taken nearly 150,000 lives across the globe. And while scientists have gotten to know some of the most intimate details of the virus called SARS-CoV-2, one question has evaded any definitive answers — Where did the virus come from?\r\n\r\nLive Science contacted several experts, and the reality, they said, is that we may never know where this deadly coronavirus originated. Among the theories circulating: That SARS-CoV-2 arose naturally, after passing from bats to a secondary animal and then to humans; that it was deliberately engineered and then accidentally released by humans; or that researchers were studying a naturally-occurring virus that subsequently escaped from a high-security biolab, the Wuhan Institute of Virology (WIV) in China. The head of the lab at WIV, for her part, has emphatically denied any link to the institute. \r\n\r\nJust today (April 18), the vice director of WIV Zhiming Yuan CGTN, the Chinese state broadcaster, said \"there is no way this virus came from us,\" NBC News reported. \"We have a strict regulatory regime and code of conduct of research, so we are confident.\"\r\n\r\nFurthermore, the notion that SARS-CoV-2 was genetically engineered is pure conspiracy, experts told Live Science, but it\'s still impossible to rule out the notion that Chinese scientists were studying a naturally-occurring coronavirus that subsequently \"escaped\" from the lab. To prove any of these theories takes transparent data and information, which is reportedly not happening in China, scientists say. Several experts have said to Live Science and other media outlets have reported that the likeliest scenario is that SARS-CoV-2 is naturally occurring.\r\n\r\n\"Based on no data, but simply [a] likely scenario is that the virus went from bats to some mammalian species, currently unknown despite speculation, [and] spilled over to humans,\" said Gerald Keusch, associate director of the Boston University National Emerging Infectious Diseases Laboratories. This spillover event may have happened before the virus found its way into a live animal market, \"which then acted as an amplifying setting with many more infections that subsequently spread and the rest is history,\" Keusch said. \"The timeline is fuzzy and I don\'t think we have real data to say when these things began, in large part because the data are being held back from inspection,\" Keusch told Live Science.'),
(4, 'The New York Times', 'Germany Starts Broad Antibody Testing to Assess Spread of Coronavirus; Israel Relaxes Restrictions', 'While other nations are still struggling to test for infections, Germany is doing that and more. It is aiming to sample the entire population for antibodies in coming months, hoping to gain valuable insight into how deeply the virus has penetrated the society at large, how deadly it really is, and whether immunity might be developing.\r\n\r\nIn Munich, residents of 3,000 households chosen at random are being asked to allow monthly blood tests for Covid-19 antibodies for a year. It’s an ambitious study whose central aim is to understand how many people — even those with no symptoms — have already had the virus, a key variable to make decisions about public life in a pandemic.\r\n\r\nThe Munich research is the largest of several regional studies being rolled out in various corners of the country, which has become a leader among Western nations figuring out how to control the contagion while returning to something resembling normal life.\r\n\r\nThe government hopes to use the findings to unravel a riddle that will allow Germany to move securely into the next phase of the pandemic: Which of the far-reaching social and economic restrictions that have slowed the virus are most effective and which can be safely lifted?\r\n\r\nThe same questions are being asked around the world. Other countries like Iceland and South Korea have tested broadly for infections, or combined testing with digital tracking to undercut the spread of the virus. But even the best laid plans can go awry; Singapore attempted to reopen only to have the virus re-emerge.\r\n\r\nThe antibody testing has its limits. Scientists caution that there is no proof yet that the detection of antibodies signals effective immunity. And even antibodies were proven to offer immunity, there is no clarity on how long it might last.'),
(5, 'Emiko Jozuka, CNN', 'Japanese medical workers fear the worst as coronavirus cases spike', 'Ayako Kajiwara is scared Japan\'s medical system isn\'t prepared for what might happen next.\r\n\r\nShe\'s the lead nurse at a hospital in Saitama prefecture and is witnessing firsthand the strain on an intensive care unit that\'s treating critically ill coronavirus patients.\r\n\"It\'s hard because we think the patient is improving, but then they\'ll suddenly take a turn for the worse,\" she said.\r\nIn the past few weeks, Japan\'s coronavirus cases have spiked -- dashing hopes that the government\'s initial virus response had succeeded in controlling its spread. As of Friday, Japan had 9,787 confirmed cases, including 190 deaths, according to Johns Hopkins University. On March 1, the country had 243 cases.\r\nThe sharp increase has prompted Prime Minister Shinzo Abe to extend the state of emergency from seven prefectures to the entire country. On Friday, he also promised to provide medical equipment such as surgical masks, gowns and face shields to hospitals struggling with acute gear shortages within a week.\r\nEarlier this week, a team of government experts warned that Japan could have more than 400,000 coronavirus-related deaths if measures such as social distancing are not taken.\r\nBut most deaths, they warned, could result from a lack of ventilators.\r\nThe shortage of medical supplies became clear this week when Osaka mayor Ichiro Matsui urged people to donate unused raincoats for health workers to use as personal protective equipment, after they\'d been forced to wear trash bags.\r\nExperts say medical shortages combined with comparatively low testing rates and Japan\'s lack of provision for teleworking threatens to create a potentially explosive uptick in cases.'),
(8, 'Thereis Love Kalla', 'Bio Farma to Produce Locally-Made PCR Test Kits for Covid-19', 'State-controlled pharmaceutical holding company Bio Farma is set to produce a real-time polymerase chain reaction testing kit for detecting Sars-CoV-2, the novel coronavirus that causes the Covid-19 disease, based on a prototype developed by Indonesian startup company Nusantics.\r\n\r\nHonesti Basyir, Bio Farma\'s president director, said the company would receive the prototype soon and use it for mass production using the company\'s production facility in Bandung.\r\n\r\nHonesti said Bio Farma is capable of producing 15,000 test kits packed in 600 boxes per day.\r\n\r\n\"We will receive the prototype soon from Indonesian startup company Nusantics,\" Honesti said in a statement on Monday. \r\n\r\n\"We will mass-produce the test kit in large quantities at our existing production facilities. We\'ll do everything from testing to quality control, packaging and distribution,\" Honesti said. \r\n\r\nIndonesia currently relies on imported Covid-19 testing kits, limiting its capability to detect and trace the coronavirus, which has infected more than 7100 people and killed 616 in the country.\r\n\r\nSo far the Covid-19 Task Force has not been able to achieve the target of 10,000 PCR tests per day set by President Joko \"Jokowi\" Widodo. \r\n\r\nEstablished in 2019, Nusantics has been developing genomics-based tech for local skincare products.\r\n\r\nThe company secured an undisclosed amount of seed capital from venture capital East Ventures in March.\r\n\r\nOn March 30, East Ventures started the \"Pasti Bisa\" initiative to raise funds for Nusantics\' involvement in developing the coronavirus testing kits as part of the Covid-19 Research and Technology Innovation Task Force (TFRIC19) formed by Indonesia\'s Technology Assessment and Application Agency (BPPT).\r\n\r\nNusantics completed a working prototype for the test kit on April 9, according to a statement from East Ventures.\r\n\r\nThe prototype, called Nusantara TFRIC19, uses genomic information from the Sars-CoV-2 Asia strains for its development and validation. \r\n\r\nEast Venture said the Pasti Bisa initiative had raised Rp 6.98 billion from around 1,300 donors by April 7 out of its target of Rp 10 billion.\r\n\r\nThe initiative would disburse Rp 5 billion to buy primers, probes and master-mixes to produce 50,000 test kits, the venture capital company said in a statement. \r\n\r\nWilson Cuaca, East Venture\'s co-founder and managing partner, said the raw materials would arrive at the Bio Farma plant within the next two or three weeks.\r\n\r\n\"Hopefully, this will be a good start for building a sustainable, resilient Indonesian healthcare,\" Willson said. \r\n\r\nBPPT Head Hammam Riza said the institution has worked in close coordination with the Eijkman Molecular Biology Institute to gain access to the Indonesian Covid-19 RNA sample. The sample was key for validating Nusantics\'s test kit. \r\n\r\nAlso, Hammam said he greatly appreciated the donation from the East Venture initiative that allowed the test kit\'s development to move quickly. \r\n\r\n\"Community donations through the Pasti Bisa initiative have given us an extraordinary boost to produce our own domestically produced PCR test kit. This will definitely strengthen our ability to deal with the Covid-19 pandemic,\" Hammam said. ');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id` int(100) NOT NULL,
  `namaKampus` varchar(200) NOT NULL,
  `jumlahTerjangkit` int(100) NOT NULL,
  `jumlahMeninggal` int(100) NOT NULL,
  `jumlahSembuh` int(100) NOT NULL,
  `jumlahODP` int(100) NOT NULL,
  `jumlahPDP` int(100) NOT NULL,
  `jumlahODR` int(100) NOT NULL,
  `rsTerdekat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id`, `namaKampus`, `jumlahTerjangkit`, `jumlahMeninggal`, `jumlahSembuh`, `jumlahODP`, `jumlahPDP`, `jumlahODR`, `rsTerdekat`) VALUES
(1, 'Telkom University', 1, 1, 0, 0, 0, 0, 'Rumah Sakit 1'),
(2, 'University of Indonesia', 1, 0, 0, 0, 0, 0, 'Rumah Sakit 1'),
(3, 'Parahyangan University', 0, 0, 1, 0, 0, 0, 'Rumah Sakit 1'),
(5, 'President University', 1, 0, 0, 0, 0, 0, 'RS'),
(6, 'Bandung Institute of Technology', 0, 0, 0, 0, 0, 0, 'Rumah Sakit 1');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `namaPasien` varchar(100) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tglLahir` date NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `kampusAsal` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `namaPasien`, `tempatLahir`, `tglLahir`, `jenisKelamin`, `kampusAsal`, `kondisi`) VALUES
(1, 'Pooja Xiong', 'Batang', '2000-01-08', 'Female', 'Telkom University', 'Positif'),
(2, 'Thierry Mustafa', 'Jakarta', '1998-05-27', 'Female', 'Telkom University', 'Meninggal'),
(3, 'Leyton Castaneda', 'Ohio', '1999-02-18', 'Female', 'University of Indonesia', 'Meninggal'),
(4, 'David Rivers', 'Batam', '1998-10-12', 'Male', 'Parahyangan University', 'Sembuh'),
(6, 'Saito Asuka', 'Medan', '1999-05-17', 'Female', 'President University', 'Positif');

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id` int(30) NOT NULL,
  `namaRs` varchar(100) NOT NULL,
  `jumlahApd` int(30) NOT NULL,
  `kamarTersedia` int(30) NOT NULL,
  `jumlahStaffMedis` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`id`, `namaRs`, `jumlahApd`, `kamarTersedia`, `jumlahStaffMedis`) VALUES
(1, 'Rumah Sakit 1', 90, 25, 91);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`) VALUES
(1, 'Admin', '123'),
(2, 'Ilham', 'qwerty'),
(3, 'Hadi', '456'),
(4, 'Made', 'qwerty'),
(5, 'Ivan', 'zxcv'),
(6, 'Nabil', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`idArtikel`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `idArtikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
