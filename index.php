CREATE TABLE countries( country_id int(10), country_name varchar(10), region_id decimal(10,0) );

CREATE TABLE IF NOT EXISTS countries( country_id int(10), country_name varchar(20), region_id varchar(25) );

CREATE TABLE IF NOT EXISTS dup_countries LIKE countries;

CREATE TABLE IF NOT EXISTS dup_countries LIKE countries;

CREATE TABLE IF NOT EXISTS jobs ( JOB_ID varchar(10) NOT NULL , JOB_TITLE varchar(35) NOT NULL, MIN_SALARY decimal(6,0), MAX_SALARY decimal(6,0) CHECK(MAX_SALARY<=25000) )

CREATE TABLE IF NOT EXISTS countries ( countries_id varchar(2), countries_name varchar(40) CHECK (countries_name IN('Italy','India','China')) , REGION_ID decimal(10,0) )

ALTER TABLE countries ADD UNIQUE(country_id);

ALTER TABLE `countries` ADD UNIQUE(`country_id`)
<!-- ////////////////////////////////////////////////////////////////////// -->
CREATE TABLE IF NOT EXISTS countries ( 
COUNTRY_ID integer NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
COUNTRY_NAME varchar(40) NOT NULL,
REGION_ID decimal(10,0) NOT NULL
);
DESC countries;
<!-- ///////////////////////////////////////////////////////////////////// -->
CREATE TABLE IF NOT EXISTS countries (
COUNTRY_ID varchar(2) NOT NULL UNIQUE DEFAULT '',
COUNTRY_NAME varchar(40) DEFAULT NULL,
REGION_ID decimal(10,0) NOT NULL,
PRIMARY KEY (COUNTRY_ID,REGION_ID));
<!-- ///////////////////////////////////////////////////////////////////// -->
CREATE TABLE job_history ( 
EMPLOYEE_ID decimal(6,0) NOT NULL PRIMARY KEY, 
START_DATE date NOT NULL, 
END_DATE date NOT NULL, 
JOB_ID varchar(10) NOT NULL, 
DEPARTMENT_ID decimal(4,0) DEFAULT NULL, 
FOREIGN KEY (job_id) REFERENCES jobs(job_id)
)ENGINE=InnoDB;
<!-- //////////////////////////////////////////////////////////////////// -->
CREATE TABLE IF NOT EXISTS employees ( 
EMPLOYEE_ID decimal(6,0) NOT NULL PRIMARY KEY, 
FIRST_NAME varchar(20) DEFAULT NULL, 
LAST_NAME varchar(25) NOT NULL, 
EMAIL varchar(25) NOT NULL, 
PHONE_NUMBER varchar(20) DEFAULT NULL, 
HIRE_DATE date NOT NULL, 
JOB_ID varchar(10) NOT NULL, 
SALARY decimal(8,2) DEFAULT NULL, 
COMMISSION_PCT decimal(2,2) DEFAULT NULL, 
MANAGER_ID decimal(6,0) DEFAULT NULL, 
DEPARTMENT_ID decimal(4,0) DEFAULT NULL, 
FOREIGN KEY(DEPARTMENT_ID,MANAGER_ID) 
REFERENCES  departments(DEPARTMENT_ID,MANAGER_ID)
)ENGINE=InnoDB;
<!-- //////////////////////////////////////////////////////////////////// -->

CREATE TABLE IF NOT EXISTS employees ( 
EMPLOYEE_ID decimal(6,0) NOT NULL PRIMARY KEY, 
FIRST_NAME varchar(20) DEFAULT NULL, 
LAST_NAME varchar(25) NOT NULL, 
EMAIL varchar(25) NOT NULL, 
PHONE_NUMBER varchar(20) DEFAULT NULL, 
HIRE_DATE date NOT NULL, 
JOB_ID varchar(10) NOT NULL, 
SALARY decimal(8,2) DEFAULT NULL, 
COMMISSION_PCT decimal(2,2) DEFAULT NULL, 
MANAGER_ID decimal(6,0) DEFAULT NULL, 
DEPARTMENT_ID decimal(4,0) DEFAULT NULL, 
FOREIGN KEY(DEPARTMENT_ID) 
REFERENCES  departments(DEPARTMENT_ID),
FOREIGN KEY(JOB_ID) 
REFERENCES  jobs(JOB_ID)
)ENGINE=InnoDB;
<!-- /////////////////////////////////////////////////////////////////////// -->
CREATE TABLE IF NOT EXISTS employees ( 
EMPLOYEE_ID decimal(6,0) NOT NULL PRIMARY KEY, 
FIRST_NAME varchar(20) DEFAULT NULL, 
LAST_NAME varchar(25) NOT NULL, 
EMAIL varchar(25) NOT NULL, 
PHONE_NUMBER varchar(20) DEFAULT NULL, 
HIRE_DATE date NOT NULL, 
JOB_ID varchar(10) NOT NULL, 
SALARY decimal(8,2) DEFAULT NULL, 
COMMISSION_PCT decimal(2,2) DEFAULT NULL, 
MANAGER_ID decimal(6,0) DEFAULT NULL, 
DEPARTMENT_ID decimal(4,0) DEFAULT NULL, 
FOREIGN KEY(DEPARTMENT_ID) 
REFERENCES  departments(DEPARTMENT_ID),
FOREIGN KEY(JOB_ID) 
REFERENCES  jobs(JOB_ID)
)ENGINE=InnoDB;
<!-- ////////////////////////////////////////////////////////////////////////// -->
CREATE TABLE IF NOT EXISTS employees ( 
EMPLOYEE_ID decimal(6,0) NOT NULL PRIMARY KEY, 
FIRST_NAME varchar(20) DEFAULT NULL, 
LAST_NAME varchar(25) NOT NULL, 
JOB_ID INTEGER, 
SALARY decimal(8,2) DEFAULT NULL, 
FOREIGN KEY(JOB_ID) 
REFERENCES  jobs(JOB_ID)
ON DELETE SET NULL 
ON UPDATE SET NULL
)ENGINE=InnoDB;
