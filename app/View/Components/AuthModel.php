<?php

namespace App\View\Components;

use App\Http\Requests\LoginRegister;
use Illuminate\View\Component;
use JsValidator;


class AuthModel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $request = new LoginRegister;
        $validator = JsValidator::make($request->rules())->__toString();
        return view('components.auth-model', compact('validator'));
    }
}
