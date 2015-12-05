miw_project
===========

_Pasos_:

1. Generar DemoBundle: *doctrine:generate:bundle* [namespace = Miw/DemoBundle, bundle name = nada, enter, yml, enter, enter... enter]
    * genera src/Miw/DemoBundle con las carpetas controller (DefaultC.), depend., entity (aqui ira Producto.php), resources
2. Generar Producto.php: *doctrine:generate:entity* [shortcut name = MiwDemoBundle:Producto, yml, insertar nombre + precio + descr., enter, enter]
    * genera  Entity/Producto.php
3. Crear rutas del producto:
    3.1 añadir al app/config/routing.yml "miw_demo_producto"
    3.2 crear DemoBundle/Resources/config/routing_producto.yml con miw_producto_nuevo + ...get
    3.3 comprobar OK: **debug:router**
4. Generar BBDD
    4.1 *doctrine:schema:validate*
    4.2 *doctrine:schema::update* (1o --dump, 2o --force)

