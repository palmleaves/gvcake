<?php

namespace Controllers\Frontend;

class BillingController extends \BaseController {

    public function getForm() {



        return \View::make('frontend/billing/form');
    }

}

