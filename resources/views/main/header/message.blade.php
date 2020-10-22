{{-- load --}}
<div class="container-fluid mail__load" style="display: none;">
    <div class="progress">
        <div class="progress__value"></div>
    </div>
</div>
{{-- error --}}
<div class="container-fluid errormessange" style="display: none;">
    <div class="alert alert-danger">
        <ul></ul>
    </div>
</div>
<div class="container-fluid logerrormessange" style="display: none;">
    <div class="alert alert-danger">
        <ul></ul>
    </div>
</div>
{{-- success --}}
<div class="alert alert-success success-reg" role="alert" style="display:none;">
    <div><strong>{{__('mess.Շնորհակալություն')}}</strong></div>
    <strong>{{__('mess.Դուք հաջողությամբ գրանցվել եք')}}</strong>
</div>
<div class="alert alert-success success__alert" role="alert" style="display: none;">
    <strong>{{__('mess.Շնորհակալություն Հաղորդագրությունը ուղղարկված է')}}</strong>
</div>