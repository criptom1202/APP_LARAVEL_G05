<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleshhet" href = "{{ asset('css/app.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
    <title>MI APP</title>
</head>
<body class="bg-gray-100">
    
    <main>
        <div class="flex flex-row">
            <aside class="bg-blue-900 pt-20 w-3/12"><x-menu class="bg-blue-900 text-white text-sm"/></aside>
            <div class="w-10/12">
                <div class="div-container font bold border-b-2 border-gray-300 py-5">User</div>
                   
                    {{ $principal }}
               
               
                <div class="py-5">
                    <p class="text-center text-sm">Todos los derechos reservados &copy; 2022</p>
                </div>
                

                

            </div>
        </div>
   
    </main>

</body>

</html>