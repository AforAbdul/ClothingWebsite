@extends('layout')

@section ('content')

<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <style>
        .flex-container {
            display: flex;
            color: rgb(212, 212, 212);
            height: max-content;
            width: 100%;
            background-color: rgb(119, 7, 7);

        }

        .container {
            flex-direction: row;
        }

        .box1 {
            flex: 1;
            text-align: center;
            text-decoration: none;
            flex-direction: column-reverse;
        }

        .are {
            width: auto;
            margin-left: 30px;
            color: aqua;
        }

        .container {
            display: flex;

        }

        #lol :hover {
            background-color: rgb(197, 161, 40);
            text-decoration: double;
            text-size-adjust: 14;
            display: block;
        }

        a {
            background-color: transparent;
            text-decoration: dotted;
            color: rgb(255, 255, 255);
        }

        .header {
            text-align: center;
            color: rgb(196, 67, 58);


        }

        .caption {
            color: aliceblue;
            align-content: stretch;
        }

        label {
            width: 240px;
            display: inline-block;
        }

        h1 {
            color: aliceblue;
        }

        #Areesha {

            margin-top: 70px;
            margin-bottom: 20px;
            margin-right: 400px;
            margin-left: 380px;
            text-align: center;
            background-color: rgb(32, 11, 11);
            color: antiquewhite;
            font-size: 30px;
            opacity: .7;

        }
    </style>
</head>

<body class="body">

    <div class="image">
        <img src="images\back.jpg" alt="" style="  

        position: absolute;  height: 950px;  padding: 0px; width: 1980px;
        ">
    </div>

    </div>
    <br>
    <div id="Areesha">
        <form method="POST" action="{{ url('/checkout-submit') }}">
            @csrf
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h2> User Data </h2> <br>
            <label for="email ">First Name</label>
            <input type="text" id="email" name="first_name" value="" style="font-size: 20px;"><br><br>
            <label for="password ">Last Name</label>
            <input type="text" id="password" name="last_name" value="" style="font-size: 20px;"><br><br>
            <label for="password ">Phone Number &nbsp </label>
            <input type="text" id="password" name="phone" value="" style="font-size: 20px;"><br><br>
            <label for="password ">CNIC No</label>
            <input type="text" id="password" name="cnic" value="" style="font-size: 20px;"><br><br>
            <label for="password ">Home Adress</label>
            <input type="text" id="password" name="address" value="" style="font-size: 20px;"><br><br>
            <label for="password ">Location</label>
            <input type="text" id="password" name="location" value="" style="font-size: 20px;"><br><br>
            {{-- <input type="submit" value="Submit" style="font-size: 40px;"> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br> <br>

        </form>
    </div>

</body>

</html>


@stop