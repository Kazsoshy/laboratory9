<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card shadow-sm" style="max-width: 500px; border-radius: 10px;">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">User Form</h5>
                    <form action="/user" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


