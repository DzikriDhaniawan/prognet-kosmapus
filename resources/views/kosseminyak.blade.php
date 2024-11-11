<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kos Seminyak</title>
    <link rel="stylesheet" href="{{asset('css/styleseminyak.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
</head>
<body>
    
    <div class="container">
        <div class="title">Kos Seminyak</div>
        <div id="content">
            <!-- Page content will be loaded here -->
        </div>
        <div class="pagination">
            <a id="page-1" href="#" onclick="loadPage(1)">1</a>
            <a id="page-2" href="#" onclick="loadPage(2)">2</a>
            <a id="page-3" href="#" onclick="loadPage(3)">3</a>
            <a id="page-4" href="#" onclick="loadPage(4)">4</a>
        </div>
    </div>
    <script src="{{asset('Js/scriptkl.js')}}"></script>
</body>
</html>