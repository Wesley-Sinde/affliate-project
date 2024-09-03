<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\Referral;
use Illuminate\Http\Request;

class AffiliateDashboardController extends Controller
{
    public function index()
    {
        $affiliate = auth()->user();
        // dd($affiliate->id);

        $referrals = Referral::where('affiliate_id', $affiliate->id)->get();
        $totalCommissions = Commission::where('affiliate_id', $affiliate->id)->sum('amount');
        $pendingPayouts = Commission::where('affiliate_id', $affiliate->id)
            ->where('status', 'pending')
            ->sum('amount');

        return view('dashboard', compact('affiliate', 'referrals', 'totalCommissions', 'pendingPayouts'));
    }
}
