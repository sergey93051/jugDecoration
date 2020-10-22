@extends('admin.layouts.index')

@section('control')
<h1>addCategory</h1>

<div class="ad__success__mess">
    @if (Session::has('success'))
    <ul>
        <li>{{ Session::get('success') }}</li>
    </ul>
    @endif
</div>
<div class="admin__form">
    <form action="{{ Route('addCate') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <label for="title">title</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="title">titleEng</label><br>
        <input type="text" id="titleEng" name="titleEng"><br>
        <label for="img">img</label><br>
        <input type="file" id="img" name="img"><br>
        <label for="text">text</label><br>
        <input type="text" id="text" name="text"><br>
        <label for="text">textEng</label><br>
        <input type="text" id="textEng" name="textEng"><br>
        <input type="submit" value="Submit">
    </form>
</div>
<div class="Admin__table">
    <h1>Category panel</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="row">id</th>
                <th scope="col">title</th>
                <th scope="col">text</th>
                <th scope="col">img</th>
                <th scope="col">Engtitle</th>
                <th scope="col">Engtext</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cat as $i)
            <form action="Catdel/{{$i->id}}" method="get" enctype="multipart/form-data">
                <tr>
                    @csrf
                    <th scope="row">{{ $i->id }}</th>
                    <td>{{ $i->name }}</td>
                    <td>{{ $i->text }}</td>
                    <td><img src="{{ asset("storage/Cate_img/{$i->img}") }}" width="100px" height="auto"></td>
                    <td>{{ $i->ename }}</td>
                    <td>{{ $i->etext }}</td>
                    <td><input type="submit" name="sub__del" value="delete"></td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
<div class="add__roleCate">
    <h1>addroleCate to Product</h1>
    <form action="{{ Route('addroleCate') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <label for="title">cat__id</label><br>
        <input type="number" name="cat__id"><br>
        <label for="text">prod__id</label><br>
        <input type="number" name="prod__id"><br>
        <input type="submit" value="Submit">
    </form>
</div>
<div class="Role__table">
    <h1>roleCate panel</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="row">id</th>
                <th scope="col">Role_id</th>
                <th scope="col">Prod_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roleCate as $i)
            <tr>
                <th scope="row">{{$i->id}}</th>
                <td>{{$i->cate_id}}</td>
                <td>{{$i->prod_id}}</td>
                @endforeach
            </tr>
            </form>
        </tbody>
    </table>
</div>
@endsection