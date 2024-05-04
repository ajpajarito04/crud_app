# PHP Complete CRUD Application

### ****Creating the Database Table****

Create a table named *crud* inside your MySQL database using the following code.

```sql
create TABLE EMPLOYEE (
    -> `EMPLOYEE_ID` int(3) NOT NULL AUTO_INCREMENT,
    -> `F_NAME` varchar(20) NOT NULL,
    -> `L_NAME` varchar(20) NOT NULL,
    -> `POSITION` varchar(20) NOT NULL,
    -> PRIMARY KEY (`EMPLOYEE_ID`)
    -> );

```

### ****Copy files to htdocs folder****

