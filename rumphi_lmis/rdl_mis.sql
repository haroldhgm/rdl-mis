-- Create database
DROP DATABASE IF EXISTS rdl_mis;
CREATE DATABASE rdl_mis;
USE rdl_mis;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'employer', 'jobseeker') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Jobs table
CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employer_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (employer_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Applications table
CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    user_id INT NOT NULL,
    status ENUM('pending', 'reviewed', 'accepted', 'rejected') DEFAULT 'pending',
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (job_id) REFERENCES jobs(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Reports table (optional, placeholder)
CREATE TABLE reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    content TEXT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE SET NULL
);

-- Insert default admin user
INSERT INTO users (name, email, password, role)
VALUES ('Admin', 'admin@rdlmis.gov.mw', MD5('admin123'), 'admin');

-- Insert sample employers
INSERT INTO users (name, email, password, role)
VALUES 
('ABC Company', 'abc@company.com', MD5('abc123'), 'employer'),
('XYZ Ltd', 'xyz@ltd.com', MD5('xyz123'), 'employer');

-- Insert sample job seekers
INSERT INTO users (name, email, password, role)
VALUES 
('John Banda', 'john@example.com', MD5('john123'), 'jobseeker'),
('Mary Phiri', 'mary@example.com', MD5('mary123'), 'jobseeker');

-- Insert sample jobs
INSERT INTO jobs (employer_id, title, description)
VALUES
(2, 'IT Technician', 'Looking for a skilled IT Technician with 2 years experience.'),
(3, 'Office Administrator', 'Administrative support role with Excel knowledge.');

-- Insert sample applications
INSERT INTO applications (job_id, user_id, status)
VALUES
(1, 4, 'pending'),
(2, 5, 'pending');
