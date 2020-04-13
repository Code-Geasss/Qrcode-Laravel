<!-- Qrcode Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Product Name:') !!}
    <p><a href="/qrcodes/{{$transaction->qrcode['id']}}">
        <b>{{ $transaction->qrcode['product_name'] }}</b>
        </a>
     </p>
</div>



<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Buyer Name/Id:') !!}
    <p>
    <a href="/users/{{ $transaction->user['id'] }}">
     {{ $transaction->user['name'] }} | {{ $transaction->user['email'] }}
     </a>
     </p>
</div>

<!-- Qrcode Owner Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Qrcode Owner Name/Id:') !!}
    <p>{{ $transaction->qrcode_owner['name'] }}</p>
</div>


<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $transaction->payment_method }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $transaction->message }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>$ {{ $transaction->amount }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $transaction->status }}</p>
</div>

