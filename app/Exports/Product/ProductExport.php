<?php

namespace App\Exports\Product;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ProductExport implements FromView
{
    public function view(): View
    {
        $date = Carbon::now();
        return view('admin\product\listproductImportE', [
            'products' => DB::table('products')
            ->get(),
            'id' => '',
            'now' => $date
        ]);
    }
}
