@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
{{-- ---------------------------start  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" />
    <style>
        .slider {
            width: 100%;
            height: 500px; /* Size commonly used for website sliders */
            overflow: hidden;
            position: relative;
        }
        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* background-color:red; */
        }
    </style>
</head>
<body>
    <div class="slider">
        @foreach($products as $image)
        <div class="image {{ $image['id']==1?'active':'' }}">
          <img src="{{ $image['gallery'] }}" alt="mobhile">
          <img src="https://www.shutterstock.com/image-photo/bottomup-view-green-mangrove-forest-260nw-2505695203.jpg" alt="">
          <h1>show images</h1>
          <p>show images for galery</p>
        </div>
         @endforeach
    </div>
    <script>
        // Add JavaScript for slider transitions (optional)
    </script>
</body>
</html>

{{-- --------------------------------end --}}



</div>
@endsection
