@extends('admin.layouts.index')
@section('control')
<div class="main__orders">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>user_id</th>
                <th scope="row">product</th>
                <th scope="col">price</th>
                <th scope="col">total</th>
                <th scope="col">created_time</th>
                <th scope="col">email</th>
                <th scope="col">nameS</th>
                <th scope="col">phone</th>
                <th scope="col">postcode</th>
                <th scope="col">country</th>
                <th scope="col">city</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($joinorders as $i)
        <form action="" method="get" enctype="multipart/form-data">
                <th scope="row">{{ $i->user_id }}</th>
                    @csrf                    
                    <td>{{ $i->prod}}</td>                   
                    <td>{{ $i->price }}</td>
                    <td>{{ $i->total }}</td>                 
                    <td>{{ $i->created_at}}</td>
                    <td>{{ $i->email }}</td>
                    <td>{{ $i->nameS }}</td>
                    <td>{{ $i->phone }}</td> 
                    <td>{{ $i->street }}</td> 
                    <td>{{ $i->country }}</td>
                    <td>{{ $i->city }}</td>     
                    {{-- <td><input type="submit"  value="delete"></td>        --}}
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>


    
@endsection