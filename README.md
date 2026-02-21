# Gestor de Documentos Electrónicos (Laravel + DigitalOcean Spaces)

Este proyecto es una aplicación web desarrollada en **Laravel 10** diseñada para la gestión, almacenamiento y visualización de documentos electrónicos (Facturas, Boletas, Notas de Crédito, etc.) utilizando **DigitalOcean Spaces** como sistema de almacenamiento en la nube.

## 🚀 Funcionalidades Principales

El sistema permite interactuar con archivos alojados en la nube a través de las siguientes rutas y controladores:

### 1. Subida de Archivos
- **Ruta:** `POST /doupload`
- **Descripción:** Permite subir archivos (imágenes, documentos) al directorio `attachments` en DigitalOcean Spaces.
- **Retorno:** JSON con la URL pública y el path del archivo subido.

### 2. Visualización y Descarga de Documentos
El sistema está configurado para recuperar documentos estructurados (probablemente de facturación electrónica) desde una ruta base específica (actualmente configurada como `fe/20314646411/`).

- **PDF:** `GET /documento/{archivo}`
- **XML:** `GET /documento_xml/{archivo}`
- **CDR (ZIP):** `GET /documento_cdr/{archivo}`

*Nota: El parámetro `{archivo}` espera un formato específico (ej. `mes.dia.correlativo`) que el sistema transforma en la estructura de carpetas `mes/dia/correlativo`.*

### 3. Verificación
- **Check PDF:** `GET /check/{archivo}`
- **Check XML:** `GET /check_xml/{archivo}`
- **Check CDR:** `GET /check_cdr/{archivo}`
- **Descripción:** Verifica si el archivo físico existe en el almacenamiento remoto y devuelve `true` o `false`.

---

## ☁️ Guía de Despliegue en CloudPanel

Sigue estos pasos para desplegar el proyecto en un servidor gestionado con CloudPanel.

### Requisitos Previos
- Servidor con CloudPanel instalado.
- Acceso SSH al servidor (usuario del sitio).
- Repositorio de GitHub actualizado (`main`).

### Paso 1: Crear el Sitio en CloudPanel
1. Ingresa a tu panel de CloudPanel.
2. Ve a **Sites** > **Add Site** > **Create a PHP Site**.
3. Selecciona **Laravel 10**.
4. Versión de PHP: **8.2** o superior (Recomendado 8.2 para máxima compatibilidad con este proyecto).
5. Define tu dominio y usuario/contraseña.

### Paso 2: Conexión SSH
Conéctate a tu servidor usando el usuario del sitio creado (no root):
```bash
ssh usuario_sitio@tu_ip_servidor
```

### Paso 3: Instalación del Proyecto
Navega a la carpeta pública de tu sitio y clona el repositorio (asegúrate de que la carpeta esté vacía primero):

```bash
cd htdocs/tudominio.com
rm -rf * .* 2>/dev/null  # Limpiar archivos por defecto
git clone https://github.com/tu-usuario/tu-repositorio.git .
```

### Paso 4: Instalar Dependencias

**Backend (PHP/Composer):**
```bash
composer install --no-dev --optimize-autoloader
```
*Si tienes problemas de versión de PHP, asegúrate de que el sitio use PHP 8.2 o superior.*

**Frontend (Node.js/NPM):**
Si `npm` no está instalado, usa NVM:
```bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash
source ~/.bashrc
nvm install --lts
```
Luego instala y compila:
```bash
npm install && npm run build
```

### Paso 5: Configuración del Entorno (.env)
Copia el archivo de ejemplo y edítalo con tus credenciales reales:

```bash
cp .env.example .env
nano .env
```

**Variables Críticas a Configurar:**
```ini
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tudominio.com

# Base de Datos (Credenciales de CloudPanel)
DB_DATABASE=nombre_db
DB_USERNAME=usuario_db
DB_PASSWORD=contraseña_db

# Almacenamiento (DigitalOcean Spaces)
FILESYSTEM_DISK=spaces
DO_SPACES_KEY=TU_CLAVE_PUBLICA
DO_SPACE_SECRET=TU_CLAVE_SECRETA
DO_SPACES_REGION=nyc3 (o tu región)
DO_SPACES_BUCKET=nombre-bucket
DO_SPACES_ENDPOINT=https://nyc3.digitaloceanspaces.com
```

### Paso 6: Finalización
Ejecuta los comandos de mantenimiento de Laravel:

```bash
# Generar clave de encriptación
php artisan key:generate

# Crear enlace simbólico al storage
php artisan storage:link

# Migrar base de datos
php artisan migrate --force

# Limpiar y optimizar cachés
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
```

¡Listo! Tu proyecto debería estar funcionando correctamente en tu dominio.
