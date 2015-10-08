<?php

/**
 * Description of appointments
 *
 * @author Faizan Ayubi
 */
class Package extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @index
     */
    protected $_item_id;
    
    /**
     * @column
     * @readwrite
     * @type text
     * 
     */
    protected $_limit;

    /**
     * @column
     * @readwrite
     * @type datetime
     */
    protected $_start;

    /**
     * @column
     * @readwrite
     * @type text
     */
    protected $_duration;

    /**
     * @column
     * @readwrite
     * @type integer
     * @index
     */
    protected $_price;



}
