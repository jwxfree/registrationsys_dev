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

INSERT INTO software_eng 
    (first_name, last_name, gender, age, email, nationality, tech_stack, work_experience, web_portfolio) 
VALUES
    ('Alice', 'Smith', 'Female', 28, 'alice.smith@example.com', 'USA', 'JavaScript, Python', '3 years', 'https://aliceportfolio.com'),
    ('Bob', 'Johnson', 'Male', 32, 'bob.johnson@example.com', 'Canada', 'Java, C#', '5 years', 'https://bobjohnson.dev'),
    ('Carol', 'Davis', 'Female', 26, 'carol.davis@example.com', 'UK', 'Ruby, PHP', '2 years', 'https://caroldavis.tech'),
    ('David', 'Miller', 'Male', 35, 'david.miller@example.com', 'Australia', 'Go, Rust', '7 years', 'https://davidmiller.io'),
    ('Eve', 'Wilson', 'Female', 30, 'eve.wilson@example.com', 'Germany', 'Node.js, React', '4 years', 'https://evewilson.dev');
