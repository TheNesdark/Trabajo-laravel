@echo off
:: Agrega la carpeta php/ al PATH solo en esta terminal
set "PATH=%~dp0php;%PATH%"

echo === PHP local habilitado ===
php -v

echo === Composer local habilitado ===
composer -V

:: Abre una terminal con ese entorno
cmd
