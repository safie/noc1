# Changelog

All notable changes to this project will be documented in this file. The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

[Glossary](#glossary)

## Report an issue

Have an issue to report? Let us know at <https://github.com/StartBootstrap/pro-feedback/issues>.

Please reference that you're using `SB Admin Pro`
along with details about the issue you're having.

## [2.0.4] - 2022-03-28

- `[Changed]` Dev dependency update
- `[Changed]` Upgraded to Font Awesome 6 (free version)
- `[Fixed]` Fixed date picker spacing so dates now arrange properly

## [2.0.3] - 2021-11-02

- `[Changed]` Bootstrap 5.1.3 dependency update along with all other dependencies
- `[Fixed]` Mobile usability fix for custom scrollbar mixing

## [2.0.2] - 2021-08-23

- `[Added]` Blog management app page views added
- `[Added]` Markdown editor plugin added for blog post management demo page
- `[Added]` User management application views added
- `[Changed]` Bootstrap 5.1.0 dependency update along with all other dependencies

## [2.0.1] - 2021-07-10

- `[Changed]` Bootstrap 5.0.2 dependency update along with all other dependencies
- `[Changed]` Missing information added to migration guide

## [2.0.0] - 2021-05-20

- `[Added]` Upgraded to workerpool for pug rendering
- `[Added]` Simple DataTables plugin added to replace DataTables functionality with JS only
- `[Added]` Litepicker plugin added to replace DateRangePicker functionality with JS only
- `[Changed]` Bootstrap 5.0.1 dependency update along with all other dependencies
- `[Changed]` Bootstrap 5 mixins now being used throughout SCSS and extended components
- `[Changed]` Spacing in card headers with actions adjusted for uniformity
- `[Changed]` Badge padding in sidenav adjusted so nav links do not enlarge
- `[Removed]` DataTables plugin removed due to dependency on jQuery
- `[Removed]` DateRangePicker plugin removed due to dependency on jQuery and inactive development

## [1.3.0] - 2020-11-11

- `[Added]` New global styling for form inputs and buttons
- `[Added]` Card angles style variant added
- `[Changed]` File paths updated for fonts and images referenced in the CSS
- `[Changed]` Demo images are now local to the project instead of loading from a CDN
- `[Changed]` Bootstrap 4.5.3 dependency update along with all other dependencies
- `[Fixed]` Fixed responsiveness of the sidenav to prevent the toggle icon from becoming hidden
on small devices.
- `[Fixed]` dataTables maxBarThickness moved in bar chart demo (due to dataTables update)

## [1.2.1] - 2020-11-01

- `[Changed]` New release process and licenses for startbootstrap.com release. No code changes.

## [1.2.0] - 2020-07-07

- `[Added]` New component! Custom step component added
- `[Added]` New component! Custom timeline component added
- `[Added]` New pages! Added 19 new app view pages including 4 account pages, 4 new error pages, 4
knowledge base app pages, a pricing page, and a wizard page
- `[Added]` Boxed container layout has been added
- `[Added]` Compact page header option has been added
- `[Added]` Minimal starter layout has been added
- `[Added]` Search option added for page headers
- `[Added]` Custom styled card component
- `[Added]` Custom joined input group component
- `[Added]` Date range picker component
- `[Added]` Custom bordered navigation component
- `[Added]` Expanded typography utilities have been added
- `[Changed]` 401, 404, and 500 pages have been redesigned
- `[Changed]` New demos! Dashboard demos have been expanded and redesigned
- `[Changed]` Page layouts have been broken apart and now use Pug mixins rather than over-complex global
config options
- `[Changed]` Updated dependencies, and dependencies loaded through CDN
- `[Changed]` Added more detailed HTML comments throughout the theme
- `[Changed]` Ignore whitespace sensitivity when rendering Pug for better organized compiled HTML
- `[Fixed]` Responsive fixes for top navigtaion
- `[Fixed]` Positioing fixes for topnav dropdowns
- `[Fixed]` Fixed animation utilities so they now perform properly on top nav

## [1.1.2] - 2020-03-20

- `[Fixed]` normalize window paths to unix with upath
- `[Fixed]` npm start not working on paths that have spaces in them

## [1.1.1] - 2020-02-25

- `[Added]` Init sidebar script

## [1.1.0] - 2020-02-25

- `[Added]` Created two new dashboard demos, multipurpose and affiliate
- `[Added]` Added an avatars custom component
- `[Added]` Added the lift utility
- `[Added]` Added background image utilities
- `[Added]` Added background overlay utilities
- `[Changed]` General improvements to SCSS to improve code legibility and compatibility with the SB
UI Kit pro theme
- `[Changed]` Dropped the `.` prefix namespace on custom components and utilities for ease of use
with Bootstrap's existing elements
- `[Changed]` Styling updates to the topnav, including the navbar brand and dropdowns
- `[Changed]` General styling update with new font face and other style improvements
- `[Changed]` Updated dev dependencies
- `[Fixed]` Resolved alignment issues with the RTL layout topnav
- `[Fixed]` Resolved responsiveness errors on the cards style reference page

## [1.0.2] - 2020-02-18

- `[Fixed]` Windows scss build issue.

## [1.0.1] - 2020-01-14

- `[Added]` mixin support for pug.

## [1.0.0] - 2020-01-13

- Initial release!

## Glossary

- `[Added]` for new features.
- `[Changed]` for changes in existing functionality.
- `[Deprecated]` for soon-to-be removed features.
- `[Removed]` for now removed features.
- `[Fixed]` for any bug fixes.
- `[Security]` in case of vulnerabilities.
