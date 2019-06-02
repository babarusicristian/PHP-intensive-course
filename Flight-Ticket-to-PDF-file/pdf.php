<?php

use NumberToWords\NumberToWords;

include 'includes/head.php';
require_once 'vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

//handling and processing data from the form
$varDepartureAirport = '';
$varArrivalAirport = '';
$varDepartureTime = null;
$varArrivalTime = null;
$varFlightDuration = null;
$varTicketPrice = null;
$varTimeZoneDeparture = null;
$varTimeZoneArrival = null;
$varPassengerName = '';
$varPriceInWords = '';
$arrAllDatas = [];

//click on button
if (isset($_POST['generatePDF'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //form data verifications ...
        if ($_POST['departureAirport'] === $_POST['arrivalAirport']) {
            echo '<p class="error-msg">' . 'Departure and Arrival Airports are the same! Please correct the error' . '</p>';
        } elseif ($_POST['ticketPrice'] < 0.01) {
            echo '<p class="error-msg">' . 'Invalid! Price ticket' . '</p>';
        } else {
            //finished all verifications

            //setting timezone for departure and arrival
            $varTimeZoneDeparture = $airportsList[$_POST['departureAirport']]['timezone'];
            $varTimeZoneArrival = $airportsList[$_POST['arrivalAirport']]['timezone'];

            //setting departure and arrival time formats
            try {
                $myObjDepTime = new DateTime($_POST['departureTime']);
                $varDepartureTime = $myObjDepTime->format('Y.m.d H:i:s');

                $myObjArrTime = new DateTime($_POST['arrivalTime']);
                $varArrivalTime = $myObjArrTime->format('Y.m.d H:i:s');

                //manipulate arrival time by flight duration
                $diffInTime = $myObjArrTime->getTimestamp() - $myObjDepTime->getTimestamp();
                $varFlightDuration = $myObjArrTime->diff($myObjDepTime);

                //custom display formating
                $tempFormat = $varFlightDuration->h . 'h ' . $varFlightDuration->i . 'm';
                $varFlightDuration = $tempFormat;

            } catch (Exception $e) {
                echo '<p class="error-msg">' . 'Exception: ' . $e->getMessage() . '</p>';
            }

            //setting fake passenger name
            $faker = Faker\Factory::create();
            $varPassengerName = $faker->name;

            //original ticket price
            $varTicketPrice = $_POST['ticketPrice'];

            //price to words
            if (strpos($_POST['ticketPrice'], '.')) {
                $tempSplit = explode('.', $_POST['ticketPrice']);
                $varTicketPriceWords = $tempSplit[0] . $tempSplit[1];
            } else {
                $varTicketPriceWords = $_POST['ticketPrice'] . '00';
            }

            $numberToWords = new NumberToWords();
            $numberTransformer = $numberToWords->getCurrencyTransformer('en');
            $varPriceInWords = $numberTransformer->toWords($varTicketPriceWords, 'EUR');

            //creating array with all data
            $arrAllDatas = [
                'departureAirportAndCODE' => $airportsList[$_POST['departureAirport']]['name'] . ' ' . $airportsList[$_POST['departureAirport']]['code'],
                'arrivalAirportAndCODE' => $airportsList[$_POST['arrivalAirport']]['name'] . ' ' . $airportsList[$_POST['arrivalAirport']]['code'],
                'departureTimeAndZoneTime' => $varDepartureTime . "<br>" . $varTimeZoneDeparture,
                'arrivalTimeAndZoneTime' => $varArrivalTime . "<br>" . $varTimeZoneArrival,
                'flightDuration' => $varFlightDuration,
                'passengerName' => $varPassengerName,
                'priceAndPriceInWords' => $varTicketPrice . "<br>" . $varPriceInWords
            ];


            //generating PDF file
            $htmlData = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generated PDF file</title>
    <link href="styles/myPdfStyle.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image: none;">

<table>
    <thead>
    <tr>
        <th id="tableTitle" scope="col" colspan="2"> Coders Lab Airlines</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="fromTo">FROM</td>
        <td class="fromTo">TO</td>
    </tr>
    <tr>
        <td class="dest">' . $arrAllDatas['departureAirportAndCODE'] . '</td>
        <td class="dest">' . $arrAllDatas['arrivalAirportAndCODE'] . '</td>
    </tr>
    <tr>
        <td class="onlyBold">Departure (local time)</td>
        <td class="onlyBold">Arrival (local time)</td>
    </tr>
    <tr>
        <td class="dateHours">' . $arrAllDatas['departureTimeAndZoneTime'] . '</td>
        <td class="dateHours">' . $arrAllDatas['arrivalTimeAndZoneTime'] . '</td>
    </tr>
    <tr>
        <td class="dest" scope="col" colspan="2">Flight time</td>
    </tr>
    <tr>
        <td class="onlySize" colspan="2">' . $arrAllDatas['flightDuration'] . '</td>
    </tr>
    <tr>
        <td class="dest" scope="col" colspan="2">Passenger</td>
    </tr>
    <tr>
        <td class="onlySize red" colspan="2">' . $arrAllDatas['passengerName'] . '</td>
    </tr>
    <tr>
        <td class="dest" scope="col" colspan="2">Price (euro)</td>
    </tr>
    <tr>
        <td class="onlySize green" colspan="2">' . $arrAllDatas['priceAndPriceInWords'] . '</td>
    </tr>
    </tbody>
</table>
</body>
</html>';
            $mpdf = new \Mpdf\Mpdf();
            try {
                $mpdf->WriteHTML($htmlData);
                $mpdf->Output();
            } catch (\Mpdf\MpdfException $e) {
                echo '<p class="error-msg">' . 'Exception: ' . $e->getMessage() . '</p>';
            }
        }
    }
    var_dump($arrAllDatas);
}