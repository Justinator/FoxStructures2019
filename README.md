# foxStructures
A custom WordPress website theme for Fox Structures

# :metal: Getting started

# :open_file_folder: Basic Folder Structure

## images

## inc

The inc folder contains items included in the header and footer, portfolio navigation, svg-icons and more functions that the site uses.

## :milky_way: js

The js folder holds all your JavaScript files

## :dancer: scss

The styles for the website are all in the \_scss directory. Each individual page has had its own style sheet setup for styles unique to that page, and then there are sheets setup for general styling like the footer or typography. The \_variables.scss sheet has site wide variables that can be used in your scss sheets.

## scss folder

### Variables

Variables folder contains our sites variables, mostly color variables for styles throughout the sites

### Breakpoints

This file contains my breakpoints for mobile styling

### Layout

Contains all the styles used for layouts, columns, images, text blocks etc...

### Header

Styling for the sites header/navigation

### Footer

Styling for the sites Footer

### Typography

Typography settings for headers paragraphs etc ...

### Buttons

Styling for our sites buttons and links

### General

Holds any styles that are general or consistent with all pages throughout the site

### Icons

Styling for any icons the site might use

### Individual Pages

Each individual pages custom styles are held in the scss file with the corresponding page name ex. home = home.scss

## template-parts

Here you will find pieces of the page templates. Some are reused on multiple pages so you can edit here once and it will take effect everywhere they are used.

## :computer: Functions

Functions.php contains any custom funtions for the site

## :page_with_curl: Pages

Each individual page is titled page - page title ex. about = page-about.php

# :eyes: Usage

## :hammer: Adding projects to the portfolio

Projects use the Portfolio custom post type. The portfolio archive page uses archive-portfolio.php and the single portfolio posts use the single-portfolio.php template file. Make edits here if needed.

### Add your new project to the portfolio.

In your admin dashboard navigate to portfolio and click add new. Each portfolio post uses Advanced Custom Fields and the field group Featured Project. Select from the fields to input the content you need for your project. Enter in your category and featured image and publish.

## :construction: Adding a new job posting to the careers page

1. Add your new career page to the site
2. Enter your job details and add a featured image to the page. This will be the hero image for the job post
3. Careers pages use the careers-single.php page template. This loads our sidebar and all components for the page.
4. To update the sidebar navigate to the inc folder and find careers-sidebar.php.
5. Add a new list item and upload  

## :hammer: Staff

The leadership team and agricultural team use the custom post type staff. Add a new staff post and select from the category in which they should be listed. The staff archive page uses the archive-staff.php template file and the single staff posts use the single-staff.php template file. Make edits here if needed.

## :rocket: Navigation

This theme has three registered menus. Main menu for the primary navigation, footer menu for the footer menu and mobile menu, for customizing separate menus for each of these locations if needed.
