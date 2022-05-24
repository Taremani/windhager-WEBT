create database USRPS;

create table game(
round int primary key ,
player1 varchar(20),
player2 varchar(20),
symbolPlayer1 varchar(10),
symbolPlayer2 varchar (10),
gameDate date,
gameTime time
    );

insert into game(round, player1, player2, symbolPlayer1, symbolPlayer2, gameDate)
values(1, 'Omar Faid', 'Alex Sarka', 'Stein', 'Stein', '2022-05-22', '08:00:00');
insert into game(round, player1, player2, symbolPlayer1, symbolPlayer2, gameDate)
values(2, 'Stimpfl', 'Weiss', 'Schere', 'Papier', '2022-05-22', '08:055:00');
insert into game(round, player1, player2, symbolPlayer1, symbolPlayer2, gameDate)
values(3, 'Allah', 'Mohammed', 'Papier', 'Stein', '2022-05-22', '08:10:00');
insert into game(round, player1, player2, symbolPlayer1, symbolPlayer2, gameDate)
values(4, 'Lozada', 'Quezada', 'Papier', 'Papier', '2022-05-22', '08:15:00');
insert into game(round, player1, player2, symbolPlayer1, symbolPlayer2, gameDate)
values(5, 'Herrele', 'Baumgartner', 'Schere', 'Stein', '2022-05-23', '08:20:00');

select * from game;