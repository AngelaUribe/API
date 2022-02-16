<div id="wrap">
    @foreach ($posts as $post)
        <a href="#" class="hb">
            <div class="c">
                <img src={{ $post->img }} alt="{{ $post->title }}" />
                <div class="txt">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <?php if ($post->featured) { ?>
                        <button type="button" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="white"
                                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                            </svg>
                        </button>
                        <?php } ?>
                        <h6 class="" style="font-size: small;">{{ $post->date }}</h6>
                    </div>
                </div>
            </div>
        </a>

        <div class="fullBg">
            <img src={{ $post->img }} alt="" />
        </div>
    @endforeach

</div>
