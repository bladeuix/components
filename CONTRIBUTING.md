# Contributing

Contributions are welcome and will be fully credited.

## Pull Requests

- Fork the repository and create your branch from `main`.
- If you've added code that should be tested, add tests.
- If you've changed APIs, update the documentation.
- Ensure the test suite passes.
- Make sure your code follows the [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standard and [Laravel Pint](https://laravel.com/docs/pint) rules.

## Coding Style & Rules

The project uses [Laravel Pint](https://laravel.com/docs/pint) to maintain a consistent code style. You can format your code by running:

```bash
composer format
```

### General Guidelines

- All PHP files must start with `declare(strict_types=1);`.
- All code logic and attribute processing must reside in the Blade component class.
- Blade view files (`.blade.php`) should only contain the presentation layer (minimal HTML).
- All HTML/CSS classes must be defined and processed in the Blade component class.

### Blade Component Implementation

- Use a `classes(): array` method in component classes to return an array of filtered class strings.
- Map attributes to CSS classes using `match` statements in private/protected methods (e.g., `sizeClass()`, `colorClass()`).
- In Blade views, use `$attributes->class($classes())->merge()` for the main element.
- Component properties should be defined as `public` in the constructor.

## Testing

Before submitting a pull request, please run the test suite:

```bash
composer test
```

- Write feature tests for each component in `tests/Feature/{Component}Test.php`.
- Use [Pest](https://pestphp.com/) for testing.
- Test that components render correctly with various attributes (sizes, colors, states, etc.).
- Use `assertSeeHtmlInOrder` or `assertSee` with `escape: false` to verify rendered HTML.

## Documentation

Documentation pages should be in `docs/{page}.blade.php`.
Each page should use Markdown headings and fenced HTML examples, with Blade component markup used for rendered previews where applicable.
Do not add YAML frontmatter.

## Bug Reports

If you discover a bug, please open an issue on the GitHub repository. Provide a detailed description of the bug and, if possible, a way to reproduce it.

## Feature Requests

If you have a feature request, feel free to open an issue or submit a pull request with your proposed changes.
