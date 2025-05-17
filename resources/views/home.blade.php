<!DOCTYPE html>
<html>
<head>
    <title>GST Query Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f3fef5;
            font-family: Arial, sans-serif;
        }
        .hero {
            background: #2ecc71;
            color: white;
            padding: 80px 20px;
            text-align: center;
            border-bottom: 5px solid #27ae60;
        }
        .hero h1 {
            font-size: 2.5rem;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .testimonials {
            background: #e9fbee;
            padding: 60px 0;
        }
        .testimonial-card {
            background: white;
            border: 1px solid #d2f3d9;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            height: 100%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1>Welcome to the GST Query Portal</h1>
        <p>Have questions about GST? We're here to help. Submit your query and get professional guidance quickly.</p>
        <a href="{{ route('gst.form') }}" class="btn btn-light mt-3">Submit a Query</a>
    </div>

    <div class="testimonials text-center">
        <div class="container">
            <h2 class="mb-5">What Our Users Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>“Very helpful team! Got my GST issue resolved in a day.”</p>
                                    <strong>- Rahul Mehta</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>“Quick response and simple form. Love the service!”</p>
                                    <strong>- Sandeep Reddy</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>“The portal is user-friendly and easy to use.”</p>
                                    <strong>- Anjali Sharma</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>“Got clarification on my GST return within hours. Impressed!”</p>
                                    <strong>- Mohit Verma</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>“Great customer service and very responsive.”</p>
                                    <strong>- Priya Desai</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card">
                                    <p>“Superb platform for all GST-related questions.”</p>
                                    <strong>- Fahad Khan</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
