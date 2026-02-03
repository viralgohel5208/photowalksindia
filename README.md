## About Laravel
Event & Schedule Management Web Application (Laravel)

This project is a Laravel-based web application that provides a complete event scheduling, registration, and content management system with a secure admin panel and a public-facing website.

The system is designed to manage event schedules across cities, handle user registrations, maintain website content, and provide administrators with full control over data, visibility, and operational workflows.

## Core Features
## Authentication & Admin Panel

- Secure admin authentication with email verification
- Admin dashboard with profile and password management
- Role-ready structure with permission cache management
- System maintenance routes for migrations, seeding, cache clearing, and optimization

## Admin Modules
## Schedule Management

- Create, edit, view, and delete schedules
- City-wise schedule filtering
- Status management for schedules (active / inactive)
- Registration list management with export functionality
- Schedule content page customization
- Detection of duplicate or existing schedules

## User & Registration Handling

- Schedule-based user registrations
- Registration listing and deletion
- Export registered users data
- Registration on/off control module

## Content Management System (CMS)

- Home Page content management
- About Us page content management
- Contact Us page content management
- FAQ management
- Gallery management with status control
- Home page slider management
- Front advertisement banner configuration

## City Management

- Create and manage cities used for schedule filtering
- City-based routing and schedule display

## Contact & Subscriber Management

- Contact form submissions with admin listing and export
- Subscriber email collection from the frontend
- Admin management of contact records

## Frontend Features
## Public Website

- Home page with dynamic sliders and content
- Schedule listing with optional city-based filtering
- Schedule detail pages with registration functionality
- Completed schedules listing
- Gallery display
- About Us and Contact Us pages
- Contact form and newsletter subscription support

## System Architecture Highlights

- Modular route grouping for admin and frontend
- Middleware-protected admin routes (auth, verified)
- AJAX-based datatable endpoints for efficient data handling
- Export-ready endpoints for reports and registrations
- CMS-driven pages for non-technical content updates

## Technology Stack

- **Backend:** Laravel Framework
- **Authentication:** Laravel Auth with email verification
- **Frontend:** Blade Templates
- **Database:** MySQL (or compatible)
- **Architecture:** MVC with controller-based route grouping