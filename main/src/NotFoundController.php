<?php
/**
 * De NotFound Controller wordt aangeroepen wanneer een route niet bestaat.
 */
class NotFoundController extends Controller
{
    public function index() 
    {
        $this->view('notfound.php');
    }
}