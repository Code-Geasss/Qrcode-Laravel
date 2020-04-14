<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>
                    User Name
                </th>
        <th>Balance</th>
        <th>Total Credit</th>
        <th>Total Debit</th>
        <th>Country</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>
                    <a href="{{route('accounts.show' , [$account->id])}}">
                        {{ $account->user['name'] }}
                    </a>
                </td>
            <td>$ {{ number_format($account->balance) }}</td>
            <td>$ {{ number_format($account->total_credit) }}</td>
            <td>$ {{ number_format($account->total_debit) }}</td>
            <td>{{ $account->country }}</td>
                <td>
                    {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{{ route('accounts.edit', [$account->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
