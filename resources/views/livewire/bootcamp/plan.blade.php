<div>
    <div class="pricing-table mt60 bg-gradient1 @if($prefered)best-plan bg-gradient11 text-white @endif">
        <div class="inner-table">
            <img src="{{ asset('images/icons/' . $plan['icon'] . '.svg') }}" alt="Personal" />
            <span class="title">{{ $plan['title'] }}</span>
            <p class="title-sub">{{ $plan['subtitle'] }}</p>
            <h2 class="@if($prefered) text-white @endif"><sup>&#8358;</sup> {{ $amount }}</h2>
            @if(isset($plan['original_amount']))
            <h4 class="@if($prefered) text-white @endif"><del>{{ $original_amount }}</del></h4>
            @endif
            <p class="duration font-weight-bold @if($prefered) text-white @endif">{{ $plan['duration'] }}</p>
            <div class="details">
                <ul>
                    @foreach($plan['benefits'] as $benefit)
                    <li>{{ $benefit }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <a href="#" class="btn-main bg-btn lnk" data-toggle="modal" data-target="#modalform-{{ $plan['title'] }}">Get Started <i
            class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
    </div>

    <!--start Modal html -->
    <div class="popup-modalfull">
        <div class="modal" id="modalform-{{ $plan['title'] }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="closes abt" data-dismiss="modal">&times;</button>
                    <div class="modal-body">
                        @livewire('bootcamp.registration', ['plan' => $plan, 'amount' => $amount])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Modal html  -->

</div>