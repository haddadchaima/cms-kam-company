<?php

namespace App\Exports\Product;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ProductExportOffer implements FromView
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
            ->where('remise',"$this->id", "0")
            ->get(),
            'id' => '',
            'now' => $date
        ]);
    }
}
