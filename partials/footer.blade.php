<div class="container">
<hr class="separation-line blue-bg"/>
<div class="row new-collaborators text-center">
<!--<div class="col-md-12 new-collaborators text-center">-->
    <div class="col-md-offset-2 col-xs-2">
        <a href="/pages/about" target="_blank">
        <img width="40%" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/people.png"/>
        </a>
    </div>
        <div class="col-xs-2">
        <a href="/pages/documentation" target="_blank">
        <img width="40%" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/document.png">
        </a>
        </div>
    <div class="col-xs-2">
        <a href="/pages/citeus" target="_blank">
        <img width="45%" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/cite.png">
        </a>
    </div>
        <div class="col-xs-2">
                <a href="/pages/contact" target="_blank">
                <img width="40%" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/contact.png">
                </a>
        </div>
</div>