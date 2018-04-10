# EH-Main

[![Build Status](https://travis-ci.org/EngineeringHouse/EH-Main.svg?branch=master)](https://travis-ci.org/EngineeringHouse/EH-Main)
[![Test Coverage](https://api.codeclimate.com/v1/badges/ef030092fee14e1eb668/test_coverage)](https://codeclimate.com/github/EngineeringHouse/EH-Main/test_coverage)
[![Maintainability](https://api.codeclimate.com/v1/badges/ef030092fee14e1eb668/maintainability)](https://codeclimate.com/github/EngineeringHouse/EH-Main/maintainability)

Overarching services suite for floor operations.

Features will include:
- Smart rooms
- 2016 Freshman Project
- Calendar / Room reservations
- Attendance
- Inventory

### Local Installation

#### Dependencies:
- Laravel 5.6
- Laravel Valet (optional but recommended for development)
- PHP 7.1.x
- Postgresql
- Node & NPM

*Note: These instructions assume that you already have all dependencies installed*

#### Step 1:
Clone this repository

#### Step 2:
Run `npm install` and `npm run dev` in the project directory

#### Step 3:
Make a new Postgres db named `EH_Main` 

#### Step 4:
Run migrations: `php artisan migrate`

#### Step 5:
Have Laravel Valet?
 
Run `valet link`, and then open `http://eh-main.test` in a browser to make sure the installation worked
 
Otherwise run `php artisan serve` and open `http://localhost:8000`