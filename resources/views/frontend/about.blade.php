<x-frontend.shell
    title="About"
    meta-description="Leer meer over Gazette, ons team en onze missie om kwaliteitsvol nieuws te brengen."
>
    <x-frontend.breadcrumb>
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About</li>
    </x-frontend.breadcrumb>

    <section class="gazette-about-us-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-content">
                        <div class="widget-title">
                            <h2 class="font-pt">Onze Missie</h2>
                        </div>
                        <p class="mb-30">Welkom bij Gazette, jouw bron voor het laatste nieuws, diepgaande analyses en boeiende verhalen. Wij geloven in de kracht van onafhankelijke journalistiek en streven ernaar om onze lezers dagelijks te voorzien van accurate en relevante informatie.</p>

                        <p class="mb-30">Onze redactie werkt onvermoeibaar om de feiten te checken en diverse perspectieven te belichten. Of het nu gaat om politiek, technologie, cultuur of sport, Gazette brengt het verhaal achter het nieuws op een toegankelijke en integere manier.</p>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="single-about-us-widget mb-30">
                                    <h4 class="font-pt">Kwaliteit</h4>
                                    <p>Wij doen geen concessies aan de kwaliteit van onze berichtgeving. Elk artikel ondergaat een strikt redactioneel proces.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="single-about-us-widget mb-30">
                                    <h4 class="font-pt">Integriteit</h4>
                                    <p>Objectiviteit en eerlijkheid staan centraal in alles wat we doen. Wij zijn transparant over onze bronnen en methoden.</p>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset('frontend/gazette/img/bg-img/20.jpg') }}" alt="Redactie Gazette" class="mb-30 img-fluid w-100">

                        <h3 class="font-pt mb-20">Onze Geschiedenis</h3>
                        <p>Gazette werd opgericht met het idee dat de digitale wereld nood heeft aan vertrouwde stemmen. Sinds onze start zijn we gegroeid van een kleine blog tot een volwaardig nieuwsplatform met een gepassioneerd team van schrijvers en experts uit diverse vakgebieden.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area -->
    <section class="gazette-team-area section_padding_100_70 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-title">
                        <h2 class="font-pt">Ons Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-30">
                        <img src="{{ asset('frontend/gazette/img/blog-img/25.jpg') }}" alt="Team Lid">
                        <div class="team-info mt-3">
                            <h5 class="font-pt mb-0">Emma Janssen</h5>
                            <p>Hoofdredacteur</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-30">
                        <img src="{{ asset('frontend/gazette/img/blog-img/25.jpg') }}" alt="Team Lid">
                        <div class="team-info mt-3">
                            <h5 class="font-pt mb-0">Mark de Vries</h5>
                            <p>Senior Journalist</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-30">
                        <img src="{{ asset('frontend/gazette/img/blog-img/25.jpg') }}" alt="Team Lid">
                        <div class="team-info mt-3">
                            <h5 class="font-pt mb-0">Sophie Bakker</h5>
                            <p>Tech Expert</p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-30">
                        <img src="{{ asset('frontend/gazette/img/blog-img/25.jpg') }}" alt="Team Lid">
                        <div class="team-info mt-3">
                            <h5 class="font-pt mb-0">Lucas Meyer</h5>
                            <p>Fotograaf</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.shell>
