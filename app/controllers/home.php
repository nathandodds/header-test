<?php

class home extends C_Controller
{
    public function index()
    {
            
        $this->addTag ('title', 'Home');

        $this->addStyle('layout');

        $this->setView('home/index');
    }

    public function mediation()
    {

        $this->addTag ('title', 'Mediation');

        $this->addStyle('layout');

        $this->setView('home/mediation');
    }

     public function employment()
    {

        $this->addTag ('title', 'Employment');

        $this->addStyle('layout');

        $this->setView('home/employment');
    }

    public function business()
    {

        $this->addTag ('title', 'Business');

        $this->addStyle('layout');

        $this->setView('home/business');
    }

    public function civil()
    {

        $this->addTag ('title', 'Civil & Personal');

        $this->addStyle('layout');

        $this->setView('home/civil');
    }
    
}
