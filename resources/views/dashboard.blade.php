<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/iofrm-theme11.css">
    <style>
        .img-circle {
            border-radius: 50%;
        }

        .profile-user-img {
            margin: 0 auto;
            width: 150px;
            padding: 3px;
            border: 3px solid #d2d6de;
        }

    </style>
</head>
<body>
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <form method="POST" action="{{ route('store.description') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body box-profile">
                            @if(Auth::user()->image)
                                <div class="preview profile-username text-center"><img
                                        class="profile-user-img  img-circle"
                                        src="{{asset('/uploads/UserProfile/'. Auth::user()->image)}}"
                                        id="file-ip-1-preview"
                                        alt="User profile picture"></div>
                            @else
                                <div class="preview profile-username text-center"><img
                                        class="profile-user-img  img-circle"
                                        src="/uploads/UserProfile/avatar.jpg"
                                        id="file-ip-1-preview"
                                        alt="User profile picture"></div>
                            @endif
                            <br>
                            <input type="file" name="image" class="form-control" onchange="showPreview(event);"
                                   required>

                        </div>
                        <br>
                        <input class="form-control" type="text" name="role" placeholder="Your Job Title"
                               value="{{old('role')}}" required>

                        <textarea id="description" name="description" value="{{old('description')}}" rows="4" cols="50"
                                  placeholder="say anythings about ali" required>

                        </textarea>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Send</button>
                            <button id="submit" type="submit" class="ib"><a href="{{route('main')}}">cancel</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>
@include('sweetalert::alert')

</body>
</html>
