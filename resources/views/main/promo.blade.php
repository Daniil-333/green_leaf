<section class="promo section">
    <div class="promo__container">
        <div class="promo__content">
            <h1 class="promo__title title">Приоритеты</h1>

            <div class="promo__pictures _all _lazy">

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
                        <source srcset="{{ $loader_main }}" media="(max-width: {{ $bear['size'] }}px)" data-srcset="{{ asset("/img/bears/$dir/hero-{$bear['postfix_name']}-bear$i.png") }}">
                        @endforeach
                        <img src="{{ $loader_main }}" data-src="{{ asset("/img/bears/desktop/hero-bear$i.png") }}" alt="" class="promo__img promo__img_{{ $i }} b-lazy">
                    </picture>

                @endfor
            </div>

            <div class="promo__filter">
                <div data-drop-box class="ui-toggle">
                    <div class="ui-toggle__wrap">
                        <div class="ui-toggle__main">
                            <div data-drop-btn class="ui-toggle__btn">
                                <span>Приоритеты</span>
                                <img src="{{ asset('/img/icon/arrow.svg') }}" alt="" class="ui-toggle__icon">
                            </div>
                            <div class="ui-toggle__list">
                                @foreach($filterPriority as $priority)
                                    <label data-drop-item class="ui-checkbox">
                                        <input type="checkbox" name="prioritets[]" value="{{ ($loop->first ? 'all' : $loop->index) }}" class="js-inputDrop" @if($loop->first) checked @endif>
                                        <span class="ui-checkbox__label">{{ $priority }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="ui-toggle__chain">
                            @foreach($filterPriority as $priority)
                                <label class="ui-checkbox ui-checkbox_chain" {{ (!$loop->first ? 'hidden' : '') }}>
                                    <input type="checkbox" value="{{ ($loop->first ? 'all' : $loop->index) }}" class="js-inputChain" @if($loop->first) checked @endif>
                                    <span class="ui-checkbox__label">{{ $priority }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
