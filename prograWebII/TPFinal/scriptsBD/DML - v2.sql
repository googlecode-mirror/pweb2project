select * from ciudad;
select * from cronograma;
select * from avion;
-- ----------------------------------------------------------
-- consulta combo origen y destino
select c_cod, c_desc from ciudad;
-- ----------------------------------------------------------
-- consulta en cronograma si hay vuelos segun parametros ingresados
select * from cronograma;

select * from cronograma 
where c_origen = "SAAC"  -- Concordia
and c_destino = "SAAU" -- Buenos Aires
; -- no trae registros

select 
crono.crono_cod ,
crono.c_origen  ORIGEN_COD,     
ciuOri.c_desc  ORIGEN_DESC,  
crono.c_destino  DESTINO_COD,      
ciuDest.c_desc   DESTINO_DESC,
crono.avion_cod		,
crono.precio_economy ,	
crono.precio_primera ,	
crono.dia				
from cronograma  crono 
inner join ciudad ciuOri on crono.c_origen = ciuOri.c_cod
inner join ciudad ciuDest on crono.c_destino = ciuDest.c_cod
where crono.c_origen = "SAAC";

select * from cronograma 
where c_origen = "SAAC"  -- Concordia
and c_destino = "SAAU" -- Buenos Aires
; -- no trae registros

-- and ...
-- ----------------------------------------------------------
-- ----------------------------------------------------------
-- ----------------------------------------------------------