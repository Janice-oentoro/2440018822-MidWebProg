@include('header')
@extends('footer')
<?php
  use App\Models\Publisher;
  $publisher = Publisher::findOrFail($book->publisher_id);
?>

<link rel="stylesheet" type="text/css" href="{{url('css/detail.css')}}">

<div class="center1">

<div class="text1">
    Book Detail
</div> 

<div class = "text2">
<img class="img-top" src="{{Storage::url($book->image)}}" height="75%" width="50%">
<p>Title: {{$book->title}}</p>
<p>Author: {{$book->author}}</p>
<p>Publisher: {{$publisher->name}}</p>
<p>Year: {{$book->year}}</p>
<p>Synopsis:</p>
<p>{{$book->synopsis}}</p>
</div>

</div>

</body>
</html>