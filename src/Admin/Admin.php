<?php

namespace Peto16\Admin;

class Admin
{
    private $session;
    private $db;


        /**
     * Inject dependencies.
     *
     * @param array $dependency key/value array with dependencies.
     *
     * @return self
     */
    public function inject($dependency)
    {
        $this->session = $dependency["session"];
        $this->db = $dependency["db"];
        return $this;
    }



    public function isLoggedIn()
    {
        return $this->session->has('user');
    }



    public function getUserLoggedIn()
    {
        return $this->session->get('user');
    }
}
