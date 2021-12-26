<?php

namespace App\Exports\User;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class UsersExportFiltre implements FromView
{
    protected $id;

    public function __construct($id) {
    $this->id = $id;
    }

    public function view(): View
    {
        $date = Carbon::now();
        return view('admin\user\listusersImportE', [
            'users' => DB::table('users')
            ->where('role', '=', "0")
            ->where('year', '=', "$this->id")
            ->get(),
            'id' => $this->id,
            'now' => $date
        ]);
    }
}
