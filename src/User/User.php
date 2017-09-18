<?php

namespace Peto16\User;

/**
 * Class to handle a user.
 */
class User
{

    private $session;



    /**
     * Inject dependency.
     * @param  obj          $dependency the session.
     * @return void
     */
    public function inject($dependency)
    {
        $this->session = $dependency;
    }



    /**
     * Check if a user is logged in and returns that user
     * @return obj          user or null
     */
    public function getCurrentUser()
    {
        if ($this->session->has("user")) {
            return $this->session->get("user");
        }
        return null;
    }



    /**
     * Check if logged in user is administrator.
     *
     * @return boolean
     */
    public function isCurrentUserAdmin()
    {
        if ($this->session->has('user')) {
            return $this->session->get('user')->administrator;
        }
        return null;
    }



    /**
     * Generate gravatar from email or return default avatar.
     * @param  string           $email email adress
     * @return string           Gravatar url.
     */
    public function generateGravatarUrl($email = null)
    {
        if ($email) {
            return "https://s.gravatar.com/avatar/" . md5(strtolower(trim($email)));
        }
        return "http://www.gravatar.com/avatar/?d=identicon";
    }
}
