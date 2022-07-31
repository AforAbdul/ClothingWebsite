@extends('layout')
@section ('content')

<style>
    div.gallery {
        margin-left: 55px;
        float: left;
        width: 150px;
        box-sizing: border-box;
        align-items: center;
    }

    div.gallery:hover {
        opacity: 0.5;

    }

    div.gallery img {
        width: 100%;
    }

    div.desc {
        text-align: center;
        color: black;
    }
</style>
<br>
<div class='gallery'>


    <a target="_blank" href="\checkout">
        <img src="images\pic3.jpg" alt="front center" height="200">
    </a>

    <div class="desc">Embelished Gripsuit</div>
    <div class="desc">Rs 6,550</div>
</div>
<div class="gallery">
    <a target="_blank" href="\checkout">
        <img src="images\pic4.jpg" alt="front left" height="200">
    </a>
    <div class="desc">Net Shimmer Clutch </div>
    <div class="desc">Rs 916.0</div>
</div>
<div class="gallery">
    <a target="_blank" href="\checkout">
        <img src="images\pic5.jpg" alt="sky areas" height="200">
    </a>
    <div class="desc">Flared High-Jumper</div>
    <div class="desc">Rs 2,590</div>
</div>

<div class="gallery">
    <a target="_blank" href="\checkout">
        <img src="images\pic6.jpg" alt="group" height="200 px">
    </a>
    <div class="desc">Boot Cut-Pants</div>
    <div class="desc">Rs 990.0</div>
</div>

<div class="gallery">
    <a target="_blank" href="\checkout">
        <img src="images\pic7.jpg" alt="group" height="200 px">
    </a>
    <div class="desc">Knotted Top</div>
    <div class="desc">Rs 1,990</div>
</div>

<div class="gallery">
    <a target="_blank" href="\checkout">
        <img src="images\pic8.jpg" alt="libraray" height="200 px">
    </a>
    <div class="desc">Slub Lawn Shirt</div>
    <div class="desc">Rs 2,550</div>
</div>


<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>
<br><br>
<br><br>
<br><br><br><br><br><br><br><br>

<br>
@stop