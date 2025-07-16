# Script para configurar entorno de desarrollo en PowerShell
# Agrega la carpeta php\ al PATH solo en esta sesión de PowerShell
$scriptPath = Split-Path -Parent $MyInvocation.MyCommand.Path
$env:PATH = "$scriptPath\paths\php;$scriptPath\paths;$env:PATH"

# Define una función para composer
function global:composer {
    php "$scriptPath\paths\php\composer.phar" $args
}

# Define función para iniciar Laravel
function global:serve {
    param(
        [string]$project = "almacen-filament"
    )
    
    if (Test-Path $project) {
        Set-Location $project
        Write-Host "Iniciando servidor Laravel en http://localhost:8000" -ForegroundColor Cyan
        php artisan serve
    } else {
        Write-Host "Proyecto $project no encontrado" -ForegroundColor Red
    }
}

# Agrega Node.js al PATH
$env:PATH = "$scriptPath\paths\Node.js;$env:PATH"

# Muestra información de las herramientas
Write-Host "=== PHP local habilitado ===" -ForegroundColor Green
php -v

Write-Host "=== Node.js local habilitado ===" -ForegroundColor Green
node -v
npm -v

Write-Host "=== Composer local habilitado ===" -ForegroundColor Green
composer -V

# Comandos disponibles
Write-Host "`n=== Comandos disponibles ===" -ForegroundColor Yellow
Write-Host "composer         - Ejecuta Composer" -ForegroundColor White
Write-Host "serve            - Inicia el servidor Laravel (almacen-filament por defecto)" -ForegroundColor White
Write-Host "serve proyecto   - Inicia el servidor Laravel del proyecto especificado" -ForegroundColor White

# Mantiene la ventana de PowerShell abierta
Write-Host "`nEntorno de desarrollo configurado. Esta ventana mantendrá la configuración del PATH." -ForegroundColor Cyan