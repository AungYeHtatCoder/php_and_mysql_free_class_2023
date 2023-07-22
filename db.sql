CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    profile VARCHAR(250) DEFAULT 'default.jpg',
    user_type VARCHAR(20) NOT NULL DEFAULT 'user',
    cover_photo VARCHAR(250) DEFAULT 'default.jpg',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO users (user_name, email, password, phone, profile) VALUES
    ('John Doe', 'johndoe@example.com', 'password123', '1234567890', 'Lorem ipsum dolor sit amet.'),
    ('Jane Smith', 'janesmith@example.com', 'pass456', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
    ('Alice Johnson', 'alicejohnson@example.com', 'secretword', '9876543210', 'Nulla facilisi.');


## login query
select * from users where email = 'johndoe@example.com' and password = 'password123';

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(250) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_title VARCHAR(255) NOT NULL,
    description TEXT,
    post_image VARCHAR(255) DEFAULT 'default.jpg',
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);