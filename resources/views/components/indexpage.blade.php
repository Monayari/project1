<div class="row bs-wizard animate-box" style="border-bottom:0;">

    <div class="col-xs-3 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum"><h4>{{$t1}}</h4></div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="#" class="bs-wizard-dot"></a>
        <div class="bs-wizard-info text-center"><p>{{$s1}}</p></div>
    </div>

    <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
        <div class="text-center bs-wizard-stepnum"><h4>{{$t2}}</h4></div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="#" class="bs-wizard-dot"></a>
        <div class="bs-wizard-info text-center"><p>{{$s2}}</p></div>
    </div>

    <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
        <div class="text-center bs-wizard-stepnum"><h4>{{$t3}}</h4></div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="#" class="bs-wizard-dot"></a>
        <div class="bs-wizard-info text-center"><p> {{$s3}} </p></div>
    </div>

    <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
        <div class="text-center bs-wizard-stepnum"><h4>{{$t4}}</h4></div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="#" class="bs-wizard-dot"></a>
        <div class="bs-wizard-info text-center"><p>  {{$s4}} </p></div>
    </div>
</div>


