$(document).ready(function () {
    var duration = 3000;
    var delay = 1000;
    var opaque = {opacity: 1};
    var transparent = {opacity: 0};

    var iterator = (function () {
        var backgrounds = $.map($(".full-background div").toArray(), function (item) {
            return $(item);
        });
        var length = backgrounds.length;
        var index = 0;

        return {
            next: function () {
                if (index == length)
                    index = 0;
                return backgrounds[index++];
            },
            index: index
        };
    })();

    var traverse = function () {
        var fire = false;

        iterator.next()
            .animate(opaque, duration)
            .delay(delay)
            .animate(
                transparent,
                {
                    duration: duration,
                    progress: function (p, n, r) {
                        if (!fire && n > 0.5) {
                            fire = true;
                            traverse();
                        }
                    }
                }
            );
    };

    traverse();
});