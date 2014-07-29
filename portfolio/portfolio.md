# Portfolio

This is the current standard for portfolios and how plugins should handle them.  It is an incomplete standard and pending further discussion.

## Post type

* `project`

## Taxonomies

* `taxonomy_name`
* `taxonomy_name`

## Metadata

Note that all metadata doesn't necessarily have to be used by all plugins.  This is simply a standard so that plugin authors will know exactly how to name and format their metadata.

### Project URL

* Meta key: `_project_url`
* Meta value: `http://example.com` (URL string)

### Project Client

* Meta key: `_project_client`
* Meta value: `John Doe` (text string)

### Project Start Date

* Meta key: `_project_start_date`
* Meta value: `0000-00-00 00:00:00` (year-month-day hour:minute:second)

### Project End Date

* Meta key: `_project_end_date`
* Meta value: `0000-00-00 00:00:00` (year-month-day hour:minute:second)

### Project Location

* Meta key: `_project_location`
* Meta value: `City, State/Province, Country` (text string)