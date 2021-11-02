<?php

/*
 * Практика на организацию баз данных
 */

/* Задача 1
 * Есть моря, реки и их притоки. Реки могут быть притоками других
 * рек или впадать прямо в море. Составьте структуру таблиц.

TABLE rivers
id 	name 	inflow
1 	river1 	4
2 	river2 	3
3 	river3 	1
4 	river4 	NULL

TABLE sea
id 	name 	rivers_into_the_sea
1 	sea1 	    2
2 	sea2 	    1
3 	sea3 	    3
4 	sea4 	    NULL
 */

$query = 'SELECT 
       rivers.name as river_name, 
       inflow.name as inflow_name 
FROM rivers 
    LEFT JOIN rivers as inflow ON inflow.id=rivers.inflow';

/* Задача 2
 *  Пользователь, обмен сообщениями между пользователями. Составьте структуру таблиц.

TABLE userOne
id 	name 	messages 	                            message_id
1 	user1 	hello! this is first message from user1 	4
2 	user2 	hello! this is first message from user2 	3
3 	user3 	hello! this is first message from user3 	2
4 	user4 	hello! this is first message from user4 	1

TABLE userTwo
id 	name 	messages 	                            message_id
1 	user1 	hello! this is first message from user1 	4
2 	user2 	hello! this is first message from user2 	3
3 	user3 	hello! this is first message from user3 	2
4 	user4 	hello! this is first message from user4 	1
*/

$query = '
SELECT 
       userOne.name as userone_name, 
       userTwo.name as usertwo_name 
FROM userOne 
    LEFT JOIN userTwo ON userTwo.message_id=userOne.message_id';

/* Задача 3
Сайт с датами футбольных игр. Каждая игра содержит дату игры,
первую команду и вторую команду. Есть игроки,
каждый из которых принадлежит одной команде. Составьте структуру таблиц.

TABLE games
id 	name 	                date_game 	game_id
1 	Barselona_VS_Milano_1 	2022-11-11 	    1
2 	Barselona_VS_Milano_2 	2021-12-02  	2
3   Barselona                   NULL        NULL
4   Milano                      NULL        NULL

TABLE players
id 	name 	team_id
1 	player1 	3
2 	player2 	3
3 	player3 	3
4 	player4 	3
5 	player5 	3
6 	player6 	3
7 	player7 	3
8 	player8 	3
9 	player9 	3
10 	player10 	3
11 	player11 	3
12 	player1 	4
13 	player2 	4
14 	player3 	4
15 	player4 	4
16 	player5 	4
17 	player6 	4
18 	player7 	4
19 	player8 	4
20 	player9 	4
21 	player10 	4
22 	player11 	4
 */

$query = 'SELECT 
       games.name as games_name, 
       players.name as players_name 
FROM games 
    LEFT JOIN players ON players.team_id=games.id';

/* Задача 4
 * Форум, в нем категории, в них темы (тема принадлежит только одной категории),
 * в темах посты. У темы есть автор. Пользователи
 * могут обмениваться личными сообщениями. Составьте структуру таблиц.

DataBase forum:

TABLE name categories

    id 	category_name 	theme_id
    1 	   category1 	    4
    2 	   category2 	    2
    3 	   category3        3
    4 	   category4 	 	1


TABLE name posts_id

    id     contents
    1      post_1
    2      post_2
    3      post_3


TABLE name users

 	id 	name 	message_id 	author_id
 	1 	user1 	    3 	        1
 	2 	user2 	    2 	        2
 	3 	user3 	    1 	        3
 	4 	user4 	    4 	        4
 */

/* Задача 5
 * Социальная сеть, в ней пользователи, их друзья,
 * стена, комментарии к записям на стене.
 * Пользователи могут обмениваться личными сообщениями.
 * Составьте структуру таблиц.

TABLE board
id 	ribbon_board
1 	ribbon1

TABLE comments
id 	name
1 	comment1
2 	comment2
3 	comment3
4 	comment4

TABLE contents
id 	content (Содержимое сообщения)
1 	message1
2 	message2
3 	message3
4 	message4

TABLE messages
id 	to_id 	from_id 	content_id
1 	  1 	   2 	        3
2 	  2 	   3 	        4
3 	  3 	   4 	        2
4 	  4 	   1 	        3

TABLE friends
id 	name_friend
 1 	friend1
 2 	friend2
 3 	friend3
 4 	friend4

TABLE users
id 	name
1 	user1
2 	user2
3 	user3
4 	user4


 */

/* Задача 6
 * Генеологическое дерево. Пользователь, его бабушки, дедушки, мама, папа, братья,
 * сестры, дети. Можно найти любого родственника в любом колене
 * (например, пра-пра-пра-дедушку). Нужно хранить
 * и получать родственные связи. Составьте структуру таблиц.

Database family

TABLE users
 	id 	    montherId 	    fatherId
    user	grandmother1 	grandfather1
    user1   grandmother2 	grandfather2
    user2 	yourwife 	    husband
    user3  	yourwife 	    husband
    user4   mother 	        father


TABLE FamilyTreeParents
	id 	    motherId 	fatherId
    1 	    yourwife 	    husband
    2 	    mother 	        father
    3 	    grandmother1 	grandfather1
    4 	    grandmother2 	grandfather2

TABLE FamilyTreeNodes
id 	familyParentsId
user 	1
user1 	1
user2 	2
user3 	3
user4 	4

 */


?>