<section class="quiz section">

    <div class="quiz__container">
        <div class="quiz__content">
            <picture>
                <source type="image/webp" srcset="{{ asset("/storage/img/union.webp") }}">
                <img src="{{ asset("/storage/img/union.png") }}" alt="" class="quiz__bg b-lazy">
            </picture>

            <div class="quiz__left">
                <h2 class="quiz__title">Пров<span>Е</span><span>Р</span>ь себя</h2>
                <button type="button" class="quiz__btn btn btn_secondary">Пройти квиз</button>
            </div>

            <div class="quiz__right">
                <picture>
                    <source type="image/webp" srcset="{{ asset("/storage/img/bear.webp") }}">
                    <img data-src="{{ asset("/storage/img/bear.png") }}" alt="" class="quiz__img b-lazy">
                </picture>
            </div>

        </div>
    </div>
</section>
