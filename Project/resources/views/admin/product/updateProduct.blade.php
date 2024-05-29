@extends('layout.master')
@section('Content')

@if(session('Note'))
<div class='alert alert-success'>
    {{session('Note')}}
</div>
@endif

<form style="border: 5px" action="{{$product->pid}}" method='post' enctype="multipart/form-data">
    <div class=mb-3>
        <input type='hidden' name='_token' value='{{csrf_token()}}'/>
    </div>

    <div class="mb-3">
      <label for="">ID Product</label>
      <input type="text" class="form-control" name="pid" id="" value="{{$product->pid}}">
    </div>

    <div class="mb-3">
      <label for="">Name</label>
      <input type="text" class="form-control" name="pname" id="" value="{{$product->pname}}">
    </div>

    <div class="mb-3">
      <label for="">Company</label>
      <input type="text" class="form-control" name="company" id="" value="{{$product->company}}">
    </div>

<div class="mb-3">
    <label for="" class="form-label">Select Year</label>
    <select class="form-select form-select-lg" name="year" value='{{$product->year}}' id="">
                    <?php
                    for ($year = 2015; $year <=2025; $year++) {
                        echo '<option value="' . $year . '">' . $year . '</option>';
                    }
                    ?>
                </select>
                </div>

    <div class="mb-3">
        <label for="" class="form-label">Select Band</label>
        <select
            class="form-select form-select-lg"
            value='{{$product->band}}'
            name="band"
            id=""
        >
            <option selected>Select one</option>
            <option value="AMRIX">AMRIX</option>
            <option value="Myorisan">Myorisan</option>
            <option value="AVALIDE">AVALIDE</option>
        </select>
    </div>
    


    <div class="mb-3">
    <label for="" class="form-label">Choose Image</label>
    <img src="{{$product->pimage}}" alt="Image">
    <input type="file" class="form-control" id="" name="imageFile">
    </div>

    <div class="mb-3">
    <button
        type="submit"
        name='btUpdate'
        class="btn btn-primary"
        >
        Update
    </button>
    </div>

</form>
@endsection