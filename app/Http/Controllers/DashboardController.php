<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        /** @var User $user */ 
        $user = Auth::user(); 
        
        if ($user->hasAnyRole(['admin', 'manager'])) {
            return view('admin.dashboard', [
                'user' => $user,
                'isAdmin' => $user->hasRole('admin'),
                'isManager' => $user->hasRole('manager')
            ]);
        }
        
        if ($user->hasAnyRole(['customer'])) {
             return redirect('/')->with('success', 'Your have successfully logged in');;
        }
        
        abort(403, 'Unauthorized access - No valid role assigned');
    }
}