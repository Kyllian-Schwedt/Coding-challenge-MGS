<!-- Sidebar -->
<nav>
<div class="nav-container">
    <!-- logo -->
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/brand_logo.png') }}" alt="logo">
        </a>
    </div>
    <!-- nav -->

    <ul class="main-menu">
        <li><a href="{{ route('home') }}" class="{{ Request::url() == route('home') ? 'active' : ''}}">Accueil</a></li>
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
            <p> 254 chemin de la farlède <br> 83500 La Seyne Sur Mer</p>
        </div>
        <div class="line">
        <div class="phone">
            <a href="tel:+330494151738"> <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="29.5px" height="33.5px">
                    <path fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="round" stroke-linejoin="round" fill="none"
                          d="M26.448,27.244 C27.062,25.785 25.726,24.260 24.982,23.306 C24.241,22.351 23.036,20.973 22.004,20.844 C21.379,20.766 20.654,21.294 19.947,21.794 L25.363,28.763 C25.842,28.320 26.198,27.845 26.448,27.244 ZM12.285,8.344 C12.415,7.311 11.376,5.804 10.634,4.851 C9.892,3.896 8.742,2.225 7.178,2.461 C6.534,2.558 5.987,2.783 5.438,3.134 L10.856,10.105 C11.516,9.539 12.207,8.968 12.285,8.344 ZM19.012,22.389 C18.873,22.459 18.738,22.515 18.607,22.553 C17.917,22.752 16.454,22.811 15.568,21.988 C14.717,21.195 13.369,19.723 12.276,18.376 C11.241,16.989 10.147,15.319 9.589,14.299 C9.009,13.238 9.425,11.832 9.788,11.217 C9.859,11.097 9.948,10.981 10.051,10.864 L4.557,3.799 C4.452,3.888 4.347,3.979 4.241,4.078 C3.225,4.998 1.698,7.163 2.878,11.059 C3.754,13.952 5.626,17.353 8.173,20.790 L8.158,20.802 C8.282,20.968 8.413,21.119 8.541,21.279 C8.661,21.443 8.782,21.605 8.906,21.768 L8.924,21.755 C11.627,25.071 14.465,27.724 17.050,29.286 C20.538,31.392 23.010,30.443 24.154,29.688 C24.274,29.608 24.390,29.530 24.502,29.452 L19.012,22.389 Z"/>
                </svg> 04 94 15 17 38</a>
        </div>
            <div class="loc">
                <a href="">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24.5px" height="33.5px">
                        <path fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="round" stroke-linejoin="round" fill="none"
                              d="M12.002,2.423 C6.735,2.423 2.465,6.500 2.465,11.530 C2.465,12.829 2.755,14.065 3.266,15.181 L12.002,30.570 L20.735,15.181 C21.250,14.065 21.536,12.829 21.536,11.530 C21.538,6.500 17.271,2.423 12.002,2.423 ZM12.114,16.656 C9.350,16.656 7.111,14.454 7.111,11.734 C7.111,9.017 9.351,6.814 12.114,6.814 C14.877,6.814 17.117,9.017 17.117,11.734 C17.117,14.453 14.877,16.656 12.114,16.656 Z"/>
                    </svg>
                </a>
            </div>
        <div class="mail">
            <a href="mailto: contact@mgs.com" target="_blank"> <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="33.5px" height="23.5px">
                    <path fill-rule="evenodd"  stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="round" stroke-linejoin="round" fill="none"
                          d="M29.403,2.440 L3.572,2.440 C2.939,2.440 2.425,2.972 2.425,3.626 L2.425,19.374 C2.425,20.027 2.939,20.560 3.572,20.560 L29.403,20.560 C30.036,20.560 30.551,20.027 30.551,19.374 L30.551,3.626 C30.550,2.972 30.036,2.440 29.403,2.440 ZM28.319,19.445 L22.462,12.126 L16.506,17.014 L10.672,12.152 L4.766,19.445 L3.613,19.445 L9.472,10.910 L3.565,4.833 L3.590,3.592 L16.506,14.557 L29.447,3.655 L29.447,4.833 L23.638,10.910 L29.447,19.419 L28.319,19.445 Z"/>
                </svg> </a>
        </div>
        <div class="lang">
            <a href="#" target="_blank"> <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="22px" height="16px">
                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                          d="M-0.000,-0.000 L21.1000,-0.000 L21.1000,15.1000 L-0.000,15.1000 L-0.000,-0.000 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(215, 41, 50)"
                          d="M14.1000,-0.000 L21.1000,-0.000 L21.1000,15.1000 L14.1000,15.1000 L14.1000,-0.000 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(28, 74, 190)"
                          d="M-0.000,-0.000 L6.1000,-0.000 L6.1000,15.1000 L-0.000,15.1000 L-0.000,-0.000 Z"/>
                </svg> </a>
        </div>
        </div>
        <!-- social media icons -->
        <div class="social-media">
            <span class="follow">Suivez-nous</span>
            <div class="social-ico">
            <div class="facebook">
                <a href="https://www.facebook.com" target="_blank"> <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="11px" height="24px">
                        <path fill-rule="evenodd"  fill="rgb(153, 153, 153)"
                              d="M10.576,12.005 L7.262,12.005 L7.262,23.987 L2.349,23.987 L2.349,12.005 L0.013,12.005 L0.013,7.773 L2.349,7.773 L2.349,5.034 C2.349,3.075 3.267,0.008 7.306,0.008 L10.945,0.024 L10.945,4.132 L8.304,4.132 C7.871,4.132 7.262,4.352 7.262,5.286 L7.262,7.777 L11.005,7.777 L10.576,12.005 Z"/>
                    </svg> </a>
            </div>
            <div class="twitter">
                <a href="https://www.twitter.com" target="_blank">  <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="19px">
                        <path fill-rule="evenodd"  fill="rgb(153, 153, 153)"
                              d="M23.993,2.242 C23.111,2.624 22.162,2.882 21.167,2.997 C22.183,2.403 22.963,1.463 23.331,0.342 C22.380,0.892 21.327,1.291 20.206,1.506 C19.308,0.574 18.029,-0.010 16.613,-0.010 C13.895,-0.010 11.691,2.140 11.691,4.791 C11.691,5.168 11.735,5.534 11.819,5.886 C7.729,5.686 4.102,3.774 1.675,0.869 C1.251,1.578 1.008,2.403 1.008,3.283 C1.008,4.948 1.877,6.418 3.198,7.279 C2.391,7.254 1.632,7.038 0.969,6.678 C0.968,6.698 0.968,6.719 0.968,6.739 C0.968,9.065 2.665,11.005 4.916,11.446 C4.504,11.556 4.068,11.615 3.620,11.615 C3.302,11.615 2.994,11.585 2.694,11.529 C3.320,13.436 5.137,14.824 7.291,14.863 C5.606,16.151 3.485,16.918 1.178,16.918 C0.782,16.918 0.389,16.896 0.005,16.851 C2.182,18.214 4.769,19.009 7.549,19.009 C16.601,19.009 21.552,11.693 21.552,5.348 C21.552,5.140 21.547,4.933 21.538,4.727 C22.500,4.050 23.334,3.205 23.993,2.242 L23.993,2.242 Z"/>
                    </svg>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
</nav>
