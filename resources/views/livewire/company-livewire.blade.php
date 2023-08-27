<div class="company-container">
    @if($companies)
        @foreach($companies as $company)
            <div class="company-box"><img src="{{ asset('images/company/'.$company->logo) }}" alt="4"></div>
        @endforeach
    @endif
</div>
