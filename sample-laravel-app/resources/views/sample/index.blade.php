<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/scripts.js')}}"></script>
    <title>VVC Training - Laravel</title>
</head>
<body>
    <div>
        <h3>1. Get data from SampleController: sample_get</h3>
        <p>
            <button id="getButton">Get Data</button>
        </p>        
    </div>
    <div>
        <h3>2. Post data to SampleController: sample_post_1</h3>
        <p>
            <button id="postButton1">Post Data 1</button>
        </p>        
    </div>
    <div>
        <h3>3. Post data to SampleController: sample_post_2</h3>
        <p>
            <button id="postButton2">Post Data 2</button>
        </p>        
    </div>
    <div>
        <h3>4. Department List.  A page with database connection and linked to SampleController: departments</h3>
        <p>
            <a href="/departments">Department List</a>
        </p>        
    </div>
    <div>
        <h3>5. Call departments_api by using a POSTMAN</h3>
        <p>How to call it? It is for you to find out ;)</p>
    </div>
</body>
</html>