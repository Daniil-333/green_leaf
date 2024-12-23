import './bootstrap';

import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

import {Tools} from './common/tools.js';
window.Tools = Tools;

import Blazy from 'blazy';

import {Burger} from "./class/Burger";
import {Prioritets} from "./class/Prioritets.js";

class Base {

    constructor() {
        let protoMain = Object.getPrototypeOf(this);
        let protoBase = Object.getPrototypeOf(protoMain);
        this.initStack = [];
        this.callInitByProto(protoBase);
        this.callInitByProto(protoMain);

        Tools.isWebp((support) => (support) ?
            document.documentElement.classList.add('webp') :
            document.documentElement.classList.add('no-webp'));

        new Burger();
        new Prioritets()
    }

    callInitByProto(proto) {
        let vars = Object.getOwnPropertyNames(proto);

        for(let method of vars) {
            if(method.match(/^init[\w]+/,method)) {
                this.initStack.push(method);

                this[method]();
            }
        }
    }

    initStickyHeader() {
        $(window).on('scroll', function(){

            let $header = $('header.header');
            let $headerBottom = $('.header .header__content');

            if ($(window).scrollTop() >= $header.outerHeight() - $headerBottom.outerHeight()) {
                $header.addClass('_sticky');
            }
            else {
                if(!$('body').hasClass('_locked')) {
                    $header.removeClass('_sticky');
                }
            }
        });
    }

    initLazyLoad() {
        new Blazy({
            success: function (el) {
                const $parent = $(el).parent();
                if($parent.hasClass('_lazy')) $parent.removeClass('_lazy');
            },
            // error: function (el, err) {
            //     console.log(el, 'data attribute is missing')
            // }
        });
    }

    initLikes() {
        $(document).on('click', '[data-like]', function () {
            let count = $(this).attr('data-like');
            const $count = $(this).find('.js-like-count');

            $(this).toggleClass('_active');

            const isActive = $(this).hasClass('_active');

            $(this).attr('data-like', isActive ? ++count : --count)
            $count.text(isActive ? count : count);
        })
    }
}

window.Base = Base;

window.addEventListener('load', function () {
    new Base();
})
