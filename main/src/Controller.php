<?php
/**
 * Abstracte Controller Klasse.
 * 
 * Deze klasse mag je niet instantieren alleen de subklassen.
 */
abstract class Controller 
{

    // De methode moet door de subklasse geimplementeerd worden.
    public abstract function index();

    // Deze methode wordt gedeeld met alle subklassen.
    public function view(string $filename, ...$params) {
        require VIEWS_PATH . $filename;
    }
}