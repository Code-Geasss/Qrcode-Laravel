
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.show') }}"><i class="fa fa-edit"></i><span>My Account</span></a>
</li>

@if(Auth::user()->role_id < 4)
<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
    <a href="{{ route('qrcodes.index') }}"><i class="fa fa-edit"></i><span>Qrcodes</span></a>
</li>
@endif

@if(Auth::user()->role_id < 3)
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.index') }}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>

<li class="{{ Request::is('accountHistories*') ? 'active' : '' }}">
    <a href="{{ route('accountHistories.index') }}"><i class="fa fa-edit"></i><span>Account Histories</span></a>
</li>
@endif



@if(Auth::user()->role_id == 1)
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endif

