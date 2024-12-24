<section class="video section">

    <div class="video__container">
        <div class="video__content">
            <div class="video__left">
                <h2 class="video__title">Посмотрите и&nbsp;убедитесь сами</h2>
                <button type="button" class="video__btn btn btn_thirdy">Видео</button>
                <picture>
                    <source srcset="{{ $loader_main }}" type="image/webp" data-srcset="{{ asset("/storage/img/bear2.webp") }}">
                    <img src="{{ $loader_main }}" data-src="{{ asset("/storage/img/bear2.png") }}" alt="" class="video__img b-lazy">
                </picture>
            </div>

            <div class="video__right _lazy">
                <iframe src="{{ $loader_main }}" data-src="https://vkvideo.ru/video_ext.php?oid=-8089324&id=456243664&hash=00da413740201fe8" allowfullscreen allow="encrypted-media; fullscreen; picture-in-picture" title="Linkin Park" class="b-lazy"></iframe>
            </div>

        </div>
    </div>
</section>
