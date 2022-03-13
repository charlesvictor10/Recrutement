@extends('index')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="inner-banner" style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
        <div class="container">
            <div class="caption">
                <h2>Détails de l'offre</h2>
                <p>Description, responsabilités et qualifications pour ce poste</p>
            </div>
        </div>
    </section>
    <section class="profile-detail">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="basic-information">
                        <div class="col-md-3 col-sm-3">
                            <img src="{{asset('img/icone.png')}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="profile-content">
                                <h2>{{$product->titre}}</h2>
                                <ul class="information">
                                    <li><span>UFR:</span>{{$product->category->nom}}</li>
                                    <li><span>Nombre de poste:</span>1</li>
                                    <li><span>Adresse email:</span>uasz@contact.sn</li>
                                    <li><span>Expire le:</span>25 Mars 2022</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="social">
                            <li><a href=""><input type="button" class="btn brows-btn" value="Postuler"/></li>
                        </ul>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-book"></i> Description
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <p>{{$product->description}}</p>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-leaf fa-fw"></i> Responsibilités:
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <p>Rapid growth since incorporation has triggered a chain of products, acquisitions and partnerships beyond Google's core search engine (Google Search).</p>
                                <ul>
                                    <li>Software testing in a Web Applications/Mobile environment.</li>
                                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                    <li>Software testing in a Web Applications environment.</li>
                                    <li>Translate designs into responsive web interfaces</li>
                                    <li>Software testing in a Web Applications/Mobile environment.</li>
                                    <li>Software testing in a Web Applications environment.</li>
                                    <li>Translate designs into responsive web interfaces</li>
                                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-graduation-cap fa-fw"></i> Qualifications requises:
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <ul>
                                    <li>Software testing in a Web Applications/Mobile environment.</li>
                                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                    <li>Software testing in a Web Applications environment.</li>
                                    <li>Translate designs into responsive web interfaces</li>
                                    <li>Software testing in a Web Applications/Mobile environment.</li>
                                    <li>Software testing in a Web Applications environment.</li>
                                    <li>Translate designs into responsive web interfaces</li>
                                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
