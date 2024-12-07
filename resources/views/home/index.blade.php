<!DOCTYPE html>
<html lang="en">
<head>
	@include('home.css')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    
@include('home.header')
    <!--  About Section  -->
    @include('home.about')

    <!--  gallary Section  -->

    @include('home.gallery')

    <!-- book a table Section  -->
    
    @include('home.book')
    <!-- BLOG Section  -->
    
    @include('home.blog')

    <!-- REVIEWS Section  -->
   

    <!-- CONTACT Section  -->
    
    @include('home.footer')

</body>
</html>
