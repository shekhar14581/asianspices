--
-- Table structure for table `product`
--

CREATE TABLE `products` (
`product_id` int(22) NOT NULL,
`product_name` varchar(22) NOT NULL,
`product_price` int(22) NOT NULL,
`product_cat` varchar(22) NOT NULL,
`product_details` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--



INSERT INTO `products`(`product_id`, `product_name`, `product_price`, `product_cat`, `product_details`) VALUES
(600, 'Chillies',4, 'img/chillies.jpg','best spice ever');


