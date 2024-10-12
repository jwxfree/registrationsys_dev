CREATE TABLE software_eng(
	dev_id int AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(50),
    age int,
    email VARCHAR(50),
    nationality VARCHAR(50),
    tech_stack VARCHAR(50),
    work_experience VARCHAR(50),
    web_portfolio VARCHAR(50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP


);