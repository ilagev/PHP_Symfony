Pasos
===========

_Crear bundle_

1. Generar DemoBundle: **doctrine:generate:bundle** [namespace = Miw/DemoBundle, bundle name = nada, enter, yml, enter, enter... enter]
    * genera src/Miw/DemoBundle con las carpetas controller (DefaultC.), depend., entity (aqui ira Producto.php), resources

_De entidades a bbdd_

2. Generar Producto.php: **doctrine:generate:entity** [shortcut name = MiwDemoBundle:Producto, yml, insertar nombre + precio + descr., enter, enter]
    * genera  Entity/Producto.php
3. Crear rutas del producto:
    * añadir al app/config/routing.yml "miw_demo_producto"
    * crear DemoBundle/Resources/config/routing_producto.yml con miw_producto_nuevo + miw_producto_get + etc.
    * comprobar OK: **debug:router**
4. Generar BBDD
    * **doctrine:schema:validate**
    * **doctrine:schema::update** (1o --dump, 2o --force)

_Ahora al reves: de bbdd a entidades_

5. Conectar Netbeans con bbdd: tab services -> new connection
6. **doctrine:mapping:import** MiwDemoBundle yml --filter Personal

_Generar CRUD_

7. **doctrine:generate:entities** MiwDemoBundle:Personal --path=src
8. **doctrine:generate:crud** [shortcut name = MiwDemoBundle:Personal,  yes, yml, enter, enter, enter]

