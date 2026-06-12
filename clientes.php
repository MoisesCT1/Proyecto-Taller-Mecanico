# uploads/facturas/.htaccess
# Bloquear ejecución de PHP dentro de uploads
<FilesMatch "\.php$">
    Order allow,deny
    Deny from all
</FilesMatch>
Options -Indexes
