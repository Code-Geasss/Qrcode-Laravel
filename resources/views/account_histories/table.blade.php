<div class="table-responsive">
    <table class="table" id="accountHistories-table">
        <thead>
            <tr>
                <th>Account Id</th>
        <th>User </th>
        <th>Message</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($accountHistories as $accountHistory)
            <tr>
                <td>{{ $accountHistory->account_id }}</td>
            <td>{{ $accountHistory->user['name'] }}</td>
            <td>{{ $accountHistory->message }}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
