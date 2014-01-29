<?php
    class Responsive extends C_Controller {

        public function index()
        {
            $this->addTag ('title', 'Responsive');

            $this->addStyle('layout');

            $this->setView('responsive/index');
        }

        public function divorce_sub()
        {
            $this->addTag ('title', 'Divorce Subpage');

            $this->addStyle('layout');

            $this->setView('responsive/divorce_sub');
        }

        public function family()
        {
            $this->addTag ('title', 'Family Law');

            $this->addStyle('layout');

            $this->setView('responsive/family');
        }

         public function family_sub()
        {
            $this->addTag ('title', 'Family Law Subpage');

            $this->addStyle('layout');

            $this->setView('responsive/family_sub');
        }

        public function vunerable()
        {
            $this->addTag ('title', 'Protecting the Vunerable');

            $this->addStyle('layout');

            $this->setView('responsive/vunerable');
        }

        public function vunerable_sub()
        {
            $this->addTag ('title', 'Vunerable Subpage');

            $this->addStyle('layout');

            $this->setView('responsive/vunerable_sub');
        }

        public function team()
        {
            $this->addTag ('title', 'Our Team');

            $this->addStyle('layout');

            $this->setView('responsive/team');
        }

         public function team_sub()
        {
            $this->addTag ('title', 'Our Team');

            $this->addStyle('layout');

            $this->setView('responsive/team_sub');
        }
    }

?>
