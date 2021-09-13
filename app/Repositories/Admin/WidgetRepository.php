<?php

namespace App\Repositories\Admin;


use App\Models\Asset;
use App\Models\Expense;
use App\Models\Withdraw;
//use Your Model

/**
 * Class WidgetRepository.
 */
class WidgetRepository 
{
    public $assets;
    public $expenses;
    public $withdraws;
    
    public function __construct(Asset $assets, Expense $expenses, Withdraw $withdraws)
    {
        $this->assets    = $assets;
        $this->expenses  = $expenses;
        $this->withdraws = $withdraws;
    }
    
    public function getCurrentMonthAssets()
    {
        $assets = $this->assets->where([
            'user_id'   => auth()->user()->id,
            'month'     => date('m')
            
        ])->get();
        $price = 0;
        foreach($assets as $asset)
        {
            $price += $asset->asset;
        }
        return $price;
    }
    
    public function getCurrentMonthExpenses()
    {
         $price = 0;
         $assets = $this->expenses->where([
            'user_id'   => auth()->user()->id,
            'month'     => date('m')
            
        ])->get();
        
        foreach($assets as $asset)
        {
            $price += $asset->expense;
        }
        return $price;
    }
    
     public function getCurrentMonthWithdraws($is_mine = 0)
    {
         $price = 0;
         $assets = $this->withdraws->where([
            'user_id'   => auth()->user()->id,
            'is_mine'   => $is_mine
            
        ])->get();
        
        foreach($assets as $asset)
        {
            $price += $asset->withdraw;
        }
        return $price;
    }
    
     public function getTotalDebit()
    {
         $price_asset = 0;
         $assets = $this->assets->where([
            'user_id'   => auth()->user()->id,
            
        ])->get();
        foreach($assets as $asset)
        {
            $price_asset += $asset->asset;
        }
         
        $price_expense = 0;
        $assets = $this->expenses->where([
            'user_id'   => auth()->user()->id,
            'month'     => date('m')
            
        ])->get();
        
        foreach($assets as $asset)
        {
            $price_expense += $asset->expense;
        }
        return $price_asset - $price_expense;
    }
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }
}
