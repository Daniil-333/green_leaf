<section class="achievements section">
    <div class="achievements__container">
        <div class="achievements__content section__content">
            <div class="achievements__head">
                <h2 class="achievements__title heading">Достижения</h2>
                <p class="achievements__count">Всего {{ (isset($achievements) && is_array($achievements) && count($achievements) > 0 ? count($achievements) : 0) }}</p>
            </div>
            <div class="achievements__items">
                @foreach($achievements as $keyHow => $achievement)
                    <div class="achievements__item achievementsItem">
                        <div class="achievementsItem__wrap">
                            <div class="achievementsItem__top">
                                <div class="achievementsItem__picture">
                                    @if(isset($achievement['img']))
                                        <picture>
                                            <source type="image/webp" srcset="{{ asset("storage/img/achievements/{$achievement['img']}.webp") }}">
                                            <img data-src="{{ asset("storage/img/achievements/{$achievement['img']}.png") }}" alt="{{ "{$achievement['title']}" }}" class="b-lazy">
                                        </picture>
                                    @endif
                                </div>
                            </div>
                            <div class="achievementsItem__main">
                                <p class="achievementsItem__heading">{{ "{$achievement['title']}" }}</p>
                                <p class="achievementsItem__txt">{{ $achievement['desc'] }}</p>
                            </div>
                            <div class="achievementsItem__footer">
                                <button type="button" class="achievementsItem__btn">{{ $achievement['btn'] }}</button>
                                <div class="like {{ ($loop->first ? '_active' : '') }} {{ (!isset($achievement['likes']) ? '_zero' : '') }}" data-like="{{ ($achievement['likes'] ?? 0) }}">
                                    <div class="like__wrap">
                                        <div class="like__icon">
                                            <x-like></x-like>
                                        </div>
                                        @if(isset($achievement['likes']))
                                        <p class="like__count js-like-count">{{ $achievement['likes'] }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="achievements__footer">
                <button type="button" class="achievements__btn btn">Показать ещё</button>
            </div>
        </div>
    </div>
</section>