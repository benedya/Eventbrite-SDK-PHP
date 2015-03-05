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

class User
{
    /**
     * TODO: type endpoint description here
     * @param  string                          $userID  Required parameter: TODO: type description here
     * @param  string                          $status  Optional parameter: TODO: type description here
     * @param  string                          $orderBy Optional parameter: TODO: type description here
     * @return RetrieveUserOwnedEventsResponse response from the API call*/
    public function getOwnEvents(
        $userID,
        $status = null,
        $orderBy = null
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/owned_events/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
            'status' => $status,
            'order_by' => $orderBy,
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
     * @return void response from the API call*/
    public function getOwnDetail()
    {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/me/';

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

        return $response->body;
    }

    /**
     * TODO: type endpoint description here
     * @param  string                     $userID Required parameter: TODO: type description here
     * @return RetrieveYourDetailResponse response from the API call*/
    public function getOtherUserDetail(
        $userID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
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
     * @param  string                     $userID Required parameter: TODO: type description here
     * @return RetrieveEventOrderResponse response from the API call*/
    public function getOwnOrders(
        $userID,
        $changedSince = null
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/orders/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            ));

        //process optional query parameters
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
     * @param  string                     $orderID Required parameter: TODO: type description here
     * @return RetrieveEventOrderResponse response from the API call*/
    public function getOrderDetails(
        $orderID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/orders/{Order ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'Order ID' => $orderID,
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
     * @param  string           $userID       Required parameter: TODO: type description here
     * @param  string           $status       Optional parameter: TODO: type description here
     * @param  string           $changedSince Optional parameter: TODO: type description here
     * @return AttendeeResponse response from the API call*/
    public function getOwnEventsAttendees(
        $userID,
        $status = null,
        $changedSince = null
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/owned_event_attendees/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
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
     * @param  Venue $body Required parameter: TODO: type description here
     * @return void  response from the API call*/
    public function createVenue(
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/venues/';

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
     * @param  string $userID Required parameter: TODO: type description here
     * @return Venue  response from the API call*/
    public function getVenue(
        $userID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/venues/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
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
     * @param  string $userID  Required parameter: TODO: type description here
     * @param  string $venueID Required parameter: TODO: type description here
     * @param  Venue  $body    Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function updateVenue(
        $userID,
        $venueID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/venues/{Venue ID}/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array(
            'User ID' => $userID,
            'Venue ID' => $venueID,
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
     * @param  string               $userID Required parameter: TODO: type description here
     * @return OrganizerEventSearch response from the API call*/
    public function getOrganizer(
        $userID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/organizers/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
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
     * @param  Organizer $body Required parameter: TODO: type description here
     * @return void      response from the API call*/
    public function createOrganizer(
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/organizers/';

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
     * @param  string    $userID Required parameter: TODO: type description here
     * @param  Organizer $body   Required parameter: TODO: type description here
     * @return void      response from the API call*/
    public function updateOrganizer(
        $userID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/organizers/1234';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
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
     * @param  string $userID Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function getContactList(
        $userID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/contact_lists/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
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

    /**
     * TODO: type endpoint description here
     * @param  string      $userID Required parameter: TODO: type description here
     * @param  string|null $name   Optional parameter: TODO: type description here
     * @return void        response from the API call*/
    public function createNewContactList(
        $userID,
        $name = null
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/contact_lists/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, $name);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string              $userID        Required parameter: TODO: type description here
     * @param  string              $contactListID Required parameter: TODO: type description here
     * @return ContactListResponse response from the API call*/
    public function retrieveDetailsOfContactList(
        $userID,
        $contactListID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/contact_lists/{Contact List ID}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            'Contact List ID' => $contactListID,
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
     * @param  string $userID         Required parameter: TODO: type description here
     * @param  string $mContactListID Required parameter: TODO: type description here
     * @param  string $name           Required parameter: TODO: type description here
     * @return void   response from the API call*/
    public function updateNameOfContactList(
        $userID,
        $mContactListID,
        $name
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/contact_lists/{Contact List ID}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            '{Contact List ID' => $mContactListID,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array(
            'User-Agent' => 'APIMATIC 2.0',
            'Authorization' => sprintf('Bearer %1$s', Configuration::token())
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, $name);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response code: ".$response->code.". ".$response->body->error_description, $response->code);
        }
    }

    /**
     * TODO: type endpoint description here
     * @param  string                   $userID        Required parameter: TODO: type description here
     * @param  string                   $contactListID Required parameter: TODO: type description here
     * @return ContacListDetailResponse response from the API call*/
    public function getAssociatedContact(
        $userID,
        $contactListID
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/contact_lists/{Contact List ID}/contacts';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            'Contact List ID' => $contactListID,
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
     * @param  string  $userID        Required parameter: TODO: type description here
     * @param  string  $contactListID Required parameter: TODO: type description here
     * @param  Contact $body          Required parameter: TODO: type description here
     * @return void    response from the API call*/
    public function addContactToList(
        $userID,
        $contactListID,
        $body
    ) {
        //the base uri for api requests
        $queryBuilder = Configuration::baseUri();

        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v3/users/{User ID}/contact_lists/{Contact List ID}/contacts';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array(
            'User ID' => $userID,
            'Contact List ID' => $contactListID,
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
}