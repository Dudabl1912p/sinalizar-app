{{-- CARROSSEL: MOBILE (1 vídeo por slide) --}}
<div id="carouselVideosMobile" class="carousel slide mb-4 d-block d-sm-none" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        <div class="carousel-item active">
            <div class="video-bloco mx-auto">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>
                <p class="mt-2 small">Título do vídeo 1</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="video-bloco mx-auto">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>
                <p class="mt-2 small">Título do vídeo 2</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="video-bloco mx-auto">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>
                <p class="mt-2 small">Título do vídeo 3</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="video-bloco mx-auto">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>
                <p class="mt-2 small">Título do vídeo 4</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="video-bloco mx-auto">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('videos/video5.mp4') }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>
                <p class="mt-2 small">Título do vídeo 5</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="video-bloco mx-auto">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('videos/video6.mp4') }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>
                <p class="mt-2 small">Título do vídeo 6</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosMobile" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosMobile" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

{{-- CARROSSEL: TABLET (2 vídeos por slide) --}}
<div id="carouselVideosTablet" class="carousel slide mb-4 d-none d-sm-block d-md-none" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        <div class="carousel-item active">
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <div class="video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-2 small">Título do vídeo 1</p>
                </div>
                <div class="video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-2 small">Título do vídeo 2</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <div class="video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-2 small">Título do vídeo 3</p>
                </div>
                <div class="video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-2 small">Título do vídeo 4</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <div class="video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video5.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-2 small">Título do vídeo 5</p>
                </div>
                <div class="video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video6.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-2 small">Título do vídeo 6</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosTablet" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosTablet" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

{{-- CARROSSEL: DESKTOP (3 vídeos por slide) --}}
<div id="carouselVideosDesktop" class="carousel slide mb-4 d-none d-md-block" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
        {{-- Slide 1 --}}
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-6 col-md-4 mb-3 video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-4 small">Título do vídeo 1</p>
                </div>
                <div class="col-10 col-sm-6 col-md-4 mb-3 video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-4 small">Título do vídeo 2</p>
                </div>
                <div class="col-10 col-sm-6 col-md-4 mb-3 video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-4 small">Título do vídeo 3</p>
                </div>
            </div>
        </div>

        {{-- Slide 2 --}}
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-6 col-md-4 mb-3 video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-4 small">Título do vídeo 4</p>
                </div>
                <div class="col-10 col-sm-6 col-md-4 mb-3 video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video5.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-4 small">Título do vídeo 5</p>
                </div>
                <div class="col-10 col-sm-6 col-md-4 mb-3 video-bloco">
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="{{ asset('videos/video6.mp4') }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <p class="mt-4 small">Título do vídeo 6</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosDesktop" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosDesktop" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>