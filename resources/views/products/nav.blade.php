<div class="card-header"> 
    <ul class="list-inline" style="margin: 0;">
        <li class="list-inline-item"> <a style="padding: 0px 5px; display: block;" href="{{ route('products.index') }}">Products</a></li>
        <li class="list-inline-item"> <a style="padding: 0px 5px; display: block;" href="{{ route('products.create') }}">Create</a></li>
        <li class="list-inline-item"> <a style="padding: 0px 5px; display: block;" href="{{ route('quantity.create') }}">Add Quantity</a></li>
    </ul>
</div>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif