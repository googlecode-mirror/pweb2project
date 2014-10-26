-- Comentar si se ejecuta en  sqlfiddle
drop database if exists tp_pWeb_database;
create database tp_pWeb_database;
use tp_pWeb_database;

-- DDL
create table ciudad (c_cod  				varchar(10) primary key,
                     c_desc                 varchar(100)
                    ); 

create table avion (avion_cod  				integer primary key, 
                    avion_capacidad         integer,
					avion_filas_economy     integer, 
					avion_filas_primera     integer, 
					avion_col_economy    	integer, 
					avion_col_primera    	integer
                    ) ;

create table reserva (r_cod	  				integer primary key AUTO_INCREMENT, 
					  r_fecha_reserva       date,
                      r_estado              varchar(3), -- CON=Confirmada;LE=Lista de espera;P=Pagada;CAN=Cancelada;
                      r_fecha_vuelo         date,
                      v_cod                 integer
                     );
create table asiento  (avion_cod			integer, 
                       asiento_cod          integer,
                       asiento_fila         integer,
                       asiento_col          integer
                      );

create table pasaje  (pasaje_cod			integer primary key AUTO_INCREMENT, 
                      pasaje_estado         varchar(1), -- P=Pagado; C=Cancelado   
                      pasaje_categoria      varchar(1), -- P=Primera; E=Economy
                      pasaje_precio         decimal (50,2), 
                      v_cod                 integer, 
					  r_cod                 integer,
                      avion_cod             integer, 
                      asiento_cod           integer,
                      pasajero_cod          integer -- ver: no permite crear la fk   
                      );

create table pasajero  (pasaje_cod	   		integer,  
                        pasajero_cod        integer,
                        pasajero_nombre     varchar(30), 
                        pasajero_apellido   varchar(30), 
						pasajero_telefono   integer, 
                        pasajero_email      integer
                       );

create table cronograma  ( crono_cod   		integer primary key AUTO_INCREMENT, 
						   c_origen         varchar(10),
					       c_destino        varchar(10),
                           avion_cod		integer, 
                           precio_economy 	decimal (50,2), 
					       precio_primera 	decimal (50,2),
						   dia				varchar(2) -- LU MA MI JU VI SA DO
						-- v_cod	        integer -- si es null aun no tiene vuelo asociado
                         );

create table vuelo (v_cod	  				integer primary key AUTO_INCREMENT, 
					v_dia      				varchar(2), -- LU MA MI JU VI SA DO
					v_hora     				time, 
					v_precio_economy 		decimal (50,2), 
					v_precio_primera 		decimal (50,2),
				    v_plazas_vacias_economy integer, 
                    v_plazas_vacias_primera integer, 
					v_estado                varchar(3), -- COM=Completo; INC=Incompleto
					avion_cod               integer,
                    c_origen                varchar(10),
					c_destino               varchar(10),
                    crono_cod               integer
                    );
-- PKs compuestas
 alter table asiento add primary key (avion_cod, asiento_cod);
 alter table pasajero add primary key (pasaje_cod,pasajero_cod);

-- FKs
 alter table vuelo 		add foreign key (avion_cod) references avion(avion_cod);
 alter table vuelo 		add foreign key (c_origen)  references ciudad(c_cod);
 alter table vuelo 		add foreign key (c_destino) references ciudad(c_cod);
 alter table vuelo 		add foreign key (crono_cod) references cronograma(crono_cod);
 alter table reserva 	add foreign key (v_cod) references vuelo(v_cod);
 alter table pasaje 	add foreign key (v_cod) references vuelo(v_cod);
 alter table pasaje 	add foreign key (r_cod) references reserva(r_cod);
 -- alter table pasaje 	add foreign key (pasajero_cod) references pasajero(pasajero_cod);
 alter table pasaje 	add foreign key (avion_cod,asiento_cod) references asiento(avion_cod,asiento_cod);
 alter table pasajero 	add foreign key (pasaje_cod) references pasaje(pasaje_cod);
