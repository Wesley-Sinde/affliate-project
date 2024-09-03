# Affiliate and Referral Program for Hotspot Billing System

## Overview

This project is an Affiliate and Referral Program integrated with a hotspot billing system. It allows users to register as affiliates, refer new customers, track referrals, manage commissions, and generate reports. Built with Laravel and Tailwind CSS, it streamlines the management of affiliate marketing and referral rewards.

## Key Features

-   **Affiliate Registration**: Users can register as affiliates and receive a unique referral link or code.
-   **Referral Tracking**: Track sign-ups and conversions through referral links or codes.
-   **Commission Management**: Define and manage commission rates, with support for both one-time and recurring commissions.
-   **Dashboard and Reporting**: Affiliates can view their performance metrics; admins can access detailed reports on affiliate performance.
-   **Automated Payouts**: Automated and manual payout options for affiliates with various payment methods.
-   **Integration**: Seamlessly integrates with an existing hotspot billing system.
-   **Security**: Ensures data privacy and compliance with regulations.

## Installation

### Prerequisites

-   PHP 8.x
-   Composer
-   Laravel 9.x
-   Node.js and npm
-   MySQL or another supported database

### Clone the Repository

```bash
git clone https://github.com/Wesley-Sinde/affliate-project.git
cd your-repo-name
```

### Install Dependencies

```bash
composer install
npm install
```

### Environment Setup

Copy the .env.example file to .env and configure your environment settings:

```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

### Run Migrations

Run the database migrations to create the required tables:

```bash
php artisan migrate
```

### Seed Database

Populate the database with dummy data:

```bash
php artisan db:seed
```

### Build Assets

Compile the frontend assets:

```bash
npm run dev
```

### Start the Development Server

```bash
php artisan serve
```

Visit http://localhost:8000 in your browser to see the application in action.

## Usage

1. Register as an Affiliate: Navigate to the registration page and sign up as an affiliate.
2. Generate Referral Links: Use the affiliate dashboard to generate and manage referral links.
3. Track Referrals: View referral statistics and commissions in the dashboard.
4. Admin Functions: Admins can view reports, manage commissions, and approve payouts through the admin panel.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -am 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgements

-   Laravel: The PHP framework used for building the application.
-   Tailwind CSS: The utility-first CSS framework for styling.
-   MikroTik: For providing the hardware and API used in the billing system.
