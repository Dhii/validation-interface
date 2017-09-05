# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [0.2] - 2017-09-05
Improved standards compliance. A validator can now also validate against a spec.

### Added
- `ValidatorAwareInterface`;
- `SpecValidatorInterface`;
- `SpecAwareInterface`;
- `SubjectAwareInterface`;

### Changed
- `ValidationExceptionInterface` is now validator aware (making all validation
exceptions able to report the validator).
- `ValidationFailedExceptionInterface` is now subject-aware via an interface.
- Exceptions are now standards-compliant via exception interfaces.
- Improved standards compliance, including those of tests, and Composer.

## [0.1] - 2017-03-09
Initial release, containing validator and exception interfaces.
