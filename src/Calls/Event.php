<?php namespace Eventbrite\Calls;

use Eventbrite\Configurations\Configuration;
use Eventbrite\Exceptions\APIException;
use Eventbrite\Helpers\APIHelper;
use Unirest\Request;

/*
 * EventBriteLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/01/2015
 */

class Event
{
    private function val($arr, $key, $default = '')
    {
        return isset($arr[$key]) ? $arr[$key] : $default;
    }

    /**
     * This endpoint allows you to retrieve Events from across Eventbrite's directory, regardless of which user owns the event � and of course, this endpoint will only return Events that are "public".
     * @param  array                  $options                           Array with all options for search
     * @param  string|null            $options['search']                 Optional parameter: TODO: type description
     * @param  DateTime|null          $options['dateModifiedRangeStart'] Optional parameter: TODO: type description
     * @param  DateTime|null          $options['dateCreatedKeyword']     Optional parameter: TODO: type description
     * @param  DateTime|null          $options['dateCreatedRangeEnd']    Optional parameter: TODO: type description
     * @param  DateTime|null          $options['dateCreatedRangeStart']  Optional parameter: TODO: type description
     * @param  string|null            $options['startDateKeyword']       Optional parameter: TODO: type description
     * @param  DateTime|null          $options['startDateRangeEnd']      Optional parameter: TODO: type description
     * @param  DateTime|null          $options['startDateRangeStart']    Optional parameter: TODO: type description
     * @param  string|null            $options['formats']                Optional parameter: TODO: type description
     * @param  string|null            $options['categories']             Optional parameter: TODO: type description
     * @param  string|null            $options['trackingCode']           Optional parameter: TODO: type description
     * @param  DateTime|null          $options['dateModifiedRangeEnd']   Optional parameter: TODO: type description
     * @param  string|null            $options['userId']                 Optional parameter: TODO: type description
     * @param  string|null            $options['venueCountry']           Optional parameter: TODO: type description
     * @param  string|null            $options['venueRegion']            Optional parameter: TODO: type description
     * @param  string|null            $options['venueCity']              Optional parameter: TODO: type description
     * @param  string|null            $options['locationWithin']         Optional parameter: TODO: type description
     * @param  string|null            $options['locationLongitude']      Optional parameter: TODO: type description
     * @param  string|null            $options['locationLatitude']       Optional parameter: TODO: type description
     * @param  string|null            $options['locationAddress']        Optional parameter: TODO: type description
     * @param  bool|null              $options['popular']                Optional parameter: TODO: type description
     * @param  string|null            $options['sortBy']                 Optional parameter: TODO: type description
     * @param  string|null            $options['sinceId']                Optional parameter: TODO: type description
     * @param  string|null            $options['organizerId']            Optional parameter: TODO: type description
     * @param  string|null            $options['dateModifiedKeyword']    Optional parameter: TODO: type description
     * @return GeteventSearchResponse response from the API call*/
    public function getSearch(
        $options
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/search/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
            'q'                         => $this->val($options, 'search'),
            'date_modified.range_start' => $this->val($options, 'dateModifiedRangeStart'),
            'date_created.keyword'      => $this->val($options, 'dateCreatedKeyword'),
            'date_created.range_end'    => $this->val($options, 'dateCreatedRangeEnd'),
            'date_created.range_start'  => $this->val($options, 'dateCreatedRangeStart'),
            'start_date.keyword'        => $this->val($options, 'startDateKeyword'),
            'start_date.range_end'      => $this->val($options, 'startDateRangeEnd'),
            'start_date.range_start'    => $this->val($options, 'startDateRangeStart'),
            'formats'                   => $this->val($options, 'formats'),
            'categories'                => $this->val($options, 'categories'),
            'tracking_code'             => $this->val($options, 'trackingCode'),
            'date_modified.range_end'   => $this->val($options, 'dateModifiedRangeEnd'),
            'user.id'                   => $this->val($options, 'userId'),
            'venue.country'             => $this->val($options, 'venueCountry'),
            'venue.region'              => $this->val($options, 'venueRegion'),
            'venue.city'                => $this->val($options, 'venueCity'),
            'location.within'           => $this->val($options, 'locationWithin'),
            'location.longitude'        => $this->val($options, 'locationLongitude'),
            'location.latitude'         => $this->val($options, 'locationLatitude'),
            'location.address'          => $this->val($options, 'locationAddress'),
            'popular'                   => $this->val($options, 'popular'),
            'sort_by'                   => $this->val($options, 'sortBy'),
            'since_id'                  => $this->val($options, 'sinceId'),
            'organizer.id'              => $this->val($options, 'organizerId'),
            'date_modified.keyword'     => $this->val($options, 'dateModifiedKeyword'),
            'page'                       => $this->val($options, 'page'),
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * Ticket Classes are the types of attendance that are associated with an event (examples might be �VIP�, �General Admission�, or �Early Bird�). This endpoint allows you to ticket classes on a specific event.
     * @param  TicketClassBody $body Required parameter: TODO: type description here
     * @return void            response from the API call*/
    public function createTicketType(
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3//events/{Event ID}/ticket_classes/';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Content-type' => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string $eventID       Required parameter: TODO: type description here
     * @param  string $ticketClassID Required parameter: TODO: type description here
     * @return Ticket response from the API call*/
    public function getTicketTypeDetails(
        $eventID,
        $ticketClassID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/ticket_classes/{Ticket Class ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            'Ticket Class ID' => $ticketClassID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string          $eventID       Required parameter: TODO: type description here
     * @param  string          $ticketClassID Required parameter: TODO: type description here
     * @param  TicketClassBody $body          Required parameter: TODO: type description here
     * @return Ticket          response from the API call*/
    public function updateTicket(
        $eventID,
        $ticketClassID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/ticket_classes/{Ticket Class ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            'Ticket Class ID' => $ticketClassID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare parameters
        $parameters = array(
            'body' => json_encode($body)
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, $parameters);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * This endpoint allows you to retrieve Event category options from across Eventbrites directory.
     * @return RetreiveEventCategoryResponse response from the API call*/
    public function getCategoriesList()
    {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/categories';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * Events are what Eventbrite is all about! Many of Eventbrite�s API use cases resolve around pulling details of a specific event within an Eventbrite account.
     * @param  Events $body Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function create(
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Content-type' => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string              $eventID Required parameter: TODO: type description here
     * @return EventSearchResponse response from the API call*/
    public function getDetails(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string $eventID Required parameter: TODO: type description here
     * @param  Events $body    Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function updateDetails(
        $eventID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string $eventID Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function publish(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/publish/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string $eventID Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function unpublish(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/unpublish/';

        //process required query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string           $status       Required parameter: TODO: type description here
     * @param  string           $changedSince Required parameter: TODO: type description here
     * @param  string           $expand       Required parameter: TODO: type description here
     * @return AttendeeResponse response from the API call*/
    public function getAttendees(
        $eventID,
        $status = null,
        $changedSince = null
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/attendees/';

        //process required query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //process optional query parameters
        if ($status) {
            APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
                'status' => $status,
            ));
        }
        if ($changedSince) {
            APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
                'changed_since' => $changedSince,
            ));
        }

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string           $eventID    Required parameter: TODO: type description here
     * @param  string           $attendeeID Required parameter: TODO: type description here
     * @param  string           $expand     Required parameter: TODO: type description here
     * @return AttendeeResponse response from the API call*/
    public function getAttendeesDetail(
        $eventID,
        $attendeeID,
        $expand
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/attendees/{Attendee ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            'Attendee ID' => $attendeeID,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
            'expand' => $expand,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string                     $eventID      Required parameter: TODO: type description here
     * @param  string                     $status       Required parameter: TODO: type description here
     * @param  string                     $changedSince Required parameter: TODO: type description here
     * @return RetrieveEventOrderResponse response from the API call*/
    public function getOrders(
        $eventID,
        $status = null,
        $changedSince = null
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/orders/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //process optional query parameters
        if ($status) {
            APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
                'status' => $status,
            ));
        }
        if ($changedSince) {
            APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
                'changed_since' => $changedSince,
            ));
        }

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string                    $eventID Required parameter: TODO: type description here
     * @return GetEventDiscountsResponse response from the API call*/
    public function getDiscounts(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/discounts/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string   $eventID Required parameter: TODO: type description here
     * @param  Discount $body    Required parameter: TODO: type description here
     * @return void     response from the API call*/
    public function createDiscountCode(
        $eventID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/discounts/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string   $eventID Required parameter: TODO: type description here
     * @param  Discount $body    Required parameter: TODO: type description here
     * @return void     response from the API call*/
    public function updateDiscountCode(
        $eventID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/discounts/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
            'Event ID' => $eventID,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string                      $eventID Required parameter: TODO: type description here
     * @return GetEventAccessCodesResponse response from the API call*/
    public function getAccessCodes(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/access_codes/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string     $eventID Required parameter: TODO: type description here
     * @param  AccessCode $body    Required parameter: TODO: type description here
     * @return void       response from the API call*/
    public function createAccessCodes(
        $eventID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/access_codes/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string     $eventID Required parameter: TODO: type description here
     * @param  AccessCode $body    Required parameter: TODO: type description here
     * @return void       response from the API call*/
    public function updateAccessCodes(
        $eventID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/access_codes/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string   $eventID Required parameter: TODO: type description here
     * @return Transfer response from the API call*/
    public function getTransfer(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/transfers/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string                     $eventID Required parameter: TODO: type description here
     * @return RetrieveEventTeamsResponse response from the API call*/
    public function getTeams(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/teams/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string                     $eventID Required parameter: TODO: type description here
     * @return RetrieveEventTeamsResponse response from the API call*/
    public function getTeamDetails(
        $eventID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/teams/{Team ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
            'Event ID' => $eventID,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string $eventID Required parameter: TODO: type description here
     * @param  string $teamID  Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function getTeamAttendees(
        $eventID,
        $teamID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/events/{Event ID}/teams/{Team ID}/attendees/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Event ID' => $eventID,
            'Team ID' => $teamID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }
}
