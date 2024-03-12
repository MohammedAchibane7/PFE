<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<style>
    body {
    background-image: url('/images/banner4.jpg'); /* Assuming 'background.jpg' is in your 'public/images' directory */
    /* background-size: cover; */
    /* Add any other background properties as needed */
}
</style>
<body>
    <x-master>
<section class="section-0 lazy d-flex bg-image-style dark align-items-center "   class="" data-bg="/images/banner-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1>welcome dear recruteur!</h1>
                <div class="banner-btn mt-5"><a href="#" class="btn btn-primary mb-4 mb-sm-0">Explore Now</a></div>
            </div>
        </div>
    </div>
</section>
</x-master>
</body>
</html>
