@extends('layouts.app')
@section('content')
    <h1>light</h1>
    <div class="ui grid">
        <form class="ui form four wide column"  action="{{ route('postligth') }}" method="post">
            <div class="ui form">
                <div class="field">
                    <label>Type Transaction</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="transtype">
                        <i class="dropdown icon"></i>
                        <div class="default text">Type Transaction</div>
                        <div class="menu">
                            @foreach($transactionTypes as $transactionType )
                                <div class="item" data-value="{{ $transactionType->id }}">{{ $transactionType->label }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Amount</label>
                <input type="text" name="amount" placeholder="amount">
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>

        <table class="ui very padded   twelve wide column celled table" id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Transaction type</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->transactiontype->label}}</td>
                        <td>{{ $transaction->amount }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Date</th>
                <th>Transaction type</th>
                <th>Amount</th>
            </tr>
            </tfoot>
            </table>

    </div>
@endsection
@section('js')
    <script !src="">
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
@endsection