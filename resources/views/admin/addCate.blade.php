@extends('admin.layouts.index')

@section('addProd')
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
          <input type="text" id="title" name="title" ><br>
          <label for="img">img</label><br>
          <input type="file" id="img" name="img" ><br>
          <label for="text">text</label><br>
          <input type="text" id="text" name="text" ><br>
          <input type="submit" value="Submit">
      </form>
  </div>
  @endsection