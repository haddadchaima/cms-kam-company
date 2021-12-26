<?php

namespace App\Exports\Category;

use App\Category;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class CategoriesExport implements FromView
{
    protected $test;

    public function __construct($test) {
        $this->test = $test;
    }
    public function view(): View
    {
        $date = Carbon::now();
        return view('admin\category\listcategoriesImportE', [
            'category_data' => Category::where('parent_id', "$this->test", "0")->get(),
            'test' => $this->test,
            'now' => $date
        ]);
    }
}
