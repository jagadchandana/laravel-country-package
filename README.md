**Laravel package to get country data, codes, dial codes, flags, and more.**

---

## About

This package provides an easy way to access country information such as country names, ISO codes, dial codes, flags, currency, languages, and other details inside your Laravel application.

You can fetch all countries, search by country code, or search by country name easily using a simple API.

This package loads data from a JSON file bundled within the package — so it works offline with no external API calls.

---

## Features

- Get all country data as a Laravel collection
- Retrieve country details by ISO 2-letter country code
- Retrieve country details by country name
- Includes flags (Unicode emojis), dial codes, currency info, official languages, capital city, timezones, top-level domains, population, area, and more
- Lightweight JSON-based data source
- Easy integration with Laravel via service provider and auto-discovery

---

## Installation

Require the package via Composer:

```bash
composer require jcs/country
