CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    profile TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO users (user_name, email, password, phone, profile) VALUES
    ('John Doe', 'johndoe@example.com', 'password123', '1234567890', 'Lorem ipsum dolor sit amet.'),
    ('Jane Smith', 'janesmith@example.com', 'pass456', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
    ('Alice Johnson', 'alicejohnson@example.com', 'secretword', '9876543210', 'Nulla facilisi.');


## login query
select * from users where email = 'johndoe@example.com' and password = 'password123';