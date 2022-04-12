<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class DoctorForm extends Form
{
    public function buildForm()
    {
        /*
This is a form for the Doctors of this appointment
        application.
*/
        $user = $this->getData('user');

        if(isset($user)){
            $this->add('doctor_id','hidden',[
                'value' => $user->id
            ]);
        }

        $this->add('email', Field::EMAIL,[
            'rules' => 'required|string',
            'value' => @$user->email
        ])->add('password', Field::PASSWORD,[
            'rules' => 'required',
        ])->add('name', Field::TEXT,[
            'rules' => 'required|string|regex:/^[a-zA-Z]+$/u',
            'value' => @$user->email
        ])->add('phone_no', Field::NUMBER,[
            'rules' => 'required|numeric',
            'value' => @$user->phone_no,
        ])->add('address', Field::TEXT,[
            'rules' => 'required|string',
            'value' => @$user->address
        ])->add('date_of_birth', Field::DATE,[
            'rules' => 'required',
            'value' => @$user->date_of_birth
        ])->add('degree', Field::TEXT,[
            'rules' => 'required||regex:/^[a-zA-Z]+$/u|string',
            'value' => @$user->degree
        ])->add('specialty', Field::TEXT,[
            'rules' => 'required||regex:/^[a-zA-Z]+$/u|string',
            'value' => @$user->specialty
        ])->add('submit', 'submit', [
            'label' => isset($user)?'Update':'Create',
            'attr' => ['class' => 'btn btn-danger'],
        ]);
    }
}
