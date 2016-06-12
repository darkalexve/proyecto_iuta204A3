Documentacion Tecnica del Proyecto IUTA 204A3 | Diseño de Sistemas

SICITEM
SISTEMA DE CONTROL E INVENTARIO DE TELEFONÍA MÓVIL 

******************************************************************
********************MATERIAL CONFIDENCIAL*************************
******************************************************************

Antes de iniciar la fase de desarrollo del aplicativo SICITEM se requiere realizar un despliegue a nivel de Infraestructura para mantener el aplicativo.

Para esto entonces, cumpliendo con los mejores estandares de uso y en pro de garantizar la estabilidad y confiabilidad del producto la Infraestructura estara compuesta de la siguiente manera:

Servidor: Ubuntu 14.04 LTS x86_64 con todas las actualizaciones hasta la fecha.
Entorno de Programacion Utilizado:

	-HTML
	-PHP5.6
	-MariaDB10.1
	-AngularJS
	-JQuery

Proyecto GIT: https://github.com/darkalexve/proyecto_iuta204A3

Instalacion de Dependencias:

apt-get install apache2 php libapache2-mod-php php-mcrypt php-mysql curl software-properties-common

apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8
add-apt-repository 'deb [arch=amd64,i386] http://mirror.edatel.net.co/mariadb/repo/10.1/ubuntu xenial main'

apt-get update
apt-get install mariadb-server



