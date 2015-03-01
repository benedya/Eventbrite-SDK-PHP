<?php
/*
 * EventBriteLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/01/2015
 */

class Venue {
    /**
     * TODO: Write general description for this method
     * @param string $venue.name public property
     */
    protected $venue.name;

    /**
     * TODO: Write general description for this method
     * @param Address $venue.address public property
     */
    protected $venue.address;

    /**
     * TODO: Write general description for this method
     * @param string $venue.latitude public property
     */
    protected $venue.latitude;

    /**
     * TODO: Write general description for this method
     * @param string $venue.longitude public property
     */
    protected $venue.longitude;

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