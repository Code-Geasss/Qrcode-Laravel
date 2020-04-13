<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Buyer</th>
        <th>Qrcode Name/Id</th>
        <th>Payment Method</th>
        <th>Amount</th>
        <th>Status</th>
             
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->user['name'] }}</td>
            <td>
            <a href="{{ route('transactions.show', [$transaction->id]) }}">
            {{ $transaction->qrcode['product_name'] }}
            </a>
            </td>
            <td>{{ $transaction->payment_method }}</td>
            <td>$ {{ $transaction->amount }}</td>
            <td>{{ $transaction->status }}</td>
            
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
