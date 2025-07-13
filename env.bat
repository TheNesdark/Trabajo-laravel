@echo off
:: Agrega la carpeta php/ al PATH solo en esta terminal
set "PATH=%~dp0paths\php;%~dp0paths;%PATH%"
doskey composer=php "%~dp0paths\php\composer.phar" $*
set "PATH=%~dp0paths\Node.js;%PATH%"

echo === PHP local habilitado ===
php -v

echo === Node.js local habilitado ===
node -v
npm -v

echo === Composer local habilitado ===
composer -V

:: Abre una terminal con ese entorno
cmd
