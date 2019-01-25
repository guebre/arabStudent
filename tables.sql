CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);


ALTER TABLE ci_sessions ADD PRIMARY KEY (id, ip_address);

/* Table users */
CREATE TABLE `users` (
`usr_id` int(11) NOT NULL AUTO_INCREMENT,
`acc_id` int(11) NOT NULL COMMENT 'account id',
`usr_fname` varchar(125) NOT NULL,
`usr_lname` varchar(125) NOT NULL,
`usr_uname` varchar(50) NOT NULL,
`usr_email` varchar(255) NOT NULL,
`usr_hash` varchar(255) NOT NULL,
`usr_add1` varchar(255) NOT NULL,
`usr_add2` varchar(255) NOT NULL,
`usr_add3` varchar(255) NOT NULL,
`usr_town_city` varchar(255) NOT NULL,
`usr_zip_pcode` varchar(10) NOT NULL,
`usr_access_level` int(2) NOT NULL COMMENT 'up to 99',
 `usr_is_active` int(1) NOT NULL COMMENT '1 (active) or 0
(inactive)',
`usr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`usr_pwd_change_code` varchar(50) NOT NULL,
PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;