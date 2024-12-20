<section class="advantages">
    <div class="advantages__container">
        <div class="advantages__content">
            <h2 class="advantages__title title">Почему с нами выгодно?</h2>
            <p class="advantages__subtitle">С 1996 года мы занимаемся оптовыми поставками электронных компонентов от ведущих производителей из Европы
                и Азии для Российских потребителей.</p>
            <div class="advantages__items">
                @foreach([
                        1 => [
                            'icon' => 'letter.svg',
                            'title' => 'Качественная продукция',
                            'txt' => 'Все наши товары сертифицированы и имеют сопроводительную документацию.'
                        ],
                        2 => [
                            'icon' => 'box.svg',
                            'title' => 'Индивидуальный подход',
                            'txt' => 'Возможность изготовления компонентов специально для вас на заводах-изготовителя.'
                        ],
                        3 => [
                            'icon' => 'auto.svg',
                            'title' => 'Бесплатная доставка',
                            'txt' => 'При наличии товара на складе и заказе от 10 000 рублей, доставим бесплатно по Москве и СПБ в течение 2х часов.'
                        ],
                        4 => [
                            'icon' => 'analogs.svg',
                            'title' => 'Подбираем аналоги',
                            'txt' => 'Поможем подобрать аналоги популярных европейских брендов в условиях санкций.'
                        ],
                         5 => [
                            'icon' => 'home.svg',
                            'title' => 'Резервный запас компонентов',
                            'txt' => 'Хранение товара на наших складах для постоянных клиентов.'
                        ],
                         6 => [
                            'icon' => 'weigher.svg',
                            'title' => 'Гибкая система оплаты',
                            'txt' => 'Отсрочка платежей для постоянных клиентов.'
                        ],
                    ] as $keyHow => $itemHow)
                    <div class="advantages__item advantagesItem">
                        <div class="advantagesItem__top">
                            <span class="advantagesItem__decor"></span>
                            <div class="advantagesItem__icon">
                                <img src="{{ asset("storage/img/icon/{$itemHow['icon']}") }}" alt="">
                            </div>
                        </div>
                        <p class="advantagesItem__heading">{{ "{$itemHow['title']}" }}</p>
                        <p class="advantagesItem__txt">{{ $itemHow['txt'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>