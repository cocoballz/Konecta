# Konecta 
##KONECTA - PRUEBA LARAVEL - PHP  

###馃搫 Desccripcion 
Objetivo General

KONECTA, necesita para unas de sus cafeter铆as que tiene en sede de un software, que permita
almacenar y gestionar el inventario de sus productos. Este software debe permitir la creaci贸n de
productos, la edici贸n de los productos, la eliminaci贸n de productos y listar todos los productos
registrados en el sistema.

Los datos que debe tener cada producto son:

```table
ID
Nombre de producto: OBLIGATORIO
Referencia: OBLIGATORIO
Precio: ENTERO OBLIGATORIO
Peso: ENTERO: OBLIGATORIO
Categor铆a: OBLIGATORIO
Stock, (Cantidad del producto en bodega) ENTERO: OBLIGATORIO
Fecha de creaci贸n: date OBLIGATORIO
```

Adicionalmente se debe contar con un m贸dulo que permita realizar la venta de un producto, el cual recibir谩 el id del producto como par谩metro y la cantidad del producto vendido. El software debe actualizar谩 el campo de stock restando la cantidad del producto vendido y registrar en una tabla la venta realizada (si el producto no cuenta con stock mayor a cero debe mostrar un mensaje informando que no es posible realizar la venta).


### 馃摉 馃搵 Especificaciones:

###A. instalacion (proyecto Konecta):**
Para acceder al aplicativo por favor seguir los siguientes pasos 

##### 1.Por favor ingresar y descargar el siguiente repositorio git: https://github.com/cocoballz/Konecta

Puedes descargar el proyecto desde la consola git utilizando el comando:
```comand
Git clone https://github.com/cocoballz/Konecta
```
##### 2.Instalar Paquetes Necesarios
Para descargar todas la librerias para la aplicacion es necesario abrir la consola en la ubicacion del proyecto y ejecutar el comando:

```comand
 npm install
 php artisan key:generate
```

##### 3. Crear Base de Datos
Para este proyecto se crearon las migraciones necesarias para la estructura de la Base de datos. por lo tanto basta con ejecutar el siguiente comando en la raiz del proyecto:

```comand
 php artisan migrate
```
##### 4. Iniciar Aplicacion.
Para  poder vizualizar la aplicacion desde el navegador es necesario ejecutar el siguiente comando en la raiz del proyecto:

```comand
 php artisan serve
```
y ya puedes ingresar a http://127.0.0.1:8000/

##### NOTA:.
La aplicacion utiliza los siguientes plugins:

| Nombre | Link Descripcion                    |
| ------------- | ------------------------------ |
| `Datatables`      | https://datatables.net/       |
| `Bootstrap`      | https://getbootstrap.com/      |
| `jquery`      | https://jquery.com/     |



### Copyright
Creado por Sebastian Carvajal 2022 - Laravel [Prueba tecnica Konecta]