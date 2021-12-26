<?php

namespace App\Exports\Product;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ProductExportStatus implements FromView
{
    protected $id;

    public function __construct($id) {
    $this->id = $id;
    }

    public function view(): View
    {
        $date = Carbon::now();
        return view('admin\product\listproductImportE', [
            'products' => DB::table('products')
            ->where('active', '=', "$this->id")
            ->get(),
            'id' => '',
            'now' => $date
        ]);
    }
}
