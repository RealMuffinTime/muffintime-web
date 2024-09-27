// copied from https://sizeof.cat/ :)

document.addEventListener("DOMContentLoaded", function (event) { favicons(); });

favicons = function () {
    this.enabledServices = [
        'facebook',
        'gmail',
        'imdb',
        'instagram',
        'pornhub',
        'tiktok',
        'twitter',
        'wikipedia'
    ];
    this.services = {
        facebook: () => {
            let count = Math.round(Math.random() * 99);
            let title = `(${count}) Facebook`;
            let favicon = `/img/favicons/facebook.ico`;
            return {
                title,
                favicon
            }
        },
        gmail: () => {
            let title = 'Inbox';
            let count = Math.round(Math.random() * 20);
            if (count > 15) {
                count = '100+';
            } else if (count > 10) {
                count = '50+';
            }
            let favicon = `/img/favicons/gmail_${count}.png`;
            title = `Inbox (${count})`;
            return {
                title,
                favicon
            }
        },
        imdb: () => {
            let title = 'Mr. Robot (Fernsehserie 2015–2019) - IMDb';
            let favicon = '/img/favicons/imdb.png';
            return {
                title,
                favicon
            }
        },
        instagram: () => {
            let count = Math.round(Math.random() * 99);
            let title = `(${count}) Instagram`;
            let favicon = `/img/favicons/instagram.png`;
            return {
                title,
                favicon
            }
        },
        pornhub: () => {
            let title = `Step-sis Shows me how to Fuck - Pornhub.com`;
            let favicon = `/img/favicons/pornhub.ico`;
            return {
                title,
                favicon
            }
        },
        tiktok: () => {
            let title = 'Explore - Find your favourite videos on TikTok';
            let favicon = '/img/favicons/tiktok.ico';
            return {
                title,
                favicon
            }
        },
        twitter: () => {
            let title = 'Twitter';
            let favicon = '/img/favicons/twitter.ico';
            return {
                title,
                favicon
            }
        },
        wikipedia: () => {
            let title = 'Wikipedia';
            let favicon = '/img/favicons/wikipedia.ico';
            return {
                title,
                favicon
            }
        }
    }
    this.init = function () {
        if (typeof document.mozHidden !== 'undefined') {
            this.hidden = 'mozHidden';
            this.visibilityChange = 'mozvisibilitychange';
        } else if (typeof document.msHidden !== 'undefined') {
            this.hidden = 'msHidden';
            this.visibilityChange = 'msvisibilitychange';
        } else if (typeof document.webkitHidden !== 'undefined') {
            this.hidden = 'webkitHidden';
            this.visibilityChange = 'webkitvisibilitychange';
        }
        document.addEventListener(this.visibilityChange, this.handler.bind(this), false);
    }
    this.default = function () {
        let title = this.title;
        let favicon = this.favicon;
        this.update({
            title,
            favicon
        });
    }
    this.update = function (data) {
        let out = '?v=' + Math.round(Math.random() * 10000000);
        let link = document.createElement('link');
        link.type = 'image/x-icon';
        link.rel = 'shortcut icon';
        link.href = data.favicon + out;
        document.getElementsByTagName('head')[0].querySelector('[rel=\'shortcut icon\']').remove();
        document.getElementsByTagName('head')[0].appendChild(link);
        document.title = data.title;
    }
    this.enable = function () {
        let i = Math.round(Math.random() * (this.enabledServices.length - 1));
        let service = this.enabledServices[i];
        if (service && this.services[service]) {
            this.update(this.services[service]());
        }
    }
    this.handler = function () {
        if (document[this.hidden]) {
            this.enable();
        } else {
            this.default();
        }
    }
    this.hidden = 'hidden';
    this.visibilityChange = 'visibilitychange';
    this.favicon = document.querySelector('[rel=\'shortcut icon\']').href;
    this.title = document.title;
    this.init();
}
