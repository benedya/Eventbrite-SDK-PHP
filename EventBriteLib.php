<?php
/*
 * EventBriteLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/01/2015
 */
// This snippet is adopted from Stripe SDK.
if (!function_exists('curl_init')) {
  throw new Exception('EventBriteLib needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('EventBriteLib needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('EventBriteLib needs the Multibyte String PHP extension.');
}

// This dependency shall be resolved by composer
require_once('packages/apimatic/unirest-php/lib/Unirest.php');

// APIMATIC Helper Files
require_once(dirname(__FILE__) . '/EventBriteLib/APIHelper.php');
require_once(dirname(__FILE__) . '/EventBriteLib/APIException.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Configuration.php');

// Controllers
require_once(dirname(__FILE__) . '/EventBriteLib/Controllers/EventController.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Controllers/UserController.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Controllers/APIController.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Controllers/OrderController.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Controllers/ContactController.php');

// Models
require_once(dirname(__FILE__) . '/EventBriteLib/Models/TicketClassBody.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Events.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Discount.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AccessCode.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Venue.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Address.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Organizer.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Contact.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/GeteventSearchResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Pagination.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/EventSearchResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/TicketClasses.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Format.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Subcategory.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Category.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/VenueSearchResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AddressVenue.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/OrganizerEventSearch.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Description.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Logo.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/DateTimeZone.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/CurrencyModel.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetreiveEventCategoryResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeTeam.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeBarcodes.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeAnswers.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeAddress.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeProfile.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveEventOrderResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Order.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/EventOrder.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/AttendeeOrder.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Costs.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/OrderAttendee2.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/GetEventDiscountsResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/DiscountEvent.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/GetEventAccessCodesResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/EventAccessCode.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveEventTransferResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Transfer.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Dates.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Fees.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Source.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Destination.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveEventTeamsResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Creator.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Emails.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveEventTeamAttendeesResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveYourDetailResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveUserOwnedEventsResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/EventsUserOwned.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/TicketClassUserOwned.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/UserOwnedEventsOrder.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/RetrieveUserOwnedEventsOrdersResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/ContactListResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/ContactLists.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/ContacListDetailResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/TicketClassResponse.php');
require_once(dirname(__FILE__) . '/EventBriteLib/Models/Ticket.php');
