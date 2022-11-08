<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/iofrm-theme6.css">
</head>
@include('sweetalert::alert')
<body>
<div class="form-body">
    <div class="website-logo">
    </div>
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <form method="POST" action="{{ route('store.description') }}"
                          enctype="multipart/form-data">>
                        @csrf
                        <input class="form-control" type="file" name="image" placeholder="your image" required>
                        <br>
                        <input class="form-control" type="text" name="role" placeholder="role" required>

                        <textarea id="description" name="description" rows="4" cols="50"
                                  placeholder="say anythings about ali">

                        </textarea>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Register</button>
                        </div>
                    </form>
                    <div class="other-links">
                        <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a
                            href="#">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
