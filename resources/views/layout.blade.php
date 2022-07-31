<html>

<head>
    <title>
        Online Clothing Store
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    ul.nav- {
        margin: 0px;
        padding: 0px;
        list-style: none;
        line-height: 36px;
        height: 36px;
        background-color: rgb(172, 84, 13);
        z-index: 1;
        opacity: 0.7;
        text-decoration: none;
    }

    li {
        float: left;

    }

    .navi:hover {
        background-color: rgb(109, 49, 0);
        border-radius: 22px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #fcfcfc;
    }

    footer {
        position: relative;
        bottom: 0;
        left: 0;
        right: 0;
        background: #111;
        height: auto;
        width: 100vw;
        font-family: "Open Sans";
        padding-top: 40px;
        color: #fff;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .footer-content h3 {
        font-size: 1.8rem;
        font-weight: 400;
        text-transform: capitalize;
        line-height: 3rem;
    }

    .footer-content p {
        max-width: 500px;
        margin: 10px auto;
        line-height: 28px;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .socials {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 1rem 0 3rem 0;
    }

    .socials li {
        margin: 0 10px;
    }

    .socials a {
        text-decoration: none;
        color: #fff;
    }

    .socials a i {
        font-size: 3.1rem;
        transition: color .4s ease;

    }

    .socials a:hover i {
        color: aqua;
    }

    .footer-bottom {
        background: #000;
        width: 100vw;
        padding: 20px 0;
        text-align: center;
    }

    .footer-bottom p {
        font-size: 14px;
        word-spacing: 2px;
        text-transform: capitalize;
    }

    .footer-bottom span {
        text-transform: uppercase;
        opacity: .4;
        font-weight: 200;
    }
</style>
<body style="width:100% !important">
{{-- <div class="container"> --}}
<div style="position: relative;">
    <ul class="nav-" style="position: relative;  display: flex;">
        <li class="active"><a class="navi" href="/home"
                style="    display: block;
            padding: 0 100px;
            color: white;
            text-decoration: none;">HOME</a>
        </li>
        <li><a class="navi" href="/unstitched"
                style="display: block;
            padding: 0 160px;
            color: white;
            text-decoration: none;">UNSTITCHED</a>
        </li>
        <li><a class="navi" href="/newarrival"
                style="display: block;
            padding: 0 160px;
            color: white ;
            text-decoration: none;">NEW
                ARRIVALS</a> </li>
        <li><a class="navi" href="/contact"
                style="display: block;
            padding: 0 150px;
            color: white;
            text-decoration: none;">CONTACT
                US</a> </li>
        @if (auth()->check())
            {{-- <li><span><a href="{{ route('home') }}">My Account</a></span></li> --}}
            <li>
                <span>
                    <a class="navi" style="display: block;
                    padding: 0 170px;
                    color: white;
                    text-decoration: none;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @else
            <li>
                <span>
                    <a class="navi" style="display: block;
                    padding: 0 100px;
                    color: white;
                    text-decoration: none;" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </span>
            </li>
        @endif


    </ul>

</div>

@yield('content')
<footer>
    <div class="footer-content">
        <h3> Clothing Store </h3>
        <p>We provide you with the best of clothes you can wear!</p>

    </div>
    <div class="social-links">
        <ul class="socials">
            <li> <a href="https://www.facebook.com/ab14here"><i class="fab fa-facebook-f"></i></a> </li>
            &nbsp; &nbsp; &nbsp;
            <li> <a href="https://twitter.com/ab1here?t=Hj4Q8Wx5uOrEipOdOLdOtQ&s=09"><i class="fab fa-twitter"></i></a>
            </li>
            &nbsp; &nbsp; &nbsp;
            <li> <a href="https://www.instagram.com/a.for.abdull/"><i class="fab fa-instagram"></i></a> </li>
            &nbsp; &nbsp; &nbsp;
            <li> <a href="https://www.linkedin.com/in/abdul-rehman-098628201/"><i class="fab fa-linkedin-in"></i></a>
            </li>
            &nbsp; &nbsp; &nbsp;
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2022 Clothing Store designed by <span>FA19-BCS students</span></p>
    </div>
</footer>


{{-- </div> --}}
</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>