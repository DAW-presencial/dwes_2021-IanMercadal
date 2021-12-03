# Respuestas 
Se pueden encontrar aquí y en la carpeta.

## 4 ejercicio

### A

Se activarán los metodos del padre, ya que son heredados de la clase hija a pesar de crear nuevas
propiedades que sean protected o privadas. Esto es por la herencia , pero los atributos pertenecen
al objeto instanciado y no a la clase padre.

### B

A pesar de ser de la clase padre, al utilizar los métodos mágicos accedemos a ellos.

## 5 ejercicio 

Lo primero de todo es comporbar la superglobal $_POST. Si tiene los campos efectua el código, si 
no pide al usuario que rellene los campos. 

Si los campos están completos, obten las propiedades name, error, size y tmp_name de los archivos que están alamacenado en la  superlobal $_FILES. En este caso también le indicamos donde se deben mover los archivos.
Si todo ha ido bien, mostrará primero los datos de lo archivos, de otro modo muestra error.

Por último muestra los datos del formulario.

Generará una serie de warnings y fail por tema de permiso pero se puede ver que muestra todo lo necesario, tanto de ficheros como de campos.

http://imercadal.ifc33b.cifpfbmoll.eu/dwes_2021-IanMercadal/1eva_respuestas/5_Ejercicio/formulario.php

