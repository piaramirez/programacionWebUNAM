 
--Asistencia
drop schema if exists `asistencia`;
create schema if not exists `asistencia` default character;
use `asistenca`;
create table `usuarios`{
    `text` not null, 
    `direccion` not null,
    `correo` not null,
    `fechaRegistro` timestamp not null current_timestamp on update current_timestamp;
}