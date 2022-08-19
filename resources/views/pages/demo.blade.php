<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html {
            height: 100%;
        }
        body {
            display: flex;
            height: 100%;
            background-color: #333;
        }
        .word {
            margin: auto;
            color: white;
            font: 700 normal 2.5em 'tahoma';
            text-shadow: 5px 2px #222324, 2px 4px #222324, 3px 5px #222324;
        }
    </style>

</head>
<body>
<h2 style="color: white">Hello</h2> <div class="word"></div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script>
    var words = ['Hi i like HTML', 'I also like css', 'Lorem ipsum dolor sit amet', ' consectetur adipiscing elit', 'sed do eiusmod tempor incididunt'],
        part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 15,
        speed = 70;
    var wordflick = function () {
        setInterval(function () {
            if (forwards) {
                if (offset >= words[i].length) {
                    ++skip_count;
                    if (skip_count == skip_delay) {
                        forwards = false;
                        skip_count = 0;
                    }
                }
            }
            else {
                if (offset == 0) {
                    forwards = true;
                    i++;
                    offset = 0;
                    if (i >= len) {
                        i = 0;
                    }
                }
            }
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
                if (forwards) {
                    offset++;
                }
                else {
                    offset--;
                }
            }
            $('.word').text(part);
        },speed);
    };

    $(document).ready(function () {
        wordflick();
    });
</script>
</body>
</html>
