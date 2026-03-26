<x-frontend.shell
    title="About"
    meta-description="Leer de rijke geschiedenis van Gazette kennen, onze missie voor kwaliteitsjournalistiek en het gepassioneerde team achter de schermen."
>
    <x-frontend.breadcrumb>
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About</li>
    </x-frontend.breadcrumb>

    <!-- :: About Us Area Start :: -->
    <section class="gazette-about-us-area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-content mb-50">
                        <div class="widget-title">
                            <h2 class="font-pt">Van Passie naar Platform: Onze Backstory</h2>
                        </div>
                        <p class="mb-30">Het verhaal van Gazette begon in de herfst van 2018. In een kleine zolderkamer, tussen stapels kranten en een onuitputtelijke voorraad koffie, besloten drie jonge journalisten dat het tijd was voor een ander geluid. Ze merkten dat in de snelheid van de digitale wereld de diepgang en nuance vaak verloren gingen. De missie was simpel maar ambitieus: een digitaal platform creëren dat de kwaliteit van traditionele kranten combineert met de dynamiek van het internet.</p>

                        <p class="mb-30">Wat begon als een wekelijkse nieuwsbrief voor een handvol vrienden en familie, groeide binnen enkele maanden uit tot een gerespecteerd medium. De naam "Gazette" werd gekozen als eerbetoon aan de rijke historie van de journalistiek, maar met een scherpe blik op de toekomst. Vandaag de dag is Gazette een baken van betrouwbaarheid in een zee van informatie, gedreven door de overtuiging dat elke stem telt en elk verhaal het verdient om met integriteit verteld te worden.</p>

                        <div class="about-quote mb-30 text-center p-4 bg-light italic rounded">
                            <h4 class="font-pt mb-2 italic">"Journalistiek is niet alleen het doorgeven van feiten, het is het bieden van context in een complexe wereld."</h4>
                            <p class="mb-0 text-slate-500">— Jennifer van Dam, Hoofdredacteur</p>
                        </div>

                        <h3 class="font-pt mb-20">Onze Toekomstvisie</h3>
                        <p class="mb-30">We blijven niet stilstaan. In een snel veranderend medialandschap investeert Gazette continu in nieuwe technologieën en talenten. Of het nu gaat om interactieve datavisualisaties, diepgaande podcasts of live-verslaggeving: wij brengen het nieuws daar waar onze lezers zich bevinden. Onze ambitie is om de komende jaren uit te groeien tot hét toonaangevende onafhankelijke digitale nieuwsmedium van de Lage Landen.</p>
                    </div>
                </div>
            </div>

            <!-- Core Values Section -->
            <div class="row section_padding_50">
                <div class="col-12">
                    <div class="widget-title text-center mb-50">
                        <h2 class="font-pt">Onze Kernwaarden</h2>
                        <p>De vier pijlers waar ons platform op rust.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-about-us-widget p-4 border rounded hover:shadow transition h-100">
                        <i class="fa fa-shield fa-3x text-danger mb-3" aria-hidden="true"></i>
                        <h4 class="font-pt">Integriteit</h4>
                        <p class="mb-0">Wij zijn onafhankelijk en ongebonden. Onze feiten zijn gecheckt en onze bronnen betrouwbaar.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-about-us-widget p-4 border rounded hover:shadow transition h-100">
                        <i class="fa fa-lightbulb-o fa-3x text-warning mb-3" aria-hidden="true"></i>
                        <h4 class="font-pt">Innovatie</h4>
                        <p class="mb-0">We experimenteren met nieuwe vormen van storytelling om onze lezers optimaal te informeren.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-about-us-widget p-4 border rounded hover:shadow transition h-100">
                        <i class="fa fa-users fa-3x text-primary mb-3" aria-hidden="true"></i>
                        <h4 class="font-pt">Gemeenschap</h4>
                        <p class="mb-0">Gazette is er voor en door de lezer. Wij luisteren naar feedback en stimuleren debat.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-about-us-widget p-4 border rounded hover:shadow transition h-100">
                        <i class="fa fa-diamond fa-3x text-success mb-3" aria-hidden="true"></i>
                        <h4 class="font-pt">Kwaliteit</h4>
                        <p class="mb-0">Wij gaan voor de diepgang waar anderen stoppen. Elk artikel is een toonbeeld van vakmanschap.</p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="row section_padding_50">
                <div class="col-12">
                    <div class="widget-title text-center mb-50">
                        <h2 class="font-pt">Het Team achter Gazette</h2>
                        <p>Maak kennis met de gezichten die dagelijks het nieuws vormgeven.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-team-member">
                        <div class="team-member-thumb mb-3">
                            <img src="{{ asset('frontend/gazette/img/bg-img/t1.jpg') }}" alt="Team Lid" class="rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="font-pt mb-1">Jennifer van Dam</h5>
                        <p class="text-danger small font-weight-bold">Hoofdredacteur</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-team-member">
                        <div class="team-member-thumb mb-3">
                            <img src="{{ asset('frontend/gazette/img/bg-img/t2.jpg') }}" alt="Team Lid" class="rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="font-pt mb-1">Sara El Moussaoui</h5>
                        <p class="text-danger small font-weight-bold">Onderzoeksjournalist</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-team-member">
                        <div class="team-member-thumb mb-3">
                            <img src="{{ asset('frontend/gazette/img/bg-img/t3.jpg') }}" alt="Team Lid" class="rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="font-pt mb-1">Lucas Peters</h5>
                        <p class="text-danger small font-weight-bold">Politiek Verslaggever</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center mb-30">
                    <div class="single-team-member">
                        <div class="team-member-thumb mb-3">
                            <img src="{{ asset('frontend/gazette/img/bg-img/t4.jpg') }}" alt="Team Lid" class="rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="font-pt mb-1">Emma de Vries</h5>
                        <p class="text-danger small font-weight-bold">Cultuur & Lifestyle</p>
                    </div>
                </div>
            </div>

            <!-- Join Us CTA -->
            <div class="row">
                <div class="col-12">
                    <div class="about-us-content text-center mb-50 p-5 bg-dark text-white rounded">
                        <h2 class="font-pt text-white mb-30">Wil je deel uitmaken van ons verhaal?</h2>
                        <p class="mb-30 text-slate-300">We zijn altijd op zoek naar gepassioneerde schrijvers, data-analisten en creatieve geesten om ons team te versterken of hun verhalen met ons te delen.</p>
                        <a href="{{ route('contact') }}" class="btn gazette-btn">Neem Contact Met Ons Op</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.shell>
