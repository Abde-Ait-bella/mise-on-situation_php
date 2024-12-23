CREATE TABLE role (role_id INT AUTO_INCREMENT PRIMARY KEY, role_name VARCHAR(25) );
CREATE TABLE users (user_id INT AUTO_INCREMENT PRIMARY KEY, user_name VARCHAR(25), role_id INT, FOREIGN KEY (role_id) REFERENCES role(role_id) );
INSERT INTO `role` (`role_id`, `role_name`) VALUES ('1', 'admine'), ('2', 'utilisateur');