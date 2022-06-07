create database USRPS;
use USRPS;

create table game(
round int primary key AUTO_INCREMENT,
player1 varchar(20),
player2 varchar(20),
symbolPlayer1 varchar(10),
symbolPlayer2 varchar (10),
gameDate date,
gameTime time
    );

insert into game(player1, player2, symbolPlayer1, symbolPlayer2, gameDate, gameTime)
values('Omar Faid', 'Alex Sarka', 'Stein', 'Stein', '2022-05-22', '08:00:00');
insert into game(player1, player2, symbolPlayer1, symbolPlayer2, gameDate, gameTime)
values('Stimpfl', 'Weiss', 'Schere', 'Papier', '2022-05-22', '08:055:00');
insert into game(player1, player2, symbolPlayer1, symbolPlayer2, gameDate, gameTime)
values('Allah', 'Mohammed', 'Papier', 'Stein', '2022-05-22', '08:10:00');
insert into game(player1, player2, symbolPlayer1, symbolPlayer2, gameDate, gameTime)
values('Lozada', 'Quezada', 'Papier', 'Papier', '2022-05-22', '08:15:00');
insert into game(player1, player2, symbolPlayer1, symbolPlayer2, gameDate, gameTime)
values('Herrele', 'Baumgartner', 'Schere', 'Stein', '2022-05-23', '08:20:00');

select * from game;

drop table game;