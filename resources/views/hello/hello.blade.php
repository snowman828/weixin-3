<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <title>基本结构</title>
        <script type="text/javascript" src="{{BOOTSTRAP}}js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{BOOTSTRAP}}css/bootstrap.min.css" />
    </head>
    <body>
        <h1>Hello Laravel</h1>
        <h1>{{WEBSITE_DOMAIN}}</h1>
        @youhua($testStr)
        <div>Hello, {{ $testStr }}. @datetime($testStr)</div>
        <a href="http://www.baidu.com">百度</a>
    </body>
</html>