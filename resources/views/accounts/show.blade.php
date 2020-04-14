@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Account : {{$account['id']}}

            <small>
                    
                    @if($account->applied_for_payout == 1)
                        Payout request pending
                    @endif
                                 
            </small>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('accounts.show_fields')
                    
                </div>
            </div>
        </div>
    </div>
@endsection
