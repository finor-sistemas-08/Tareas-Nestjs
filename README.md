# TareasKusa

## CONSIDERACIONES A TOMAR EN CUENTA

Despues de realizar cada tarea deberas crear un commit con descripcion especificando la tarea que se realizo, por ejemplo, "Tarea 1 completada"

1. TareasKusa -> Clona el Repositorio en tu maquina
2. Crear una rama con tu nombre
3. Cambiate a esa rama antes de empezar a realizar tus tareas

## Tarea 1

Desarrollar una tabla de multiplicar dentro de la carpeta "Tarea 1" que tambien tiene un ejemplo simple de como se deberia ver.

- el input solo puede recibir numeros enteros positivos.
- dando click al boton de calcular debera mostrar la tabla de multiplicar hasta el 10 y tambien debera mostrar una tabla de multiplicar que itere de 10 en 10 hasta el 100.
- dado el array [13,245,133,45,52,126, 29] ordenarlo de mayor a menor eh imprimirlo en un div con el id="array_numeros_ordenado".
- dado el array ["pedro","juan","antonio","maria","zulema","nelson", "manuel"] ordenarlo de forma alfabetica eh imprimirlo en un div con el id="array_palabras_ordenado".

## Tarea 2

- dentro de la carpeta Tarea3 iniciar un proyecto con node js.
- instalar dependendencias axios (https://www.npmjs.com/package/axios), express (https://www.npmjs.com/package/express) y hbs (https://www.npmjs.com/package/hbs).
- implentar un servidor estatico con express.
- consumir una API (https://www.breakingbadapi.com/api/characters).
- mostrar los datos recibidos usando CDN de Bootstrap para los diseños.
- mostrar los datos como se ve en la imagen que esta dentro la carpeta "Tarea2".
- antes de subir los cambios deben ignorar la carpeta node_modules para eso deberan configurar el archivo gitignore dentro la carpeta Tarea2.

## Tarea 3

- Iniciar un proyecto NestJS(https://docs.nestjs.com/first-steps)
- Desarrollar las siguientes tareas con sus respectivas condiciones
- Registro de un usuario - el sistema deberá permitir a un usuario registrarse, el usuario para registrarse tiene que ingresar su email (requerido, único, aceptar solo si tiene el formato correcto de email), nombre(requerido), apellido(opcional) y contraseña, donde la contraseña se tiene que encriptar antes de guardar en la base de datos, además la contraseña ingresada tiene que tener un mínimo de 5 caracteres.(Debe ser un metodo POST que te devuelva el nombre, email, token de sesion).
- Inicio de sesión - El usuario registrado podrá entrar al sistema ingresando su email y contraseña.(Debe ser un metodo POST que te devuelva el nombre, email, token de sesion).
- Publicar post. - El usuario podrá publicar uno o más post, al publicar se le pedirá un título del post (el usuario no podrá publicar un post con el mismo título más tarde, pero otra persona si puede publicar un post con el título que una persona ya publico anteriormente), descripcion , y una imagen (solo que acepta jpg, png y webp).(Debe ser un metodo POST que te devuelva el Titulo, Descripcion, Imagen que se guardaron, solo a los que tienen token de sesion activo).
- mostrar todas las publicaciones ( Debe ser un metodo GET que te devuelva todos los post creados, solo a los que tienen token de sesion activo);

### NestJS es un entorno que esta orientado al desarrollo de API, bastaria para completar tener las url que devuelvan la informacion necesaria a traves de postman. De forma opcional podria crearse una interfaz de usuario para interactuar con las url.
