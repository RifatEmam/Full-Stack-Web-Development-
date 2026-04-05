<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="display-5 text-primary"> 'Welcome to My First Laravel Project  Demo 🚀'
            'My name is Mohammad Rifat Emam'
           'I am the student of Chandpur Science and Technology University'  
            'Department of computer Science and Engineering' 
        </h1>
        <p class="lead text-muted mt-3">This page is powered by Controller , Blade & Me.</p>
        <a href="{{ route('home') }}" class="btn btn-success mt-3">Go Home</a>
    </div>
</body>
</html>