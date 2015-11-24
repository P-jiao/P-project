<html>
<head>
<h2>Show Information</h2>
</head>
<body>
  <table border="1">
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Price</th>
         <th>Number</th>
      </tr>

           <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->number}}</td>

  </table>
</body>
</html>