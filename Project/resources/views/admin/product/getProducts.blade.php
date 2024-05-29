@extends('layout.master')
@section('Content')

@if(session('Note'))
<div class='alert alert-success'>
    {{session('Note')}}
</div>
@endif

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th class=\"text-center\">PID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Company</th>
                <th class=\"text-center\">Year</th>
                <th class=\"text-center\">Band</th>
                <th class=\"text-center\">Image</th>
                <th class=\"text-center\">Delete</th>
                <th class=\"text-center\">Edit</th>
            </tr>
        </thead>
    </table>
</div>

@foreach ($products as $product)
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
<tr>
    <td class="text-left">{{ $product->pid }}</td>
    <td class="text-left">{{ $product->pname }}</td>
    <td class="text-left">{{ $product->company }}</td>
    <td class="text-left">{{ $product->year }}</td>
    <td class="text-left">{{ $product->band }}</td>
    <td class="text-left"><img src="{{ $product->pimage }}" alt="Image"></td>
    <td class="center">
        <a href="deleteProduct/{{ $product->pid }}">
            <i class="fa fa-trash-o fa-fw"></i> Delete
        </a>
    </td>
    <td class="center">
        <a href="admin/product/updateProduct/{{ $product->pid }}">
            <i class="fa fa-pencil fa-fw"></i> Edit
        </a>
    </td>
    </thead>
    </table>
</div>

</tr>
@endforeach
@endsection