@extends('layout.master')
@section('Content')
<form method="get" action="{{route('admin.product.getProductsByBand')}}">
    <input type='hidden' name='_token' value='{{csrf_token()}}'/>
                <div>
                <label>
                    Select Band
                </label>
                <select class="form-select form-select-lg" name="selectBand" id="">
                    <option value="Simvastatin">Simvastatin</option>
                    <option value="Sertraline Hydrochloride">Sertraline Hydrochloride</option>
                    <option value="Parsley">Parsley</option>
                </select>
                <button
                        type="submit"
                        class="btn btn-primary"
                        name="btSearch"
                    >
                        Submit
                    </button>
                    <?php
                    if (isset($data["Products"])) {
                        echo "<table>";
                        echo "<tbody>";

                        echo "<thead>";
                        echo "<tr>";

                        $fieldNames = $data["Products"]->fetch_fields();
                        foreach ($fieldNames as $field) {
                            echo "<th class =\"text-center\">" . strtoupper($field->name) . "</th>";
                        }
                        echo "</tr>";
                        echo "</thead>";

                        while ($row = mysqli_fetch_array($data["Products"])) {
                            echo "<tr>";
                            echo "<td class=\"text-left\">" . $row["id"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["pid"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["pname"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["company"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["year"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["band"] . "</td>";
                            echo "<td class=\"text-left\">" . '<img src="' . $row["pimage"] . '" alt = "Image">' . "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } 
                    ?>
                </div>
            </form>
<div
    class="table-responsive"
>
    <table class="table table-primary">
        <tbody>
        <thead>
            <tr>
                <th class=\"text-center\">PID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Company</th>
                <th class=\"text-center\">Year</th>
                <th class=\"text-center\">Band</th>
                <th class=\"text-center\">Image</th>
                <th class=\"text-center\">Delete</th>
                <th class=\"text-center\">Update</th>
            </tr>
        </thead>
        </tbody>
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
    <td class='center'><i class='fa fa-trash-o fa-fw'></i>
    <a href="deleteProduct/{{$product->pid}}">Delete</a></td>
    <td class='center'><i class='fa fa-pencil-o fa-fw'></i>
    <a href="updateProduct/{{$product->pid}}">Update</a></td>
    </thead>
    </table>
</div>
</tr>
@endforeach
@endsection