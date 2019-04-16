# foxStructures
A custom WordPress website theme for Fox Structures

# :metal: Getting started

1. [Pages](#pages)

# :open_file_folder: Basic File Structure

## :page_with_curl: Pages

Each individual page is titled page - page title ex. about = page-about.php

## :dancer: Styles

Do not make style changes in the css directory. The styles for the website are all in the \_scss directory. Each individual page has had its own style sheet setup for styles unique to that page, and then there are sheets setup for general styling like the footer or typography. The \_variables.scss sheet has site wide variables that can be used in your scss sheets.

## \_scss folder

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

## :milky_way: JavaScript

The js folder holds all your JavaScript files

## :computer: Functions

Functions.php contains any custom funtions for the site

# :eyes: Usage

## :black_nib: Writing to your SCSS file

sass --watch \SCSS/style.scss:style.css

## :hammer: Adding projects to the portfolio

I know this may have not been the most elegant way of setting this up but, I don't like using WordPress plugins like contentViews for things like displaying content. I set
things up this way to have full control of styles and usage. I also wanted full control of the order that projects are displayed. Since so many of them have very little to no detail,
I didn't want to bury the good projects like the old site did. Projects are displayed exactly the way you set them, so if you have a great new project to add, add it in the featured projects
section at the top and then move the project you're replacing to the first spot of the main portfolio section so it's easy for site visitors to see.

To allow full customization on project pages, the more detailed projects have their own page files. The projects that have little to no detail just use the default template. To create a
new project page duplicate the oaks golf club page for a good base and start adding in your new info and project images.

### Add your new project to the portfolio.

Projects are stored in the inc folder. inc>projects>projectType

1. Navigate to the folder for the project type that you're creating.
2. In your text editor duplicate one of the existing projects and rename it with whatever your new project is titled. The project file will look like the following:
```html  
<a href="/portfolio/forest-brook-farms/" class="column agricultural">
  <div class="featuredImageWrap">
    <div class="imageWrapper">
      <img src="/wp-content/uploads/2019/03/forestBrookFarmsExteriorSmallMedium.jpg" class="image">
      <?php get_template_part("/inc/portfolio-overlay"); ?>
    </div>
    <div class="projectInfo">
      <h5 class="employeeName"><span class="primaryText">Forest Brook Farms</span></h5>
    </div>
  </div>
</a>
```
3. Change the project url to the new page that you created for this project.
4. Make sure your project has the proper class ex. commercial projects will be classed "column commercial". The class titles are used for the gallery filter so make sure those are accurate
5. Change your projects featured image. To prevent the image issues the old site had I've been using 600x400 images sizes for all projects so the gallery remains consistent. The old images
were all different sizes and created an uneven and scattered gallery display
6. In the projectInfo div change your projects Title
7. Open the portfolio page file page-portfolio.php and add your new template part to the portfolio.
8. Upload and enjoy your new project

## :construction: Adding a new job posting to the careers page

1. Add your new career page to the site
2. Enter your job details and add a featured image to the page. This will be the hero image for the job post
3. Careers pages use the careers-single.php page template. This loads our sidebar and all components for the page.
4. To update the sidebar navigate to the inc folder and find careers-sidebar.php.
5. Add a new list item and upload  

## :rocket: Navigation

This theme has three registered menus. Main menu for the primary navigation, footer menu for the footer menu and mobile menu, for customizing separate menus for each of these locations if needed.
