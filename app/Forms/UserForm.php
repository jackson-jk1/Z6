<?php

namespace App\Forms;

use App\Models\Ranks;
use App\Models\User;
use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('id');
        $this
            ->add('name', 'text',[
                'label' => 'Nome',
                'rules' => 'required|max:255'
            ])
            ->add('email', 'email',[
                'label' => 'Email',
                'rules' => "required|max:255|unique:users,email,{$id}"
            ])
        ->add('type', 'hidden',[
            'label' => 'Tipo de usuario',
            'value' => User::ROLE_BOOSTER,

        ])->add('rank', 'select',[
            'label' => 'Seu ELO',
             'choices' => $this->roles(),
             'rules' => 'required|in:'.implode(',',array_keys(Ranks::RANK_STATUS))
            ]);



    }

 protected function roles(){

        return Ranks::RANK_STATUS;

 }
}
