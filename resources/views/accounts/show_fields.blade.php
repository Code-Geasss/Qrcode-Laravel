

<div class="col-md-6">
        <!-- User Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'User:') !!}
            <p>{{ $account->user['name'] }} | {{ $account->user['email'] }}</p>
        </div>

        <!-- Balance Field -->
        <div class="form-group">
            {!! Form::label('balance', 'Balance:') !!}
            <p>$ {{ number_format($account->balance) }}</p>
        </div>

        <!-- Total Credit Field -->
        <div class="form-group">
            {!! Form::label('total_credit', 'Total Credit:') !!}
            <p>$ {{ number_format($account->total_credit) }}</p>
        </div>

        <!-- Total Debit Field -->
        <div class="form-group">
            {!! Form::label('total_debit', 'Total Debit:') !!}
            <p>$ {{ number_format($account->total_debit) }}</p>
        </div>

        <!-- Withdraw Method Field -->
        <div class="form-group">
            {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
            <p>{{ $account->withdrawal_method }}</p>
        </div>

        <!-- Payment Email Field -->
        <div class="form-group">
            {!! Form::label('payment_email', 'Payment Email:') !!}
            <p>{{ $account->payment_email }}</p>
        </div>
</div>

<div class="col-md-6">
<!-- Bank Name Field -->
<div class="form-group">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    <p>{{ $account->bank_name }}</p>
</div>

<!-- Bank Branch Field -->
<div class="form-group">
    {!! Form::label('bank_branch', 'Bank Branch:') !!}
    <p>{{ $account->bank_branch }}</p>
</div>

<!-- Bank Account Field -->
<div class="form-group">
    {!! Form::label('bank_account', 'Bank Account:') !!}
    <p>{{ $account->bank_account }}</p>
</div>


<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>
    @if($account->paid == 1)
        Yes
    @else
        No
    @endif
    </p>
</div>

<!-- Last Date Applied Field -->
<div class="form-group">
    {!! Form::label('last_date_applied', 'Last Date Applied:') !!}
    <p>{{ $account->last_date_applied }}</p>
</div>

<!-- Last Date Paid Field -->
<div class="form-group">
    {!! Form::label('last_date_paid', 'Last Date Paid:') !!}
    <p>{{ $account->last_date_paid }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $account->country }}</p>
</div>

<!-- Other Details Field -->
<div class="form-group">
    {!! Form::label('other_details', 'Other Details:') !!}
    <p>{{ $account->other_details }}</p>
</div>

</div>