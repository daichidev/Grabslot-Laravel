<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LogUrls;

class AdminController extends Controller
{
    public function index() {
        $twitterCount = LogUrls::where('url', 'LIKE', '%twitter.com%')->count();
        $instagramCount = LogUrls::where('url', 'LIKE', '%instagram.com%')->count();
        $qrCount = LogUrls::where('url', 'LIKE', '%QR%')->count();

        $currentYear = date('Y');
        $twitterByMonth = [];
        for ($i=1; $i <= 12; $i++) {
            $twitterByMonth[$i] = LogUrls::where('url', 'LIKE', '%twitter.com%')->whereYear('created_at', $currentYear)->whereMonth('created_at', $i)->count();
        }
        $instagramByMonth = [];
        for ($i=1; $i <= 12; $i++) {
            $instagramByMonth[$i] = LogUrls::where('url', 'LIKE', '%instagram.com%')->whereYear('created_at', $currentYear)->whereMonth('created_at', $i)->count();
        }
        $qrByMonth = [];
        for ($i=1; $i <= 12; $i++) {
            $qrByMonth[$i] = LogUrls::where('url', 'LIKE', '%QR%')->whereYear('created_at', $currentYear)->whereMonth('created_at', $i)->count();
        }

        return view('admin/index', ['twitterCount' => $twitterCount, 'instagramCount' => $instagramCount, 'qrCount' => $qrCount, 'twitterByMonth' => $twitterByMonth, 'instagramByMonth'=> $instagramByMonth, 'qrByMonth' => $qrByMonth]);
    }
}
