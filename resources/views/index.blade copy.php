@extends('layouts.app')

@section('title', 'Sinalizar')

@section('content')

    <!-- FUNDO COM CONTEÚDO CENTRAL -->
    <section class="hero d-flex align-items-center justify-content-center text-center text-dark">
        <div class="fundo-translucido p-4 rounded-4 shadow-lg">
            <h2 class="fw-bold mb-3">Produtos e serviços de sinalização viária:</h2>
            <h5 class="cinza mb-4">horizontal | vertical | semafórica e obras</h5>
            <p class="mt-2">
                A Sinalizar Sinalização Viária foi criada com intuito de levar produtos e serviços de sinalização viária horizontal, vertical, semafórica e de obras, com qualidade e presteza.
                Para que sejam alcançados estes objetivos, empreenderemos um sistema de atendimento personalizado, levando em consideração a situação, necessidades e projetos a serem trabalhados.
            </p>
            <a href="#SobreN" class="btn btn-warning px-4 mt-2">Saiba mais</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <section class="sobre-nos d-flex align-items-center py-5" id="SobreN" style="min-height: 100vh;">
        <div class="container">

            <!-- TÍTULO CENTRAL -->
            <div class="text-start mb-5">
                <h2 class="fw-bold border-bottom border-warning d-inline-block pb-2 px-3">Sobre nós</h2>
            </div>

            <!-- GRID COM 2 COLUNAS -->
            <div class="row g-5 align-items-stretch">

                <!-- MISSÃO -->
                <div class="col-md-6 h-100 d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                    <div class="icone-box mb-3 mb-md-0 me-md-4">
                        <i class="bi bi-gem text-warning"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Missão</h5>
                        <p>“Nossa missão está em aperfeiçoar técnicas, através da alta qualidade dos seus produtos, sinalizando para proteger vidas, facilitando as relações pessoais e empresariais mediante a oferta de serviços e produtos de segurança, com qualidade, ética e responsabilidade”.</p>
                    </div>
                </div>

                <!-- VISÃO -->
                <div class="col-md-6 h-100 d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                    <div class="icone-box mb-3 mb-md-0 me-md-4">
                        <i class="bi bi-send-fill text-warning"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Visão</h5>
                        <p>“A Sinalizar quer ser reconhecida pelo mercado, onde atua como uma empresa comprometida com a ética empresarial, com a qualidade dos produtos e serviços prestados e com o sucesso de clientes e demais parceiros”.</p>
                    </div>
                </div>

                <!-- ESPECIFICAÇÕES TÉCNICAS -->
                <div class="col-md-6 h-100 d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                    <div class="icone-box mb-3 mb-md-0 me-md-4">
                        <i class="bi bi-rocket-fill text-warning"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Especificações Técnicas</h5>
                        <p>Trabalhos dentro das normas especificadas pela ABNT, DER/MG, DNIT, BHTRANS e Concessionárias de Rodovias.</p>
                    </div>
                </div>

                <!-- SUSTENTABILIDADE -->
                <div class="col-md-6 h-100 d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                    <div class="icone-box mb-3 mb-md-0 me-md-4">
                        <i class="bi bi-tree-fill text-warning"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Sustentabilidade</h5>
                        <p>Procuramos sempre nos atualizar para tecnologias que não agridem o meio ambiente.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="videos py-5 d-flex align-items-center" style="min-height: 80vh;" id="Videos">
        <div class="container">

            <!-- TÍTULO -->
            <div class="text-start mb-5">
                <h2 class="fw-bold border-bottom border-warning d-inline-block pb-2 px-3">Vídeos</h2>
            </div>

            <!-- CARROSSEL: MOBILE (1 vídeo por slide) -->
            <div id="carouselVideosMobile" class="carousel slide mb-4 d-none" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <!-- Slides individuais -->
                    <div class="carousel-item active">
                        <div class="video-bloco mx-auto">
                            <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe></div>
                            <p class="mt-2 small">Acompanhe nossas novidades através das nossas midias digitais</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="video-bloco mx-auto">
                            <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe></div>
                            <p class="mt-2 small">Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="video-bloco mx-auto">
                            <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe></div>
                            <p class="mt-2 small">Curta comente e compartilhe nossos conteudos nas midias sociais.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="video-bloco mx-auto">
                            <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_4" allowfullscreen></iframe></div>
                            <p class="mt-2 small">Acompanhe nossas novidades através das nossas midias digitais</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="video-bloco mx-auto">
                            <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_5" allowfullscreen></iframe></div>
                            <p class="mt-2 small">Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="video-bloco mx-auto">
                            <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_6" allowfullscreen></iframe></div>
                            <p class="mt-2 small">Curta comente e compartilhe nossos conteudos nas midias sociais.</p>
                        </div>
                    </div>
                </div>

                <!-- CONTROLES -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosMobile" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosMobile" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <!-- CARROSSEL: TABLET (2 vídeos por slide) -->
            <div id="carouselVideosTablet" class="carousel slide mb-4 d-none" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Acompanhe nossas novidades através das nossas midias digitais</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Curta comente e compartilhe nossos conteudos nas midias sociais.</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_4" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Acompanhe nossas novidades através das nossas midias digitais</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_5" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_6" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Curta comente e compartilhe nossos conteudos nas midias sociais.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTROLES -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosTablet" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosTablet" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

            <!-- CARROSSEL: DESKTOP (3 vídeos por slide) -->
            <div id="carouselVideosDesktop" class="carousel slide mb-4 d-none" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Acompanhe nossas novidades através das nossas midias digitais</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Curta comente e compartilhe nossos conteudos nas midias sociais.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_4" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Acompanhe nossas novidades através das nossas midias digitais</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_5" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Profissionalismo, prazo e profissionais de qualidade você só encontra na Sinalizar.</p>
                            </div>
                            <div class="video-bloco">
                                <div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/VIDEO_ID_6" allowfullscreen></iframe></div>
                                <p class="mt-2 small">Curta comente e compartilhe nossos conteudos nas midias sociais.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTROLES -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideosDesktop" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselVideosDesktop" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

        </div>
    </section>


    <section class="contato py-5 d-flex align-items-center" style="min-height: 100vh;" id="Contato">
        <div class="container">

            <div class="text-start mb-5">
                <h2 class="fw-bold border-bottom border-warning d-inline-block pb-2 px-3">Contato</h2>
            </div>


            <div class="row flex-column flex-md-row bg-white shadow rounded p-5 border-top border-4">
                <!-- LADO ESQUERDO -->
                <div class="col-md-5 lado-esquerdo">
                    <div class="mb-5">
                        <strong>Telefone</strong>
                        <p class="mb-0">(31) 99667-8200</p>
                    </div>

                    <div class="mb-5">
                        <strong>Endereço de Email</strong>
                        <p class="mb-0">sinalizar.sinalizacao@hotmail.com</p>
                    </div>

                    <div>
                        <strong>Localização</strong>
                        <p class="mb-0">
                            Rua Coriolano Baroni de Castro, 45 – Bairro Maria Helena BH.MG<br>
                            Belo Horizonte – MG
                        </p>
                    </div>
                </div>

                <!-- LADO DIREITO: FORMULÁRIO -->
                <div class="col-md-7 ps-md-5">
                    <h5 class="mb-4">Solicite um atendimento</h5>
                    <p class="mb-5">Preencha o formulário abaixo e nossa equipe retornará o mais breve possível para ajudar com sua solicitação.</p>

                    <form action="https://formsubmit.co/eduardaneves.pfs@gmail.com" method="POST" id="formContato">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="nome" class="form-control rounded-pill" placeholder="Seu nome" required>
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control rounded-pill" placeholder="Seu email" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input type="tel" name="telefone" id="telefone" class="form-control rounded-pill" placeholder="Seu Telefone">

                            </div>
                            <div class="col">
                                <input type="text" name="assunto" class="form-control rounded-pill" placeholder="Assunto">
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea name="mensagem" class="form-control rounded-4" rows="5" placeholder="Mensagem" required></textarea>
                        </div>

                        <!-- Campos ocultos obrigatórios -->
                        <input type="hidden" name="_subject" value="Nova mensagem do site!">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_template" value="table">

                        <button type="submit" class="btn btn-warning rounded-pill px-4 fw-bold text-white">Enviar mensagem</button>
                    </form>

                </div>
            </div>
        </div>
    </section>


</body>

@endsection