@echo off
REM Ruta al directorio del proyecto (donde está este .bat)
set "PROJECT_DIR=%~dp0"
set "PHP_DIR=%PROJECT_DIR%php"

REM Agregar la carpeta php al PATH temporalmente
set "PATH=%PHP_DIR%;%PATH%"

REM Confirmar que se está usando el PHP correcto
echo Usando PHP desde:
where php
php -v

REM Verificar si XAMPP sigue en el PATH
echo.
echo Verificando si XAMPP está en el PATH...
echo %PATH% | find /I "xampp\php" >nul
if %errorlevel%==0 (
    echo ⚠️  Advertencia: XAMPP aún está en el PATH del sistema.
    echo     Esto puede causar conflictos con tu PHP local.
    echo     Se recomienda quitarlo desde las Variables de Entorno.
    echo.
)

REM Confirmar que Composer funciona desde ese PHP
echo Usando Composer desde PHP embebido:

IF EXIST "%PHP_DIR%\composer.phar" (
    REM Crear alias composer.bat si no existe
    IF NOT EXIST "%PHP_DIR%\composer.bat" (
        echo @echo off > "%PHP_DIR%\composer.bat"
        echo php "%%~dp0composer.phar" %%* >> "%PHP_DIR%\composer.bat"
        echo Alias composer.bat creado.
    )
    composer --version
) ELSE (
    echo composer.phar no encontrado en %PHP_DIR%
    echo Puedes instalarlo con:
    echo php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    echo php composer-setup.php
    echo php -r "unlink('composer-setup.php');"
)

pause

