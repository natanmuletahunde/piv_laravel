<!DOCTYPE html>
<html>
   

<head>
@include('home.css');
</head>

<body>
  <div class="hero_area">
       @include('home.header')
       @include('home.slider')
  </div>
  <!-- end hero area -->
  <!-- shop section -->
   @include('home.product')
       
  <!-- end shop section -->
  <!-- contact section -->

  
   @include('home.contact')
  <!-- end contact section -->
   @include('home.footer')
</body>

</html>