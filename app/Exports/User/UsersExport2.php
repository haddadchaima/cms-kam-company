<?php

namespace App\Exports\User;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class UsersExport2 implements FromView
{
    public function view(): View
    {
        $date = Carbon::now();
        return view('admin\user\listusersImportE', [
            'users' => DB::table('users')
            ->where('role', '=', "0")
            ->get(),
            'id' => '',
            'now' => $date
        ]);
    }
}