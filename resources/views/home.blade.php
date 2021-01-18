@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Expense Tracker Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <table>
                        <thead>
                            <th>Transaction name</th>
                            <th>amount</th>
                            <th>categoty</th>
                            <th>descriptio</th>
                            <th>date</th>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->transaction_name }}</td>
                                <td>{{ $transaction->transaction_amount }}</td>
                                <td>{{ $transaction->transaction_type_id }}</td>
                                <td>{{ $transaction->transaction_description }}</td>
                                <td>{{ $transaction->transaction_date }}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    
                    
                </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
