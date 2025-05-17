<!DOCTYPE html>
<html>

<head>
    <title>GST Query Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e6f4ea;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 128, 0, 0.2);
            padding: 30px;
        }

        .form-heading {
            color: #2e7d32;
        }

        .btn-success-custom {
            background-color: #43a047;
            border-color: #388e3c;
        }

        .btn-success-custom:hover {
            background-color: #388e3c;
            border-color: #2e7d32;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="form-heading mb-4">GST Query Form</h2>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('gst.query.submit') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" required
                                value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" required
                                value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>GST Number:</label>
                            <input type="text" name="gst_number" class="form-control" required
                                value="{{ old('gst_number') }}">
                        </div>

                        <div class="form-group">
                            <label>Query Message:</label>
                            <textarea name="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success-custom">Submit Query</button>
                    </form>

                    <br>


                    <a href="{{ route('gst.query.export') }}" class="btn btn-success mt-3">Export All Queries to
                        Excel</a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
