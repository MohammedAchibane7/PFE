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
    background-image: url('/images/banner5.jpg'); /* Assuming 'background.jpg' is in your 'public/images' directory */
    background-size: cover;
    /* Add any other background properties as needed */
}
</style>
<body>
    <x-master>
<section class="section-0 lazy d-flex bg-image-style dark align-items-center"   class="" data-bg="C:\xampp\htdocs\PFEfolder\PFE-folder\PFEfolder\storage\app\public\index\banner5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1>Find your dream job</h1>
                <p>Thounsands of jobs available.</p>
                <p>please chose your status and register</p>
                <div class="banner-btn mt-5">
                    <a href="{{ route('registration.create', ['view' => 'candidat']) }}" class="btn btn-primary mb-4 mb-sm-0">Candidat</a>
                </div>
                <div class="banner-btn mt-5">
                    <a href="{{ route('registration.create', ['view' => 'recruteur']) }}" class="btn btn-primary mb-4 mb-sm-0">Recruteur</a>
                </div>
                
            </div>
        </div>
    </div>
</section>
</x-master>
</body>
</html>




