<!DOCTYPE html>
<html>
    <head>
        <title>Hello</title>
        <style>
            .container {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
           <form method="post" action="/posts/create">
                {!! csrf_field() !!}
                <label for="name"><p>Name:</p></label>
                <input type="text" name="name">
                
                <label for="slug"><p>Slug:</p></label>
                <input type="text" name="slug">

                <label for="summary"><p>Summary:</p></label>
                <textarea name="summary"></textarea>
                
                <label for="content"><p>Content:</p></label>
                <textarea name="content"></textarea><br>
            
                <button type="submit" value="Post away me matey.">Post away me matey.</button>
            </form>
        </div>
    </body>
</html>
