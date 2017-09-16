<?php

namespace Peto16\Login;

/**
 * Class Login
 */
class Login
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
    public function inject($session, $db)
    {
        $this->session = $session;
        $this->db = $db;
        return $this;
    }



    /**
     * Login and set session variable.
     *
     * @param string        $username
     * @param string        $password
     * @return void
     */
    public function login($username, $password)
    {
        $this->db->connect();
        $dbUser = $this->db->executeFetchAll("SELECT * FROM ramverk1_Users WHERE username=?", [$username]);
        try {
            if (empty($dbUser)) {
                throw new Exception("Missing user");
            }
            if ($this->validate($password, $dbUser[0]->password)) {
                $this->session->set("user", $dbUser[0]);
                return true;
            }
            throw new Exception("Error Wrong Password");
        } catch (Exception $e) {
            echo "Caught exception: ", $e->getMessage();
        }
    }




    /**
     * Validate pasword
     * @method              password_verify Method to verify password
     * @param  string       $password Password to be validated.
     * @return boolean      Return true if valid else false.
     */
    private function validate($password, $dbpassword)
    {
        return password_verify($password, $dbpassword);
    }



    /**
     * Logout user and unset session variable.
     *
     * @return boolean
     */
    public function logout()
    {
        return $this->session->delete('user');
    }
}
