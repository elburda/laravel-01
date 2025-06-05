@auth
<x-layouts.main>
    <x-slot:title>Página Principal</x-slot:title>
    <div class="container-xl align-items-center">
        <section class="hero  py-5 text-center">
            <div class="container">
                <h1 class="display-4 mb-3">Bienvenidos a <span class="text-primary">BitGuard</span></h1>
                <p class="lead">En BitGuard somos una empresa dedicada a brindar soluciones integrales en seguridad informática y soporte técnico.Nuestro equipo está conformado por profesionales apasionados por la tecnología, comprometidos en proteger la información de nuestros clientes y garantizar el correcto funcionamiento de sus sistemas.</p>
            </div>
        </section>
        <section class="benefits py-5">
            <div class="container">
                <h2 class="mb-4 text-center">¿Por qué elegirnos?</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 card-hover text-center p-3">
                            <img src="{{ asset('img/seguridad.png') }}" alt="Seguridad" class="card-img-top mx-auto" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Máxima Seguridad</h5>
                                <p class="card-text">Sistemas protegidos con tecnologías de última generación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 card-hover text-center p-3">
                            <img src="{{ asset('img/soportePersonalizado.png') }}" alt="Seguridad" class="card-img-top mx-auto" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Máxima Seguridad</h5>
                                <p class="card-text">Sistemas protegidos con tecnologías de última generación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 card-hover text-center p-3">
                            <img src="{{ asset('img/planesAccesible.png') }}" alt="Seguridad" class="card-img-top mx-auto" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Máxima Seguridad</h5>
                                <p class="card-text">Sistemas protegidos con tecnologías de última generación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
        <section class="parallax-section d-flex align-items-center text-white text-center">
            <div class="parallax-overlay"></div>
            <div class="container position-relative">
                <h2 class="display-5 fw-bold">Estas empresas ya confiaron su seguridad a BitGuard</h2>
                <p class="lead">Unite a las organizaciones que ya se protegen con nuestras soluciones.</p>
                <a href="{{ url('/abm/planes-servicios') }}" class="btn btn-danger">Contratar ahora</a>
            </div>
        </section>

        <section class="text-center py-5 bg-liht w-100">
            <div class="d-flex justify-content-center flex-wrap gap-4 px-3">
                <div>
                    <img src="{{ asset('img/Zalei.png') }}" alt="Zalei" width="100" height="100">
                </div>
                <div>
                    <img src="{{ asset('img/LacteosCastelar.png') }}" alt="Lácteos Castelar" width="100" height="100">
                </div>
                <div>
                    <img src="{{ asset('img/MarcelaKoury.png') }}" alt="Marcela Koury" width="100" height="100">
                </div>
            </div>
        </section>


</x-layouts.main>
@endauth

@guest
<x-layouts.guest>
    <x-slot:title>Página Principal</x-slot:title>
    <div class="container-xl align-items-center">
        <section class="hero  py-5 text-center">
            <div class="container">
                <h1 class="display-4 mb-3">Bienvenidos a <span class="text-primary">BitGuard</span></h1>
                <p class="lead">En BitGuard somos una empresa dedicada a brindar soluciones integrales en seguridad informática y soporte técnico.Nuestro equipo está conformado por profesionales apasionados por la tecnología, comprometidos en proteger la información de nuestros clientes y garantizar el correcto funcionamiento de sus sistemas.</p>
            </div>
        </section>
        <section class="benefits py-5 ">
            <div class="container">
                <h2 class="mb-4 text-center">¿Por qué elegirnos?</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 card-hover text-center p-3">
                            <img src="{{ asset('img/seguridad.png') }}" alt="Seguridad" class="card-img-top mx-auto" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Máxima Seguridad</h5>
                                <p class="card-text">Sistemas protegidos con tecnologías de última generación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 card-hover text-center p-3">
                            <img src="{{ asset('img/soportePersonalizado.png') }}" alt="Seguridad" class="card-img-top mx-auto" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Máxima Seguridad</h5>
                                <p class="card-text">Sistemas protegidos con tecnologías de última generación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 card-hover text-center p-3">
                            <img src="{{ asset('img/planesAccesible.png') }}" alt="Seguridad" class="card-img-top mx-auto" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Máxima Seguridad</h5>
                                <p class="card-text">Sistemas protegidos con tecnologías de última generación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
        <section class="parallax-section d-flex align-items-center text-white text-center">
            <div class="parallax-overlay"></div>
            <div class="container position-relative">
                <h2 class="display-5 fw-bold">Estas empresas ya confiaron su seguridad a BitGuard</h2>
                <p class="lead">Unite a las organizaciones que ya se protegen con nuestras soluciones.</p>
                <a href="{{ url('/abm/planes-servicios') }}" class="btn btn-danger">Contratar ahora</a>
            </div>
        </section>

        <section class="text-center py-5 bg-liht w-100">
            <div class="d-flex justify-content-center flex-wrap gap-4 px-3">
                <div>
                    <img src="{{ asset('img/Zalei.png') }}" alt="Zalei" width="100" height="100">
                </div>
                <div>
                    <img src="{{ asset('img/LacteosCastelar.png') }}" alt="Lácteos Castelar" width="100" height="100">
                </div>
                <div>
                    <img src="{{ asset('img/MarcelaKoury.png') }}" alt="Marcela Koury" width="100" height="100">
                </div>
            </div>
        </section>


</x-layouts.guest>
@endguest
