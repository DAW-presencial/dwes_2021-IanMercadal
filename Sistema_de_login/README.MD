# Login System
En esta práctica se pone en curso un ejemplo de CRUD y Login. 

## Errores

Durante el proceso de creación, me he topado con una serie de errores los cuales he corregido.
- Por ejemplo, las rutas presentadas en la guía no son correctas, ya que la estrucutra de directorios presentada al
inicio, no concuerda con las acciones realizadas posteriormente. 
- De  otrodo modo, no podemos insertar un campo requerido
por la bbdd en el registro de nuevos usuarios, por lo que me he visto obligado a poner como null ese campo, el cual se llama
access_code.
- Finalmente, en la primera query para insertar datos predefinidos por la guía, se presentan 2 fechas las cuales no son válidas para la bbdd. Estas deben ser modificadas por una fecha real.
- Muy posiblemente, no se envíen los correos debido a que debes configurar manualmente que php(Laragon o XAMPP).