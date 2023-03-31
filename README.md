Este sería el intento de la prueba.

Lamentablemente no he podido conectarme mediante postgreSQL a la DB proporcionada debido a un error que no he podido solucionar por mi inexperiencia con ésta herramienta.

El proyecto fue desarrollado teniendo en cuenta una DB en local utilizando MYSQL, tratando de simular la DB proporcionada en el ejemplo con la mayor fidelidad posible dentro de mi entendimiento.

¿"NumeroFacturas" corresponde a una ID en la tabla o el número de facturas a pagar? Interpreto que es la id de la tabla Facturas, dado que concibo que cada factura es única, y en caso de haber un set de facturas asociadas a un servicio/intercambio correspondería a una tabla (como GrupoFacturacion) tener la referencia a la id de Facturas fruto de una relación 1N.

Para ponerlo en funcionamiento habría que utilizar "composer install" o php "composer.phar install" seguido de "cp .env.example .env" y"php artisan key:generate" y por ultimo "php artisan migrate".

Si se efectua la migración se añadirán unos valores para recoger los valores según el ejercicio.

El resultado es un objeto con los valores que coinciden con la lista de facturas impagas.

Se que se queda bastante lejos de lo que se requería, pero creo que lo mejor es ir de cara y enseñar lo que hice.
