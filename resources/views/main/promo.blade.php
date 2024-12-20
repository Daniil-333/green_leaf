<section class="promo section">

    <div class="promo__container">
        <div class="promo__content">
            <h1 class="promo__title title">Приоритеты</h1>

            <div class="promo__pictures">

                @for($i = 16; $i > 0; $i--)

                    <picture>
                        @foreach([
                            'mobile' => [
                                'size' => 767.98,
                                'postfix_name' => 'mobile',
                            ],
                             'small_tablet' => [
                                'size' => 1023.98,
                                'postfix_name' => 'tablet-small',
                            ],
                            'tablet' => [
                                'size' => 1209.98,
                                'postfix_name' => 'tablet',
                            ],
                        ] as $dir => $bear)
                        <source media="(max-width: {{ $bear['size'] }}px)" srcset="{{ asset("/storage/img/bears/$dir/hero-{$bear['postfix_name']}-bear$i.png") }}">
                        @endforeach
                        <img src="{{ asset("/storage/img/bears/desktop/hero-bear$i.png") }}" alt="" class="promo__img promo__img_{{ $i }}">
                    </picture>

                @endfor
            </div>

            <div class="promo__filter">
                <div class="ui-toggle">
                    <div class="ui-toggle__btn">
                        <span>Приоритеты</span>
                        <img src="{{ asset('/storage/img/icon/arrow.svg') }}" alt="" class="ui-toggle__icon">
                    </div>
                    <div class="ui-toggle__list">
                        @foreach([
                            'Все направления',
                            'Забота о каждом нуждающемся',
                            'Развитие регионов и транспортной инфраструктуры страны',
                            'Культура, история, традиции',
                            'Образование и передовая наука',
                            'Развитие села',
                            'Крепкая семья',
                            'Экология для жизни',
                            'Разитие туризма',
                            'Развитие новых регионов',
                            'Государство для человека',
                            'Внешняя и оборонная политика',
                            'Здоровье человека',
                            'Экономика развития',
                            'Гражданская солидарность и молодежная политика',
                            'Хорошая работа — достаток в доме',
                            'Удобная и комфортная жизнь',
                        ] as $prioritetBtn)
                            <div class="ui-toggle__item">
                                <span>{{ $prioritetBtn }}</span>
                                <img src="{{ asset('/storage/img/icon/x.svg') }}" alt="" class="ui-toggle__icon">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
