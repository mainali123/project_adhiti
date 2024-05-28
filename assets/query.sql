Create table adhiti_db.users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    logged_in JSON NOT NULL DEFAULT '{}',
    status ENUM('active', 'inactive', 'suspended', 'deleted') DEFAULT 'active',
    past_password varchar(255) DEFAULT NULL
);