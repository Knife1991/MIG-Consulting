<div class="js-cookie-consent cookie-consent fixed-bottom z-50">
    <div class="container px-6">
        <div class="alert bg_cookie rounded-lg">
            <div class="d-flex justify-content-between align-items-center">
                <div class="max-w-full flex-1">
                    <p class="text-dark cookie-consent__message mt-3">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-1 w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree btn ">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
