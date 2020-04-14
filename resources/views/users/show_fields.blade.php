<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'User Level:') !!}
    <p>{{ $user->role['name'] }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>



<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>


@if($user->id == Auth::user()->id || Auth::user()->role_id <3)
<h3 class="text-center text-default">Transactions done by you:- </h3>
    @include('transactions.table')
@endif

@if($user->id == Auth::user()->id || Auth::user()->role_id <3)
<h3 class="text-center text-default">Qrcode for your transactions were:- </h3>
    @include('qrcodes.table')
@endif