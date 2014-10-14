
-- Comentar si se ejecuta en  sqlfiddle
drop database if exists tp_pWeb_database;
create database tp_pWeb_database;
use tp_pWeb_database;

-- DDL
create table vuelo 	    (vuelo_cod	  	integer primary key, 
                         vuelo_origen 	varchar(5), -- Codigo OACI
                         vuelo_destino 	varchar(5), 
						 vuelo_dia 		varchar(1),
                         vuelo_plazas_vacias integer,
                         vuelo_estado varchar(50));
-- create table cliente 	();
-- create table avion 	    ();
-- create table asiento	    ();
-- create table reserva	    ();
-- create table pasaje 	    ();
-- create table pasajero    ();
-- create table categoria   ();
-- create table ciudad 	    ();

-- PKs
-- alter table asiento primary key (avion_cod, asiento_cod);

-- FKs
-- alter table vuelo 	add foreign key (avion_cod) references avion(avion_cod);
