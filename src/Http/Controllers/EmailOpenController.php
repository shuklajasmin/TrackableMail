<?php

namespace Shuklajasmin\Track\Http\Controllers;

use Illuminate\Http\Request;
use Shuklajasmin\Track\Models\EmailOpen;
use App\Http\Controllers\Controller;

class EmailOpenController extends Controller
{
    public function capture(Request $request)
    {

        // $request->ip();
        // $request->userAgent();
        EmailOpen::updateOrCreate(
            ['campaign_id' => $request->campaign],
            ['opened_at' => now()]
        );
    
        // Return transparent image
        $path = public_path('images/transparent.png');
        return response()->file($path, [
            'Content-Type' => 'image/png',
            'Cache-Control' => 'no-cache, must-revalidate'
        ]);

    }
}
