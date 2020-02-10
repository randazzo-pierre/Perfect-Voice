/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  10/02/2020 09:57:06                      */
/*==============================================================*/


drop table if exists T_AIME;

drop table if exists T_COMPTE;

drop table if exists T_GALLERIE;

drop table if exists T_MATCH;

drop table if exists T_MESSAGE;

drop table if exists T_PHOTO;

drop table if exists T_SIGNALEMENT;

drop table if exists T_UTILISATEUR;

/*==============================================================*/
/* Table : T_AIME                                               */
/*==============================================================*/
create table T_AIME
(
   ID_UTI               bigint(20) not null,
   AIM_MUSIC            bool,
   AIM_MUSIC_PREF       varchar(48),
   AIM_FILM             bool,
   AIM_FILM_PREF        varchar(48),
   AIM_EVENT            bool,
   AIM_EVENT_PREF       varchar(48),
   AIM_SPORT            bool,
   AIM_SPORT_PREf       varchar(48),
   AIM_LIVRE            bool,
   AIM_LIVRE_PREF       varchar(48),
   AIM_CUISINE          bool,
   AIM_CUISINE_PREf     varchar(48), 
   AIM_JEUXVIDEO        bool,
   AIM_JEUXVIDEO_PREF   varchar(48),
   AIM_MANUEL           bool,
   AIM_MANUEL_PREF      varchar(48),
   AIM_ANIMAUX          bool,
   AIM_ANIMAUX_PREF     varchar(48),
   AIM_DESCRIP          varchar(48),
    
    
   primary key (ID_UTI)
);

/*==============================================================*/
/* Table : T_COMPTE                                             */
/*==============================================================*/
create table T_COMPTE
(
   ID_UTI            bigint(20) not null,
   COM_LVL           varchar(48) not null,
   primary key (ID_UTI)
);

/*==============================================================*/
/* Table : T_GALLERIE                                           */
/*==============================================================*/
create table T_GALLERIE
(
   ID_UTI               bigint(20) not null,
   ID_GAL               bigint(20),
   GAL_NOM              varchar(48),
   primary key (ID_UTI)
);

/*==============================================================*/
/* Table : T_MATCH                                              */
/*==============================================================*/
create table T_MATCH
(
   ID_MAT               bigint(20) not null,
   ID_UTI               bigint(20) not null,
   OTH_ID_UTI           varchar(48) not null,
   MAT_LIKE             bool,
   MAT_TEMP             time,
   MAT_SCORE            numeric(8,0),
   primary key (ID_MAT)
);

/*==============================================================*/
/* Table : T_MESSAGE                                            */
/*==============================================================*/
create table T_MESSAGE
(
   ID_MES               bigint(20) not null,
   ID_UTI               bigint(20) not null,
   OTH_ID_UTI           varchar(48) not null,
   MES_DATE             datetime,
   MES_FICHIERS         text,
   MES_TYPEFICHIER      text,
   primary key (ID_MES)
);

/*==============================================================*/
/* Table : T_PHOTO                                              */
/*==============================================================*/
create table T_PHOTO
(
   ID_UTI               bigint(20) not null,
   ID_GAL               bigint(20),
   PHO_PHOTO            longblob,
   PHO_PROFIL           bool,
   primary key (ID_UTI)
);

/*==============================================================*/
/* Table : T_SIGNALEMENT                                        */
/*==============================================================*/
create table T_SIGNALEMENT
(
   ID_SIG               bigint(20) not null,
   ID_UTI               bigint(20) not null,
   OTH_ID_UTI           varchar(48) not null,
   SIG_DATE             datetime,
   primary key (ID_SIG)
);

/*==============================================================*/
/* Table : T_UTILISATEUR                                        */
/*==============================================================*/
create table T_UTILISATEUR
(
   ID_UTI               bigint(20) not null,
   UTI_MDP              varchar(48) not null,
   UTI_MAIL             varchar(48) not null,
   UTI_NOM              varchar(48),
   UTI_PRENOM           varchar(48),
   UTI_NAISSANCE        date,
   UTI_ADRESSE          varchar(48),
   UTI_VILLE            varchar(48),
   UTI_TEL              decimal(16),
   UTI_INSCRIPTION      datetime,
   UTI_SEXE             varchar(48),
   UTI_ORIENTATION      varchar(48),
   UTI_HEURECON         datetime,
   UTI_STATUTCON        int,
   primary key (UTI_MAIL, UTI_MDP)
);

