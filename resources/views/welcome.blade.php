<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Socialife</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
    </head>
    <body >
        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row g-0 wlc-row">
                    <div class="col-lg-7 px-5 py-5">
                        <!-- <h1>Socialife helps you connect with the people in your life.</h1> -->
                        <form>
                            <div class="form-row">
                            <div class="col-lg-7 pt-5">
                                <a href="{{route('login')}}"><button  type="button" class="btnLogin mt-3 mb-4">Login</button></a> 
                            </div>
                            </div>
                            <hr>
                            <p>Don't have an account?  <a href="{{route('register')}}">Register Here </a></p>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    </body>
</html>
