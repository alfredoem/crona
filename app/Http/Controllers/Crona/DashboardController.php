<?php namespace App\Http\Controllers\Crona;

use Alfredoem\Ragnarok\Soul\AuthRagnarok;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Crona\SecApps\SecApp;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function getIndex(Request $request)
    {
        $data = SecApp::wherestatus(1)->get();
        $user = AuthRagnarok::user();

        return  Response::view('crona.dashboard.dashboard', compact('data', 'user'))
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    }
}