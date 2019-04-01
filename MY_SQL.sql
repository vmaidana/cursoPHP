USE dbphp7;

CREATE TABLE TBusuarios (
IDusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR (64) NOT NULL,
dessenha VARCHAR (256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO TBUsuarios (deslogin, dessenha) VALUES('root', 'blablasenha');

SELECT * FROM TBusuarios;

 -- TRUNCATE TABLE TBusuarios; -- reseta a tabela

UPDATE TBusuarios SET  dessenha = '123456' WHERE IDusuario = 1;

DELETE FROM TBusuarios WHERE IDusuario = 1;