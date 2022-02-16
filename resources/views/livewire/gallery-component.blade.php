<div class="album py-5">

    <div class="container">

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $post->img }}" class="card-img-top card_img" alt="Album" width="100%"
                            height="225">
                        <h5 class="caption truncate">{{ $post->title }}</h5>
                        <div class="card-body">
                            <p class="content">{{ $post->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <?php if ($post->featured) { ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="red"
                                        class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                                    </svg>
                                    <?php } ?>
                                </div>
                                <small class="text-muted" style="font-size: small;">{{ $post->date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
