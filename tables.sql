create table articles
(
    Id              bigint auto_increment
        primary key,
    Titre           varchar(50)  null,
    Description     text         null,
    DateAjout       date         null,
    Auteur          varchar(50)  null,
    ImageRepository varchar(50)  null,
    ImageFileName   varchar(255) null
);
CREATE TABLE users (
    user_id int(4) auto_increment
        primary key,
    username varchar(50) NOT NULL,
    user_email varchar(50) NOT NULL,
    user_password varchar(100) NOT NULL,
    user_image text NULL,
    user_role varchar(20) NOT NULL,
    token varchar(60) NOT NULL,
    user_check boolean NOT NULL
);