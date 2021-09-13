<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Expense;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }
    
    public function addAsset()
    {
        return view('add-assets');
    }
    
    public function addAssetStore(Request $request)
    {
        $asset = Asset::create([
            'asset'   => $request->asset,
            'comment' => $request->comment,
            'day'     => $request->day,
            'month'   => $request->month,
            'year'    => now(),
            'user_id' => auth()->user()->id
        ]);
        
        if($asset)
           return redirect()->back()->with(['seccerss'=>'Record stored seccessfeully']);
        return redirect()->back()->withErrors();
    }
    
    public function addExpense()
    {
        return view('add-expenses');
    }
    
    public function addExpenseStore(Request $request)
    {
        
        $expense = Expense::create([
            'expense' => $request->expense,
            'comment' => $request->comment,
            'day'     => $request->day,
            'month'   => $request->month,
            'year'    => now(),
            'user_id' => auth()->user()->id
        ]);
        
        if($expense)
           return redirect()->back()->with(['seccerss'=>'Record stored seccessfeully']);
        return redirect()->back()->withErrors();
    }
    
    public function addWithdraw()
    {
        return view('add-withdraws');
    }
    
     public function addWithdrawStore(Request $request)
    {
        $withdraw = Withdraw::create([
            'withdraw'   => $request->withdraw,
            'comment' => $request->comment,
            'day'     => $request->day,
            'month'   => $request->month,
            'year'    => now(),
            'user_id' => auth()->user()->id,
            'is_mine' => 1
        ]);
        
        if($withdraw)
           return redirect()->back()->with(['seccerss'=>'Record stored seccessfeully']);
        return redirect()->back()->withErrors();
    }
    
    public function addLanding()
    {
        return view('add-landings');
    }
    
    public function addLandingStore(Request $request)
    {
        
        $landing = Withdraw::create([
            'withdraw'   => $request->withdraw,
            'comment' => $request->comment,
            'day'     => $request->day,
            'month'   => $request->month,
            'year'    => now(),
            'user_id' => auth()->user()->id,
            'is_mine' => 0
            
        ]);
        
        if($landing)
           return redirect()->back()->with(['seccerss'=>'Record stored seccessfeully']);
        return redirect()->back()->withErrors();
    }
}










