<header>
    <div class="headerCol">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <div class="navigation">
                        <ul>
                            <a href="{{url('/')}}">
                            <li>
                                <i class="fa-solid fa-house"></i>home
                            </li>
                        </a>
                            <a href="{{route('user.profile')}}">
                            <li class="active">
                               <i class="fa-solid fa-address-card"></i> My Details
                            </li>
                            </a>
                            <a href="{{route('user.classifieds')}}">
                            <li>
                                <i class="fa-regular fa-clipboard"></i> My Ads 
                            </li>
                        </a>
                        <a href="{{route('user.email.alert')}}">
                            <li>
                               <i class="fa-solid fa-envelope"></i> My Email Alerts 
                            </li>
                        </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>