CREATE DATABASE linkable;
 
CREATE  TABLE `linkable`.`links` (
  	`id` INT NOT NULL AUTO_INCREMENT,
  	`url` VARCHAR(500) NOT NULL,
  	`shortened` VARCHAR(500) NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE = InnoDB;
  
USE linkable;

insert into links (url, shortened) 
       VALUES('0000001', '00000011');
insert into links (url, shortened) 
       VALUES('0000002', '00000022');
insert into links (url, shortened) 
       VALUES('0000003', '00000033');
