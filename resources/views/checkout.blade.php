<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (!session()->get('cart'))
                    <h1>non ci sono prodotti</h1>
                @else
                <div class="items-checkout">
                    @foreach ($items as $item)
                        <div class="card">
                            <p>{{ $item['name'] }}</p>
                            <p>prezzo: {{ $item['price'] }} €</p>
                            <p class="d-inline-block">quantità: {{ $item['quantity'] }}</p>
                            <div class="photo-container d-inline-block">
                                <img src="{{ $item['photo'] }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('cart') }}">
                    <button type="submit" class="btn btn-warning">Torna al carrello</button>
                </a>

                <h1>inserisci i tuoi dati</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" require>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" require>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" require>
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
