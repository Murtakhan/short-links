<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShortLinks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <form action="/api/links" method="POST">
                    <input type="text" name="link" placeholder="Добавьте ссылку">
                    <button type="submit">Добавить</button>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Оригинал</th>
                            <th>Сокращение</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($links as $link)
                            <tr>
                                <td>{{ $link->origin_href }}</td>
                                <td><a href="{{ $link->origin_href }}">{{ $link->short_link }}</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
