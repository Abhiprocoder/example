<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <form action="{{url('/register')}}" method="post">
            @csrf
            <div class="container"> 
                <x-input type="text" name="name" label="please enter your name"/>
                <x-input type="email" name="email" label="please enter your email"/>
                <x-input type="password" name="password" label="please enter your password"/>
                    <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </body>
</html>
