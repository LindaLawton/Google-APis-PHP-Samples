﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Sheets v4 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Reads and writes Google Sheets.
// API Documentation Link https://developers.google.com/sheets/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/sheets/v4/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Sheets($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'responseValueRenderOption' => '[YourValue]',  // Determines how values in the response should be rendered.The default render option is ValueRenderOption.FORMATTED_VALUE.
            
  //'insertDataOption' => '[YourValue]',  // How the input data should be inserted.
            
  //'valueInputOption' => '[YourValue]',  // How the input data should be interpreted.
            
  //'responseDateTimeRenderOption' => '[YourValue]',  // Determines how dates, times, and durations in the response should berendered. This is ignored if response_value_render_option isFORMATTED_VALUE.The default dateTime render option is [DateTimeRenderOption.SERIAL_NUMBER].
            
  //'includeValuesInResponse' => '[YourValue]',  // Determines if the update response should include the valuesof the cells that were appended. By default, responsesdo not include the updated values.
  'fields' => '*'
);
// Single Request.
$results = valuesAppendExample($service, $spreadsheetId, $range, $optParams);


/**
* Appends values to a spreadsheet. The input range is used to search forexisting data and find a "table" within that range. Values will beappended to the next row of the table, starting with the first column ofthe table. See the[guide](/sheets/api/guides/values#appending_values)and[sample code](/sheets/api/samples/writing#append_values)for specific details of how tables are detected and data is appended.The caller must specify the spreadsheet ID, range, anda valueInputOption.  The `valueInputOption` onlycontrols how the input data will be added to the sheet (column-wise orrow-wise), it does not influence what cell the data starts being writtento.
* @service Authenticated Sheets service.
* @optParams Optional paramaters are not required by a request.
* @spreadsheetId The ID of the spreadsheet to update.
* @range The A1 notation of a range to search for a logical table of data.
Values will be appended after the last row of the table.
* @return AppendValuesResponse
*/
function valuesAppendExample($service, $spreadsheetId, $range, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (spreadsheetId == null)
			throw new Exception("spreadsheetId is required.");
		if (range == null)
			throw new Exception("range is required.");
		// Make the request and return the results.
		return $service->values->AppendValues($spreadsheetId, $range, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
