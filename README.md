# SmartPost Estonian Parcel Terminal Data Fetcher

## Description

This project includes a PHP script (`fetch.php`) for fetching data from the SmartPost API and saving it to a file. The data can be accessed directly from the browser at `https://example.com/smartpost-terminals/places.js`.

The fetch.php script includes a workaround for the SmartPost API's outdated SSL certificate and TLS 1.2 usage. This is done using the curl_setopt function to set the CURLOPT_SSL_CIPHER_LIST option for the cURL session.

Itella SmartPost API documentation:
https://itella.ee/en/business-customer/business-info-help/interface-tutorials/how-to-add-a-dropdown-menu-of-estonian-parcel-terminals/

## Installation

Clone the repository to your web server's document root directory or to a subdirectory of your choice. 

```bash
git clone https://github.com/mnsrt/smartpost-terminals
```

## Usage

Run the fetch.php script with cron to fetch data from the SmartPost API and save it to a file. The script can be run from any directory, but the data file will be saved to the same directory as the script.This script should be run once a day to keep the data up-to-date.

#### Example usage with cron

```bash
# Run the script every day at 18:55
55 18 * * * php /path/to/smartpost-terminals/fetch.php
```


