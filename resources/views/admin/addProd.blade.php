@extends('admin.layouts.index')

@section('addProd')
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
          <label for="img">img</label><br>
          <input type="file" id="img" name="img" value="John"><br>
          <label for="title">title</label><br>
          <input type="text" id="title" name="title"><br>
          <label for="after">after</label><br>
          <input type="text" id="after" name="after"><br>
          <label for="text">text</label><br>
          <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
          <label for="price">price</label><br>
          <input type="number" id="price" name="price"><br>
          <input type="submit" value="Submit">
      </form>
  </div>
  <div class="showProd">
    <table border="1">
		<th>id</th>
		<th>img</th>
		<th>title</th>
        <th>after</th>
        <th>text</th>
		<th>price</th>
       @foreach ($prodimg as $v)
        <tr>
 	    <form action='' method=post>
         <td>{{ $v->id }}<input type=hidden  name=sid value='{{ $v->id }}'></td><br>
            {{-- <td><input type=text  name=sname  value='{{ $v->}}' ></td><br> --}}
            <td><input type=text  name=sname  value='{{ $v->text}}' ></td><br>
  	    	<td><input type=text  name=times value='{{ $v->price}}'></td><br>
            {{-- <td><input type=submit name=upd_cat value=update  ></td>
	     	<td><input type=submit name=del_cat value=delete  ></td> --}}
      </form>
       </tr>
     @endforeach;
	
		

    </table>

  </div>
      
@endsection