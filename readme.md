# Content Type Standards

The purpose of this repository is to create an open set of standards for the WordPress developer community on how to name custom post types as well as related taxonomies and metadata.  

The need for a standard on common post types has been clear for years.  However, we've never taken the initiative and put together a list.  We need some sort of standard, even if it's loose and flexible, so that multiple plugins can compete in the same space without users losing access to their data when switching between plugins.

## Reasons for a standard

* Less worry about what to name things when creating a plugin.
* We can have competing plugins in the same space.
* Cool things like add-on plugins become easier to build.
* Users can switch between similar plugins to find the one they like best.
* It'd be easier to push for things in core WP like custom Dashicons.
* Theme authors could potentially support multiple plugins.

If plugin authors have some standards to go by, it'd make life so much easier for both developers and users.

## What this project is for

First and foremost, the project is for establishing some standards for plugin authors to follow.  

A secondary goal might be for us to put together a few PHP scripts to copy/paste for quick registration of a post type or taxonomy.  That way, there's even less confusion about how to register a post type or taxonomy following these standards.

## Some guidelines

This is a jumping off point in how we should handle things.  This is based off core WordPress' methods.

### Post types and taxonomies

* Names should be all lowercase (e.g., `post`).
* Names should be the singular English word (`page` rather than `pages`).
* Names should contain only letters and underscores (e.g., `post_tag`).
* Underscores should be used to separate words (e.g., `nav_menu_item`).

### Post metadata

* Keys should be all lowercase.
* Keys should begin with an underscore and post type with an exception for long post type names (e.g., `_recipe_servings`).

## Current Content Types

See "Initial List" below.  These will be listed here.

## To Do

Before jumping too deep into the discussion, which is common with these types of things, we need to establish the foundation.  Because the foundation of this project is custom post types, we should decide on a list of common post types we want to address first (more can be added later).

### Initial list

* Testimonials
* Portfolios
* Recipes
* FAQs
* Events

### Secondary things to do

Once we've established which post types we want to address, then we can address the naming standards, taxonomies, metadata, etc.

## References

Here's a list of references that go into more detail about the issues this project is attempting to address:

* [Custom Post Type Standards](http://justintadlock.com/archives/2014/07/25/custom-post-type-standards)
* [WordPress.com and Jetpack should lead the way toward standardizing custom post types](http://www.poststat.us/wordpress-com-jetpack-lead-way-toward-standardizing-custom-post-types)