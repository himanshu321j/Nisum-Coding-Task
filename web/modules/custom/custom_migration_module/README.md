# Custom Migration Module for Drupal

## Overview

The **Custom Migration Module** provides functionality to migrate user data and company information from an external JSON source into Drupal. This module utilizes Drupal's Migrate API to fetch and transform data from a specified endpoint, ensuring a seamless integration into the Drupal user and node entities.

### Features

- Migrate users and their associated companies from an external JSON source.
- Custom mappings for user fields, including name, email, phone, website, address, and geo-location.
- Integration with company entities, linking users to their respective companies.

## Requirements

- Drupal 9 or later
- Proper permissions to install modules and perform migrations

## Installation

1. **Download the Module**
   Clone the module repository or download it to your Drupal installation:

   ```bash
   git clone https://your-repo-url/custom_migration_module.git modules/custom/custom_migration_module
