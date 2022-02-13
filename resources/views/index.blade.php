<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .card_img {
            width: 100%;
            overflow: hidden;
            min-height: 250px;
            position: relative;
        }

        .caption {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            color: white;
            margin-left: 1rem;
            font-weight: bold;
        }

        .content {
            font-size: medium;
            color: gray;
            text-align: justify;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-700">

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col">
            
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">

                <h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>

            <div class="col">

            </div>
        </div>
    </section>


    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                @foreach($posts as $post)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{$post->img}}" class="card-img-top card_img" alt="Album">
                        <h5 class="caption">{{ $post->title }}</h5>
                        <div class="card-body">
                            <p class="content">{{ $post->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <?php if ($post->featured) { ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="red" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                                        </svg>
                                    <?php } ?>
                                </div>
                                <small class="text-muted" style="font-size: small;">{{$post->date}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mb-10">
                {{ $posts -> links() }}
            </div>

        </div>
    </div>
</body>

</html>