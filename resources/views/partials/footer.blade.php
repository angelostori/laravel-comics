 <footer>
     <section class='footer-top'>
         <div class="container">
             <ul class="nav justify-content-around align-items-center">
                 <li class="nav-item">
                     <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="" />
                     <a class="nav-link" href="#">DIGITAL COMICS</a>
                 </li>
                 <li class="nav-item">
                     <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="" />
                     <a class="nav-link" href="#">DC MERCHANDISE</a>
                 </li>
                 <li class="nav-item">
                     <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="" />
                     <a class="nav-link" href="#">COMIC SHOP LOCATOR</a>
                 </li>
                 <li class="nav-item">
                     <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="" />
                     <a class="nav-link" href="#">SUBSCRIPTION</a>
                 </li>
                 <li class="nav-item">
                     <img id="power-visa" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="" />
                     <a class="nav-link" href="#">DC POWER VISA</a>
                 </li>
             </ul>
         </div>

     </section>
     <section class="footer-mid bg-secondary">
         <div class="container d-flex justify-content-between">
             <ul class="nav">
                 @foreach ($footerlinks as $section)
                 <li class="nav-item">
                     <label><strong>{{ $section['title'] }}</strong></label>

                     @foreach ($section['links'] as $link)
                     <a class="nav-link" href="{{ $link['href'] }}">
                         {{ $link['text'] }}
                     </a>
                     @endforeach
                 </li>
                 @endforeach
             </ul>

             <img src="{{ asset('img/dc-logo-bg.png') }}" alt="DC Logo" />
         </div>
     </section>

     <section class='footer-bottom'>
         <div class="container">
             <nav class="nav justify-content-between">
                 <button type="button">SIGN UP NOW!</button>
                 <div>
                     <label><strong>FOLLOW US</strong></label>
                     <a class="nav-link" href="#">
                         <img src="{{ asset('img/footer-facebook.png') }}" alt="" />
                     </a>
                     <a class="nav-link" href="#">
                         <img src="{{ asset('img/footer-twitter.png') }}" alt="" />
                     </a>
                     <a class="nav-link" href="#">
                         <img src="{{ asset('img/footer-youtube.png') }}" alt="" />
                     </a>
                     <a class="nav-link" href="#">
                         <img src="{{ asset('img/footer-pinterest.png') }}" alt="" />
                     </a>
                     <a class="nav-link" href="#">
                         <img src="{{ asset('img/footer-periscope.png') }}" alt="" />
                     </a>
                 </div>

             </nav>
         </div>
     </section>

 </footer>