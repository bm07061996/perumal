<!DOCTYPE html>
<html lang="en">
<head>
  <title>passfpo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<body>
    <div>
        <div class="header">
            <img src="{{ asset('/img/head.png') }}" alt="./resources/img/head.png" style="max-width:100%;width:100%">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <a class="navbar-brand" href="/services">Services</a>
                <a class="navbar-brand" href="/member/add">Add Member</a>
                <a class="navbar-brand" href="/contactus">Contact Us</a>
            </nav>
        </div>
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>
    @extends('common.footer')
</body>
</html>
