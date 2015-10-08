<?php

/**
 * Description of payment
 *
 * @author Faizan Ayubi
 */
class Contact extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type text
     * 
     */
    protected $_name;
    
    /**
     * @column
     * @readwrite
     * @type text
     */
    protected $_email;

    /**
     * @column
     * @readwrite
     * @type text
     */
    protected $_subject;
    
    
    /**
     * @column
     * @readwrite
     * @type text
     * 
     * 
     * @validate required, min(3)
     * @label description
     */
    protected $_message;
}
