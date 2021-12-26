@if(Auth::user()->dashboard=='1')
@include('admin.dashboard-themes.homev1')
@elseif(Auth::user()->dashboard=='2')
@include('admin.dashboard-themes.homev2')
@elseif(Auth::user()->dashboard=='3')
@include('admin.dashboard-themes.homev3')
@endif