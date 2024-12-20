<section class="scheme section">

    <div class="scheme__container">
        <div class="scheme__content">
            <h2 class="scheme__title title">Схема работы</h2>
            <p class="scheme__subtitle">Lorem ipsum dolor sit amet consectetur. Augue velit in enim sagittis imperdiet sit mauris. Vitae sit in fusce massa amet.</p>

            <div class="scheme__items">
                @foreach([
                    1 => [
                        'heading' => 'ВЫ ОСТАВЛЯЕТЕ ЗАЯВКУ',
                        'txt' => 'Отправить запрос вы можете любым удобным для вас способом: например, через форму на сайте. Также вы можете связаться с нами напрямую.',
                    ],
                    2 => [
                        'heading' => 'МЫ ПРОВЕРЯЕМ НАЛИЧИЕ ПОЗИЦИЙ',
                        'txt' => 'Проверяем наличие на складе, а также актуальность производства (возможна замена, если необходимо.) Если требуется замена - подбираем аналоги и привозим на заказ.',
                    ],
                    3 => [
                        'heading' => 'ФОРМИРУЕМ КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ',
                        'txt' => 'На данном этапе мы с вами согласуем ценовое предложение, обговариваем сроки поставки и условия оплаты.',
                    ],
                    6 => [
                        'heading' => 'ВЫ ПОЛУЧАЕТЕ ТОВАР',
                        'txt' => 'На данном этапе мы с вами согласуем ценовое предложение, обговариваем сроки поставки и условия оплаты.',
                    ],
                    5 => [
                        'heading' => 'МЫ ВЫПОЛНЯЕМ ЗАКАЗ',
                        'txt' => 'Товар поступает на склад в Москву или Санкт-Петербург, где мы сверяем правильность поставки и начинаем сборку.',
                    ],
                    4 => [
                        'heading' => 'ПРОВОДИМ ОПЛАТУ',
                        'txt' => 'Далее, после получения авансового платежа, мы размещаем заказ.',
                    ],
                        ] as $keyScheme => $itemScheme)
                    <div class="scheme__item schemeItem">
                        <img src="{{ asset("storage/img/scheme_bg_$keyScheme.png") }}" alt="" class="schemeItem__fon">
                        <span class="schemeItem__decor"></span>
                        <p class="schemeItem__num"><?=($keyScheme < 10 ? "0$keyScheme" : $keyScheme)?></p>
                        <div class="schemeItem__wrap">
                            <h3 class="schemeItem__heading">{{ $itemScheme['heading'] }}</h3>
                            <p class="schemeItem__txt">{{ $itemScheme['txt'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="scheme__footer">
                <button type="button" class="scheme__btn btn">Оставить заявку</button>
            </div>

        </div>
    </div>
</section>
