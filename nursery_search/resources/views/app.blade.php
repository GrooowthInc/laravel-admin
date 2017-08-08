<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>

    <script>
    //   window.Laravel = {
    //     csrfToken: "{{ csrf_token() }}"
    //   };
    </script>
  </head>
  <body>
    <div id="dashboard">
      <div class="container">
        <router-view></router-view> 
      </div>
    </div>
     <script src="{{ mix('js/manifest.js')}}"></script>
    <script src="{{ mix('js/vendor.js')}}"></script>  
    <script src="{{ mix('js/app.js')}}"></script>
  </body>
</html>
