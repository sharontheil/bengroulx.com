<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
    sortable: true
fields:
    pagetitle-1:
        label: Page Content
        type: headline
    title:
        label: Title & Headline
        type:  text
    type:
        label: Project Type
        type:  text
        width: 1/2
    colour:
        label: Emphasis Colour
        type:  text
        width: 1/2
    year:
        label: Year
        type:  text
        width: 1/2
    role:
        label: Role
        type:  text
        width: 1/2
    categories:
        label: Categories
        type: checkboxes
        options:
            User interface (UI) design: UI design
            User experience (UX) design: UX design
            Graphic design: Graphic design
            Art direction: Art direction
            Front-end development: Front-end development
            Web hosting: Web hosting
            Social media: Social media
            Copywriting: Copywriting
    text:
        label: Text
        type:  textarea
    tags:
        label: Tags
        type:  tags
    pagetitle-2:
        label: META Information
        type: headline
    metatitle:
        label: META Title
        type:  text
        icon:  header
    metadesc:
        label: META Description
        type:  textarea
        icon:  file-code-o
