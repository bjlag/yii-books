CREATE TABLE `user`
(
  `id`            int(11) NOT NULL,
  `username`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token`  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_key`      varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at`    int(11) DEFAULT NULL,
  `updated_at`    int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE =utf8mb4_unicode_ci;

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

INSERT INTO `user` (`id`, `username`, `name`, `password_hash`, `access_token`, `auth_key`, `created_at`, `updated_at`)
VALUES
(100, 'admin', 'admin', '$2y$13$FbUjPLeIWJdzwa0Hxr1Q9etcGP0VNk87AeoqxWDphk6dEJIxe2LK2', '100-token', 'test100key', NULL,
 NULL),
(101, 'demo', 'demo', '$2y$13$94NLDEeB3By5rmKpSbpmoeGeOtAeg3/bF2ZThvUjn3nDR3EEflwtG', '101-token', 'test101key', NULL,
 NULL);;