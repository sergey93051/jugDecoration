@extends('admin.layouts.index')

@section('control')
    <h1>addProdunt</h1>

   <div class="ad__success__mess">
    @if (Session::has('success'))
         <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
  @endif
  </div> 
  <div class="admin__form">
      <form action="{{ Route('addProd') }}" method="Post" enctype="multipart/form-data">
          @csrf
          <label for="title">directory</label><br>
          <input type="text" id="directory" name="directory"><br>
          <label for="img">img1</label><br>
          <input type="file" id="img" name="img" ><br>
          <label for="img2">img2</label><br>
          <input type="file" id="img2" name="img2" ><br>
          <label for="img3">img3</label><br>
          <input type="file" id="img3" name="img3" ><br>
          {{-- 1 --}}
          <label for="title">title</label><br>
          <input type="text" id="title" name="title"><br>
          {{-- 2 --}}
          <label for="etitle">etitle</label><br>
          <input type="text" id="etitle" name="etitle"><br>
          {{-- 3 --}}
          <label for="text">text</label><br>
          <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
          {{--  --}}
          <label for="etext">Engtext</label><br>
          <textarea id="etext" name="etext" rows="4" cols="50"></textarea><br>
          <label for="price">price</label><br>
          <input type="number" id="price" name="price"><br>
          <input type="submit" value="Submit">
      </form>
  </div>
  <div class="showProd">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="row">id</th>
                <th scope="col">directory</th>
                <th scope="col">img1</th>
                <th scope="col">img2</th>
                <th scope="col">img3</th>
                <th scope="col">title</th>
                <th scope="col">text</th>
                <th scope="col">price</th>
                <th scope="col">Engtitle</th>
                <th scope="col">Engtext</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Prod as $i)
            <form action="" method="get" enctype="multipart/form-data">
                <tr>
                    @csrf
                    <th scope="row">{{ $i->id }}</th>
                    <td>{{ $i->directory }}</td>
                    <td><img src="{{ asset("storage/prodimg__{$i->directory}/".$i->img)}}" width="100px" height="auto"></td>
                    @if($i->img_2==true)
                    <td><img src="{{ asset("storage/prodimg__{$i->directory}/".$i->img_2)}}" width="100px" height="auto"></td>
                    @else
                    <td>empty img2</td>
                    @endif
                    @if($i->img_3==true)
                    <td><img src="{{ asset("storage/prodimg__{$i->directory}/".$i->img_3)}}" width="100px" height="auto"></td>
                    @else
                    <td>empty img3</td>
                    @endif
                    <td>{{ $i->title }}</td>
                    <td>{{ $i->after }}</td>
                    <td>{{ $i->text }}</td> 
                    <td>{{ $i->price }}</td>   
                    <td>{{ $i->etitle }}</td>
                    <td>{{ $i->etext }}</td>                 
                    <td><input type="submit"  value="delete"></td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>

  </div>
      
@endsection