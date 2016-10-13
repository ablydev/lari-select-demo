<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }
            .center{
                padding-top: 100px
                text-align: center;
            }
            .row{
                max-width: 500px;
                margin: 50px auto;
            }


        </style>
        <script>
            var Laravel = {
                csrfToken: "{{ csrf_token() }}"
            };

            var resources = '[{"id":1,"name":"dolores","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":2,"name":"non","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":3,"name":"veniam","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":4,"name":"odio","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":5,"name":"possimus","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":6,"name":"delectus","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":7,"name":"corporis","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":8,"name":"saepe","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":9,"name":"minus","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":10,"name":"vel","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":11,"name":"vel","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":12,"name":"illum","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":13,"name":"provident","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":14,"name":"voluptatum","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":15,"name":"quod","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":16,"name":"consectetur","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":17,"name":"ipsum","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":18,"name":"ratione","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":19,"name":"dolore","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":20,"name":"qui","created_at":"2016-10-13 08:45:03","updated_at":"2016-10-13 08:45:03"},{"id":21,"name":"optio","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":22,"name":"sequi","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":23,"name":"atque","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":24,"name":"quidem","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":25,"name":"eaque","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":26,"name":"adipisci","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":27,"name":"suscipit","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":28,"name":"suscipit","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":29,"name":"non","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":30,"name":"repudiandae","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":31,"name":"cum","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":32,"name":"et","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":33,"name":"quo","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":34,"name":"blanditiis","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":35,"name":"qui","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":36,"name":"id","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":37,"name":"omnis","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":38,"name":"incidunt","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":39,"name":"reprehenderit","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":40,"name":"voluptas","created_at":"2016-10-13 09:02:48","updated_at":"2016-10-13 09:02:48"},{"id":41,"name":"nowy tag","created_at":"2016-10-13 09:43:26","updated_at":"2016-10-13 09:43:26"},{"id":42,"name":"nowy test","created_at":"2016-10-13 09:44:31","updated_at":"2016-10-13 09:44:31"},{"id":43,"name":"new","created_at":"2016-10-13 09:49:58","updated_at":"2016-10-13 09:49:58"},{"id":44,"name":"sddsfsdf","created_at":"2016-10-13 10:41:37","updated_at":"2016-10-13 10:41:37"}]';

        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-85695808-2', 'auto');
          ga('send', 'pageview');

        </script>        
    </head>
    <body>
        <div id="app" class="center position-ref full-height">
            <div class="row">
                <h3>Single element:</h3>
                <lari-select></lari-select>
            </div>
            <div class="row">
                <h3>Multiple elements:</h3>
                <lari-multiselect></lari-multiselect>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
