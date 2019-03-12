-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2016 at 04:45 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evolvele_evolve`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(225) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` text,
  `role` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `regi_date` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `first_name`, `last_name`, `user_name`, `email`, `dob`, `gender`, `number`, `password`, `address`, `role`, `photo`, `regi_date`, `status`) VALUES
(1, 'akhilesh', 'prajapati', 'akhilesh', 'akhilesh@evolvelearningsolutions.com', '1994-10-29', 'Male', '', '21232f297a57a5a743894a0e4a801fc3', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     Ahmedabad                                                                                                                           \r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'Main Admin', 'logo_(2).png', NULL, 1),
(5, 'Learn', 'More', 'learnmore', 'learnmore@evolvelearningsolutions.com', '', 'Male', '', 'e19d5cd5af0378da05f63f891c7467af', '                                                                                                                                        \r\n                                                                                                                                ', 'Sub Admin', 'Nature.jpg', '2016/08/08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(211) NOT NULL,
  `menuDesc` longtext,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `metaTitle` text,
  `metaDescription` text,
  `metaKeywords` text,
  `name` varchar(255) DEFAULT NULL,
  `blog_desc` longtext,
  `date` varchar(200) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `menuDesc`, `image`, `status`, `metaTitle`, `metaDescription`, `metaKeywords`, `name`, `blog_desc`, `date`, `title`) VALUES
(1, '', 'StayTuned500x5002-Recovered1.png', 1, 'sss', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          \r\nsss\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                        ', 'sss', 'Stay tuned for this space', '', '2016-06-18', 'Stay tuned for this space');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `metaKeywords` varchar(255) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `metaTitle`, `metaDescription`, `metaKeywords`, `status`) VALUES
(3, 'HINDI-KARAOKES', '', '', '                                                                                                                                                                                 ', '                                                                                                                                                                                       ', 1),
(4, 'MALAYALAM-CHRISTIAN-DEVOTIONAL-KARAOKE', '', '', '', '', 1),
(5, 'MALAYALAM-MOVIE-KARAOKE', '', '', '', '', 1),
(6, 'TAMIL-KARAOKE', '', '', '', '', 1),
(7, 'mix1', '', '', '                                            \r\n                                        ', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE IF NOT EXISTS `expertise` (
  `menuName` varchar(255) DEFAULT NULL,
  `menuDesc` longtext,
  `menuUrl` varchar(255) DEFAULT NULL,
  `menuType` varchar(255) DEFAULT NULL,
  `menuTargetWindow` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `metaTitle` text,
  `metaDescription` text,
  `metaKeywords` text,
  `id` int(255) NOT NULL,
  `image_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`menuName`, `menuDesc`, `menuUrl`, `menuType`, `menuTargetWindow`, `image`, `status`, `metaTitle`, `metaDescription`, `metaKeywords`, `id`, `image_2`) VALUES
('Training Delivery', '<p>Online or Onsite...We all know the outcome of a well trained and knowledgeable workforce &ndash; efficient and productive. Training could be for new staff, improving performance for existing staff, educating staff about a new policy or product, it is imperative that all learning intervention efforts begin with a complete business analysis and end with an in place impact evaluation strategy or ROI. Online or On-site, knowledge, skill or attitude (KSA), our learning programs are designed keeping in mind the different adult learning modalities with the use of various delivery options and media which ensures a well trained and better equipped workforce to realize your business goals.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'TrainingDelivery', NULL, 'Online or Onsite...', 'training-delivery1.jpg', 1, 'eee', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        \r\neee\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                        ', 'eee', 1, 'training-delivery.jpg'),
('Performance Improvement', '<p>To stand out from the rest, we need to continuously improve our performance and sustain that improvement. Result based and systematic approach is how we go about our business. Our approach is driven by a business need, performance need and is dependent on the cause analysis. The line of demarcation is really the cause analysis as we rely on assessment and analysis and not assumptions. The word systematic approach comes into picture here -&nbsp;business analysis, performance gap analysis, root cause analysis followed by the right intervention selection to impact evaluation. &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'PerformanceImprovement', NULL, 'Result based, systematic approach...', 'performance-improvement.jpg', 1, '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                        ', '', 2, 'performance-improvement1.jpg'),
('Instructional Design', '<p>Moving from ADDIE to SAM, we follow the latest ISD models created by the Gurus of our industry.The idea is to produce the best learning experience using the available resources.We follow the process that enables our stakeholders to provide feedback and suggest changes throughout the design and development stage rather than waiting to react on the performance of the finished product. Again, the fundamentals and our principle remain unchanged &ndash; understand the business drivers, conduct a thorough needs analysis, choose the appropriate intervention solution, implement solution and evaluate the impact. &nbsp; &nbsp;</p>\r\n', 'InstructionalDesign', NULL, 'Moving from ADDIE to SAM...', 'instructional-design.jpg', 1, '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                        ', '', 3, 'instructional-design1.jpg'),
('Coaching', '<p>Coaching is essential to enable our employees become better performers and for us it is about focusing on the identified goals, emphasize on action, accountability and follow up. An environment of trust, clear communication, and combination of evaluative and developmental feedback is how we go about our business.And at the end we make sure to&nbsp;reward achievements and&nbsp;celebrate success.</p>\r\n', 'Coaching', NULL, 'Goals, action, accountability and follow up...', 'coaching2.jpg', 1, '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                        ', '', 4, 'coaching.jpg'),
('Knowledge Management', '<p>Knowledge management saves and disseminates intellectual capital that promotes knowledge sharing and teamwork in an organization. Collecting, storing and sharing knowledge is imperative for the success of an organization. We assist in building a Centralized knowledge database that encourages knowledge sharing and collaboration which results in an informed employee pool and increased efficiency. A knowledge culture and an environment of continuous learning is what we advocate and practice.<br />\r\n<br />\r\nWhile planning and working on these areas our terminal objective would always be strategic and financial gains for your business by bringing about uniformity of knowledge gained by the employees, the ability to apply the knowledge gained on their jobs, better informed and equipped to perform in a live environment and by helping them understand their role in the business.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'KnowledgeManagement', NULL, 'Collecting, storing and sharing knowledge...', 'knowledge.jpg', 1, '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                          \r\n\r\n                                        ', '', 5, 'knowledge1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(211) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_desc` varchar(255) DEFAULT NULL,
  `date` varchar(211) DEFAULT NULL,
  `status` int(211) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `image`, `image_desc`, `date`, `status`, `Position`) VALUES
(5, 'Automotive', 'Automotive-Dealership.jpg', '', '2016/05/23', 1, '0'),
(6, 'BPO ITES', 'bpo1.jpg', '<p>BPO ITES</p>\r\n', '2016/05/23', 1, '0'),
(10, 'Call Centre', 'CallCentre1.jpg', '', '2016/05/23', 1, '0'),
(11, 'Telecom', 'telecom.jpg', '', '2016/05/23', 1, '0'),
(12, 'Hospitality', 'Hospitality.jpg', '', '2016/05/23', 1, '0'),
(13, 'Healthcare', 'Healthcare.jpg', '', '2016/05/23', 1, '0'),
(14, 'Hydrocarbon', 'hydrocarbon.jpg', '', '2016/05/23', 1, '0'),
(15, 'Refinery', 'Refinery.jpg', '', '2016/05/23', 1, '0'),
(17, 'ga1', 'ga1.JPG', '', '2016/06/10', 1, '1'),
(18, 'ga1', 'ga2.JPG', '', '2016/06/10', 1, '1'),
(19, 'ga3', 'ga3.JPG', '', '2016/06/10', 1, '1'),
(20, 'ga4', 'ga4.JPG', '', '2016/06/10', 1, '1'),
(21, 'ga5', 'ga5.JPG', '', '2016/06/10', 1, '1'),
(22, 'ga1', 'ga6.JPG', '', '2016/06/10', 1, '1'),
(23, 'ga1', 'ga7.JPG', '', '2016/06/10', 1, '1'),
(24, 'ga1', 'ga8.JPG', '', '2016/06/10', 1, '1'),
(25, 'ga1', 'ga9.JPG', '', '2016/06/10', 1, '1'),
(26, 'ga1', 'ga10.jpg', '', '2016/06/10', 1, '1'),
(27, 'ga1', 'ga11.jpg', '', '2016/06/10', 1, '1'),
(28, 'ga1', 'ga121.jpg', '', '2016/06/10', 1, '1'),
(29, 'ga1', 'ga13.jpg', '', '2016/06/10', 1, '1'),
(30, 'ga1', 'ga14.jpg', '', '2016/06/10', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(211) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` int(211) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `date`, `status`) VALUES
(5, 'logo.png', '2016/05/11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menumgr`
--

CREATE TABLE IF NOT EXISTS `menumgr` (
  `id` int(11) NOT NULL,
  `sub_menu` int(211) DEFAULT NULL,
  `menuName` varchar(255) NOT NULL,
  `menuPosition` varchar(255) NOT NULL,
  `menuDesc` longtext NOT NULL,
  `menuUrl` varchar(255) NOT NULL,
  `menuType` varchar(255) NOT NULL,
  `menuTargetWindow` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `metaTitle` text NOT NULL,
  `metaDescription` text NOT NULL,
  `metaKeywords` text NOT NULL,
  `desc1` longtext,
  `desc2` longtext
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menumgr`
--

INSERT INTO `menumgr` (`id`, `sub_menu`, `menuName`, `menuPosition`, `menuDesc`, `menuUrl`, `menuType`, `menuTargetWindow`, `image`, `status`, `metaTitle`, `metaDescription`, `metaKeywords`, `desc1`, `desc2`) VALUES
(5, 0, 'About Us', 'main', '<p>Evolve Learning Solutions collaborates to achieve perceptible results and cordial goodwill both for your customers and employees,which means a changed mindset of your workforce with a raring to go attitude to help you achieve the landmarks for your business and in the process for themselves too. After all, it&rsquo;s our people who help us thrive.</p>\r\n\r\n<p>My past association with the offshore industry allows me to bring a rich set of experience and expertise that will promote your organizational growth and help you realize your business goals. The 12 years long stint gave me the opportunity to interact with the end users of various domains like Telecom, Internet Service Providers, Mortgage Industry (to name a few) which has helped me evolve not just professionally but as a person as well.</p>\r\n', 'about', 'Detail', '#', 'about.png', 1, 'About Us - http://www.evolvelearningsolutions.com/', '                                          About Us - Meta Description  \r\n\r\n                                        ', 'About Us - Meta Keywords', '<p>Believing and practicing phrases like &ldquo;Put yourself in the customers&rsquo; shoes&rdquo;, Treat every customer as if he is the only customer to your business&rdquo; are very simple yet powerful tools if applied and driven in the business. Facilitated and managed new hire as well as need based training for various businesses and hold the most highly regarded certification in the learning and development fraternity (CPLP&reg;). Significant industry experience and pertinent credentials of the highest order makes us a powerhouse of learning delivery, performance management and consulting capability.</p>\r\n\r\n<p>We aim to collaborate and leverage our skill and experience to achieve the strategic and financial goals of your organization.</p>\r\n', '<p>All our learning interventions are designed based on&nbsp;thorough needs analysis followed by the right solution selection, implementation and concluded by a detailed impact evaluation study. We practice and preach:</p>\r\n\r\n<ol>\r\n	<li>&nbsp; Integrity at all times.</li>\r\n	<li>&nbsp; Deliver as committed.</li>\r\n	<li>&nbsp; Excellence in everything we do.</li>\r\n	<li>&nbsp; Confidentiality and trust at all times.</li>\r\n	<li>&nbsp; Adapt in the ever changing environment.</li>\r\n</ol>\r\n'),
(6, 0, 'The Skill', 'main', '<p>Having interacted with the end users for various businesses, facilitated and managed training for multiple domains we understand the learning and performance improvement strategies that are to be designed for your business. These interventions are based on a structured needs analysis and are in sync with your business needs and strategic goals.</p>\r\n', 'expertise', 'Detail', '#', 'about1.png', 1, 'The Skill', '                                          The Skill - Meta Description  \r\n\r\n                                        ', 'The Skill - Meta Keywords', '', ''),
(7, 6, 'Training Delivery', 'header', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(105, 105, 105); font-family:calibri; font-size:17px">We all know the outcome of a well trained and knowledgeable workforce &ndash; efficient and productive. Training could be for new staff, improving performance for existing staff, educating staff about a new policy or product, it is imperative that all learning intervention efforts begin with a complete business analysis and end with an in place impact evaluation strategy or ROI. Online or On-site, knowledge, skill or attitude (KSA), our learning programs are designed keeping in mind the different adult learning modalities with the use of various delivery options and media which ensures a well trained and better equipped workforce to realize your business goals.</span></p>\r\n', 'demo', 'Detail', '#', 'expert1.jpg', 1, 'Training Delivery', '                                          Training Delivery - Meta Description  \r\n\r\n                                        ', 'Training Delivery - Meta Keywords', '', ''),
(8, 6, 'Performance Improvement', 'header', '<p><br />\r\n&nbsp;</p>\r\n', 'demo', 'Detail', '#', '', 1, 'Performance Improvement', '                                          Performance Improvement - Meta Description  \r\n\r\n                                        ', 'Performance Improvement - Meta Keywords', '', ''),
(9, 6, 'Instructional Design', 'header', '', 'demo', 'Detail', '#', '', 1, 'Instructional Design', '                                          Instructional Design - Meta Description  \r\n\r\n                                        ', 'Instructional Design - Meta Keywords', '', ''),
(10, 6, 'Knowledge Management', 'header', '', 'demo', 'Detail', '#', '', 1, 'Knowledge Management', '                                          Knowledge Management - Meta Description  \r\n\r\n                                        ', 'Knowledge Management - Meta Keywords', '', ''),
(11, 6, 'Coaching', 'header', '', 'demo', 'Detail', '#', '', 1, 'Coaching', '                                          Coaching - Meta Description  \r\n\r\n                                        ', 'Coaching - Meta Keywords', '', ''),
(12, 0, 'The Approach', 'main', '<p>The idea is to keep it simple yet innovative and effective at all times. Be it a learning program to develop new skills or a performance improvement plan to improve individual and organizational performance, our learning methodology will always be in relation to the organizational goals.</p>\r\n\r\n<p>We follow a result&nbsp;based structured approach and start with a business analysis to identify the organizational goals and the related training needs.</p>\r\n\r\n<p>Our training programs are designed based on a thorough needs analyses followed by selection of the most appropriate intervention program. The most important aspect comes next, which is evaluation of learning impact.</p>\r\n\r\n<p>Our program models and methodology are based on the process flow given below.&nbsp;</p>\r\n', 'Methodology', 'Detail', '#', 'methodology.png', 1, 'The Approach', '                                          The Approach - Meta Description  \r\n\r\n                                        ', 'The Approach - Meta Keywords', '', ''),
(13, 0, 'Training Programs', 'main', '<p>This is not an exhaustive list,we provide custom learning solutions for industries like automotive, telecom, healthcare, call center/offshore industry, hotel industry,etc.</p>\r\n\r\n<p>All our learning programs are tied to your business goals and are in sync with your organizational strategy.</p>\r\n\r\n<p>Our learning programs&nbsp;are highly interactive with a blend of audio/video clips and role play activities.&nbsp;</p>\r\n', 'program', 'Detail', '#', 'training_img.jpg', 1, 'Training Programs', '                                          Training Programs - Meta Description  \r\n\r\n                                        ', 'Training Programs - Meta Keywords', '', ''),
(14, 0, 'Gallery', 'main', '', 'Gallery', 'Detail', '#', '', 1, 'Gallery', '                                          Gallery - Meta Description  \r\n\r\n                                        ', 'Gallery - Meta Keywords', '', ''),
(15, 0, 'Blog', 'main', '', 'Blog', 'Detail', '#', '', 1, 'Blog', '                                          Blog - Meta Description  \r\n\r\n                                        ', 'Blog - Meta Keywords', '', ''),
(17, 5, 'Vision', 'footer', '<p>To be a top notch and most sought after learning and performance consulting service provider in the service industry by promoting a culture of consistent performance excellence through continuous learning and knowledge sharing.</p>\r\n', 'demo', 'Detail', '#', 'project-09.jpg', 1, 'Vision', '                                          Vision - Meta Description  \r\n\r\n                                        ', 'Vision - Meta Keywords', '', ''),
(18, 5, 'Mission', 'footer', '<p>We aim to partner and enable organizations in exceeding performance threshold and delivering beyond their commitment of quality service.</p>\r\n', 'demo', 'Detail', '#', 'project-08.jpg', 1, 'Mission - Meta Title', 'Mission - Meta Description', 'Mission - Meta Keywords', '', ''),
(19, 0, 'Testimonials', 'main', '', 'testimonials', 'Detail', '#', '', 1, 'Testimonials', '                                          Testimonials - Meta Description  \r\n\r\n                                        ', 'Testimonials - Meta Keywords', '', ''),
(20, 0, 'Contact Us', 'main', '', 'Contact', 'Detail', '#', '', 1, 'Contact', '                                          Contact - Meta Description  \r\n\r\n                                        ', 'Contact - Meta Keywords', '', ''),
(21, 0, 'Home', 'main', '', 'home', 'Detail', '#', '', 1, 'Corporate Training, Customer Service, Management & Leadership Training Ahmedabad, Delhi NCR', 'Corporate Training in Ahmedabad, Delhi NCR, Management & Leadership Training, Customer Service, Hospitals Customer Service, Automotive Dealership Training, Behavioural, Petroleum Rules Training, OISD Standard Training Programs Services.\r\n                                          \r\n\r\n                                        ', 'Corporate training, management & leadership, customer service training, automotive dealership training, oisd standard training programs, petroleum rules training, softskill training in Ahmedabad, delhi ncr', '', ''),
(22, 0, 'sitemap', 'footer', '', 'sitemap', 'Detail', '#', '', 1, 'Sitemap - Meta Title', 'Sitemap - Meta Description', 'Sitemap - Meta Keywords', '', ''),
(23, 0, 'blog_info', 'main', '', 'blog_info', 'Detail', '#', NULL, 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `name` varchar(255) DEFAULT NULL,
  `id` int(211) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` varchar(211) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`name`, `id`, `description`, `image`, `date`, `status`) VALUES
('gggg', 3, '', 'Koala.jpg', '2016/05/12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `menuName` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL,
  `menuDesc` longtext,
  `menuUrl` varchar(255) DEFAULT NULL,
  `menuType` varchar(255) DEFAULT NULL,
  `menuTargetWindow` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `metaTitle` text,
  `metaDescription` text,
  `metaKeywords` text
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`menuName`, `id`, `menuDesc`, `menuUrl`, `menuType`, `menuTargetWindow`, `image`, `status`, `metaTitle`, `metaDescription`, `metaKeywords`) VALUES
('Effective Customer Service', 18, '<p>The basic yet powerful tools and techniques to WOW your customer every single time they interact and do business with you</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Telephone Etiquette and Convincing Skills', 19, '<p>How to effectively interact with customers over the phone, follow a standard call flow and convince customers</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Workshop Scheduling', 20, '<p>The elements of workshop scheduling, its benefits and its impact on productivity, utilization and customer satisfaction</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Supply Chain Management (Inventory Management)', 21, '<p>The basics of planning and controlling the flow of material into, through and out of an organization.The essentials of inventory management from operations through forecasting, planning and builiding an effective inventory management plan of action</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Process Safety in Hydrocarbon Industry', 22, '<p>Petroleum Rules, OISD Standards, NFPA Standards, Gas Cylinder Rules, SMPV rules, API Standards and their applicability for Petroleum Exploration, Refining &amp; Transportation</p>\r\n', NULL, NULL, NULL, '', 1, '', '                                                                                      \r\n\r\n                                          \r\n\r\n                                        ', ''),
('Safety in Construction Industry', 23, '<p>Best safety practices as per OSHA guidelines, HSE Standards, Factory rules, OISD recommended practices etc..</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Contracts Management ', 24, '<p>Management of different types of contracts covering BOOT (Build, Own, Operate &amp; Transfer), LSTK (Lump Sum Turn Key), EPCC, &amp; SOR basis etc. The applicability, pros and cons in different scenarios</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('English Language - Full Professional Proficiency', 25, '<p>Able to use the language fluently and accurately on all levels pertinent to professional needs; Able to read all styles and forms of the language pertinent to professional needs</p>\r\n', NULL, NULL, NULL, '', 1, '', '                                                                                      \r\n\r\n                                          \r\n\r\n                                        ', ''),
('English Language - Minimum Professional Proficiency', 26, '<p>Able to speak the language with sufficient structural accuracy and vocabulary to participate effectively in most formal and informal conversations on practical, social, and professional topics; Able to read standard newspaper items addressed to the general reader, routine correspondence, reports, and technical materials in the individual&#39;s special field.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('English Language - Limited Working Proficiency', 27, '<p>Able to satisfy routine social demands and limited work requirements; Able to read simple prose, in a form equivalent to typescript or printing, on subjects within a familiar context.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('English Language - Elementary Proficiency', 28, '<p>Able to satisfy routine travel needs and minimum courtesy requirements; Able to read some personal and place names, street signs, office and shop designations, numbers and isolated words and phrases.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Effective Communication Skills', 29, '<p>The basics of communication &ndash; clear, concise, acknowledge, revert. How effective communication positively impacts performance and productivity.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Corporate and Business Etiquette', 30, '<p>How to aptly and smartly carry yourself at work and interact smartly by understanding the &ldquo;dos&rdquo; and &ldquo;don&#39;ts&rdquo; of workplace etiquette.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Email Writing and Etiquette', 31, '<p>The basics of written communication at work, its &quot;dos&quot; and &quot;donts&quot;.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Conflict Management', 32, '<p>How to effectively deal with conflicts and take the positives out of every situation.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Change Management', 33, '<p>How to identify the need for change, basic and powerful strategies to plan and implement change that results in the success of both the organization and its workforce.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Time Management', 34, '<p>Ideas and techniques to make effective use of time and to be able to do that on a consistent basis.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Stress Management', 35, '<p>How to identify signs of stress and overcome them through yoga and self-healing practices and exercises for a happier, healthier and more productive workforce.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Interpersonal Effectiveness', 36, '<p>How to become a more confident individual, to be able to build trust and rapport, influence decision making, to present ideas with clarity and handle challenging situations with ease.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', ''),
('Team Work', 37, '<p>How teams evolve and work towards a common goal.Improving team&#39;s performance by understanding each individual and their strenghts.</p>\r\n', NULL, NULL, NULL, NULL, 1, '', '                                            \r\n\r\n                                        ', '');

-- --------------------------------------------------------

--
-- Table structure for table `silder`
--

CREATE TABLE IF NOT EXISTS `silder` (
  `name` varchar(255) DEFAULT NULL,
  `id` int(211) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_desc` text,
  `date` varchar(211) DEFAULT NULL,
  `status` int(211) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silder`
--

INSERT INTO `silder` (`name`, `id`, `image`, `image_desc`, `date`, `status`, `url`) VALUES
('Customer Service Programs', 4, 'banner1.jpg', '<p>Simple yet powerful tools to becoming the most preferred brand. Make your customers feel &ldquo;WOW&rdquo; every single time they interact and do business with you.</p>\r\n', '2016/08/31', 1, 'Customer Service Programs'),
('Performance Improvement', 5, 'Banner_Evolve_PerformanceImprovement.jpg', 'From good to better to best! We focus on the vital facets of day to day operations and design learning plus performance improvement programs with actionable strategies that can be implemented with immediate effect.\r\n', '2016/05/17', 1, 'program'),
('English Language', 6, 'Banner_Evolve_BusinessLanguage.jpg', 'The ability to articulate and communicate with ease and confidence automatically gives you that edge over others. The command over English Language definitely helps your workforce or students communicate effectively and with confidence which positively impacts their overall performance. Based on your need we help you acquire:<br />\r\n1 - Elementary Proficiency<br />\r\n2 - Limited Working Proficiency<br />\r\n3 - Minimum Professional Proficiency<br />\r\n4 - Full Professional Proficiency\r\n', '2016/05/23', 1, 'program.php');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(211) DEFAULT NULL,
  `menuName` varchar(255) NOT NULL,
  `menuPosition` varchar(255) NOT NULL,
  `menuDesc` longtext NOT NULL,
  `menuUrl` varchar(255) NOT NULL,
  `menuType` varchar(255) NOT NULL,
  `menuTargetWindow` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `name` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `video_desc` varchar(255) DEFAULT NULL,
  `date` varchar(211) DEFAULT NULL,
  `status` int(211) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`name`, `id`, `video`, `video_desc`, `date`, `status`) VALUES
('https://www.youtube.com/embed/dRpmv8RXHY0', 7, NULL, '', '2016/06/14', 1),
('https://www.youtube.com/embed/IoJMDYqexyg', 8, NULL, '', '2016/06/14', 1),
('https://www.youtube.com/embed/x79rsXXplAU', 9, NULL, '', '2016/06/14', 1),
('https://www.youtube.com/embed/Otft8DI0z1g', 11, '', '', '2016/07/05', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menumgr`
--
ALTER TABLE `menumgr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `silder`
--
ALTER TABLE `silder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menumgr`
--
ALTER TABLE `menumgr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `silder`
--
ALTER TABLE `silder`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
