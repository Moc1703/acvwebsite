# Script untuk Compress File Laravel untuk Upload ke Rumahweb
# Jalankan: .\compress.ps1

Write-Host "🚀 Starting compression process..." -ForegroundColor Cyan

# Buat folder untuk upload
$uploadFolder = "laravel-upload"
if (Test-Path $uploadFolder) {
    Remove-Item -Path $uploadFolder -Recurse -Force
}
New-Item -ItemType Directory -Path $uploadFolder -Force | Out-Null

Write-Host "📁 Copying folders..." -ForegroundColor Yellow

# Copy folder yang diperlukan
$folders = @("app", "bootstrap", "config", "database", "public", "resources", "routes", "storage")
foreach ($folder in $folders) {
    if (Test-Path $folder) {
        Write-Host "  Copying $folder..." -ForegroundColor Gray
        Copy-Item -Path $folder -Destination "$uploadFolder\$folder" -Recurse -Force
    }
}

Write-Host "📄 Copying root files..." -ForegroundColor Yellow

# Copy file root
$files = @("artisan", "composer.json", "composer.lock", "package.json", "package-lock.json", "vite.config.js")
foreach ($file in $files) {
    if (Test-Path $file) {
        Write-Host "  Copying $file..." -ForegroundColor Gray
        Copy-Item -Path $file -Destination "$uploadFolder\$file" -Force
    }
}

Write-Host "🧹 Cleaning up unnecessary files..." -ForegroundColor Yellow

# Hapus file yang tidak perlu
Remove-Item -Path "$uploadFolder\database\database.sqlite" -ErrorAction SilentlyContinue
Get-ChildItem -Path "$uploadFolder\storage\logs\*.log" -ErrorAction SilentlyContinue | Remove-Item -Force

Write-Host "📦 Compressing to ZIP..." -ForegroundColor Yellow

# Hapus ZIP lama jika ada
if (Test-Path "laravel-upload.zip") {
    Remove-Item -Path "laravel-upload.zip" -Force
}

# Compress menjadi ZIP
Compress-Archive -Path "$uploadFolder\*" -DestinationPath "laravel-upload.zip" -Force

# Hapus folder temporary
Remove-Item -Path $uploadFolder -Recurse -Force

$zipSize = (Get-Item "laravel-upload.zip").Length / 1MB
Write-Host ""
Write-Host "✅ File ZIP berhasil dibuat!" -ForegroundColor Green
Write-Host "📦 File: laravel-upload.zip" -ForegroundColor Cyan
Write-Host "📊 Ukuran: $([math]::Round($zipSize, 2)) MB" -ForegroundColor Cyan
Write-Host ""
Write-Host "➡️  Next step: Upload laravel-upload.zip ke Rumahweb via cPanel File Manager" -ForegroundColor Yellow

