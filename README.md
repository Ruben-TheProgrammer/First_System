# First_System (Sistema de Gestión de Personas en PHP) ![license](https://img.shields.io/badge/license-Apache%202.0-blue.svg)

Este es mi primer sistema en PHP para gestionar información de personas. El sistema proporciona una serie de funciones clave que permiten administrar una base de datos de personas de manera sencilla. A continuación, se describen las principales características y funcionalidades del sistema:

![Screen Shot 2022-11-23 at 9 51 36 AM](https://user-images.githubusercontent.com/4215777/203617422-4d912bfc-766f-4074-8324-409d9bbe7c05.png)


## Funcionalidades

1. Index: La página principal del sistema muestra una lista de las personas almacenadas en la base de datos. Los usuarios pueden navegar y acceder a otras funcionalidades desde aquí.

2. Listar Persona: Permite ver los detalles de una persona específica. Los usuarios pueden hacer clic en una persona de la lista para ver su información completa.

3. Editar Persona: Proporciona la capacidad de editar la información de una persona existente. Los usuarios pueden actualizar datos como el nombre, apellido, dirección, etc.

4. Eliminar Persona: Permite eliminar una persona de la base de datos. Se debe confirmar la eliminación para evitar eliminaciones accidentales.

5. Guardar Persona: Permite agregar una nueva persona a la base de datos. Los usuarios pueden ingresar información detallada sobre una nueva persona y guardarla en la base de datos.

6. Reporte de Personas: Genera un informe que muestra estadísticas o información relevante sobre todas las personas en la base de datos. Puede incluir gráficos o tablas para una presentación visual.

7. Base de Datos: El sistema utiliza una base de datos para almacenar la información de las personas. Puede estar basada en una tecnología como MySQL o SQLite. La base de datos es crucial para garantizar la persistencia de los datos.

8. Sistema como Base de Datos: En lugar de utilizar una base de datos externa, este sistema implementa su propio sistema de almacenamiento de datos. Esto puede incluir estructuras de datos en archivos o en memoria.


> [!IMPORTANT]
> # Importancia de Importar una Base de Datos a phpMyAdmin en Tu Proyecto
> 
> La importación de una base de datos a phpMyAdmin es un paso fundamental en el proceso de desarrollo de aplicaciones web que requieren almacenamiento y recuperación de datos. Aquí destacamos la importancia de esta tarea en tu proyecto:
> 
> ## 1. Preservación de Datos:
> 
> Una base de datos almacena datos valiosos para tu aplicación, como registros de usuarios, contenido, configuraciones y más. Importar estos datos a phpMyAdmin garantiza que no se pierda información esencial durante el proceso de desarrollo, actualización o migración de la aplicación.
>
> ## 2. Desarrollo Eficiente:
>
> Al contar con una base de datos importada en phpMyAdmin, los desarrolladores pueden trabajar de manera más eficiente. Pueden probar nuevas funcionalidades, realizar pruebas de integración y solucionar problemas de manera efectiva utilizando datos reales en lugar de datos de prueba ficticios.
>
> ## 3. Validación de Funcionalidades:
>
> La importación de la base de datos permite validar que todas las funcionalidades relacionadas con el acceso y manipulación de datos funcionen correctamente. Puedes asegurarte de que los registros se guarden y recuperen de manera adecuada, lo que contribuye a la robustez de tu aplicación.
>
> ## 4. Pruebas Realistas:
>
> Cuando realizas pruebas de usuario o pruebas de carga en tu aplicación, tener datos reales en la base de datos es esencial. Esto te permite simular situaciones del mundo real y garantizar que la aplicación funcione correctamente bajo cargas y escenarios variados.
>
> ## 5. Migración y Escalabilidad:
>
> En el futuro, es posible que necesites migrar tu aplicación a un servidor diferente o escalarla para manejar más usuarios y datos. Tener una base de datos importada en phpMyAdmin simplifica el proceso de migración y escalabilidad, ya que los datos ya están disponibles y listos para ser transferidos.
>
> ## 6. Respaldo y Recuperación:
>
> Una vez que la base de datos esté importada en phpMyAdmin, puedes realizar fácilmente copias de seguridad regulares para garantizar la integridad de tus datos. En caso de fallos inesperados o pérdida de datos, contar con un respaldo actualizado te permite recuperar rápidamente la información esencial.
> 
## Documentacion

Una breve descripción de mi proyecto en PHP para gestionar información de personas. Incluye una introducción concisa de las funcionalidades clave.

## Ejemplos

### 1. Listar Personas
Para listar todas las personas en la base de datos, los usuarios pueden acceder a la página principal del sistema. Aquí hay un ejemplo de cómo podrían hacerlo:
Navegar al sitio web del sistema.
En la página principal (index.php), verán una lista de todas las personas almacenadas en la base de datos, con nombres y apellidos.
Hacer clic en el nombre de una persona para ver más detalles sobre esa persona.

### 2. Ver Detalles de una Persona
Los usuarios pueden ver información detallada sobre una persona específica siguiendo estos pasos:
Desde la página de listado de personas, hacer clic en el nombre de la persona que deseen ver.
Serán redirigidos a una página de detalles de la persona (persona.php), que mostrará información completa sobre esa persona, como nombre, apellido, dirección, número de teléfono, etc.

### 3. Editar Persona
Si un usuario necesita actualizar la información de una persona en la base de datos, pueden utilizar la función de edición de la siguiente manera:
En la página de detalles de la persona, hacer clic en el botón "Editar".
Serán redirigidos a una página de edición (editar_persona.php) donde pueden modificar los campos de información de esa persona, como dirección o número de teléfono.
Después de realizar las ediciones necesarias, pueden hacer clic en "Guardar" para actualizar la información de la persona.

### 4. Eliminar Persona
Para eliminar una persona de la base de datos, los usuarios pueden seguir estos pasos:
Desde la página de detalles de la persona, hacer clic en el botón "Eliminar".
Se les pedirá una confirmación para evitar eliminaciones accidentales.
Si confirman la eliminación, la persona será eliminada de la base de datos.

### 5. Agregar Nueva Persona
Si un usuario desea agregar una nueva persona a la base de datos, pueden hacerlo de la siguiente manera:
En la página principal, hacer clic en el botón "Agregar Persona" o "Nuevo Registro".
Serán redirigidos a un formulario (nueva_persona.php) donde pueden ingresar la información completa de la nueva persona, como nombre, apellido, dirección, número de teléfono, etc.
Después de completar el formulario, pueden hacer clic en "Guardar" para agregar la nueva persona a la base de datos.

### 6. Generar un Reporte de Personas
Los usuarios pueden generar un informe que muestre estadísticas o información relevante sobre todas las personas en la base de datos. Aquí hay un ejemplo:
En el menú del sistema, seleccionar la opción "Generar Reporte".
Serán redirigidos a una página (reporte_personas.php) que muestra gráficos o tablas con estadísticas sobre las personas en la base de datos, como la cantidad total de personas, distribución por género, etc.

> [!NOTE]
> Explore los siguientes ejemplos para aprender cómo utilizar las funcionalidades clave de nuestro sistema de gestión de personas en PHP. Estos ejemplos le ayudarán a comenzar rápidamente y aprovechar al máximo nuestro proyecto.

## Compatibilidad
Nuestro sistema de gestión de personas en PHP está diseñado para ser altamente compatible con una variedad de entornos y tecnologías. A continuación, se detalla la compatibilidad que ofrecemos:


### Compatibilidad con Versiones de PHP
Este proyecto es compatible con una amplia gama de versiones de PHP, lo que permite su uso en diferentes entornos de alojamiento web y servidores. Las versiones compatibles incluyen, pero no se limitan a:

PHP 7.x
PHP 8.x

Recomendamos mantener su versión de PHP actualizada para aprovechar al máximo las características y mejoras de seguridad.

### Compatibilidad con Bases de Datos
Nuestro sistema de gestión de personas es compatible con varios sistemas de gestión de bases de datos relacionales, lo que le brinda la flexibilidad de elegir la base de datos que mejor se adapte a sus necesidades. Las bases de datos compatibles incluyen, entre otras:

MySQL
SQLite
PostgreSQL
Puede configurar su proyecto para utilizar la base de datos de su elección en función de los requisitos de su aplicación.

### Compatibilidad con Navegadores Web
La interfaz de usuario de nuestro sistema ha sido diseñada para ser compatible con una amplia variedad de navegadores web modernos. Estos incluyen, pero no se limitan a:

Google Chrome
Mozilla Firefox
Microsoft Edge
Safari
Nuestro objetivo es garantizar que los usuarios puedan acceder y utilizar el sistema de manera efectiva en la mayoría de los navegadores populares.

### Compatibilidad con Sistemas Operativos
Este proyecto es compatible con una variedad de sistemas operativos en los que se puede ejecutar PHP. Esto incluye:

Windows
Linux (varias distribuciones)
macOS
Puede implementar y ejecutar el sistema en el sistema operativo que mejor se adapte a sus necesidades de desarrollo o alojamiento.

### Compatibilidad con Entornos de Desarrollo
Nuestro proyecto es compatible con una amplia gama de entornos de desarrollo, lo que facilita la colaboración y la personalización del código. Los entornos de desarrollo compatibles incluyen:

Entornos locales (por ejemplo, XAMPP, WampServer, MAMP)
Entornos en línea (por ejemplo, entornos de desarrollo basados en la nube)

Puede elegir el entorno que mejor se adapte a su flujo de trabajo de desarrollo.

## Pruebas de seguridad

La seguridad es un aspecto crítico en el desarrollo de aplicaciones web en PHP. Realizar pruebas de seguridad en tu sistema es esencial para identificar vulnerabilidades y proteger tus datos y la integridad de tu aplicación. Aquí hay algunas pruebas de seguridad que puedes llevar a cabo en tu sistema PHP:

### 1. Pruebas de Inyección SQL: 
Intenta inyectar código SQL malicioso en los campos de entrada de tu aplicación para verificar si es posible realizar ataques de inyección SQL. Utiliza consultas SQL maliciosas como ' OR '1'='1 para detectar vulnerabilidades.

### 2. Pruebas de Cross-Site Scripting (XSS): 
Verifica si tu sistema es vulnerable a ataques XSS al introducir scripts maliciosos en campos de entrada. Comprueba si tu aplicación filtra y escapa correctamente los datos antes de mostrarlos en el navegador.

### 3. Pruebas de Cross-Site Request Forgery (CSRF):
Intenta realizar solicitudes no autorizadas desde un sitio malicioso mientras un usuario autenticado está en tu aplicación. Debes implementar tokens CSRF y asegurarte de que las solicitudes solo sean válidas si se incluye el token correcto.

### 4. Pruebas de Autenticación y Autorización:
Verifica que tu sistema requiera autenticación adecuada y que los usuarios solo tengan acceso a las áreas y funcionalidades que les corresponden. Intenta acceder a recursos o realizar acciones sin estar autenticado o sin los permisos adecuados.

### 5. Pruebas de Validación de Datos de Entrada:
Asegúrate de que tu sistema valide y filtre correctamente los datos de entrada para evitar ataques como la inclusión de scripts maliciosos o la inserción de código en campos de formulario.

### 6. Pruebas de Manejo de Sesiones:
Verifica si las sesiones se manejan de manera segura y que no existan posibles puntos de secuestro de sesiones. Asegúrate de que las cookies de sesión se generen y gestionen de manera segura.

### 7. Pruebas de Seguridad en la Base de Datos: 
Comprueba si la configuración de tu base de datos es segura y si las credenciales de acceso se almacenan de manera segura. Evita que los datos sensibles se almacenen en texto claro en la base de datos.

### 8. Pruebas de Escalamiento Vertical y Horizontal: 
Verifica cómo responde tu sistema ante una carga creciente de usuarios y datos. Realiza pruebas de carga y estrés para evaluar su rendimiento y escalabilidad.

### 9. Auditoría de Código:
Revisa el código fuente de tu aplicación en busca de vulnerabilidades conocidas y malas prácticas de seguridad. Utiliza herramientas automatizadas de análisis de código si es posible.

### 10. Pruebas de Actualizaciones y Parches: 
Mantén tus bibliotecas, frameworks y componentes actualizados. Prueba cómo reacciona tu sistema a las actualizaciones y verifica que no se introduzcan nuevas vulnerabilidades.

### 11. Pruebas de Configuración de Servidor:
Asegúrate de que la configuración del servidor web, el firewall y otros componentes relacionados con la infraestructura estén configurados de manera segura.

### 12. Pruebas de Respuesta ante Incidentes:
Simula incidentes de seguridad y verifica si tu sistema responde adecuadamente, como la detección de intentos de intrusión, el registro de eventos y la notificación de administradores.

### 13. Pruebas de Seguridad del Sistema de Archivos: 
Asegúrate de que los archivos y directorios sensibles estén protegidos adecuadamente y que no haya información confidencial expuesta.

# Glosario

* _GitHub_: Una plataforma de alojamiento y colaboración de desarrollo de software basada en la nube que permite a los desarrolladores alojar y compartir proyectos de código abierto y privados.

* _Plugins_: Componentes o extensiones de software que se pueden agregar a una aplicación o sistema para agregar funcionalidades específicas o mejorar su rendimiento.

* _Framework PHP_: Un conjunto de herramientas, bibliotecas y convenciones que facilitan el desarrollo de aplicaciones web en PHP al proporcionar una estructura y funcionalidades comunes.

* _Inyección SQL_: Un tipo de ataque de seguridad en el que un atacante inserta código SQL malicioso en una aplicación web para acceder o manipular bases de datos.

* _Cross-Site Scripting (XSS)_: Un tipo de vulnerabilidad de seguridad que permite a un atacante inyectar scripts maliciosos en páginas web vistas por otros usuarios.

* _Cross-Site Request Forgery (CSRF)_: Un tipo de ataque en el que un atacante engaña a un usuario para que realice una acción no deseada en una aplicación web en la que el usuario está autenticado.

* _Autenticación_: El proceso de verificar la identidad de un usuario para permitir o denegar el acceso a una aplicación o sistema.

* _Autorización_: El proceso de determinar qué acciones o recursos un usuario autenticado tiene permitido acceder o modificar dentro de una aplicación.

* _Composer_: Una herramienta de administración de dependencias de PHP que se utiliza para administrar las bibliotecas y paquetes que una aplicación PHP necesita.

* _Bibliotecas de PHP_: Conjuntos de código reutilizable que proporcionan funcionalidades específicas para tareas comunes en el desarrollo de aplicaciones PHP.

* _Base de Datos Relacional_: Un tipo de base de datos que organiza los datos en tablas relacionadas mediante claves y relaciones definidas.

* _Tokens CSRF_: Fragmentos de datos generados aleatoriamente que se utilizan para proteger las solicitudes contra ataques CSRF.

* _Framework Frontend_: Un marco o conjunto de herramientas que se utiliza para desarrollar la interfaz de usuario de una aplicación web en el navegador del usuario.

* _Sesión_: Un mecanismo que permite a una aplicación web mantener un estado entre solicitudes HTTP sucesivas para el mismo usuario.

* _Secuestro de Sesiones_: Un ataque en el que un atacante obtiene acceso no autorizado a la sesión de un usuario y toma el control de su sesión.

* _Validación de Datos de Entrada_: Proceso de asegurarse de que los datos proporcionados por el usuario cumplan con ciertos criterios antes de ser procesados.

* _Biblioteca de Seguridad_: Una biblioteca de código que contiene funciones y utilidades específicamente diseñadas para abordar problemas de seguridad comunes.

* _Auditoría de Código_: El proceso de revisar y analizar el código fuente de una aplicación en busca de vulnerabilidades y problemas de seguridad.

* _Firewall_: Un componente de seguridad que controla y regula el tráfico de red para proteger una red o sistema contra amenazas y ataques maliciosos.

* _Escalamiento Vertical y Horizontal_: Términos utilizados en la escalabilidad de aplicaciones para describir cómo agregar capacidad adicional a una aplicación al aumentar los recursos en un solo servidor (escalamiento vertical) o al agregar servidores adicionales (escalamiento horizontal).

* _Mantenimiento de Dependencias_: La práctica de mantener actualizadas las bibliotecas y dependencias utilizadas en una aplicación para abordar problemas de seguridad y aprovechar las últimas características y correcciones de errores.

* _Reporte de Problemas_: El proceso de informar y documentar problemas o errores en una aplicación para que puedan ser abordados y solucionados.

* _Seguridad del Sistema de Archivos_: Protección de archivos y directorios sensibles para prevenir el acceso no autorizado y la exposición de información confidencial.

* _Pruebas de Respuesta ante Incidentes_: Simulación de incidentes de seguridad para evaluar cómo una aplicación o sistema responde a situaciones de amenaza o ataque.

## Contactos:
Tengo algunos canales de contacto. 

- [Discord](https://discord.gg/docusaurus):
  - `#general` for those using Docusaurus.
  - `#contributors` for those wanting to contribute to the Docusaurus core.
- [@docusaurus](https://twitter.com/docusaurus) on Twitter
- [GitHub Issues](https://github.com/facebook/docusaurus/issues)

## License

First_System es [MIT licensed](./LICENSE).

Las documentaciones estan en el archivo README.md dentro de la carpeta del proyecto (e.g., `.md` files in the `/docs` folder) is [Creative Commons licensed](./LICENSE-docs).
