# IMPORTANTE

- No importes la bbdd en phpmyadmin, te dará problemas.
- Abre el proyecto en XAMPP o Laragon, pero POSTGRES debe estar iniciado.

## Guía de bbdd

### Registra tu usuario, no hace falta insertar nada.

create table contactos(
	id SERIAL NOT NULL primary key, 
	usuario VARCHAR(20) NOT NULL,
	telefono VARCHAR(200) NOT NULL
);

create table usuarios(
	id SERIAL NOT NULL primary key, 
	usuario VARCHAR(20) NOT NULL,
	password VARCHAR(200) NOT NULL
);

