# Assortment System

[![Build Status](https://travis-ci.org/pluf/assort.svg?branch=master)](https://travis-ci.org/pluf/assort)

This is a Pluf module to provide related tools to categories and tags. It can be used to manage (add, remove, update, search) categories and tags.

## Entities

This module contains two important entities:

	- Category (Assort_Category)
	- Tag (Assort_Tag)
	
### Category

PHP class of category is named Assort_Category. Category has following properties:

	- id (long)
	- name (string)
	- creation_dtime (datetime)
	- modif_dtime (datetime)
	- description (string)
	- parent (FK from Assort_Category)
	- content (FK from CMS_Content)
	- thumbnail (FK from CMS_Content)
	
Categories should have unique values for pair (name, parent).
 
### Tag

PHP class of tag is named Assort_Tag. Tag has following properties:

	- id (long)
	- name (string)
	- creation_dtime (datetime)
	- modif_dtime (datetime)
	- description (string)
	
Tags should have unique values for name.

## API

This module adds following API:

### Category API

	- GET:  	../category/find	[lists categories]
	- PUSH: 	../category/new	[adds new category]
	- GET:  	../category/{id}	[gets information of a category]
	- PUSH  	../category/{id}	[updates information of a category]
	- DELETE	../category/{id}	[deletes a category]
	
### Tag API
	
	- GET:  	../tag/find	[lists tags]
	- PUSH: 	../tag/new		[adds new tag]
	- GET:  	../tag/{id}	[gets information of a tag]
	- PUSH  	../tag/{id}	[updates information of a tag]
	- DELETE	../tag/{id}	[deletes a tag]
	
## Other features

Following function in this module is defined and could be used:

### Assort_Shortcuts_GetTagByNameOr404($name)

Returns Assort_Tag with given name. Throws an exception (with http code 404) if there is no tag with given name.