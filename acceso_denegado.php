# garage_gt/.htaccess

# Deshabilitar listado de directorios
Options -Indexes

# Proteger carpeta de uploads (solo acceso directo a PDF)
<FilesMatch "\.(php)$">
    # Bloquear ejecución de PHP en uploads (mover esta regla a uploads/.htaccess también)
</FilesMatch>

# Redirigir a login si se accede a la raíz
DirectoryIndex index.php

# Ocultar errores en producción (comentar en desarrollo)
# php_flag display_errors Off

# Forzar charset UTF-8
AddDefaultCharset UTF-8

# Headers de seguridad básicos
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
</IfModule>
