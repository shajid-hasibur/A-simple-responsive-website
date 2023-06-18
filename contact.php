<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Shajid</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1>Our Services</h1>
  <p>Bootstrap responsive website</p>
</div>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
    </div>
    <div class="w-50 m-auto">
        <form action="user-info.php" method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label for="">Comments</label>
                <textarea name="comments" id="" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="btn-save">Submit</button>
        </form>
    </div>
</section>
<footer>
    <p class="bg-dark p-3 text-white text-center">Md.Hasibur Rahman</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>