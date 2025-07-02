# 🐾 Patas Felices - E-commerce para Mascotas

**Patas Felices** es una plataforma web de e-commerce especializada en productos para mascotas, desarrollada con **PHP nativo**, **MySQL** y **Bootstrap 5**. El proyecto incluye un sistema completo de gestión de productos, usuarios y un panel de administración.

## 🚀 Características Principales

### 🏠 **Funcionalidades del Sitio**
- **Página de inicio** con navegación intuitiva y testimonios de clientes
- **Secciones informativas**: Quiénes Somos, Servicios y Contacto
- **Catálogo de productos** organizado por categorías (Alimentación, Cuidado, Accesorios, Salud)
- **Sistema de autenticación** con roles de usuario y administrador
- **Formulario de pre-inscripción** para servicios de cuidado de mascotas
- **Interfaz responsive** con Bootstrap 5

### 🛠️ **Panel de Administración**
- **Gestión de categorías**: Crear, modificar y eliminar categorías
- **Gestión de productos**: CRUD completo con carga de imágenes
- **Gestión de usuarios**: Control de estados (activo/banneado) y roles (usuario/admin)
- **Carga automática de imágenes** con redimensionamiento

### 🔐 **Sistema de Autenticación**
- Registro e inicio de sesión de usuarios
- Control de roles (usuario/administrador)
- Gestión de estados de usuario (activo/banneado)
- Sesiones seguras con PHP

## 🛠️ Tecnologías Utilizadas

- **Backend**: PHP 8.2 nativo
- **Base de datos**: MySQL 8.0
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Servidor web**: Apache
- **Contenedores**: Docker & Docker Compose
- **Gestión de BD**: phpMyAdmin

## 📋 Requisitos Previos

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) instalado y ejecutándose
- Git (para clonar el repositorio)

## 🚀 Instalación y Configuración

### 1. **Clonar el repositorio**
\`\`\`bash
git clone https://github.com/tu-usuario/patas-felices.git
cd patas-felices
\`\`\`

### 2. **Levantar los servicios con Docker**
\`\`\`bash
# Construir y levantar todos los contenedores
docker-compose up -d

# Ver el estado de los contenedores
docker-compose ps
\`\`\`

### 3. **Acceder a la aplicación**
- **Sitio web**: [http://localhost:8080](http://localhost:8080)
- **phpMyAdmin**: [http://localhost:8081](http://localhost:8081)
  - Usuario: \`root\`
  - Contraseña: \`rootpassword\`

## 🐳 Arquitectura Docker

El proyecto utiliza 3 contenedores principales:

### 📦 **Servicios**
| Servicio | Imagen | Puerto | Descripción |
|----------|--------|--------|-------------|
| **web** | php:8.2-apache | 8080 | Servidor web con PHP y Apache |
| **db** | mysql:8.0 | 3306 | Base de datos MySQL |
| **phpmyadmin** | phpmyadmin/phpmyadmin | 8081 | Interfaz web para gestionar la BD |

### 🔄 **Comunicación entre servicios**
\`\`\`
Navegador → web:8080 → db:3306
           ↓
Navegador → phpmyadmin:8081 → db:3306
\`\`\`

## 📁 Estructura del Proyecto

\`\`\`
patas-felices/
├── admin/                  # Panel de administración
│   ├── index.php          # Dashboard principal
│   ├── productos.php      # Gestión de productos
│   └── usuarios.php       # Gestión de usuarios
├── componentes/           # Componentes reutilizables
│   ├── header.php         # Cabecera del sitio
│   ├── footer.php         # Pie de página
│   └── conexion.php       # Conexión a la base de datos
├── paginas/               # Páginas principales
│   ├── inicio.php         # Página de inicio
│   ├── productos.php      # Catálogo de productos
│   ├── servicios.php      # Información de servicios
│   └── contacto.php       # Formulario de contacto
├── registro/              # Sistema de autenticación
│   ├── login.php          # Procesamiento de login
│   ├── alta.php           # Registro de usuarios
│   └── reging.php         # Formulario de registro/login
├── css/                   # Estilos CSS
├── img/                   # Imágenes del sitio
├── archivo/               # Archivos subidos por usuarios
├── docker-compose.yml     # Configuración de Docker
└── patasfelices.sql       # Base de datos inicial
\`\`\`

## 👤 Usuarios de Prueba

### 🔑 **Administrador**
- **Email**: \`t@t\`
- **Contraseña**: \`t\`

### 👤 **Usuario Regular**
- **Email**: \`d@d\`
- **Contraseña**: \`d\`

## 🛠️ Comandos Útiles de Docker

\`\`\`bash
# Ver logs en tiempo real
docker-compose logs -f

# Reiniciar servicios
docker-compose restart

# Parar todos los servicios
docker-compose down

# Reconstruir contenedores
docker-compose build --no-cache

# Acceder al contenedor web
docker-compose exec web bash
\`\`\`

## 📊 Base de Datos

La base de datos se inicializa automáticamente con:
- **4 categorías** de productos (Alimentación, Cuidado, Accesorios, Salud)
- **26 productos** de ejemplo
- **3 usuarios** de prueba con diferentes roles

### 🗃️ **Tablas principales**
- \`usuarios\`: Gestión de usuarios y roles
- \`categorias\`: Categorías de productos
- \`productos\`: Catálogo de productos

## 🎨 Características del Frontend

- **Diseño responsive** con Bootstrap 5
- **Interfaz intuitiva** con navegación clara
- **Efectos hover** en productos y categorías
- **Formularios validados** con JavaScript
- **Galería de imágenes** con carga automática
- **Testimonios de clientes** en la página de inicio

## 🔧 Desarrollo

### **Modificar código**
Los cambios en el código PHP se reflejan automáticamente gracias a los volúmenes de Docker.

### **Gestionar la base de datos**
Usa phpMyAdmin en [http://localhost:8081](http://localhost:8081) para:
- Ver y editar datos
- Ejecutar consultas SQL
- Importar/exportar datos