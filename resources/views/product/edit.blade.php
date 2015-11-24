<html>
<head>
<h2>Edit Information</h2>
</head>
<body>
   <div>
      <form action="/products/save/{{$product['id']}}">
         ID:<input name="id" value="{{$product['id']}}"/><br>
         Name:<input name="name" value="{{$product['name']}}"/><br>
         Price:<input name="price" value="{{$product['price']}}"/><br>
         Number:<input name="number" value="{{$product['number']}}"/><br>
         <input type="submit" value="save">
      </form>
   </div>
</body>
</html>