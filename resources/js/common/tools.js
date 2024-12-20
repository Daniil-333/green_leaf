export const Tools = {
    isWebp: function(callback) {
        let webP = new Image();
		webP.onload = webP.onerror = function () {
			callback(webP.height == 2);
		};
		webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    },
    isIOS: function () {
        return [
                'iPad Simulator',
                'iPhone Simulator',
                'iPod Simulator',
                'iPad',
                'iPhone',
                'iPod',
                'MacIntel',
            ].includes(window.navigator.platform)
            // iPad on iOS 13 detection
            || (window.navigator.userAgent.includes("Mac"))
    },

    getSelector() {
        return {
            html: document.documentElement,
            body: document.querySelector('body'),
            wrapper: document.querySelector('.wrapper'),
        }
    },
    bodyFixPosition () {

        setTimeout( function() {

            let scrollPosition = window.pageYOffset || Tools.getSelector().html.scrollTop;

            Tools.getSelector().body.setAttribute('data-body-scroll-fix', scrollPosition);
            Tools.getSelector().body.classList.add('_locked');

            if (!Tools.isIOS())
                Tools.getSelector().body.classList.add('_fixPadding');

            Tools.getSelector().body.style.top = `-${scrollPosition}px`;
        }, 15 );
    },
    bodyUnfixPosition () {
        let scrollPosition = parseInt(this.getSelector().body.getAttribute('data-body-scroll-fix'));

        this.getSelector().body.removeAttribute('data-body-scroll-fix');

        this.getSelector().body.classList.remove('_locked', '_fixPadding');

        this.getSelector().body.removeAttribute('style');

        window.scroll(0, scrollPosition);
    },
    debounce: function (func, delay) {
        let inDebounce
        return function() {
            const context = this
            const args = arguments
            clearTimeout(inDebounce)
            inDebounce = setTimeout(() => func.apply(context, args), delay)
        }
    },
};
