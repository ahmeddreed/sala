<div class="row" dir="rtl">

    <div class="col-lg-10 mx-auto text-center my-5">
        <div class="card shadow color">
            <div class="card-body d-flex justify-content-around">
                <button wire:click='changeTheAction("login")' class="btn btn-light px-3 {{ $action == "login" ? "bg" : "color"  }}  fw-bold">تسجيل الدخول</button>
                <button wire:click='changeTheAction("customer login")' class="btn btn-light  {{ $action == "customer login" ? "bg" : "color"  }} px-3 fw-bold">تسجيل الدخول عميل</button>
                <button wire:click='changeTheAction("customer register")' class="btn btn-light {{ $action == "customer register" ? "bg" : "color"  }}  px-3 fw-bold">انشاء حساب عميل</button>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="col-lg-7 mx-auto ">
            @if(session()->has("msg_s"))
                <div class="alert alert-success text-center color" role="alert">
                    {{ session()->get("msg_s") }}
                </div>
            @elseif(session()->has("msg_e"))
                <div class="alert alert-danger text-center text-light" role="alert">
                    {{ session()->get("msg_e") }}
                </div>
            @endif
            @if($action == "login")
                <x-auth.login></x-auth.login>
            @elseif($action == "customer login")
                <x-auth.customer-login></x-auth.customer-login>
            @elseif($action == "customer register")
                <x-auth.customer-register></x-auth.customer-register>
            @else

            @endif
        </div>
    </div>
    {{-- The whole world belongs to you. --}}
</div>

