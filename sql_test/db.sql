create table emp_details (name varchar(25), age int, sex char(1), doj date, city varchar(15), salary float);
 describe emp_details;

 INSERT INTO emp_details (name, age, sex, doj, city, salary)
VALUES
  ('John Doe', 30, 'M', '2023-06-16', 'New York', 5000.00),
  ('Jane Smith', 28, 'F', '2023-06-15', 'London', 4500.00),
  ('Bob Johnson', 35, 'M', '2023-06-14', 'Paris', 6000.00),
  ('Alice Williams', 32, 'F', '2023-06-13', 'Berlin', 5500.00);


# productTable
CREATE TABLE ProductTable (
  id INT(11) NOT NULL AUTO_INCREMENT,
  item_name VARCHAR(100) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  qty INT(11) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
# insert data
INSERT INTO ProductTable (item_name, price, qty) VALUES
  ('Item 1', 10.99, 5),
  ('Item 2', 19.99, 8),
  ('Item 3', 14.50, 3),
  ('Item 4', 7.99, 12),
  ('Item 5', 5.49, 20),
  ('Item 6', 9.99, 10),
  ('Item 7', 12.99, 7),
  ('Item 8', 16.75, 4),
  ('Item 9', 11.25, 6),
  ('Item 10', 8.50, 9),
  ('Item 11', 6.99, 15),
  ('Item 12', 13.49, 2),
  ('Item 13', 10.99, 11),
  ('Item 14', 9.75, 8),
  ('Item 15', 7.50, 6),
  ('Item 16', 14.99, 3),
  ('Item 17', 11.49, 9),
  ('Item 18', 8.99, 4),
  ('Item 19', 6.50, 7),
  ('Item 20', 13.99, 5);


## get by id
SELECT * FROM ProductTable WHERE id = 1; 
## delete 
 DELETE FROM ProductTable WHERE id = 1;

 UPDATE ProductTable SET item_name = 'new updated', price = 34567, qty = 23 WHERE id = 4;