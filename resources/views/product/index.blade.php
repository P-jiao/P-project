<html>
<head>
<h2>Table one</h2>
</head>
<body>
   <table border="1">
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Price</th>
         <th>Number</th>
         <th>Operation</th>
      </tr>
   @foreach($product as $p)
        <tr>
           <td>{{$p->id}}</td>
           <td>{{$p->name}}</td>
           <td>{{$p->price}}</td>
           <td>{{$p->number}}</td>
           <td><a href="/products/show/{{ $p->id }}">Show</a>
                <a href="/products/edit/{{ $p->id }}">Edit</a>
                <a href="/products/delete/{{ $p->id }}">Delete</a>
           </td>
        </tr>
   @endforeach
   </table>
   <br>
   <button><a href="/products/edit">Create</a></button>
</body>
</html>