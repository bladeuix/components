# Changelog

High-level changes for each BladeUIX release. For complete details, see the [GitHub releases](https://github.com/bladeuix/components/releases).

## v3.1.0 - Unreleased

- Added missing Spanish translations.
- Update components example code use include AlpineJs, Livewire and HTMX examples

## v3.0.0 - 2026-08-23

- Added Checkbox, Radio, Tabs, and Tab components.
- Renamed the Packagist package from `bladeuix/daisyui` to `bladeuix/components`.
- Introduced breaking changes: component namespace aliases such as `<x-daisyui::button>` have been dropped in favor of standard aliases such as `<x-button>`. Set `BLADEUIX_COMPONENTS_PREFIX=daisyui::` to continue using the previous namespace-style aliases.
- Removed the Checkbox label API; provide labels with standard HTML instead.
- Refactored documentation from Blade to Markdown.
- Added Spanish translation, more languages coming soon.

## v2.0.0 - 2026-08-20

- Added Card, Carousel, CarouselItem, and AvatarGroup components.
- Updated Avatar with its input-based API, including presence, abbreviation, image, and rounded attributes.
- Introduced breaking Avatar API changes; review the [v2.0.0 release notes](https://github.com/bladeuix/components/releases/tag/v2.0.0) before upgrading from v1.2.0.

## v1.2.0 - 2026-08-20

- Added Aura and Avatar components.
- Flattened the documentation structure and migrated documentation pages to Blade format.
- Updated the GitHub Actions checkout action.

## v1.0.0 - 2026-06-10

- Released the first stable version with Accordion, Badge, Breadcrumbs, Button, Link, Loading, Progress, Radial Progress, Status, and Table components.
- Added the initial test suite and GitHub Actions workflow.
- Prepared the initial Button, Link, Status, Loading, Badge, Table, Accordion, Breadcrumbs, and BreadcrumbLink components.
