# QOT

Quaver Official Tournament - Website

## About this project

This project aims to be useful for everyone who is interested in hosting tournament.

## What the project contains
1. Login with Quaver
2. Link Discord
3. Join staff form
4. Player registration
5. Suggest maps form
6. Basic rules page
7. Staff page (manual)
8. Basic admin panel with information and form data
9. [QOT.Bot](https://github.com/AiAe/qot.bot) to give player tournament role and change thair nick to quaver username
10. Mappool manage
11. API - Players, Mappoo, Staff
12. Supports both modes (keys4, keys7) - only one can be selected

## ToDos
1. Edit pages from admin panel

## Install
1. Clone the project
2. Configure the server to use `/public` for root directory
3. Copy `.env.example` and rename to `.env` and configure it
4. Run `composer install`
5. Run `php artisan key:generate`
6. Run `php artisan migrate`

## Deploying
`sh deploy.sh`
