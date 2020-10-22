@extends('admin.layouts.index')
@section('control')
<div class="main__mess">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>user_id</th>
                <th scope="row">img</th>
                <th scope="col">message</th>
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
            @foreach ($joinmess as $i)
        <form action="" method="get" enctype="multipart/form-data">
                <tr>
                    @csrf
                    <th scope="row">{{ $i->user_id }}</th>
                    @if($i->data==true)
                    <td><img src="data:image/jpg;base64,{{$i->data}}" width="200px" height="auto"></td>
                    @else
                    <td>empty img</td>
                    @endif
                    <td>{{ $i->description}}</td>                   
                    <td>{{ $i->created_at}}</td>
                    <td>{{ $i->email }}</td>
                    <td>{{ $i->nameS }}</td>
                    <td>{{ $i->phone }}</td> 
                    <td>{{ $i->postcode }}</td> 
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