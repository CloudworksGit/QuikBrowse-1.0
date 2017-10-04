<!--

#FOR CREATING THE 'Website' TABLE.

CREATE TABLE `qb_main`.`websites` ( `id` INT NOT NULL , `link` VARCHAR(126) NOT NULL DEFAULT 'http://www.example.com/' , `name` VARCHAR(126) NOT NULL DEFAULT 'Example Website' , `categorie_id` INT NOT NULL DEFAULT '0' , UNIQUE (`id`)) ENGINE = InnoDB;

//WHAT DO WE NEED

+ ALL CONFIG ITEMS
+ Website Domain, To make getting template assets easier.

-->