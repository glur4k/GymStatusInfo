@extends('baselayout')

@section('content')

<!-- Gyms Section -->
<section id="hallen">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @if (Auth::check())
                    <a href="/hallen/neu" class="btn btn-primary">Sporthalle hinzufügen</a>
                @else
                    Nicht angemeldet
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Infos Section -->
<section class="success" id="infos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Über diese Seite</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quaerat nostrum iure nobis corporis nesciunt animi voluptate optio maiores dolores, quis rem quia officiis perspiciatis provident atque quo eaque itaque!</p>
            </div>
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem cumque, dolorum laborum veritatis! Sapiente ut commodi ducimus neque blanditiis natus, similique libero! Labore voluptates sint quasi voluptatem? Animi, modi, reprehenderit?</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="kontakt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Schreiben Sie uns</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>Haben Sie nützliche Informationen für uns? Auf unserer Webseite finden Sie ein Kontaktformular, das Ihre Nachricht direkt an den Vorstand weiterleitet! Wir würden uns freuen, von Ihnen zu hören!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="http://www.ttf-stuehlingen.de/kontakt/" class="btn btn-lg btn-success" target="_blank" title="Neues Fenster: Zum Kontaktformular auf unserer Webseite gehen">
                    Zu unserem Kontktformular gehen <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="portfolio-modal modal fade" id="locationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop