@extends('layouts.app')

@section('content')

   
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenu Dans Notre Centre !</div>
                <div class="masthead-heading text-uppercase">heureux de vous rencontrer</div>
            </div>
        </header>

        <!-- About-->
        <section class="page-section" id="objectif">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Objectifs</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/objectif/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">L’apprentissage de nouvelles technologies </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Offrir la possibilité aux enfants et les jeunes, une auto-éducation pour l’apprentissage de nouvelles technologies </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/objectif/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Amélioration des connaissances avec l’appui de l’ordinateur</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">qui permet aux élèves et étudiants moyens, qui ont des insuffisances intellectuelles et qui ont des problèmes d’apprentissages d’améliorer leurs connaissances</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/objectif/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Retenir l’attention des élèves et des étudiant par un système attractif et d’animation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">qui permet aux élèves de sortir de la routine et de se focaliser sur la reprise du travail, comme indiqué par le proverbe Chinois « ce que j’entends je l’oubli, ce que je vois je me le rappelle, ce que je le travail manuellement je l’apprends »</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/objectif/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Le soutien et la mise en place de plusieurs méthodes de l’auto-apprentissage par le biais de l’informatique</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">en offrant l’accès à une méga bibliothèque riche en documentation, accessible pour tous les âges et tous les niveaux d’études.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                <br />
                                Bienvenu
                                <br />
                                
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/wajdi.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Président</div>
                                <div class="portfolio-caption-subheading text-muted">Saidi Mohamed Wajdi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/formation1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">FORMATION 1</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/formation2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">FORMATION 2</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/formation3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">FORMATION 3</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/formation4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">FORMATION 4</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/formation5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">FORMATION 5</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactez-nous</h2>
                </div>
                <form action="{{ route('messages.store') }}" method="post">
                    @include('admin.message.create')
                </form> 
            </div>
        </section>
@endsection