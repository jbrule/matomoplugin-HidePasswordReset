# Matomo HidePasswordReset Plugin

## Description

Hides the "Lost your password?" option on login form. This plugin was created to prevent user confusion when using a central identity management platform such as LDAP or SAML.

## Instructions
The easiest way to install is to find the plugin in the [Matomo Marketplace](https://plugins.matomo.org/).
Just Activate on the plugin page after install and the "Lost your password?" message will be removed.
A replacement login message may be supplied on the General Settings screen (see screenshots).

## Q&A
# Why not also hide password reset in admin?
The login form template provides an [event](https://developer.matomo.org/guides/events) that allows injection of html code which makes it a simple process to hide the element.
The userSettings template does not provide a clean way to remove the option.


## Changelog
1.0.0 Initial Release
1.1.0 Marketplace Tag
1.2.0 Fixed screenshot filenames

## License
GPL v3 / fair use

## Support
Please [report any issues](https://github.com/jbrule/matomoplugin-HidePasswordReset/issues). Pull requests welcome.
