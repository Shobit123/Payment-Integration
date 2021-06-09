CREATE TABLE `orders` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `item_price` float(10,2) NOT NULL,
 `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `card_number` bigint(20) NOT NULL,
 `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
 `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ok | Error',
 `payment_response` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL COMMENT '1=Approved | 2=Declined | 3=Error | 4=Held for Review',
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;