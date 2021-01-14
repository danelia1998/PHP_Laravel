<div class="collapse" style="background-color: darkolivegreen;" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">{{ config('menu_about_text') }}</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Categories</h4>
                <ul class="list-unstyled">
                    @foreach ($categories as $cat)
                    <li>
                        <a href="{{ route('front.category', ['slug' => $cat->slug]) }}" class="text-white">
                            {{ $cat->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark box-shadow" style="background-color: darkolivegreen;">
    <div class="container d-flex justify-content-between">
        <a href="{{ route('front.index') }}" style="color:white;" class="navbar-brand d-flex align-items-center">

















            <strong>{{ config('app.name') }}</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>