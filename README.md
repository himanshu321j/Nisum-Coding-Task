# Drupal Migration Process

This document outlines the process for migrating users and companies into a Drupal site using custom migration modules.

## Requirements

- Drupal 9 or later
- Custom migration module
- Access to the internet to fetch JSON data from `https://jsonplaceholder.typicode.com/users`

## Migration Overview

This migration consists of two main parts:
1. **User Migration**: Migrating users from a JSON API into Drupal's user entity.
2. **Company Migration**: Migrating company data associated with users.

### Migration Files

The following migration YAML files are included in the custom module:

- `user_migration.yml`: Defines the process for migrating users.
- `company_migration.yml`: Defines the process for migrating companies.

### Migration Structure

#### User Migration

This migration fetches user data and maps the following fields:

- **Name**: `field_name`
- **Username**: `field_username`
- **Email**: `mail`
- **Phone**: `field_phone`
- **Website**: `field_website`
- **Street**: `field_street`
- **Suite**: `field_suite`
- **City**: `field_city`
- **Zipcode**: `field_zipcode`
- **Latitude**: `field_geo_lat`
- **Longitude**: `field_geo_lng`
- **Company**: `field_company`

#### Company Migration

This migration fetches company data and maps the following fields:

- **User ID**: `id`
- **Company Name**: `company_name`
- **Catch Phrase**: `field_catchphrase`
- **BS**: `field_bs`

### Running the Migrations

To run the migrations, use the following Drush commands:

1. **Import the Company Migration**:

   ```bash
   drush migrate:import company_migration
   drush migrate:import user_migration
