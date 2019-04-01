CREATE database DBphp7;

USE dbphp7;

CREATE table tbusuarios(
idusuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tbusuarios (deslogin, dessenha) VALUES ('root', '123');

SELECT * FROM tbusuarios;

UPDATE tbusuarios SET dessenha = '123456' WHERE idusuario = '1';

DELETE FROM tbusuarios WHERE idusuario = '1';

TRUNCATE TABLE tbusuarios; -- reseta a tabela toda