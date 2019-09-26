Este es mi tema base hecho a partir de _s 'underscores' con sass,  siguiendo el curso de Jorge González Villanueva https://www.linkedin.com/learning/instructors/jorge-gonzalez-villanueva?trk=v2b_redirect_learning y adaptaciones de mi cosecha. Creo que me ha quedado un tema robusto y bien construido que puede servir de base a cualquier otro adaptando solamente las características especiales de cada uno pero con un esqueleto que no hay que tocar.
He actualizado los archivos gulp y json para eliminar vulnerabilidades y he puesto las herramientas a las últimas versiones estables. Practicamente este es el trabajo que habrá que ir haciendo cada vez que se utilice este tema.

Instalación: 
1.- Instalar Node.js (descargar de https://nodejs.org/es/ y descargarnos la versión de nuestro sistema operativo)
2.-  Una vez instalado Node, abrir un terminal y ejecutar npm install gulp-cli -g  para que se instale gulp de manera global en todo el ordenador, no solo en la carpeta en la que estemos instalándolo. (gulpjs.com).
3.- Instalar Ruby (Mac ya lo trae instalado por defecto y no hay que hacerlo). Ir a https://rubyinstaller.org/  e instalar la versión adecuada a nuestro ordenador.
4.- Instalar Sass, también hay que hacerlo abriendo una terminal y teclear el comando gem install sass .
5.- Comprobar que está todo correctamente instalado tecleando en un nuevo terminal node -v para que nos devuelva la versión que tenemos instalada. Lo mismo tenemos que hacer con ruby -v y con sass -v. Si nos devuelve las versiones instalada es que está todo correcto.
6.- Revisar los archivos gulfile.js y package.json y comprobar que las versiones a las que se refieren de los paquetes que hay que instalar sean las ultimas. (Esto no es extrictamente necesario pero nos evitará vulnerabilidades).
7.- Cambiar a la carpeta de donde vayamos a desarrollar nuestro tema, abrir un terminal y teclear npm install para que se instalen todos los paquetes necesarios para que las tareas recogidas en gulfile.js se puedan ejecutar. Esto bajará todos los paquetes y los guardará en una carpeta llamada node_modules  (Esta carpeta no la tenemos que tocar).
8.- Ya por fin está todo instalado y solo nos queda escribir en el terminal gulp. Gulp realizará las tareas que tiene programas en gulfile.js y automáticamente vigilará cada cambio que hagamos para actualizar tanto las imágenes que metamos en la carpeta images/raw que las optimizará y creará una cópia en la carpeta images/bin y vigilará todos nuestros archivos sass que optimizará y minificará crando el archivo style.css (No escribir nada directamente en él porque se eliminará al actualizar cualquier archivo Sass) y por último vigilará todos nuestros archivos js, los unificará y minificará creando el archivo allmin.js.
9.- Si hacemos esto en VisualStudioCode será mucho más rápido y cómodo para trabajar por nuestra parte ya que tendremos a la vista el código, el aspecto de la web siempre actualizado con livereload y la terminal desde donde Gulp nos indicará cada paso que vaya dando.
=========================================================================================
Bueno ahora solo falta empezar a crear nuestro propio tema con la certeza de que nos quedará como un tema profesional y perfectamente optimizado. Es recomendable subir el tema a github que desde VSC es sencillo y sin problemas.

This is my base theme made from _s 'underscores' with sass, following the course of Jorge González Villanueva https://www.linkedin.com/learning/instructors/jorge-gonzalez-villanueva?trk=v2b_redirect_learning and adaptations made by myself.
I think I have a robust and well built theme that can serve as the basis for any other adapting only the special characteristics of each one but with a skeleton that should not be touched.
I have updated the gulp and json files to eliminate vulnerabilities and I have put the tools to the latest stable versions. Practically this is the work that will have to be done each time this topic is used.
Installation:
1.- Install Node.js (download from https://nodejs.org/es/ and download the version of our operating system)
2.- Once Node is installed, open a terminal and run npm install gulp-cli -g so that gulp is installed globally on the entire computer, not only in the folder in which we are installing it. (gulpjs.com).
3.- Install Ruby (Mac already has it installed by default and you don't have to do it). Go to https://rubyinstaller.org/ and install the appropriate version to our computer.
4.- Install Sass, you also have to do it by opening a terminal and typing the gem install sass command.
5.- Check that everything is correctly installed by typing in a new node -v terminal so that it returns the version we have installed. We have to do the same with ruby ​​-v and with sass -v. If you return the installed versions is that everything is correct.
6.- Review the gulfile.js and package.json files and verify that the versions to which they refer to the packages to be installed are the latest. (This is not strictly necessary but will prevent us from vulnerabilities).
7.- Change to the folder where we are going to develop our theme, open a terminal and type npm install so that all the necessary packages are installed so that the tasks collected in gulfile.js can be executed. This will download all packages and save them in a folder called node_modules (This folder does not have to be touched).
8.- At last everything is installed and we only have to write in the gulp terminal. Gulp will perform the tasks that programs have in gulfile.js and will automatically monitor every change we make to update both the images we put in the images / raw folder that will optimize them and create a copy in the images / bin folder and monitor all our sass files which will optimize and minify by creating the style.css file (Do not write anything directly to it because it will be deleted when updating any Sass file) and finally monitor all our js files, unify and minify them by creating the allmin.js file.
9.- If we do this in VisualStudioCode it will be much faster and more comfortable to work on our part since we will have the code in sight, the aspect of the web always updated with livereload and the terminal from where Gulp will indicate each step that is taking .
=========================================================================================
Well now we just have to start creating our own theme with the certainty that it will be a professional and perfectly optimized theme.
It is advisable to upload the topic to github that from VSC is simple and hassle free.



[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
Note: `.no-sidebar` styles are not automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

If you want to keep it simple, head over to https://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `_s` from GitHub. The first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in `style.css`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

1. Search for: `'_s'` and replace with: `'megatherium-is-awesome'`.
2. Search for: `_s_` and replace with: `megatherium_is_awesome_`.
3. Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for: `_s-` and replace with: `megatherium-is-awesome-`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
