<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <title>Laravel-gallery</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="nav nav-pills me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link" href="/">Homepage</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" href="/create">Add image</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
   @yield('content')
</body>
</html>