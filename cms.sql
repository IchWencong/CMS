USE cms;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS nav;

CREATE TABLE IF NOT EXISTS user(
    id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    password CHAR(40) NOT NULL,
    realname VARCHAR(20) NOT NULL DEFAULT 'FIREUP',
    last_login_time DATETIME NOT NULL
)DEFAULT CHARSET=UTF8;

INSERT INTO user(username,password,realname,last_login_time) VALUES('admin', sha1('admin'),'薛文聪',NOW());

CREATE TABLE IF NOT EXISTS nav(
    nav_id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nav_name VARCHAR(6) NOT NULL,
    nav_status TINYINT UNSIGNED NOT NULL DEFAULT 1,
    nav_order SMALLINT UNSIGNED NOT NULL
)DEFAULT CHARSET=UTF8;
