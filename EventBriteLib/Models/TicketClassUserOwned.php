<?php
/*
 * EventBriteLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/01/2015
 */

class TicketClassUserOwned {
    /**
     * TODO: Write general description for this method
     * @param string $id public property
     */
    protected $id;

    /**
     * TODO: Write general description for this method
     * @param string $name public property
     */
    protected $name;

    /**
     * TODO: Write general description for this method
     * @param Costs $cost public property
     */
    protected $cost;

    /**
     * TODO: Write general description for this method
     * @param Fees $fee public property
     */
    protected $fee;

    /**
     * TODO: Write general description for this method
     * @param CurrencyModel $currency public property
     */
    protected $currency;

    /**
     * TODO: Write general description for this method
     * @param bool $free public property
     */
    protected $free;

    /**
     * TODO: Write general description for this method
     * @param int $minimum_quantity public property
     */
    protected $minimum_quantity;

    /**
     * TODO: Write general description for this method
     * @param int $maximum_quantity public property
     */
    protected $maximum_quantity;

    /**
     * TODO: Write general description for this method
     * @param int $quantity_total public property
     */
    protected $quantity_total;

    /**
     * TODO: Write general description for this method
     * @param int $quantity_sold public property
     */
    protected $quantity_sold;

    /**
     * TODO: Write general description for this method
     * @param DateTimeZone $sales_start public property
     */
    protected $sales_start;

    /**
     * TODO: Write general description for this method
     * @param DateTimeZone $sales_end public property
     */
    protected $sales_end;

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }
} 