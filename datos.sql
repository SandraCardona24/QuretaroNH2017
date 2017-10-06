insert into estatus (desc_estatus, tipo_estatus) values("Iniciado", "p");
insert into estatus (desc_estatus, tipo_estatus) values("Finalizado", "p");
insert into estatus (desc_estatus, tipo_estatus) values("Cancelado", "p");

insert into estatus (desc_estatus, tipo_estatus) values("Asignado", "r");
insert into estatus (desc_estatus, tipo_estatus) values("Desasignado", "r");
insert into estatus (desc_estatus, tipo_estatus) values("Vacaciones", "r");
insert into estatus (desc_estatus, tipo_estatus) values("Incapacidad", "r");
insert into estatus (desc_estatus, tipo_estatus) values("Embarazo", "r");

insert into estatus (desc_estatus, tipo_estatus) values("Finalizado", "ot");
insert into estatus (desc_estatus, tipo_estatus) values("Cancelado", "ot");
insert into estatus (desc_estatus, tipo_estatus) values("Pospuesto", "ot");
insert into estatus (desc_estatus, tipo_estatus) values("Iniciado", "ot");
insert into estatus (desc_estatus, tipo_estatus) values("Construccion", "ot");
insert into estatus (desc_estatus, tipo_estatus) values("Revision", "ot");
insert into estatus (desc_estatus, tipo_estatus) values("Aceptado", "ot");

insert into estatus (desc_estatus, tipo_estatus) values("Finalizado", "t");
insert into estatus (desc_estatus, tipo_estatus) values("Cancelado", "t");
insert into estatus (desc_estatus, tipo_estatus) values("Pospuesto", "t");
insert into estatus (desc_estatus, tipo_estatus) values("Iniciado", "t");

insert into estatus (desc_estatus, tipo_estatus) values("Activo", "usr");
insert into estatus (desc_estatus, tipo_estatus) values("Inactivo", "usr");



insert into puesto (desc_puesto) values("Gerente");
insert into puesto (desc_puesto) values("Lider");
insert into puesto (desc_puesto) values("Programador");
insert into puesto (desc_puesto) values("Analista");
insert into puesto (desc_puesto) values("Tester");
insert into puesto (desc_puesto) values("Becario");
insert into puesto (desc_puesto) values("DBA");
insert into puesto (desc_puesto) values("Arquitecto");

insert into tecnologia (nombre_tec) values("Java");
insert into tecnologia (nombre_tec) values("Cobol");
insert into tecnologia (nombre_tec) values("BI");
insert into tecnologia (nombre_tec) values("PHP");
insert into tecnologia (nombre_tec) values("Javascript");
insert into tecnologia (nombre_tec) values("Xamarin");
insert into tecnologia (nombre_tec) values("Swift");
insert into tecnologia (nombre_tec) values("SQL");
insert into tecnologia (nombre_tec) values("DB2");
insert into tecnologia (nombre_tec) values("AS-400");
insert into tecnologia (nombre_tec) values("HTML");
insert into tecnologia (nombre_tec) values("Android");


insert into oficina (nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values ("Culiacan", "Tecnologico","201", "Industrializacion", "442-564-9875", "Culiacan", "24.805446","-107.419540");
insert into oficina (nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values ("Ciudad de Mexico", "Zaragoza","65", "Teotihuacan", "554-620-4585", "Ciudad de Mexico", "19.417459", "-99.146384");
insert into oficina (nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values ("Monterrey", "Las cruces","18", "Campo Militar", "985-513-5646", "Monterrey", "20.648903", "-98.156597");


	insert into usuario (nombre_usr, password_usr, )