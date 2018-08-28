@extends('layouts.admin.master', [
'current_menu' => 'bakery-form',
'sub_current_menu' => 'dashboard'
])
@section('content')

<div class="container-fluid">
    <h2>Advanced Double Navigation with fixed SideNav & non-fixed Navbar:</h2>
    <br>
    <h5>1. Fixed side menu, hidden on small devices.</h5>
    <h5>2. Non-fixed Navbar. It will disappear when you scroll down.</h5>
    <div style="height: 2000px"></div>
</div>

@endsection
