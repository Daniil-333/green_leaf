export class Prioritets {

    constructor(params = {}) {
        this.selector = params.container ?? '[data-drop-box]';
        this.selectorBtn = params.selectorBtn ?? '[data-drop-btn]';
        this.checboxDropSelector = params.checboxDropSelector ?? '.js-inputDrop';
        this.checboxChainSelector = params.checboxDropSelector ?? '.js-inputChain';

        this.$container = $(this.selector);
        this.$btn = this.$container.find(this.selectorBtn);
        this.$checkboxesDrop = this.$container.find(this.checboxDropSelector);
        this.$checkboxDropAll = this.$container.find(`${this.checboxDropSelector}[value="all"]`);
        this.$checkboxesChain = this.$container.find(this.checboxChainSelector);
        this.$checkboxChainAll = this.$container.find(`${this.checboxChainSelector}[value="all"]`);

        this.#init()
    }

    #init() {
        this.$btn.on('click', this.toggleList.bind(this));
        this.$checkboxesDrop.on('change', this.handleCheckboxes.bind(this));
        this.$checkboxesChain.on('change', this.triggerCheckboxDrop.bind(this));
    }

    toggleList() {
        this.$container.toggleClass('_open');
    }

    handleCheckboxes(e, options) {
        const obj = this;
        const $target = $(e.target);
        const position = $target.val();
        const isChecked = $target.is(':checked');
        const isAll = position == 'all';
        const checkedCheckboxes = [...this.$checkboxesDrop].filter(checkbox => checkbox.checked);

        // если выбран "Все"
        if(isAll && isChecked) {
            this.$checkboxesDrop.not($target).each(function () {
                $(this).prop('checked', false)
                $('.promo__img').removeClass('_active');
                obj.$checkboxesChain.each(function () {
                    $(this).parent().attr('hidden', 1)
                });
            })
            // console.log('выбран "Все"')
        }
        // если не выбран ни один
        else if(!checkedCheckboxes.length) {
            this.$checkboxDropAll.prop('checked', true)
            this.$checkboxChainAll.prop('checked', true)
            // console.log('не выбран ни один')
        }
        // если выбран любой кроме "Все"
        else if(!isAll && isChecked) {
            this.$checkboxDropAll.prop('checked', false);
            this.$checkboxChainAll.prop('checked', false);
            this.$checkboxChainAll.parent().attr('hidden', 1)
            // console.log('выбран любой кроме "Все"')
        }
        // если снят любой Чекебокс
        else {
            // console.log('снят любой Чекебокс')
        }

        $('.promo__pictures').toggleClass('_all', this.$checkboxDropAll.prop('checked'));

        this.highlightPicture(position);
        this.handleChain(position, isChecked, isAll)
    }

    highlightPicture(position) {
        $(`.promo__img_${position}`).toggleClass('_active');
    }

    triggerCheckboxDrop(e) {
        const $target = $(e.target);

        if($target.val() == 'all') {
            $target.prop('checked', true);
            return false;
        }

        $(`${this.checboxDropSelector}[value="${$target.val()}"]`).trigger('click');
    }

    handleChain(position, isChecked, isAll) {
        const inputChain = $(`${this.checboxChainSelector}[value="${position}"]`);

        if(isAll && !isChecked) {
            return false
        }
        else if(isAll && isChecked) {
            this.$checkboxesChain.not(inputChain).each(function () {
                $(this).prop('checked', false)
            })
        }

        inputChain.prop('checked', isChecked);
        inputChain.parent().attr('hidden', !isChecked)
    }
}