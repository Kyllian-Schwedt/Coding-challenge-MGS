<!-- Sidebar -->
<div>
    <!-- logo -->
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/brand_logo.png') }}" alt="logo">
        </a>
    </div>
    <!-- nav -->

    <ul>
        <li><a href="{{ route('home') }}" class="{{ Request::url() == route('home') ? 'active' : ''}}">Accueil 1</a></li>
        <li>
            <a href="">Locations</a>
            <ul>
                <li><a href="{{ route('locations.villa') }}" class="{{ Request::url() == route('locations.villa') ? 'active' : ''}}">Villa Cosy</a></li>
                <li><a href="{{ route('locations.parenthese') }}" class="{{ Request::url() == route('locations.parenthese') ? 'active' : ''}}">Parenthèse</a></li>
                <li><a href="{{ route('locations.dream') }}" class="{{ Request::url() == route('locations.dream') ? 'active' : ''}}">Bateau Dream</a></li>
                <li><a href="{{ route('locations.dream') }}" class="{{ Request::url() == route('locations.dream') ? 'active' : ''}}">L'impérial</a></li>
            </ul>
        </li>

        <li><a href="{{ route('activities') }}" class="{{ Request::url() == route('activities') ? 'active' : ''}}">Les activités</a></li>
        <li><a href="{{ route('galerie') }}" class="{{ Request::url() == route('galerie') ? 'active' : ''}}">Galerie</a></li>
        <li><a href="{{ route('tourisme') }}" class="{{ Request::url() == route('tourisme') ? 'active' : ''}}">Tourisme</a></li>
        <li><a href="{{ route('contact') }}" class="{{ Request::url() == route('contact') ? 'active' : ''}}">Contact</a></li>
    </ul>

    <!-- bottom contact section -->
    <div class="bottom-section">
        <div class="adresse">
            <p> 2, rue du Port <br> 66660 Port-Vendres <br> France</p>
        </div>
        <div class="phone">
            <a href="tel:+33612345678"> <i class="fas fa-phone"></i> +33 6 12 34 56 78</a>
        </div>
        <div class="mail">
            <a href="mailto: contact@mgs.com" target="_blank"> <i class="fas fa-envelope"></i> </a>
        </div>
        <div class="lang">
            <a href="https://www.google.com" target="_blank"> <img src="{{ asset('img/france.png') }}" alt="france flag"> </a>
        </div>
    </div>

    <!-- social media icons -->
    <div class="social-media">
        <p>Suivez-nous</p>
        <div class="facebook">
            <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
        </div>
        <div class="twitter">
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i> </a>
        </div>
    </div>


</div>
