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
    
    public function business__sub()
    {

        $this->addTag ('title', 'Business');

        $this->addStyle('layout');

        $this->setView('home/business__sub');
    }

    public function civil__sub()
    {

        $this->addTag ('title', 'Civil Subpage');

        $this->addStyle('layout');

        $this->setView('home/civil__sub');
    }

    public function employment__sub()
    {

        $this->addTag ('title', 'Employment Subpage');

        $this->addStyle('layout');

        $this->setView('home/employment__sub');
    }

     public function mediation__sub()
    {

        $this->addTag ('title', 'Mediation Subpage');

        $this->addStyle('layout');

        $this->setView('home/mediation__sub');
    }

    public function property__sub()
    {

        $this->addTag ('title', 'Property Subpage');

        $this->addStyle('layout');

        $this->setView('home/property__sub');
    }
}
