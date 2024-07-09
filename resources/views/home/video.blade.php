<section class="video-home-section vh-100 position-relative d-flex justify-content-center align-items-center">
    <video class="h-100 w-100 object-fit-cover" playsinline autoplay muted loop>
        <source src="{{ asset('video/home/video.mp4?version='.config('app.version')) }}" type="video/mp4">
    </video>
    <div class="position-absolute d-flex justify-content-center align-items-center" style="top: 0; left: 0; right: 0; bottom: 0;">
        <div class="rounded-circle">
            <img width="50" src="{{ asset('img/icons/play.png?version='.config('app.version')) }}" alt="play" class="">
        </div>
    </div>
</section>
