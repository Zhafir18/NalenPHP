<nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color:#e3484d">
    <div class="collapse navbar-collapse d-flex justify-content-betweend-flex justify-content-between" id="navbarNav">
        <div>
            <a class="navbar-brand" href="{{ url('/home') }}" style="color:white; font-size: 25px; font-weight:500;">KATBAG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="ml-auto">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('aboutus') }}" style="color:white; font-size: 20px;">About Us <span class="sr-only">(current)</span></a>
                </li>
            
            </ul>
        </div>
    </div>
</nav>
