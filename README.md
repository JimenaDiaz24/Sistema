# Sistema
El siguiente sistema es de una joyería proporciona altas, bajas, cambios y consultas muy usable para cualquier negocio

## Instalación
Debemos tener instalado previamente Xampp, por que las modificaciones inician en ese punto.

El primer cambio va hacer dentro de la carpeta C:/xampp/apache/conf/extra/httpd-vhosts en ese archivo colocaremos lo siguiente
```bash
<VirtualHost *:80>
    ServerAdmin nombrecarpeta.com
    DocumentRoot "C:/xampp/htdocs/nombrecarpeta.com/public"
    ServerName nombrecarpeta.com
    ErrorLog "logs/nombrecarpeta.com-error.log"
    CustomLog "logs/nombrecarpeta.com-access.log" common
    <Directory "C:/xampp/htdocs/nombrecarpeta.com/public">
      Options All
      AllowOverride All
      Require all granted
    </Directory>
</VirtualHost>
```

Posteriormente iremos a nuestra carpeta C:/Windows/System32/drivers/etc/hosts y dentro del archivo se colocara lo siguiente
```bash
127.0.0.1       nombrecarpeta.com
```
Finalmente reiniciaremos Xampp para que se hagan los cambios

## Base de datos
Crearemos una base de datos con el nombre que queramos dentro de esta una tabla puedes ponerle el nombre que desees y los atributos que necesites.
## Configuración de la carpeta INCLUDES
Para posteriormente dentro de la carpeta includes modificar el archivo constants.php
```bash
<?php
 define("DBNAME", "nombreasignado");
 define("SERVERNAME", "localhost");
 define("PORT", "3306");
 define("USERNAME", "root");
 define("PASSWORD", "")
?>
```

## Demás archivos
Para nuestra carpeta public solo se tienen que modificar las consultas pues observaremos que dice 'joyeria' en lugar de eso se pone el nombre de la tabla y igualmente los nuevos atributos designados
Ejemplo:
```bash
$joya=query("SELECT * FROM nuevonombre where id=?",$_GET['id'])[0];
```
Y en templeates los archivos index.php y joyeria.php hay que cambiar los cards con los nuevos atributos designados

## Autor
 * Jimena Diaz De Los Santos

## License
[MIT](https://choosealicense.com/licenses/mit/)
