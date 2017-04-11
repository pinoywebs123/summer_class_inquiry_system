<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
        <title>Laravel</title>
        
        @yield('styles')
        <style type="text/css">
            #footer{
                background-color: #fff;
                bottom: 0;
                margin: auto;
                
            }
            #footer footer{
                padding-top: 3px;
                text-align: center;

            }
            
        </style>
       
    </head>
    <body>
      <div class="container">
        @yield('contents')

        
      </div>
      <div class="container" id="footer">
           <footer>
               <small>All Right Reseverd &copy; 2017 Developed by: Shu Co Wang</small>
           </footer>
        </div>
        
    </body>
    <script src="{{URL::to('js/jquery.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</html>
