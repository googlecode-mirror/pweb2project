select * from ciudad;
select * from cronograma;
select * from avion;
-- ----------------------------------------------------------
-- consulta combo origen y destino
select c_cod, c_desc from ciudad;
-- ----------------------------------------------------------
-- consulta en cronograma si hay vuelos segun parametros ingresados
select * from cronograma 
where c_origen = "SAAC";
-- and ...
-- and ...
-- ----------------------------------------------------------
-- ----------------------------------------------------------
-- ----------------------------------------------------------