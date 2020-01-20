<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <header class="text-center">
            <h1>RELAZIONI TRA TABELLE (1 A MOLTI)</h1>
        </header>
        
        <div class="row">

            <div class="col-6 ">
                <h2>Employee: {{ $emps -> count() }}</h2>
                <div class="emps">
                    @yield('employee')
                </div>
            </div>
            
            <div class="col-6 ">
                <h2>Tasks: {{ $tasks -> count() }}</h2>
                <div class="tasks">
                    @yield('task')
                </div>
            </div>

        </div>
    </div>
</body>
</html>