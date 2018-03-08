<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel</title>
</head>
<body></body>
    <div id="app">
        <vue-component></vue-component>
    </div>
</body>
<script type="text/javascript">
    var Laravel = {
        // 设置 csrfToken
       csrfToken: '{{ csrf_token() }}' 
    };
</script>
<script src="/js/app.js"></script>
</html>
