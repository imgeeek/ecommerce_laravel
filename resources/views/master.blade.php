<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>E-commerce Project</title>
</head>
<body>
    {{-- This page is the main layout of the website --}}

    {{--  --}}
    {{-- including the header file  --}}
    {{View::make('header')}}
@yield('content') {{--Including the contents from all other blade templates --}}
{{View::make('footer')}} {{-- Includes the footer file --}}
</body>

<style>
    /* .custom-style{
     position: absolute;
      bottom:0em;
      width:100%;
    } */
    .carousel_image{
        height:70vh;
        width:100%;
    }
    .sandesh{
        background:transparent(black);
    }
    .trending-wrapper{display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    flex-direction: row;
}
.trending h1{
    text-align:center;
}
    .trending{
        display: flex;
        justify-content: center;
        align-items:center;
        flex-direction: column;
    }
    .item-phone{
        height:30em;
        width:20em;
        padding:2em;
        border-radius: 12px;
    }
    .trending a{
        text-decoration: none;
        color:red;
    }
</style>
</html>