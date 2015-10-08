<?php

/**
 * The Default Example Controller Class
 *
 * @author Faizan Ayubi
 *
 */
use Shared\Controller as Controller;
use Framework\Registry as Registry;
use Framework\RequestMethods as RequestMethods;

class Home extends Controller {

    public function index() {
    	/*
         $model = new Contact();
        $db = Registry::get("database");
        $db->sync($model);
        */
    }
    public function contact() {
	
	if(RequestMethods::post("contact")=="conatct-me"){
    	$contactform= new Contact(array(
    	"name" => RequestMethods::post("name"),
    	"email" => RequestMethods::post("email"),
    	"subject" => RequestMethods::post("subject"),
    	"message" =>RequestMethods::post("message")
        ));     
        $contactform->save();
        $view->set("msg", "Thankyou we will be in touch with you as sson as possible");
    }
}
    public function about(){
        
    }
    public function gallery() {
        
    }

}
