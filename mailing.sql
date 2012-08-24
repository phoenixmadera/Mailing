CREATE SCHEMA `db_mailing` ;

/* Create table lists */
CREATE  TABLE `db_mailing`.`mailing_lists` (
  `id` INT NOT NULL ,
  `des` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) );

ALTER TABLE `db_mailing`.`mailing_lists` ADD COLUMN `created` DATETIME NULL  AFTER `des` ;

/* Create table users */
CREATE  TABLE `db_mailing`.`mailing_users` (
  `id` INT NOT NULL ,
  `name` VARCHAR(100) NULL ,
  `des` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) );

/* Create table with relation between lists and users. */
CREATE  TABLE `db_mailing`.`mailing_lists_users` (
  `id` INT NOT NULL ,
  `id_lists` INT NULL ,
  `id_users` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_idx` (`id_lists` ASC) ,
  INDEX `fk_user_idx` (`id_users` ASC) ,
  CONSTRAINT `fk_list`
    FOREIGN KEY (`id_lists` )
    REFERENCES `db_mailing`.`mailing_lists` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user`
    FOREIGN KEY (`id_users` )
    REFERENCES `db_mailing`.`mailing_users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

/* Create table messages */
CREATE  TABLE `db_mailing`.`mailing_messages` (
  `id` INT NOT NULL ,
  `from` VARCHAR(110) NULL ,
  `from_email` VARCHAR(60) NULL ,
  `subject` VARCHAR(110) NULL ,
  `created` DATETIME NULL ,
  `sent` DATETIME NULL ,
  `id_users` INT NULL ,
  `id_templates` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_users_idx` (`id_users` ASC) ,
  CONSTRAINT `fk_users`
    FOREIGN KEY (`id_users` )
    REFERENCES `db_mailing`.`mailing_users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `db_mailing`.`mailing_messages` 
  ADD CONSTRAINT `fk_template`
  FOREIGN KEY (`id_templates` )
  REFERENCES `db_mailing`.`mailing_templates` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `fk_template_idx` (`id_templates` ASC) ;


/* Create table templates */
CREATE  TABLE `db_mailing`.`mailing_templates` (
  `id` INT NOT NULL ,
  `des` VARCHAR(1000) NULL ,
  PRIMARY KEY (`id`) );
