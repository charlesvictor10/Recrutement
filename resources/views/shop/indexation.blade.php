 @extends('index')
  @section('content')
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <section class="main-banner" style="background:#242c36 url(img/slider-01.jpg) no-repeat">
          <div class="container">
              <div class="caption">
                  <h2>Trouvez votre emploi.</h2>
                  <form>
                      <fieldset>
                          <div class="col-md-4 col-sm-4 no-pad">
                              <input type="text" class="form-control border-right" placeholder="Nom ou désignation" />
                          </div>
                          <div class="col-md-3 col-sm-3 no-pad">
                              <select class="selectpicker border-right">
                                  <option>Années expérience</option>
                                  <option>0 - 2 ans</option>
                                  <option>2 - 5 ans</option>
                                  <option>5 - 10 ans</option>
                                  <option>+10 ans</option>
                              </select>
                          </div>
                          <div class="col-md-3 col-sm-3 no-pad">
                              <select class="selectpicker">
                                  <option>Selectionnez l'UFR</option>
                                  <option>UFR-SES</option>
                                  <option>UFR-LASHU</option>
                                  <option>UFR-SANTE</option>
                                  <option>UFR-ST</option>
                              </select>
                          </div>
                          <div class="col-md-2 col-sm-2 no-pad">
                              <input type="submit" class="btn seub-btn" value="Rechercher" />
                          </div>
                      </fieldset>
                  </form>
              </div>
          </div>
      </section>

      <section class="features">
          <div class="container">
              <div class="col-md-4 col-sm-4">
                  <div class="features-content">
                      <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
                      <h3>Créer un compte</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <div class="features-content">
                      <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
                      <h3>Rechercher votre emploi</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <div class="features-content">
                      <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
                      <h3>Postuler sur l'emploi</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <div class="features-content">
                      <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
                      <h3>Passer votre entretien</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <div class="features-content">
                      <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
                      <h3>Démarrer votre emploi</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <div class="features-content">
                      <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
                      <h3>Laisser un commentaire</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                  </div>
              </div>

          </div>
      </section>

      <section class="counter">
          <div class="container">
              <div class="col-md-3 col-sm-3">
                  <div class="counter-text">
                      <span aria-hidden="true" class="icon-briefcase"></span>
                      <h3>0</h3>
                      <p>Emplois postés</p>
                  </div>
              </div>

              <div class="col-md-3 col-sm-3">
                  <div class="counter-text">
                      <span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>
                      <h3>4</h3>
                      <p>UFRs</p>
                  </div>
              </div>

              <div class="col-md-3 col-sm-3">
                  <div class="counter-text">
                      <span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
                      <h3>2+</h3>
                      <p>Visiteurs</p>
                  </div>
              </div>

              <div class="col-md-3 col-sm-3">
                  <div class="counter-text">
                      <span class="box1"><span aria-hidden="true" class="icon-sad"></span></span>
                      <h3>2+</h3>
                      <p>Recrutés</p>
                  </div>
              </div>
          </div>
      </section>

      <section class="jobs">
          <div class="container">
              <div class="row heading">
                  <h2>Les postes les plus récents</h2>
                  <p>Les offres d'emplois les plus récents.</p>
              </div>
              <div class="companies">
                  @foreach($product as $prod)
                      <div class="company-list">
                          <div class="row">
                              <div class="col-md-2 col-sm-2">
                                  <div class="company-logo">
                                      <img src="{{asset('img/ico.png')}}" class="img-responsive" alt="{{$prod->titre}}" />
                                  </div>
                              </div>
                              <div class="col-md-10 col-sm-10">
                                  <div class="company-content">
                                      <h3>{{$prod->titre}}<a href="offre/{{$prod->id}}"><span class="full-time">Details</span></a></h3>
                                      <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$prod->category->nom}}</span><span class="company-location"><i class="fa fa-calendar-times-o"></i> {{$prod->created_at}}</span></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
              <div class="row">
                  <a href="{{route('listeOffres')}}"><input type="button" class="btn brows-btn" value="Plus d'offres"/></a>
              </div>
          </div>
      </section>

      <section class="testimonials dark">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div id="testimonial-slider" class="owl-carousel">
                          <div class="testimonial">
                              <div class="pic">
                                  <img src="{{asset('img/client-1.jpg')}}" alt="">
                              </div>
                              <p class="description">
                                  " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
                              </p>
                              <h3 class="testimonial-title">Modou Diop</h3>
                              <span class="post">Superviseur</span>
                          </div>

                          <div class="testimonial">
                              <div class="pic">
                                  <img src="{{asset('img/client-2.jpg')}}" alt="">
                              </div>
                              <p class="description">
                                  " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
                              </p>
                              <h3 class="testimonial-title">Mame Fatou Diene</h3>
                              <span class="post">Enseignante</span>
                          </div>

                          <div class="testimonial">
                              <div class="pic">
                                  <img src="{{asset('img/client-3.jpg')}}" alt="">
                              </div>
                              <p class="description">
                                  " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
                              </p>
                              <h3 class="testimonial-title">Khalifa Seye</h3>
                              <span class="post">Sociologie</span>
                          </div>

                          <div class="testimonial">
                              <div class="pic">
                                  <img src="{{asset('img/client-4.jpg')}}" alt="">
                              </div>
                              <p class="description">
                                  " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
                              </p>
                              <h3 class="testimonial-title">Ndeye Diop</h3>
                              <span class="post">Chargé recrutement</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="newsletter">
          <div class="container">
              <div class="row">
                  <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                      <h2>Vous souhaitez recevoir les derniers emplois publiés? </h2>
                      <p>S'inscrire à notre newletter pour être informé des nouveaux postes disponibles!</p>
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Votre adresse email...">
                          <span class="input-group-btn">
							<button type="button" class="btn btn-default">S'inscrire!</button>
						</span>
                      </div>
                  </div>
              </div>
          </div>
      </section>
   @endsection
