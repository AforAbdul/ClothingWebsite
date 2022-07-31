@extends('layout')
@section ('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    input[type=text],
    select,
    textarea {
        width: 15%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<br>
<br>

<body>
    <div class="form" style="text-align: center; ">

        <h1 class="main-page-title page-title h0" style="    font-family: VisbyCF-Medium;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 600;
    padding-bottom: 15px;
    border-bottom: 1px solid #7c7878;
    width: 50%;
    margin: 0 auto 20px;">
            Contact Us
        </h1>
        <br>


        <form action="" style="font-size: 20px;"  onsubmit="myFunction()">
            <label for="fname">First Name</label> &nbsp;
            <input type="text" id="fname" name="firstname" placeholder="&nbsp; &nbsp;Your first name">
            <br><br>
            <label for="lname">Last Name</label> &nbsp;
            <input type="text" id="lname" name="lastname" placeholder="&nbsp; &nbsp;Your last name">
            <br>
            <br>
            <label for="email" style=" position: relative;"> Email </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="email" id="email" placeholder=" &nbsp; Your email" style="     width: 15%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
          margin-bottom: 16px;
               resize: vertical">
            <br>
            <br>
            <label for="phone" style="position: relative; padding: 2px;">Phone No</label> &nbsp;
            <input type="number" name="phone " id="" placeholder="Your Phone Number" style="     width: 15%;
                padding: 10px;
      border: 1px solid #ccc;
         border-radius: 4px;
           box-sizing: border-box;
                margin-top: 6px;
              margin-bottom: 20px;
                resize: vertical">
            <br><br>
            <div>
                <label for="subject">Your query</label> <br>
                <textarea id="subject" name="subject" placeholder="Your Query here" style="height:100px;"></textarea>
            </div>
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>

    </div>

    <br>
</body>

<script>
function myFunction() {
  alert("Your Form was Submitted successfully! Thank you.");
}
</script>

</html>



@stop