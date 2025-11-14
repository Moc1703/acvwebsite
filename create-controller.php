<?php
/**
 * Script untuk membuat LandingPageController di server
 * Akses via: https://ayathacreativeventures.com/create-controller.php
 * Setelah berhasil, HAPUS file ini untuk keamanan!
 */

$controllerPath = __DIR__ . '/app/Http/Controllers/LandingPageController.php';
$baseControllerPath = __DIR__ . '/app/Http/Controllers/Controller.php';

// Buat folder jika belum ada
$controllersDir = __DIR__ . '/app/Http/Controllers';
if (!is_dir($controllersDir)) {
    mkdir($controllersDir, 0755, true);
    echo "✅ Created directory: app/Http/Controllers/<br>";
}

// Buat Controller.php (base class) jika belum ada
if (!file_exists($baseControllerPath)) {
    $baseControllerContent = <<<'PHP'
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
PHP;
    file_put_contents($baseControllerPath, $baseControllerContent);
    echo "✅ Created Controller.php (base class)<br>";
} else {
    echo "ℹ️ Controller.php already exists<br>";
}

// Buat LandingPageController.php
$controllerContent = <<<'PHP'
<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contact(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
            'user_type' => 'required|in:brand,kol',
        ];

        // Different validation rules based on user type
        if ($request->user_type == 'brand') {
            $rules['company'] = 'required|string|max:255';
            $rules['phone'] = 'nullable|string|max:20';
        } else {
            $rules['phone'] = 'required|string|max:20';
            $rules['company'] = 'nullable|string|max:255'; // Instagram handle for KOL
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please correct the errors below.')
                ->with('active_tab', $request->user_type);
        }

        // Sanitize input
        $data = [
            'name' => strip_tags(trim($request->name)),
            'email' => filter_var(trim($request->email), FILTER_SANITIZE_EMAIL),
            'phone' => $request->phone ? preg_replace('/[^0-9+\-\s]/', '', trim($request->phone)) : null,
            'company' => $request->company ? strip_tags(trim($request->company)) : null,
            'message' => strip_tags(trim($request->message)),
            'service_interest' => $request->service_interest ? strip_tags($request->service_interest) : null,
            'user_type' => $request->user_type,
            'status' => 'new',
        ];

        $inquiry = Inquiry::create($data);

        // TODO: Send email notification
        // Mail::to('your-email@example.com')->send(new NewInquiryNotification($inquiry));

        return redirect()->route('thank.you')
            ->with('success', 'Thank you for your inquiry! We will contact you soon.');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
PHP;

if (file_put_contents($controllerPath, $controllerContent)) {
    echo "✅ Created LandingPageController.php<br>";
} else {
    echo "❌ Failed to create LandingPageController.php<br>";
    echo "Check file permissions for app/Http/Controllers/<br>";
}

// Set permissions
chmod($controllerPath, 0644);
chmod($baseControllerPath, 0644);

// Clear cache
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    Artisan::call('config:clear');
    echo "✅ Config cache cleared<br>";
} catch (Exception $e) {
    echo "⚠️ Config cache: " . $e->getMessage() . "<br>";
}

try {
    Artisan::call('route:clear');
    echo "✅ Route cache cleared<br>";
} catch (Exception $e) {
    echo "⚠️ Route cache: " . $e->getMessage() . "<br>";
}

try {
    Artisan::call('cache:clear');
    echo "✅ Cache cleared<br>";
} catch (Exception $e) {
    echo "⚠️ Cache: " . $e->getMessage() . "<br>";
}

echo "<br><strong>✅ Done!</strong><br>";
echo "<strong>⚠️ IMPORTANT: Delete this file (create-controller.php) for security!</strong><br>";
echo "<br>Now try accessing: <a href='/'>https://ayathacreativeventures.com</a>";

