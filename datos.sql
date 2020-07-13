insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(1,"Iniciado", "p");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(2,"Finalizado", "p");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(3,"Cancelado", "p");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(4,"Pendiente", "p");
                                                                   
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(5,"Asignado", "r");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(6,"Desasignado", "r");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(7,"Vacaciones", "r");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(8,"Incapacidad", "r");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(9,"Embarazo", "r");
                                                                   
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(10,"Finalizado", "ot");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(11,"Cancelado", "ot");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(12,"Pospuesto", "ot");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(13,"Iniciado", "ot");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(14,"Construccion", "ot");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(15,"Revision", "ot");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(16,"Aceptado", "ot");
                                                                   
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(17,"Finalizado", "t");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(18,"Cancelado", "t");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(19,"Pospuesto", "t");
insert into estatus (ID_ESTATUS,desc_estatus, tipo_estatus) values(20,"Iniciado", "t");

insert into puesto (ID_PUESTO,desc_puesto) values(1,"Gerente");
insert into puesto (ID_PUESTO,desc_puesto) values(2,"Lider");
insert into puesto (ID_PUESTO,desc_puesto) values(3,"Programador");
insert into puesto (ID_PUESTO,desc_puesto) values(4,"Analista");
insert into puesto (ID_PUESTO,desc_puesto) values(5,"Tester");
insert into puesto (ID_PUESTO,desc_puesto) values(6,"Becario");
insert into puesto (ID_PUESTO,desc_puesto) values(7,"DBA");
insert into puesto (ID_PUESTO,desc_puesto) values(8,"Arquitecto");

insert into tecnologia (ID_tec,nombre_tec) values(1,"Java");
insert into tecnologia (ID_tec,nombre_tec) values(2,"Cobol");
insert into tecnologia (ID_tec,nombre_tec) values(3,"BI");
insert into tecnologia (ID_tec,nombre_tec) values(4,"PHP");
insert into tecnologia (ID_tec,nombre_tec) values(5,"Javascript");
insert into tecnologia (ID_tec,nombre_tec) values(6,"Xamarin");
insert into tecnologia (ID_tec,nombre_tec) values(7,"Swift");
insert into tecnologia (ID_tec,nombre_tec) values(8,"SQL");
insert into tecnologia (ID_tec,nombre_tec) values(9,"DB2");
insert into tecnologia (ID_tec,nombre_tec) values(10,"AS-400");
insert into tecnologia (ID_tec,nombre_tec) values(11,"HTML");
insert into tecnologia (ID_tec,nombre_tec) values(12,"Android");

insert into usuario (NOMBRE_USR,PASSWORD_USR,ID_RECURSO,ID_ESTAT) values("prueba@neoris.com","1234",1,6);
insert into usuario (NOMBRE_USR,PASSWORD_USR,ID_RECURSO,ID_ESTAT) values("yran@neoris.com","1234",7,6);

insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(1,"Noe","Ramos","Lopez",25,1,1,3);
insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(2,"Juan Luis","Perez","Ramirez",25,1,1,3);
insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(3,"Marco Polo","Lopez","Quintana",25,1,1,3);
insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(4,"Santiago abram","Garcia","Pedraza",25,1,1,3);
insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(5,"Diego","Colchado","Santarriaga",25,1,1,3);
insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(6,"Leopoldo","Espinosa","Ramires",25,1,1,3);
insert into recurso (id_recurso,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO) values(7,"Yran Joan","Arvizu","Espinosa",25,1,1,3);

insert into oficina (ID_OFICINA,nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values (4,"Culiacan", "Tecnologico","201", "Industrializacion", "442-564-9875", "Culiacan", "24.805446","-107.419540");
insert into oficina (ID_OFICINA,nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values (2,"Ciudad de Mexico", "Zaragoza","65", "Teotihuacan", "554-620-4585", "Ciudad de Mexico", "19.417459", "-99.146384");
insert into oficina (ID_OFICINA,nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values (3,"Monterrey", "Las cruces","18", "Campo Militar", "985-513-5646", "Monterrey", "20.648903", "-98.156597");
insert into oficina (ID_OFICINA,nombre_ofi, calle_ofi, num_ofi, colonia_ofi, telefono_ofi, ciudad_ofi, latitud, longitud) values (1,"Queretaro", "Queretaro","18", "Prol Tecnológico Nte 950", "985-513-5646", "Monterrey", "20.648903", "-98.156597");


insert into proyecto (ID_PROYECT,NOM_PROYECT,DESC_PROYECT,ID_TEC,FECHA_INI,FECHA_TER,ID_ESTATUS,ID_OFICINA) values(1,'Neoris PHP','Hackaton',4,'2017-10-06','2017-10-07',4,1);

insert into orden_trabajo(ID_OT,DESC_OT,HORAS_OT,FEC_IN_OT,FEC_FN_OT,ID_ESTATUS,LIDER_CLIENTE_OT,ID_PROYECTO) values(1,'Hackaton 2017 OS',29,'2017-10-06','2017-10-07',13,' Formación de Semilleros',1);

insert into tarea (ID_TA,DESC_TA ,FEC_IN_TA ,FEC_FN_TA ,HORAS_TA ,ID_ESTATUS )values(1,'Revision','2017-10-06','2017-10-07',8,20);
insert into tarea (ID_TA,DESC_TA ,FEC_IN_TA ,FEC_FN_TA ,HORAS_TA ,ID_ESTATUS )values(2,'Construccion','2017-10-06','2017-10-07',8,20);

insert into det_rec_proy(ID_PROYECT,ID_RECURSO,ID_TAREA ) values(1,1,1);
insert into det_rec_proy(ID_PROYECT,ID_RECURSO,ID_TAREA ) values(1,2,1);
**Hello**
