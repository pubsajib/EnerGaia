@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($products->isEmpty())
                        <h4 class="text-center text-danger">No product found</h4>
                    @else
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if (!$product->supplier->isEmpty())
                                        @foreach ($product->supplier as $quantity)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td> {{ $quantity->product_count }} </td>
                                            <td> {{ $quantity->created_at->format('M, d Y') }} </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
