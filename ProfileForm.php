<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class ProfileForm extends Form
{
    public function buildForm()
    {
        /*
This is a form for the users of this appointment
        application.
*/
        $user = $this->getData('user');

        $this->add('name', Field::TEXT,[
            'rules' => 'required',
            'value' => @$user->name
        ])->add('email', Field::TEXT,[
            'rules' => 'required',
            'value' => @$user->email
        ])->add('password', Field::PASSWORD,[
            'rules' => 'required',
        ])->add('submit', 'submit', [
            'label' => 'Update',
            'attr' => ['class' => 'btn btn-danger'],
        ]);
    }
}
