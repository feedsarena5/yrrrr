<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Facebook Like and Share Buttons in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        @foreach($blogs as $blog)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{$blog->description}}</p>
                
                <div class="likeShareBtnmt-3">
                    {{-- Load Facebook SDK for JavaScript --}}
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="0UIfS9D2"></script>
                    <div 
                    
                    {{-- Like button code --}}
                    class="fb-like" 
                    data-layout="standard" 
                    data-action="like" 
                    data-size="large" 
                    data-show-faces="true" 
                    data-href="https://developers.facebook.com/docs/plugins/" 
                    data-share="true">
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>

</html>