<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminController extends Controller
{
    public function admin() {

        $user_creation_date = User::select('created_at', 'id')->get();
        $avreage_arr = [];

        foreach ($user_creation_date as $value1) {
            $diff_purchase = 0;
            $purchase_date = Purchase::select('created_at')->where('user_id', $value1->id)->get();
            $diff_user = Carbon::parse($value1->created_at)->diffInDays($purchase_date->first()->created_at);
            
            $purchase = $purchase_date->toarray();
            // $purchase->length();

            $count = count($purchase);
            
            for ($i=0; $i < $count ; $i++) { 
                
                if($i+1 < $count) {
                    $diff_purchase += Carbon::parse($purchase[$i+1]['created_at'])->diffInDays($purchase[$i]['created_at']);
                }
            }
            
            $lifespan = $diff_purchase + $diff_user;    
            $total_count = $count;
            $avg = $lifespan / $total_count;
            array_push($avreage_arr, $avg);
            
        }
        $data = (object)$avreage_arr;
        

        $average = collect($avreage_arr)->average();
        // dd($average);
        return view('dashboard', compact('data','average'));
        
    }
    
}
