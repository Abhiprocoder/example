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
        <form action="{{url('/uplode')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button class="btn btn-primary m-2">Uplode</button>
        </div>
        </form>
    </body>
</html>
