<?php
/**
 * Migration helper untuk Vercel
 * 
 * PENTING: Setelah migration selesai, HAPUS atau PROTEKSI file ini
 * untuk menghindari akses tidak sah!
 * 
 * Akses: https://your-domain.vercel.app/api/migrate.php?key=YOUR_SECRET_KEY
 */

// Set secret key di environment variables: MIGRATION_KEY
$secretKey = $_ENV['MIGRATION_KEY'] ?? getenv('MIGRATION_KEY') ?? 'change-this-secret-key';

// Validasi secret key
if (!isset($_GET['key']) || $_GET['key'] !== $secretKey) {
    http_response_code(403);
    die('Unauthorized access');
}

// Set timeout yang lebih lama untuk migration
set_time_limit(300);

// Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // Run migrations
    echo "Running migrations...\n";
    Artisan::call('migrate', ['--force' => true]);
    echo Artisan::output();
    
    echo "\n\nOptimizing application...\n";
    Artisan::call('optimize');
    echo Artisan::output();
    
    echo "\n\nMigration completed successfully!";
    echo "\n\n⚠️  IMPORTANT: Delete this file (api/migrate.php) after migration!";
    
} catch (Exception $e) {
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}
