
create table users  (
	user_id int auto_increment not null,
	username char(30),

	primary key (user_id)
);

insert into users (username) values ("Joe"),("Tim"),("Mike");

