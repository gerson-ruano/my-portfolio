
# Porfolio GERSON RUANO
Basado en el repositorio https://github.com/carlos-full-stack/my-personal-portfolio.git 
[Carlos Martinez](https://carlosfullstack.es/)

Aplicación para subir y editar tus proyectos de desarrollo para hacer de una manera llamativa tu presentación.

<!--img src="https://user-images.githubusercontent.com/104822099/208479821-d38db6ea-2844-4b13-8af0-58ace8636889.png" width="500" heigh="288px" alt="Mi portfolio personal"-->


## Descripción

Aplicación que permite subir tus proyectos añadiendo un título, imagen y descripción, respositorio (opcional) Además muestra un enlace para descargar el CV, una sección con las tecnologías utilizadas, tecnologias conocidas, enlaces a las plataformas personales.

### Instalación

```
# Clona y accede al repositorio
$ git clone https://github.com/gerson-ruano/my-portfolio.git
$ cd my-portfolio

# Instala las dependencias
$ composer install
$ npm install

# Genera la base de datos (Configura las credencias en el archivo .env)
$ php artisan migrate

# Genera una llave para la aplicación
$ php artisan key:generate

# Inicia el servidor
$ npm run dev
```

### Tecnologías empleadas

**Laravel** he utilizado Laravel 9 ya que me ha permitido crear fácilmente la estructura básica del proyecto haciendo uso de sus librerías, paquetes y herramientas. 
**Tailwind** para el diseño de los estilos del proyecto
**Flowbite** para crear componentes personalizados: header, footer, menús y alertas de confirmación
**Breeze** para la atentificación de los usuarios
**HoneySpot** para evitar el SPAM del formulario de contacto.

## Documentación

* [Laravel-Docs](https://laravel.com/docs/9.x)
