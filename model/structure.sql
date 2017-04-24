drop table if exists t_shows; 
drop table if exists t_users; 

create table t_shows (
  show_id integer not null primary key auto_increment, 
  show_title varchar(100) not null, 
  show_descr varchar(2000) not null, 
  show_genre varchar(100) not null, 
  show_year int(4) not null,
  show_rating float(2) not null, 
  show_img varchar(500) not null
) engine=innodb character set utf8 collate utf8_unicode_ci; 

create table t_users (
  user_id integer not null primary key auto_increment, 
  firstname varchar(150) not null, 
  lastname varchar(150) not null, 
  username varchar(100) not null, 
  pwd varchar(100) not null
) engine=innodb character set utf8 collate utf8_unicode_ci; 