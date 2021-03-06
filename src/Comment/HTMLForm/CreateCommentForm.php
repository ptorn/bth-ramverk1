<?php

namespace Peto16\Comment\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \Peto16\Comment\Comment;

/**
 * Example of FormModel implementation.
 */
class CreateCommentForm extends FormModel
{
    /**
     * Constructor injects with DI container.
     *
     * @param Anax\DI\DIInterface $di a service container
     */
    public function __construct(DIInterface $di)
    {
        parent::__construct($di);
        $this->form->create(
            [
                "id" => __CLASS__,
                "legend" => "Lägg till kommentar",
            ],
            [
                "title" => [
                    "label"       => "Titel",
                    "type"        => "text",
                ],

                "comment" => [
                    "label"       => "Kommentar",
                    "type"        => "textarea",
                ],

                "submit" => [
                    "type" => "submit",
                    "value" => "Lägg till",
                    "callback" => [$this, "callbackSubmit"]
                ],
            ]
        );
    }



    /**
     * Callback for submit-button which should return true if it could
     * carry out its work and false if something failed.
     *
     * @return boolean true if okey, false if something went wrong.
     */
    public function callbackSubmit()
    {
        // Get values from the submitted form and create comment object.
        $comment = new Comment();
        $comment->userId = $this->di->get("userService")->getCurrentLoggedInUser()->id;
        $comment->title = $this->form->value("title");
        $comment->comment = $this->form->value("comment");

        // Save to database
        $this->di->get("commentService")->addComment($comment);

        $this->form->addOutput("Kommentar skapad.");
        return true;
    }
}
