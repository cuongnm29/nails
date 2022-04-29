-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 12:35 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expertnails`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `finish_time` datetime NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `start_time`, `finish_time`, `price`, `comments`, `created_at`, `updated_at`, `deleted_at`, `client_id`, `employee_id`) VALUES
(1, '2021-03-04 14:00:00', '2021-03-04 16:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 9, 2),
(2, '2021-03-06 05:00:00', '2021-03-06 06:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 7, 3),
(3, '2021-03-03 19:00:00', '2021-03-03 20:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 4, 2),
(4, '2021-03-06 02:00:00', '2021-03-06 04:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 7, 3),
(5, '2021-03-06 14:00:00', '2021-03-06 15:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 4, 3),
(6, '2021-03-05 22:00:00', '2021-03-06 00:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 4, 1),
(7, '2021-03-03 09:00:00', '2021-03-03 10:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 8, 4),
(8, '2021-03-04 12:00:00', '2021-03-04 14:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 1, 4),
(9, '2021-03-03 12:00:00', '2021-03-03 14:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 7, 1),
(10, '2021-03-06 11:00:00', '2021-03-06 12:00:00', NULL, NULL, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_service`
--

CREATE TABLE `appointment_service` (
  `appointment_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `description` longtext,
  `photo` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `istype` tinyint(4) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `photo`, `status`, `istype`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'abc4', '<p>tesst</p>', '/storage/photos/1/banner/banner.jpg', 1, 1, 'rtrt', '2021-03-11 10:20:02', '2021-03-16 09:21:18', '2021-03-16 09:21:18'),
(8, 'abc', '<p>cvvv</p>', '/storage/photos/1/banner/banner.jpg', 1, 1, 'rtrt', '2021-03-11 10:52:11', '2021-03-11 10:54:47', '2021-03-11 10:54:47'),
(9, 'Welcome to the Expert Nails and Beauty', NULL, 'public/photos/2/banner/bg.jpg', 1, 1, '/member/register', '2021-03-16 09:29:52', '2021-04-21 22:57:04', NULL),
(10, 'Welcome to our services!!!', '<p>We are committed to providing the best services for customers at a reasonable cost.</p>\r\n<p>Great deal with 15% off when you book an appointment as a</p>', 'public/photos/1/banner/slideshow_1.jpg', 1, 1, NULL, '2021-03-16 09:30:42', '2021-04-19 02:24:09', '2021-04-19 02:24:09'),
(11, 'Give feedback, Get cashback!!!', '<p>How do you like about our services? All your feelings about us are the source of energy for us to improve ourselves.</p>\r\n<ul>\r\n<li>Get 5% off on your next bill when giving feedback and star rating to us.</li>\r\n</ul>', 'public/photos/1/banner/slide2.jpg', 1, 1, NULL, '2021-03-16 09:31:52', '2021-04-20 01:48:50', '2021-04-20 01:48:50'),
(12, 'ADV', '<p>adv32616</p>', '/storage/photos/1/banner/adv.png', 1, 2, NULL, '2021-03-17 09:33:02', '2021-04-19 02:24:24', '2021-04-19 02:24:24'),
(13, 'ADV', '<p>adv</p>', 'public/photos/1/banner/adv.jpg', 1, 1, '<p>adv</p>', '2021-04-19 22:54:43', '2021-04-19 22:55:30', '2021-04-19 22:55:30'),
(14, 'adv', '<p>adv</p>', 'public/photos/1/banner/adv.jpg', 1, 2, NULL, '2021-04-19 22:55:48', '2021-04-19 22:55:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `summary` longtext NOT NULL,
  `content` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ishome` tinyint(1) NOT NULL,
  `isorder` int(11) NOT NULL,
  `keyword` longtext,
  `meta` longtext,
  `pagetitle` longtext,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `catid`, `title`, `slug`, `summary`, `content`, `photo`, `ishome`, `isorder`, `keyword`, `meta`, `pagetitle`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 15, 'ABOUT US', 'about-us', '<p>Expert Nails and Beauty is a reputable beauty brand whose mission is to bring customers joy, quality, and satisfaction.How can we bring joy and relaxation to customers? With a team off well-trained staff, they will help you relax and have fun with traditional massage and open-ended talks. Our slogan is &ldquo;THE ART OF NAILS&rdquo;</p>', '<p><strong>Our Story!!!</strong></p>\r\n<p>Expert Nails and Beauty is a reputable beauty brand whose mission is to bring customers joy, quality, and satisfaction.</p>\r\n<ul>\r\n<li>Why can we bring joy and relaxation to customers? With a team off well-trained staff, they will help you relax and have fun with traditional massage and open-ended talks.</li>\r\n<li>Our slogan is &ldquo;THE ART OF NAILS&rdquo;, to us each set of nails is a work of art. We consider quality the standard we commit to our customers.</li>\r\n<li>And finally, the most valuable thing that we are still building is your satisfaction, it is the endless sources of energy from your hearts to feed us.\r\n<p>&nbsp;</p>\r\n<strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/public/photos/1/blog/about-us/about1.jpg\" alt=\"\" width=\"1000\" /></strong></li>\r\n</ul>\r\n<p><strong>Goals and future</strong></p>\r\n<p>We aim to become a brand familiar to everyone. Building a community using our services is one of big goals. That\'s why we give a lot of incentives to our members. Membership registration is very simple, you only need to take one single step to receive mail containing your account number, it is the key for you to receive good deals from us.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/public/photos/1/blog/about-us/xxl_153124866.jpg\" alt=\"\" width=\"1000\" /></p>\r\n<p>Wish you have moments of relaxation!!!</p>', '/storage/photos/1/banner/slide1.jpg', 1, 1, NULL, NULL, NULL, 1, '2021-03-16 10:13:38', '2021-07-07 00:22:36', NULL),
(5, 12, 'Manicures & Pedicures', 'manicures-pedicures', '<p>Excitement and fun are the states you will have to likely experience with our manicure/pedicure services</p>', '<p><img src=\"/public/photos/1/blog/service/menu1.jpg\" alt=\"\" width=\"1500\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/public/photos/1/blog/service/menicures.jpg\" alt=\"\" width=\"1100\" /></p>', '/storage/photos/1/blog/Manicure-2-1024x683.jpeg', 1, 1, NULL, NULL, NULL, 1, '2021-03-17 08:55:43', '2021-04-23 17:06:07', NULL),
(6, 13, 'Waxing', 'waxing', '<p>We offer a full range of facial and body hair removal services. It only takes one try to see the effectiveness and long-term effects that Expert Nails and Beauty brand brings</p>', '<p><img src=\"/public/photos/1/blog/service/hairemoval.jpg\" alt=\"\" width=\"1500\" /></p>', '/storage/photos/1/blog/pedicure-1024x683.jpeg', 1, 2, NULL, NULL, NULL, 1, '2021-03-17 09:08:54', '2021-04-22 15:10:43', NULL),
(7, 14, 'Eyelash & Massage', 'eyelash-massage', '<p>You want to have impressive eyes to attend events or simply to assert your personality. It is getting easier than ever because our team of expert eyelashes will help you do that</p>', '<p>MASSAGE: 30 mins = $30</p>\r\n<p>45 mins = $45</p>\r\n<p>60 mins = $60&nbsp;</p>\r\n<p>90 mins = $90</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/public/photos/1/blog/service/EYELASH.jpg\" alt=\"\" width=\"1500\" /></p>', '/storage/photos/1/blog/Manicure-1024x683.jpeg', 1, 3, NULL, NULL, NULL, 1, '2021-03-17 09:17:14', '2021-07-09 00:11:37', NULL),
(8, 16, 'Thinking of getting manicure and pedicure done? Here is all you need to know!', 'thinking-of-getting-manicure-and-pedicure-done-here-is-all-you-need-to-know', '<p>All of us would love to have clean and well-maintained hands and legs. Hands and legs that are in good shape give the impression of a well-groomed appearance.</p>\r\n<p>Manicure and pedicure treatments are still very common in the beauty world because they dramatically improve the hands and legs appearance.</p>', '<h1><strong><u>Thinking of getting manicure and pedicure done? Here is all you need to know! </u></strong></h1>\r\n<h2><strong><span lang=\"EN\">What is a Manicure and Pedicure Treatment?</span></strong></h2>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h3><strong><span lang=\"EN\">Manicure</span></strong></h3>\r\n<p>Manicures usually consist of several procedures and treatments, with the treatment or techniques varying from spa to spa. Manicures usually include hand massages, cuticle cleaning, exfoliation, drip dry, wax treatment and buffing, and nail grooming with a nail polish application.</p>\r\n<p>Different spas provide different manicure packages, and you must choose one that includes everything you need for your hands and fingernails. Some spas have separate manicure packages for \"Men\" and \"Women.\" You must tell the spa clinic about your skin\'s special qualities when making an appointment for the best treatment.</p>\r\n<h3><strong>Pedicure</strong></h3>\r\n<p>Pedicures, like manicures, differ from one salon to another. Several spas offer different pedicure packages, and you must select the best one for you. However, a pedicure usually involves a foot wash, exfoliation, cuticle cleaning, foot massage, nail trimming and brushing, moisturizing, and nail polish application over the toenails. Pedicures are designed to remove dead skin from the feet in a special way.</p>\r\n<p>Let\'s have a look at some factors for having a manicure or pedicure done in more detail.</p>\r\n<strong>Aesthetics - </strong>The key reason for getting a manicure or pedicure with a professional manicurist is to alter, improve, or maintain the appearance of your nails. When it comes to personalizing the look of your fingernails and/or toenails, you have a range of choices.</div>\r\n<div>&nbsp;</div>\r\n<p><img src=\"http://expertnailsandbeauty.com/public/photos/2/Service/nh1.png\" alt=\"Nails Model\" /><br /><br /></p>\r\n<h2><strong><span lang=\"EN\">Various Types of Manicure and Pedicure</span></strong></h2>\r\n<p>Let\'s look at the different styles of manicure and pedicure treatments;</p>\r\n<h3><strong><span lang=\"EN\">Basic Manicure and Pedicure</span></strong></h3>\r\n<p>A daily manicure and pedicure provide the most common nail care procedure, which includes calming and softening of hands and feet by removing dead skin cells and moisturizing hands and feet, as well as brief hand and leg massaging.</p>\r\n<p>A daily manicure starts with soaking your hands in warm soapy water, which softens and soothes dead skin cells. After that, the fingernails are properly cleansed, trimmed, and filed. The manicurist gently massages the hands before applying the moisturizing lotion.</p>\r\n<p>Finally, a regular manicure is completed by applying nail polish to the nails using a base coat, the main coat, and a top or final coat. A basic pedicure starts with your feet soaking in a warm water pool, followed by a scrub to remove any dead skin.</p>\r\n<p>After that, the toenails will be properly trimmed and filed. You\'ll also get a fast foot and leg massage before being slathered in a soothing lotion. Finally, nail polish is applied to the nails.</p>\r\n<h3><strong><span lang=\"EN\">Spa Manicure and Pedicure Treatment</span></strong></h3>\r\n<p>A spa manicure and pedicure treatment involves a more complex and longer treatment than a regular manicure and pedicure treatment. Though a spa manicure and pedicure treatment involves all of the procedures of a basic manicure and pedicure treatment, these specialized spa mani-pedi treatments require extra treatment, such as paraffin wax or glycolic exfoliation.</p>\r\n<p>A glycolic exfoliation uses glycolic acid in a gel or cream to extract dead skin cells from the hands and feet, while a paraffin wax procedure includes dipping the hands and feet in a warm paraffin wax solution, then putting them in plastic bags, and finally wearing gloves.</p>\r\n<h3><strong><span lang=\"EN\">French Manicure and Pedicure</span></strong></h3>\r\n<p>The French manicure and pedicure treatment are iconic, and it\'s the kind of manicure and pedicure you want for the best-looking hands, feet, and nails. The procedure is very similar to a daily manicure and pedicure.</p>\r\n<p>A clear white or light pink polish is applied to the entire fingernail and toenail, accompanied by a while nail polish on the nails\' tips by the manicurist or pedicurist. With this French manicure and pedicure procedure, your natural nails will definitely look better.</p>\r\n<h3><strong><span lang=\"EN\">American Manicure and Pedicure</span></strong></h3>\r\n<p>This is another manicure and pedicure procedure that is close to the French manicure and pedicure. The nail tips, on the other hand, are often rounded and painted in off-white colors in this scenario.</p>\r\n<h2><strong><span lang=\"EN\">What are the Benefits of a Manicure or Pedicure?</span></strong></h2>\r\n<p>Manicures and pedicures are about more than just the physical state and appearance of your nails. Going to the spa or salon is often about devoting some time to yourself. Let\'s look at the internal benefits of manicures and pedicures in more detail.</p>\r\n<h3><strong><span lang=\"EN\">Self-Care</span></strong></h3>\r\n<p>It\'s all about self-care when you have your nails done. Even if your mental wellbeing isn\'t the first thing that comes to mind when you schedule a nail appointment, there\'s something to be said about taking a break from the daily grind to refresh yourself.</p>\r\n<p>Manicures and pedicures are a perfect way to take a break from stress and strain. Taking a break from your hectic life on a daily basis is helpful. Prioritizing yourself in an indulgent manner may be beneficial to your overall health. A manicure and pedicure will help you relax, improve your confidence, and articulate your personal style and attitude in greater detail</p>\r\n<h3><strong><span lang=\"EN\">Relaxation</span></strong></h3>\r\n<p>A soothing hand or foot massage combined with a fragrant soak will help you wind down. This extra attention to your extremities is especially beneficial if you are on your feet for extended periods or if your job involves a lot of typing, handwriting, or other handworks.</p>\r\n<h3><strong><span lang=\"EN\">Confidence</span></strong></h3>\r\n<p>Feeling good starts with looking good. It will make you feel more positive in general if you are relaxed and satisfied with your overall appearance. Your nails are an integral part of your overall look and will help you feel more confident.</p>\r\n<h3><strong><span lang=\"EN\">Expression</span></strong></h3>\r\n<p>Your nails send a message to everyone around you. How you want to get them done determines what they mean to the world. Do they describe you as tidy and classic? Do they exude an edgy and rebellious attitude? Are you avant-garde and out-of-the-box? Can your nails express your personality in a way that you don\'t want them to? It\'s all about what you\'re looking for.</p>\r\n<h2><strong><span lang=\"EN\">How Long Do a Manicure and Pedicure Last</span></strong></h2>\r\n<p><strong><img src=\"http://expertnailsandbeauty.com/public/photos/2/Service/blog2.png\" alt=\"Manicures\" /></strong></p>\r\n<div>\r\n<p>Whether or not you should schedule daily manicures and pedicures and how often you should do so is normally determined by a variety of variables, including pre-existing hand and foot conditions, as well as how thoroughly you treat your nails at home.</p>\r\n<p>Even if you don\'t have a problem with your nails and spend time moisturizing and manicuring them, problems like ragged cuticles, hangnails, and non-uniform nail shapes may arise. Furthermore, professional manicures and pedicures usually last just one or two weeks. Manicures should be done every week or two weeks, and pedicures should be done once a month.</p>\r\n<p>Manicure and pedicure will truly have the best of all beauty and health benefits. There are, however, certain health hazards or dangers associated with manicure and pedicure procedures which include nail injury and fungal infections.</p>\r\n<p><strong>To prevent the risks of Manicure and Pedicure, Take the Following Steps:</strong></p>\r\n<p>Below are some of the most important precautions to take when visiting a nail salon for a manicure or pedicure to avoid potential hazards or health risks.</p>\r\n<ul>\r\n<li>Make sure you stay away from salons that don\'t have quick, easy-to-clean foot baths without a motor.</li>\r\n<li>Purchase your own nail equipment and take it with you when you go to a nail salon for a manicure or pedicure.</li>\r\n<li>If you don\'t have your own supplies, recommend that the nail technician use sterilized equipment to prevent infection.</li>\r\n<li>Before getting a manicure or pedicure, make sure you don\'t shave your legs or hands.</li>\r\n<li>Before conducting mani-pedi treatments on you, insist that your manicurist and pedicurist wash their hands thoroughly.</li>\r\n</ul>\r\n<h2><strong><span lang=\"EN\">Conclusion</span></strong></h2>\r\n<p>To sum it up, A little bit of your own attention is the best gift you can offer yourself. Many people prefer to do their manicures and pedicures at home rather than going to a salon or spa to reduce the higher costs associated with professional treatments. Though a manicure and pedicure treatment can be done at home, for the best results, a professional mani-pedi treatment performed by an experienced manicurist/pedicurist is often recommended.</p>\r\n</div>', 'public/photos/2/Service/nh1.png', 1, 1, NULL, NULL, NULL, 1, '2021-03-21 09:19:09', '2021-07-06 13:23:18', NULL),
(9, 16, 'SWITCHING YOUR EXERCISE ROUTINE FROM SUMMER TO WINTER', 'switching-your-exercise-routine-from-summer-to-winter', '<div>The summer months are the perfect time to exercise, not only are the days longer and the weather warmer, but you&rsquo;re more likely to be inspired by seeing other people out and about, making the most of the sunshine and keeping active.</div>\r\n<p>&nbsp;</p>\r\n<div>However, there&rsquo;s no reason why your exercise regime should slow down or stop once winter comes around.</div>', '<div>In fact, the colder months are the perfect time to not only reassess your fitness goals but also to remind yourself of all the benefits that keeping fit can bestow at a time when&nbsp;<a href=\"https://www.spaexperience.org.uk/about/blog/detail/our-blog/2018/11/08/how-does-winter-affect-your-mind-and-body\" target=\"_blank\" rel=\"noopener\">our moods tend to suffer</a>, we&rsquo;re more susceptible to illness, and many of us gain a little extra weight.</div>\r\n<p>&nbsp;</p>\r\n<div>Of course, a great way circumvent the chilly weather and &lsquo;winter blues&rsquo; is to seek comfort in the warm bloom of a&nbsp;<a href=\"https://www.spaexperience.org.uk/thermal-spa\">thermal spa</a>. However, it&rsquo;s a good idea to revamp your exercise routine during the winter months so that you can emerge on the other side of winter feeling healthy, fit, and with an increased sense of well being.</div>\r\n<p><br /><img title=\"Women Running Upstairs Outside\" src=\"https://www.spaexperience.org.uk/images/default-source/default-album/women-running-upstairs-outside.jpg?sfvrsn=0\" alt=\"Women Running Upstairs Outside\" data-displaymode=\"Original\" /></p>\r\n<h2>MOTIVATION IS KEY</h2>\r\n<p>&nbsp;</p>\r\n<div>As important as it is to keep exercising during the winter, we understand how easy it is to feel unmotivated when it&rsquo;s freezing outside, and all you want to do is get into full hibernation mode, complete with a cup of hot chocolate.</div>\r\n<p>&nbsp;</p>\r\n<div>Unfortunately, if you give in to this urge to slow down, it can hurt your wellbeing and health. Research has shown that the&nbsp;<a href=\"https://www.independent.co.uk/life-style/health-and-families/immune-system-how-to-boost-health-wellbeing-stop-colds-infections-exercise-sleep-a8375951.html\" target=\"_blank\" rel=\"noopener\">best way to increase your immunity against colds and flu and to beat the winter blues is to exercise.</a></div>\r\n<p>&nbsp;</p>\r\n<div>Even a short walk in the middle of the day is enough to increase dopamine and norepinephrine, important neurotransmitters that energise the brain and regulate circadian rhythms.</div>\r\n<p>&nbsp;</p>\r\n<div><a href=\"https://www.spaexperience.org.uk/spa-treatments/massages\" target=\"_blank\" rel=\"noopener\">Don&rsquo;t forget to treat yourself with a massage&nbsp;</a>to keep your body and mind well balanced- even if you haven&rsquo;t done any exercise in a while, this will alleviate any stress and keep motivation levels high.</div>\r\n<p>&nbsp;</p>\r\n<h2>SWITCH UP YOUR ROUTINES</h2>\r\n<p>&nbsp;</p>\r\n<div>There are many ways to transition your favourite summer workouts to their winter alternatives. Here are some ideas to get you started:</div>\r\n<p>&nbsp;</p>\r\n<h2>GROUP ACTIVITIES</h2>\r\n<p>&nbsp;</p>\r\n<div>If summer exercise for you means rounders on the field, footie in the park, or netball with friends, don&rsquo;t think you have to give up on social workouts just because it&rsquo;s chilly.</div>\r\n<p>&nbsp;</p>\r\n<div>Instead, try a group exercise class at&nbsp;<a href=\"https://www.better.org.uk/leisure-centre/activities/fitness-classes\" target=\"_blank\" rel=\"noopener\">your local gym</a>. From Zumba to salsa dancing to aerobics, you&rsquo;re bound to find a workout where you can be as sociable as you like, all while getting your heart pumping!</div>\r\n<p><br /><img title=\"Zuma Class\" src=\"https://www.spaexperience.org.uk/images/default-source/default-album/zuma-class.jpg?sfvrsn=0\" alt=\"People participating in a Zuma class\" data-displaymode=\"Original\" /></p>\r\n<h2>JOGGING</h2>\r\n<p>&nbsp;</p>\r\n<div><a href=\"https://www.standard.co.uk/news/health/winter-is-the-best-time-of-the-year-to-go-running-study-finds-a3387931.html\" target=\"_blank\" rel=\"noopener\">Research shows&nbsp;</a>that jogging in the winter is ideal, as the cold lowers your heart rate and you&rsquo;re far less likely to get dehydrated, making it easier for you to run longer distances at a faster pace.</div>\r\n<p>&nbsp;</p>\r\n<div>However, if the weather outside is just too frightful, switch to a treadmill for the time being. You still get the same great exercise while avoiding treacherous black ice and frostbite!</div>\r\n<p>&nbsp;</p>\r\n<h2>CYCLING</h2>\r\n<p>&nbsp;</p>\r\n<div>You may not get the same stellar outside views on an exercise bike, but don&rsquo;t let that put you off. Stay focussed with a podcast, music or watch a video.</div>\r\n<p><br /><img title=\"Indoor Cycling\" src=\"https://www.spaexperience.org.uk/images/default-source/default-album/indoor-cycling.jpg?sfvrsn=0\" alt=\"Women enjoying indoor cycling\" data-displaymode=\"Original\" /></p>\r\n<h2>SWIMMING</h2>\r\n<p>&nbsp;</p>\r\n<div>There&rsquo;s nothing better than to bask in the warmth in&nbsp;<a href=\"https://www.better.org.uk/facilities-and-activities/facility-types/swimming-pool-facilities\">your local swimming pool&nbsp;</a>but it&rsquo;s also a great way to build your fitness.&nbsp;<a href=\"https://yougov.co.uk/topics/lifestyle/articles-reports/2016/09/27/quarter-british-swimmers-dont-think-they-could-ach\" target=\"_blank\" rel=\"noopener\">27% of adults in the UK&nbsp;</a>are estimated not being able to swim, if you&rsquo;re one of them; why not use the winter months to finally dust off the swimming cap? Just in time to show off your skills in the sea for summer.</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>STAY AT HOME!</h2>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>Just because you really can&rsquo;t bring yourself to leave the house when the temperature has dropped doesn&rsquo;t mean you have to avoid exercise. There&rsquo;s plenty of free workout videos available online and you can turn your living room into a gym!</div>\r\n<p>&nbsp;</p>\r\n<div>If you have the space for equipment such as weights, skipping ropes, resistance bands, etc., even better. Incorporate them into your routine for a full body workout.</div>\r\n<p>&nbsp;</p>\r\n<div>Why not help your muscles relax after a workout by using a muscle spray? This&nbsp;<a href=\"https://www.secure-booker.com/spalondonwimbledon/ShopOnline/Product/7262543/Spa-Experience-Pepper-and-Cinnamon-Muscle-Relief\">cinnamon &amp; black pepper muscle spray&nbsp;</a>is an excellent choice&mdash;or indulge in a bath with some detoxing bath salts, such as&nbsp;<a href=\"https://www.secure-booker.com/spalondonwimbledon/ShopOnline/Product/7262541/Spa-Experience-Algae-Clay-Detoxing-Bathing-Salts\">Spa Experience Algae and Clay Bathing Salts</a>.</div>\r\n<p>&nbsp;</p>\r\n<h2>TRY SOMETHING NEW</h2>\r\n<p>&nbsp;</p>\r\n<div>The winter months are also a great time to try something new. From yoga&nbsp;<a href=\"https://www.better.org.uk/facilities-and-activities/activities/fitness-classes/lets-focus/yoga-classes\" target=\"_blank\" rel=\"noopener\">(try hot yoga to warm yourself up!)</a>&nbsp;to Pilates to hip-hop dance classes, there are plenty of fun winter-friendly exercises you can do to keep you healthy and fit and in the best frame of mind.</div>\r\n<p><br /><img title=\"Yoga Practice\" src=\"https://www.spaexperience.org.uk/images/default-source/default-album/yoga-practice.jpg?sfvrsn=0\" alt=\"People practising Yoga practice\" data-displaymode=\"Original\" /></p>\r\n<div>Whichever exercise you opt for as your winter workout, don&rsquo;t forget to do a warm up first, as the cooler weather makes muscles tighter. On top of that, include a cool down afterwards to prevent any injuries.</div>\r\n<p>&nbsp;</p>\r\n<div>To really aid recovery and relieve yourself from any aches and pains from a strenuous workout - indulge yourself in&nbsp;<a href=\"https://www.spaexperience.org.uk/thermal-spa\" target=\"_blank\" rel=\"noopener\">thermal spa therapy</a>. The heat will heal your body by encouraging blood circulation, hitting muscles that are in need of repair. Which means you&rsquo;ll recover quicker and be more than prepared for your next physical winter excursion.</div>\r\n<p>&nbsp;</p>\r\n<div>So, next time your motivation wavers and you consider skipping your winter workouts, remind yourself of all the wonderful benefits that keeping fit has at this time of the year, both for your body and your mind.</div>\r\n<p>&nbsp;</p>\r\n<div>Best thing of all, if you can carry on your fitness regime from winter to summer then you&rsquo;re in the best frame of mind to tackle the dreaded New Year resolution!</div>\r\n<div><br /><br /></div>\r\n<p><img title=\"Woman receiving scrub\" src=\"https://www.spaexperience.org.uk/images/default-source/default-album/woman-receiving-scrub.jpg?sfvrsn=0\" alt=\"Woman receiving scrub during hammam\" data-displaymode=\"Original\" /></p>', '/storage/photos/1/blog/indoor-cycling.jpg', 1, 2, NULL, NULL, NULL, 1, '2021-03-21 09:20:48', '2021-03-21 09:58:41', NULL),
(10, 19, 'Body Contouring and Facials', 'body-contouring-and-facials', '<p>Are you ready to get back in shape and toned? Do you want plump and noticably glowing skin? We\'re here to help you do that. From professional and well-trained operations, we are sure that you will be completely satisfied and comfortable after using our services</p>', '<p><img src=\"http://expertnailsandbeauty.com/public/photos/4/Promo.jpg\" alt=\"\" /><img src=\"http://expertnailsandbeauty.com/public/photos/4/F63F6701-1546-4AA9-9BB6-74B415AF260C.PNG\" alt=\"\" width=\"1500\" /></p>', 'public/photos/4/64264A93-D743-46C9-882B-A742F6EDACF0.PNG', 1, 4, NULL, NULL, NULL, 1, '2021-04-25 17:25:24', '2021-07-09 00:08:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `vourcherId` int(11) DEFAULT NULL,
  `accountNumber` varchar(255) DEFAULT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `localtion` varchar(255) DEFAULT NULL,
  `dateOrder` varchar(255) NOT NULL,
  `timeOrder` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `catid`, `vourcherId`, `accountNumber`, `firstname`, `lastname`, `phone`, `email`, `localtion`, `dateOrder`, `timeOrder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 12, 3, NULL, 'Sabrina', 'Franklin', '6477033282', 'SabrinaFranklin@outlook.com', NULL, '2021-07-04', '16:30', '2021-06-24 23:47:06', '2021-07-09 02:02:50', '2021-06-24 23:47:06'),
(23, 12, 3, NULL, 'Mahtab', '.', '.', 'Biogel Full Set', NULL, '2021-07-08', '16:00', '2021-07-06 21:09:41', '2021-07-09 02:02:46', '2021-07-06 21:09:41'),
(24, 19, 3, NULL, 'Isela', '.', '6478064742', 'Tummy Body Contour', NULL, '2021-07-13', '14:00', '2021-07-06 21:11:12', '2021-07-09 02:02:42', '2021-07-06 21:11:12'),
(25, 12, 3, NULL, 'Angela', '.', '.', 'Refill', NULL, '2021-07-07', '17:00', '2021-07-06 21:18:07', '2021-07-09 02:02:39', '2021-07-06 21:18:07'),
(26, 12, 3, NULL, 'Doug', 'Sloan', '4167025095', 'Male Mani & Pedi', NULL, '2021-07-09', '10:30', '2021-07-07 14:41:32', '2021-07-09 02:02:35', '2021-07-07 14:41:32'),
(28, 12, 3, NULL, 'Sahar', 'Whelan', '4164508309', '2 people - Refill & Pedicure (1pm or 1:30)', NULL, '2021-07-09', '12:00', '2021-07-07 14:48:37', '2021-07-09 02:02:31', '2021-07-07 14:48:37'),
(29, 12, 3, NULL, 'Lorie', '.', '6479166545', 'Dipping with manicure & Peidcure with regular', NULL, '2021-07-07', '18:30', '2021-07-07 21:28:46', '2021-07-09 02:02:27', '2021-07-07 21:28:46'),
(31, 19, 3, NULL, 'Jorge', '.', '6477179761', 'Tummy Body Contouring', NULL, '2021-07-12', '11:00', '2021-07-07 23:42:27', '2021-07-09 02:02:21', '2021-07-07 23:42:27'),
(32, 12, NULL, NULL, 'Leanna', 'Debonis', '.', 'Full Gel Set & Shellac Pedicure', NULL, '2021-07-27', '11:00', '2021-07-09 18:39:22', '2021-07-10 01:39:22', '2021-07-09 18:39:22'),
(34, 12, NULL, NULL, 'Mohini', '.', '4377774268', 'Refill UV Powder Gel', NULL, '2021-07-09', '15:30', '2021-07-09 19:35:36', '2021-07-10 02:35:36', '2021-07-09 19:35:36'),
(35, 12, NULL, NULL, 'Stella', '.', '6473328458', 'Manicure with Colour and Design', NULL, '2021-07-09', '17:30', '2021-07-09 20:43:21', '2021-07-10 03:43:21', '2021-07-09 20:43:21'),
(36, 14, NULL, NULL, 'Glenda', '.', '4168360959', '45 mins Massage', NULL, '2021-07-10', '15:00', '2021-07-09 21:46:32', '2021-07-10 04:46:32', '2021-07-09 21:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(500) NOT NULL,
  `istype` int(11) NOT NULL,
  `ismenu` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `isorder` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `slug`, `istype`, `ismenu`, `photo`, `isorder`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 0, 'Services', 'services', 3, 1, '/storage/photos/1/Background/service_bg.jpg', 1, 1, '2021-03-16 09:49:27', '2021-03-16 09:49:27', NULL),
(12, 11, 'Manicures/Pedicures', 'manicurespedicures', 3, 1, '/storage/photos/1/Background/121.jpg', 1, 1, '2021-03-16 09:50:39', '2021-03-21 08:13:05', NULL),
(13, 11, 'Waxing', 'waxing', 3, 1, '/storage/photos/1/Background/service06.png', 1, 1, '2021-03-16 09:51:01', '2021-07-09 00:04:52', NULL),
(14, 11, 'Eyelash & Massage', 'eyelash-massage', 3, 1, 'public/photos/2/Service/fat-burn-cat.png', 3, 1, '2021-03-16 09:51:28', '2021-07-09 00:05:27', NULL),
(15, 0, 'About Us', 'about-us', 2, 1, '/storage/photos/1/Background/service_bg.jpg', 2, 1, '2021-03-16 09:52:04', '2021-03-16 10:10:07', NULL),
(16, 0, 'Blog', 'blog', 1, 1, '/storage/photos/1/Background/service_bg.jpg', 3, 1, '2021-03-16 09:52:22', '2021-03-16 09:52:22', NULL),
(17, 0, 'Contact Us', 'contact-us', 4, 1, '/storage/photos/1/Background/service_bg.jpg', 4, 1, '2021-03-16 09:52:55', '2021-03-16 09:52:55', NULL),
(19, 11, 'Body Contouring & Facials', 'body-contouring-facials', 3, 1, '/storage/photos/1/Background/service02.png', 4, 1, '2021-04-25 17:15:58', '2021-07-09 00:05:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Juwan Kertzmann', '(689) 982-6265', 'paucek.ferne@langosh.org', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(2, 'Jessika King', '332.203.4505', 'henry52@larson.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(3, 'Dr. Adolphus Padberg', '303.731.6733 x021', 'emory39@renner.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(4, 'Denis Quitzon', '1-560-921-8338', 'sanford.barbara@yahoo.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(5, 'Avis VonRueden', '1-424-429-5882 x1257', 'nova.feeney@mclaughlin.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(6, 'Manuela Stoltenberg', '1-468-617-1098 x6598', 'demond51@yahoo.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(7, 'Hillard Lockman', '631.201.8030 x40311', 'yrowe@bergstrom.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(8, 'Letha Windler II', '386-342-8957 x91766', 'dedrick.cassin@franecki.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(9, 'Laurence Dietrich', '1-851-969-2033', 'mcclure.kasey@hermann.org', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(10, 'Khalil Larkin DDS', '1-543-600-7634', 'jdibbert@gmail.com', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `note` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `address`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Tin tức', 'admin@admin.com', '9999888', 'hoàng mai', 'ddfdf', '2021-03-20 09:19:29', '2021-03-20 09:19:29', NULL),
(7, 'Tin tức', 'admin@admin.com', '9999888', 'hoàng mai', 'ddfdf', '2021-03-20 09:22:06', '2021-03-20 09:22:06', NULL),
(8, 'xccx', 'abc@gmail.com', '2323', 'ssas', '233223', '2021-03-21 13:48:47', '2021-03-21 13:48:47', NULL),
(9, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', '420 Lexington Ave', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with expertnailsandbeauty.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out expertnailsandbeauty.com.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=expertnailsandbeauty.com', '2021-06-29 20:48:58', '2021-06-29 20:48:58', NULL),
(10, 'Keeley Ciantar', 'ciantar.keeley@gmail.com', '078 2288 7635', '62 Union Terrace', 'Hi \r\nHope you’re great, and that the company is profitable.\r\nI’m a marketing director of an IT company (I write my own letters personally, on principal), I specialize in the one and only subject, how to make big money in small business.\r\nI thought that because recently there is a lot of interest in online marketing among small businesses, I should personally invite you to see what marketing solutions you can order from us.\r\nHere is a practical outcome of working together:\r\nYou will double or triple your clients with our services at the best price in the shortest amount of time.\r\nI’m trying to keep this note brief (in case you are interested, you can check our services)\r\nIt is best if you respond soon because we currently have a 55% discount on all services.\r\nHowever, if you’re not interested, don’t feel any need to respond.\r\nWe’re just grateful to know that you have seen this note.\r\nhttps://your-it-technicians.com/backlinks-generator\r\nRegards,\r\nWe offer the most effective IT services you may check on our shop for making big money in a small business, still not interested in getting new customers? Here is an easy, 1-click unsubscribe link:  https://your-it-technicians.com/?unsubscribe=expertnailsandbeauty.com', '2021-07-02 08:43:41', '2021-07-02 08:43:41', NULL),
(11, 'Eleanore Lindsey', 'lindsey.eleanore84@hotmail.com', '03.99.98.67.53', '94 Rue Cazade', 'Good morning\r\nPlease allow me to introduce to you this service that you may find useful for your business.\r\nCreating your business listings in directories throughout the web is critical to staying visible to any potential new customers.\r\nhttps://geeks-marketing.com\r\nSincerely,\r\nWe offer the top marketing services you may order on our online shop for making big money in a small business, still not considering getting new business? Here is a simple, 1-click unsubscribe link: https://geeks-marketing.com/?unsubscribe=expertnailsandbeauty.com', '2021-07-03 10:33:09', '2021-07-03 10:33:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cristopher Berge DDS', 'quinton.douglas@swift.com', '640.641.5886 x52953', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(2, 'Dr. Shaun Braun', 'arlo.terry@hotmail.com', '+1-916-441-9838', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(3, 'Geo Bahringer', 'wpurdy@yahoo.com', '1-496-295-6558', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(4, 'Hollis Stoltenberg', 'dannie.lesch@gmail.com', '1-270-902-9938 x903', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(5, 'Reid Williamson', 'fmonahan@hotmail.com', '1-514-663-9738 x12961', '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_service`
--

CREATE TABLE `employee_service` (
  `employee_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locked`
--

CREATE TABLE `locked` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `displayname` varchar(255) DEFAULT NULL,
  `driver` varchar(500) NOT NULL,
  `host` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `encryption` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `displayname`, `driver`, `host`, `port`, `username`, `password`, `encryption`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Expert Nails and Beauty', 'nguyencuong.fpt2013@gmail.com', 'nguyencuong.fpt2013@gmail.com', '585', 'abc', '1111', 'ssl', '2021-03-14 18:40:27', '2021-07-06 17:37:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(9, 'App\\Banner', 5, '3b1ebcce-c3d3-4e76-ac61-74afc8effb98', 'photo', '6044f53a63ca2_154692932_453016435940813_8030678068529696916_n', '6044f53a63ca2_154692932_453016435940813_8030678068529696916_n.jpg', 'image/jpeg', 'public', 'public', 32393, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 1, '2021-03-07 08:46:03', '2021-03-07 08:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `numberAccount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `phone`, `birthday`, `email`, `photo`, `point`, `numberAccount`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(19, 'Lanh', 'Nguyen', NULL, NULL, 'lanh.nguyen1904@gmail.com', NULL, NULL, '994392266', '$2y$10$3JAV3t1bdLsaXz3YYIuAq.gjAqW9zxGZ5Gd9qK5EjbuB3yPL9nfXu', NULL, '2021-04-13 04:01:37', '2021-04-13 04:01:37'),
(20, 'Lilian', 'Luu', NULL, NULL, 'lilian.luu68@gmail.com', NULL, NULL, '770221764', '$2y$10$.CNDGhN842yQwUHRNhRm6.yCUSqRWAztOZvB004NsNKUw3Z6UNd3a', NULL, '2021-07-06 23:13:42', '2021-07-06 23:13:42'),
(21, 'Mary', 'Ann', NULL, NULL, 'Letientrung22121989@gmail.com', NULL, NULL, '205975088', '$2y$10$XhlWD3PV9NdurN4hhXa9Je2ZGWQrJC.CULqzioAQshnNI5jbMN/16', NULL, '2021-07-06 23:23:41', '2021-07-06 23:23:41'),
(37, 'nguyen', 'cuong', NULL, NULL, 'nguyencuong.fpt2013@gmail.com', NULL, NULL, '282895845', '$2y$10$SGllibtWav2wtnc9uO4EJeVrGRa864YQUn/QdUu5mP0jGXC5xNdxO', NULL, '2021-07-08 11:35:12', '2021-07-08 11:35:12'),
(38, 'Leanna', 'Debonis', '(416) 274-4212', NULL, 'debonisl@live.com', NULL, NULL, '291573055', '$2y$10$CnlNFMkNWM3vJstkTI2KWO4e8A.yto0g.vJ4X12W/.H.x0hD4gFbO', NULL, '2021-07-10 00:24:19', '2021-07-10 00:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_09_19_000000_create_media_table', 1),
(8, '2019_09_19_000001_create_permissions_table', 1),
(9, '2019_09_19_000002_create_roles_table', 1),
(10, '2019_09_19_000003_create_users_table', 1),
(11, '2019_09_19_000004_create_services_table', 1),
(12, '2019_09_19_000005_create_employees_table', 1),
(13, '2019_09_19_000006_create_clients_table', 1),
(14, '2019_09_19_000007_create_appointments_table', 1),
(15, '2019_09_19_000008_create_permission_role_pivot_table', 1),
(16, '2019_09_19_000009_create_role_user_pivot_table', 1),
(17, '2019_09_19_000010_create_employee_service_pivot_table', 1),
(18, '2019_09_19_000011_create_appointment_service_pivot_table', 1),
(19, '2019_09_19_000012_add_relationship_fields_to_appointments_table', 1),
(20, '2018_10_06_100234_create_media_manager_lock_list_table', 2),
(21, '2021_03_20_155248_create_member_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nguyencuong.fpt2013@gmail.com', 'aRFY5muUubYcZDtx4g6eg6pHxPSliOwSoXTPeADaIsdzAlnzlTCwACX90ekw', '2021-03-29 01:35:07'),
('nguyencuong.fpt2013@gmail.com', 'sKfU6D047rDzx3jbqavcyJbGlWhktRCo6gz79Oph1w5LwDMjFQNrOqRXDq3E', '2021-03-29 01:39:49'),
('nguyencuong.fpt2013@gmail.com', 'thHidaBiVKepTlBwQ6iSS7v1jHhmxrHarQfI2nD3cZMOGac5EOIDwnEfs174', '2021-03-28 09:31:04'),
('nguyencuong.fpt2013@gmail.com', 'Dbyx23vBLlGKX0m3FWvHXGHoPhOwJqa6nlSjdazs2GTlyLUFQ83m9hHfhR07', '2021-03-28 09:31:36'),
('nguyencuong.fpt2013@gmail.com', 'qj4bZYm3PR4cKIM2jLakXeFygyvbYXWclGagjaBeB7PWFFRqrJl0wLdWrP5f', '2021-03-28 09:34:22'),
('nguyencuong.fpt2013@gmail.com', 'hQStMpN9h4jaCVIHNKpSd3j8cyKHd9AZfNwrte7r87B8iBrmWyUsp1rbAhlY', '2021-03-28 09:37:12'),
('nguyencuong.fpt2013@gmail.com', 'sEyTQahit7bgVG5YN4x3DVFy3CAhLrfHP8CCTfsAUXpH9nVhULJiNukeRHhN', '2021-03-28 09:38:07'),
('nguyencuong.fpt2013@gmail.com', 'vYO5YSQANLQ3OPN1Vg8tIq2FKASoAbgdCd9JCVzBQHRktlhSZBaTWeVN72wM', '2021-03-28 09:39:27'),
('nguyencuong.fpt2013@gmail.com', 'g0nJFDcpFxliz9fFFy1AlynZni9CXB8QW6c96Q2lSLreRnkDsgQXgQUyMo09', '2021-03-28 09:40:14'),
('nguyencuong.fpt2013@gmail.com', '1iV7rfqqiZhqzDAFHy2PvgYzqfN6IhfEZHjIvYuXMpBMjkmIPx9BVygthfLK', '2021-03-28 09:41:28'),
('nguyencuong.fpt2013@gmail.com', 'ItnlDmKRvEZTm7sr0Ldw5ubGj3AgfAAZQ5a54cJh636NBiUu7RNHonS4XTbm', '2021-03-28 09:48:06'),
('nguyencuong.fpt2013@gmail.com', 'thHidaBiVKepTlBwQ6iSS7v1jHhmxrHarQfI2nD3cZMOGac5EOIDwnEfs174', '2021-03-28 09:31:04'),
('nguyencuong.fpt2013@gmail.com', 'Dbyx23vBLlGKX0m3FWvHXGHoPhOwJqa6nlSjdazs2GTlyLUFQ83m9hHfhR07', '2021-03-28 09:31:36'),
('nguyencuong.fpt2013@gmail.com', 'qj4bZYm3PR4cKIM2jLakXeFygyvbYXWclGagjaBeB7PWFFRqrJl0wLdWrP5f', '2021-03-28 09:34:22'),
('nguyencuong.fpt2013@gmail.com', 'hQStMpN9h4jaCVIHNKpSd3j8cyKHd9AZfNwrte7r87B8iBrmWyUsp1rbAhlY', '2021-03-28 09:37:12'),
('nguyencuong.fpt2013@gmail.com', 'sEyTQahit7bgVG5YN4x3DVFy3CAhLrfHP8CCTfsAUXpH9nVhULJiNukeRHhN', '2021-03-28 09:38:07'),
('nguyencuong.fpt2013@gmail.com', 'vYO5YSQANLQ3OPN1Vg8tIq2FKASoAbgdCd9JCVzBQHRktlhSZBaTWeVN72wM', '2021-03-28 09:39:27'),
('nguyencuong.fpt2013@gmail.com', 'g0nJFDcpFxliz9fFFy1AlynZni9CXB8QW6c96Q2lSLreRnkDsgQXgQUyMo09', '2021-03-28 09:40:14'),
('nguyencuong.fpt2013@gmail.com', '1iV7rfqqiZhqzDAFHy2PvgYzqfN6IhfEZHjIvYuXMpBMjkmIPx9BVygthfLK', '2021-03-28 09:41:28'),
('nguyencuong.fpt2013@gmail.com', 'ItnlDmKRvEZTm7sr0Ldw5ubGj3AgfAAZQ5a54cJh636NBiUu7RNHonS4XTbm', '2021-03-28 09:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(2, 'permission_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(3, 'permission_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(4, 'permission_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(5, 'permission_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(6, 'permission_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(7, 'role_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(8, 'role_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(9, 'role_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(10, 'role_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(11, 'role_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(12, 'user_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(13, 'user_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(14, 'user_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(15, 'user_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(16, 'user_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(17, 'service_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(18, 'service_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(19, 'service_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(20, 'service_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(21, 'service_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(22, 'employee_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(23, 'employee_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(24, 'employee_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(25, 'employee_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(26, 'employee_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(27, 'client_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(28, 'client_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(29, 'client_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(30, 'client_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(31, 'client_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(32, 'appointment_create', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(33, 'appointment_edit', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(34, 'appointment_show', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(35, 'appointment_delete', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(36, 'appointment_access', '2019-09-19 05:14:15', '2019-09-19 05:14:15', NULL),
(37, 'banner_show', '2021-03-06 20:23:12', '2021-03-06 20:23:12', NULL),
(38, 'banner_edit', '2021-03-06 20:23:44', '2021-03-06 20:23:44', NULL),
(39, 'banner_delete', '2021-03-06 20:23:53', '2021-03-06 20:23:53', NULL),
(40, 'banner_access', '2021-03-06 20:24:06', '2021-03-06 20:24:06', NULL),
(41, 'banner_create', '2021-03-06 22:32:50', '2021-03-06 22:32:50', NULL),
(42, 'category_access', '2021-03-11 21:15:04', '2021-03-11 21:15:04', NULL),
(43, 'category_create', '2021-03-11 21:15:18', '2021-03-11 21:15:18', NULL),
(44, 'category_edit', '2021-03-11 21:15:28', '2021-03-11 21:15:28', NULL),
(45, 'category_delete', '2021-03-11 21:15:37', '2021-03-11 21:15:37', NULL),
(46, 'blog_access', '2021-03-13 07:28:19', '2021-03-13 07:28:19', NULL),
(47, 'blog_create', '2021-03-13 07:28:28', '2021-03-13 07:28:28', NULL),
(48, 'blog_edit', '2021-03-13 07:28:35', '2021-03-13 07:29:02', '2021-03-13 07:29:02'),
(49, 'blog_edit', '2021-03-13 07:28:35', '2021-03-13 07:28:35', NULL),
(50, 'blog_delete', '2021-03-13 07:28:43', '2021-03-13 07:29:09', '2021-03-13 07:29:09'),
(51, 'blog_delete', '2021-03-13 07:28:43', '2021-03-13 07:28:43', NULL),
(52, 'setting_access', '2021-03-14 09:37:47', '2021-03-14 09:37:47', NULL),
(53, 'setting_create', '2021-03-14 09:37:54', '2021-03-14 09:37:54', NULL),
(54, 'setting_edit', '2021-03-14 09:38:00', '2021-03-14 09:38:00', NULL),
(55, 'setting_delete', '2021-03-14 09:38:07', '2021-03-14 09:38:07', NULL),
(56, 'mail_access', '2021-03-14 11:34:36', '2021-03-14 11:34:36', NULL),
(57, 'mail_create', '2021-03-14 11:34:44', '2021-03-14 11:34:44', NULL),
(58, 'contact_access', '2021-03-21 10:30:55', '2021-03-21 10:30:55', NULL),
(59, 'contact_delete', '2021-03-21 10:31:02', '2021-03-21 10:31:02', NULL),
(60, 'order_access', '2021-03-21 10:45:16', '2021-03-21 10:45:16', NULL),
(61, 'order_delete', '2021-03-21 10:45:26', '2021-03-21 10:45:26', NULL),
(62, 'subscribe_access', '2021-03-21 10:57:00', '2021-03-21 10:57:00', NULL),
(63, 'subscribe_delete', '2021-03-21 10:57:08', '2021-03-21 10:57:08', NULL),
(64, 'review_access', '2021-03-21 11:09:50', '2021-03-21 11:09:50', NULL),
(65, 'review_delete', '2021-03-21 11:09:59', '2021-03-21 11:09:59', NULL),
(66, 'review_edit', '2021-03-21 11:10:13', '2021-03-21 11:10:13', NULL),
(67, 'vourcher_access', '2021-04-01 09:31:19', '2021-04-01 09:31:19', NULL),
(68, 'vourcher_create', '2021-04-01 09:31:30', '2021-04-01 09:31:46', NULL),
(69, 'vourcher_edit', '2021-04-01 09:32:00', '2021-04-01 09:32:00', NULL),
(70, 'vourcher_delete', '2021-04-01 09:32:13', '2021-04-01 09:32:13', NULL),
(71, 'member_access', '2021-04-20 08:43:05', '2021-04-20 08:43:05', NULL),
(72, 'member_delete', '2021-04-20 08:43:12', '2021-04-20 08:43:12', NULL),
(73, 'member_edit', '2021-04-20 08:43:19', '2021-04-20 08:43:19', NULL),
(74, 'order_edit', '2021-04-20 09:13:54', '2021-04-20 09:13:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 49),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `accountNumber` varchar(255) DEFAULT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `rate` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `accountNumber`, `name`, `email`, `content`, `rate`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, '0', 'Joann Proffitt', 'proffitt.joann@hotmail.com', 'I have followed \"Expert Nails and Beauty\" since the brand \"Expert Nail\", as its name implies, I feel very satisfied with the services here and feel very reassured to get the Here experts to take care of yourself.', 5, 1, '2021-03-25 17:50:30', '2021-04-19 02:19:13', '2021-03-25 10:50:30'),
(13, NULL, 'cuong', 'nguyencuong.fpt2013@gmail.com', 'everything it ok, service good', 5, 1, '2021-03-29 01:26:23', '2021-04-19 02:19:29', '2021-03-28 18:26:23'),
(14, '994392266', 'Lanh nguyen', 'lanh.nguyen1904@gmail.com', 'The place is so clean and the workers there are so professional and friendly.  I love how they did my nails and I would recommend you guys to come check them out.5 stars', 5, 1, '2021-04-13 04:17:13', '2021-04-19 02:19:34', '2021-04-12 21:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2019-09-19 05:08:28', '2021-04-21 01:14:41', '2021-04-21 01:14:41'),
(2, 'User', '2019-09-19 05:08:28', '2021-04-21 01:10:43', '2021-04-21 01:10:43'),
(1, 'Admin', '2019-09-19 05:08:28', '2021-04-21 01:14:41', '2021-04-21 01:14:41'),
(2, 'User', '2019-09-19 05:08:28', '2021-04-21 01:10:43', '2021-04-21 01:10:43'),
(1, 'Admin', '2019-09-19 05:08:28', '2019-09-19 05:08:28', NULL),
(2, 'User', '2019-09-19 05:08:28', '2019-09-19 05:08:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 1),
(2, 1),
(1, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'molestiae', 24.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(2, 'ex', 20.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(3, 'aut', 78.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(4, 'deserunt', 65.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(5, 'doloremque', 63.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(6, 'consequatur', 82.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(7, 'minus', 65.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(8, 'eaque', 51.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(9, 'non', 46.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL),
(10, 'veritatis', 59.00, '2021-03-02 09:09:51', '2021-03-02 09:09:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `map` mediumtext,
  `video` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `openhour` varchar(4000) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `address` longtext,
  `phone` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `map`, `video`, `email`, `openhour`, `facebook`, `twitter`, `linkedin`, `address`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'public/photos/1/logo/logo.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.3304180837245!2d-79.50599278417943!3d43.70368197911965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b313caddc25fd%3A0xcf9685daa81ff6fc!2s1699%20Jane%20St%2C%20North%20York%2C%20ON%20M9N%202S3%2C%20Ca-na-%C4%91a!5e0!3m2!1svi!2s!4v1616023816566!5m2!1svi!2s\" width=\"100%\" height=\"650\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'W6FOsjvl17I', 'info@expertnailsandbeauty.com', '10:00 am to 8:00 pm', '#', '#', '#', '1699 Jane St North ON M9N 2S3,', '(416)-901-6868', '2021-03-14 10:11:49', '2021-07-09 09:44:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcribe`
--

CREATE TABLE `subcribe` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tien Trung Le', 'tonyle.vn1989@gmail.com', NULL, '$2y$10$.jIsbwsCwT7mrG6bu7vBTuruXRvC5zeUstsHAEvDYu7RfuNs/7ZU6', '5j4LaEq4SikrM9jSK1QKoE5LY4l5IRJD6QpHttmVZTkLbvsijdO0HSrgedGU', '2019-09-19 05:08:28', '2021-04-20 12:12:59', NULL),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO', 'KSkPpGvBs1gpGaU4jemGgKBv3FNZQDX6nKSSdTZ5WoXiuAm93urZSJS0NfBw', '2019-09-19 12:08:28', '2021-04-21 01:14:27', NULL),
(3, 'cuongnguyenmanh', 'cuongnm29@yahoo.com', NULL, '$2y$10$ASCZMp6Mz.RTpO/sa7zwuOkweRMVcLeSSgjWcknyhOHTF193HpkxW', NULL, '2021-07-06 11:03:41', '2021-07-06 11:03:46', '2021-07-06 11:03:46'),
(4, 'Lilian', 'Lilian.luu68@gmail.com', NULL, '$2y$10$KoCFPNFidNZGgFsbPRrZ3.nq6PvHoqfuOiohhmdXzeProzFJ5gd8.', NULL, '2021-07-06 11:06:10', '2021-07-06 11:06:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `discount` int(11) NOT NULL,
  `expried` datetime NOT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `name`, `discount`, `expried`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'jfJwQB', 10, '2021-08-31 00:00:00', 1, '2021-07-09 02:02:00', '2021-07-08 19:02:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_fk_360714` (`client_id`),
  ADD KEY `employee_fk_360715` (`employee_id`);

--
-- Indexes for table `appointment_service`
--
ALTER TABLE `appointment_service`
  ADD KEY `appointment_id_fk_360720` (`appointment_id`),
  ADD KEY `service_id_fk_360720` (`service_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD KEY `employee_id_fk_360622` (`employee_id`),
  ADD KEY `service_id_fk_360622` (`service_id`);

--
-- Indexes for table `locked`
--
ALTER TABLE `locked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`(191),`model_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
