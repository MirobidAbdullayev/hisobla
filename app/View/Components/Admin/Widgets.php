<?php

namespace App\View\Components\Admin;

use App\Repositories\Admin\WidgetRepository;
use Illuminate\View\Component;

class Widgets extends Component
{
    public $assets;
    public $expenses;
    public $withdraws;
    public $landing;
    public $debit;
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(WidgetRepository $widgetRepository)
    {
        $this->assets    = $widgetRepository->getCurrentMonthAssets();
        $this->expenses  = $widgetRepository->getCurrentMonthExpenses();
        $this->withdraws = $widgetRepository->getCurrentMonthWithdraws();
        $this->landing   = $widgetRepository->getCurrentMonthWithdraws(1);
        $this->debit     = $widgetRepository->getTotalDebit();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.widgets');
    }
}
