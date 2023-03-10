<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <!-- Atart App Newsletter -->
    @include('user.newsletter')
    <!-- End App Newsletter -->
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="{{ asset('static/logo.png') }}" alt="{{ Config::get('app.name') }} logo">
              <span><app-name>{{ Config::get('app.name') }}</app-name></span>
            </a>
            <p>Magnific Coding Kenya Limited is a web design and development company based in Kenya, Bungoma County along Moi Street. We design and develop websites using various technologies such as wordpress, laravel, vue js, react js, tailwind css, bootstrap css, HTML, and python. We also offer latest tutorials on the above mentioned technologies via our <a href="{{ route('blog') }}"> blog </a>. Always feel free to <a href="{{ route('contact') }}"> contact</a> us for assistance related to web design and developent. Also reach us via our social media channels below to learn more.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="pinterest"><i class="bi bi-pinterest"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('blog') }}">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('about') }}">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('portfolio') }}">Portfolio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('terms.of.service') }}">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('policy') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Categories</h4>
            <ul>
            @foreach($footerCategories as $cat)
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('category.articles',['slug'=>$cat->slug])}}">{{$cat->name}}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Moi Avenue Street <br>
              Bungoma, 688-50200<br>
              Kenya <br><br>
              <strong>Phone:</strong>+254 {{ Config::get('constants.mobile') }}<br>
              <strong>Email:</strong>  <a href="mailto:azanacodes@gmail.com">{{ Config::get('constants.email') }}</a><br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; {{ date('Y') }} <strong><span>{{ Config::get('app.name') }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->