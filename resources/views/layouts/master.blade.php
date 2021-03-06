<!DOCTYPE html>
<html lang="en">
<head>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<div id="app">
@include('layouts.header')
@yield('content')
</div>
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    function insertPost(elem){
        var formElement = elem.closest('form')
        var title = $('input[name=title]').val()
        var body = $('textarea[name=body]').val()

        let data = {
            "title" : title,
            "body" : body
        }


        // let item = {}
        // item ["title"] = title;
        // item ["email"] = body;
        // let data = []
        // data.push(item);
        // console.log((data))
        $.ajax({
            url: "/api/posts",
            method: "POST",
            data : data,
            datatype : "json",
            success : function(result) {

                window.location = "/"
            },
            complete: function (result) {

            }

        });

    }
    function DataStreamer(){
        let allPoints = '';
        $.ajax({
            url: "/api/posts",
            method: "GET",

            success : function(result) {

               for (var i = 0;i< result.posts.length;i++) {
                   $('#all-posts').append('<article class="post-preview"><h3 class="post-title">'+result.posts[i].title+'</h3><h4 class="post-subtitle">'+result.posts[i].body+'</h4></article>')
               }
            },
            complete: function (result) {

            }
        });
    }

    jQuery(document).ready(function(){
        DataStreamer();

    });

</script>
<script src="{{ asset('js/app.js') }}" defer></script>




</body>
</html>