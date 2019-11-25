# foxStructures
A custom WordPress website theme for Fox Structures

# :metal: Getting started

1. [Pages](#page_with_curl-pages)
2. [Styles](#dancer-styles)
3. [Navigation](#rocket-navigation)
4. [Footer](#shoe-footer)
5. [Homepage](#house-homepage)
6. [About](#cow2-about)
7. [Portfolio](#hammer-adding-projects-to-the-portfolio)
8. [Careers](#construction-adding-a-new-job-posting-to-the-careers-page)
9. [News](#newspaper-news-posts)

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

## :rocket: Navigation

This theme has three registered menus. Main menu for the primary navigation, footer menu for the footer menu and mobile menu, for customizing separate menus for each of these locations if needed.

To edit the main navigation use the header.php file

## :shoe: Footer

Edit the sites footer find footer.php

## :house: Homepage

The homepage uses the front-page.php file

### Editing the services blocks on the homepage

The services blocks can be found in the inc folder, inside the file services-overview.php. This file contains the entire section, holding images, descriptions and links to each service page

### Featured Homepage Projects

The homepage featured projects section can be found in featuredHomepageProjects.php. This again holds all images, titles and links for the entire section.

To add a new featured project, navigate to the homepage, find the homepage Featured Projects Section. Here you can select which projects you want to feature on the homepage. Click update when done.

### Editing the CTA

At the time of this build we were promoting Fox Structures careers and trying to drive viewers to this page. To update this CTA section navigate to the inc folder and find the file CTA.php

## :cow2: About

### The leadership display  

The leadership team section can be found in the inc folder, titled leadership.php.

```html
<a href="/leadership/mark-mashlan/">
  <div class="leaderWrap">
    <div class="imageWrapper">
      <img src="/wp-content/uploads/2018/12/Fox_EmployeeMarkMedium.jpg" class="image" alt="Headshot of Fox Structures President Mark Mashlan">
      <div class="leaderImageOverlay"></div>
    </div>
    <div class="leaderInfo centerText">
      <h5 class="employeeName"><span class="primaryText">Mark Mashlan</span></h5>
      <div class="centerUnderline"></div>
      <h6>President</h6>
    </div>
  </div>
</a>
```

Add or remove your team member as needed. Each individual team member has their own page, where their headshot and bio are displayed. These pages just use the default template.

## :hammer: Adding projects to the portfolio

!!! Update !!!
In order to avoid using WordPress plugins like contentViews for things like displaying content this portfolio now uses a portfolio custom post type for all projects. I wanted to add some inner post navigation, full control of the order that projects are displayed, easier addition of new projects, and better flexibility when selecting related projects.

Since so many projects have very little to no detail, I didn't want to bury the good projects like the old site did. Projects are displayed in the order of their post date. The first three featured projects blocks will use the three latest posts to the site. All posts after the first three are listed underneath the featured projects and can be filtered by project category. When a new project is successfully added these will all update on their own with the newest project being added to the first featured project block on the page.

Featured projects use the template file single-portfolio.

### Add your new project to the portfolio.

Projects are stored in the Portfolio custom post type

1. Navigate to the Portfolio.
2. Click "Add New Project"
3. Enter your project title
4. Make sure to select you project category. This is essential to ensure that your projects show up in the filter section of the portfolio. Without this they will not get displayed or filtered.
5. Set your projects featured image. To prevent the image issues the old site had I've been using 1500x1000 featured images sizes for all projects so the gallery remains consistent. The old images were all different sizes and created an uneven and scattered gallery display
6. Click publish and enjoy your new project

## :construction: Adding a new job posting to the careers page

1. Add your new career page to the site
2. Enter your job details and add a featured image to the page. This will be the hero image for the job post
3. Careers pages use the careers-single.php page template. This loads our sidebar and all components for the page.
4. To update the sidebar navigate to the inc folder and find careers-sidebar.php.
5. Add a new list item and upload  

## Services Pages

Each services page has it’s own single page file. To edit the services sub-nav/sidebar navigate to the inc folder and find services-sidebar.php.

## :newspaper: News Posts  

The news page uses the single.php template file and all archive page files/components can be found in the template-parts folder.

### Adding a blog post  

Nothing fancy here. Simply add a blog post just like you would any standard WordPress site. Add a featured image, add your author and change to the News category.

Hopefully that covers anything that you will need to update with this site.
