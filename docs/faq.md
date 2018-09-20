## FAQ

__Why not also hide password reset in admin?__

The login form template provides an [event](https://developer.matomo.org/guides/events) that allows injection of html code which makes it a simple process to hide the element.
The userSettings template does not provide a clean way to remove the option.
