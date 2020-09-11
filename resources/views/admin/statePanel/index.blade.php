@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid m-2">
        <table class="table">
            <thead>
            <tr>
                <th  scope="col">
                    <input type="checkbox"
                           onclick="$('input[name*=\'selected\']').prop('checked', this.checked);">
                </th>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><input type="checkbox" name="selected"></th>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row"><input type="checkbox" name="selected"></th>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row"><input type="checkbox" name="selected"></th>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
