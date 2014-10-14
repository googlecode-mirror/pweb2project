USE tp_pweb_database;
INSERT INTO vuelo 
(
 vuelo_cod	  	          , -- 1 -- integer primary key, 
 vuelo_origen 			  , -- 2 -- varchar(5), -- Codigo OACI
 vuelo_destino 	          , -- 3 -- varchar(5), 
 vuelo_dia 		          , -- 4 -- varchar(1),
 vuelo_plazas_vacias      , -- 5 -- integer,
 vuelo_estado 			    -- 6 -- varchar(50))
) 
VALUES (
 100    , -- vuelo_cod	  	          , -- 1 -- integer primary key, 
 'SAVR' , -- vuelo_origen 			  , -- 2 -- varchar(5), -- Codigo OACI
 'SAAP' , -- vuelo_destino 	          , -- 3 -- varchar(5), 
 'L'    , -- vuelo_dia 		          , -- 4 -- varchar(1),
 77     , -- vuelo_plazas_vacias      , -- 5 -- integer,
 'INC'    -- vuelo_estado 			    -- 6 -- varchar(50))
);