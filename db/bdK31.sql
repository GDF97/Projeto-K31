create database bdK31;

use bdk31;

CREATE TABLE tb_usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nm_usuario VARCHAR(50),
    nm_login VARCHAR(20),
    cd_senha VARCHAR(15),
    sg_nivel CHAR(1)
);

describe tb_usuario;

insert into tb_usuario(nm_usuario, nm_login, cd_senha, sg_nivel) values ("Pedro Silva", "LoginPEDRO", "ADM123", "3"), ("Francisco Pedro", "LoginFRANCISCO", "ADM1234", "3");