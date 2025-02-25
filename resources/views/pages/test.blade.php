<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is test view</h1>

    <h3>Users are </h3>
    <ul>
    @foreach ($orders as $order)
    <span>id  {{ $order->id }}</span>
    <li> name {{ $order->name }}</li>
        
    @endforeach
    </ul>

<form method="POST" action="{{ route('order.create') }}">
    @csrf
    <input type="text" name="name" id="" value="user order">
    <button type="submit">send data to backend </button>
</form>

</body>
</html>